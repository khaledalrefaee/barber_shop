<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;


class CategoryController extends Controller
{
    public function index()
    {
        $addres = Category::select('id', 'avter','name_' . app()->getLocale() . ' as name' ) -> get();
        return response()->json($addres);
    }
}
