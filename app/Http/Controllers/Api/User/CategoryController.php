<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use App\Models\Salon;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;


class CategoryController extends Controller
{
    public function index()
    {


        $categories = Category::all();

        $categoryInfo = [];

        foreach ($categories as $category) {
            $categoryInfo[] = [
                'name' => $category->name,
                'avatar' => $category->avter ? asset('back/assets/imag/category/' . $category->avter) : 'null', // URL الصورة باستخدام دالة asset()
            ];
        }

        if ($categories->isEmpty()) {
            return response()->json(['data'=>'No category found', 'status' => false]);
        } else {
            return response()->json(['data'=>$categoryInfo, 'status' => true]);
        }
    }


    public function show_salon($id)
    {
        $salon = Salon::where('categories_id', $id)->get();

        if (!$salon->isEmpty()) {
            $salonData = $salon->map(function ($salonItem) {
                return [
                    'name' => $salonItem->name,
                    'address' => $salonItem->addres->name,
                    'url' => asset('back/assets/imag/salon/' . $salonItem->images->first()->filename),
                ];
            });

            return response()->json(['data' => $salonData, 'status' => true]);
        }

        return response(['data' => 'No Salon found', 'status' => false]);
    }






}
