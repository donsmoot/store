<?php

namespace App\Http\Controllers\Admin\Error;

use App\Http\Controllers\Controller;
use App\Models\Error;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        //$categories = Category::all();
        return view('admin.error.index');
    }
}
