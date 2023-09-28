<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User\StoreRequest;
use App\Mail\User\PasswordMail;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {

            $data = $request->validated();
            $password = Str::random(10);
            $data['password'] = Hash::make($password);
            try {
                Mail::to($data['email'])->send(new PasswordMail($password));
                $user = User::firstOrCreate(['email' => $data['email']], $data);
                event(new Registered($user));
            }catch (\Exception $exception) {
                $status_code = $exception->getCode();
                if($status_code == 535){
                    $error = 'Ошибка авторизации SMTP';
                    return back()->withError($error);
                }else{
                    return back()->withError($exception->getMessage())->withInput();
                }
            }
            return redirect()->route('admin.user.index');
    }
}
