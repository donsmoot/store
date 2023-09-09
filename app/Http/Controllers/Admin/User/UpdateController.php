<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User\UpdateRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, User $user )
    {
        $data = $request->validated();
        if(isset($data['password'])):
            $data['password'] = Hash::make($data['password']);
            $user->update($data);
        else:
            unset($data['password']);
            $user->update($data);
        endif;
        return view('admin.users.show', compact('user'));
    }
}
