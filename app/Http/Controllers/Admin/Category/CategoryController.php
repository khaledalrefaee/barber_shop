<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $Categories = Category::all();
        return view('backend.category.index',compact('Categories'));
    }

    public function store(CategoryRequest $request)
    {
        $fileName = "";
        if ($request->has('avter')) {

            $fileName = uploadImage('category', $request->avter);
        }

        $Categories = new Category();

        //save translations
        $Categories->name = $request->name;
        $Categories->avter = $fileName;

        $Categories->save();
        toastr()->success('Category create successfully', 'success');
        return redirect()->route('All.Category');

    }

    public function update(CategoryRequest $request, $id)
    {
        try {
            $fileName = "";

            if ($request->has('avter')) {
                $fileName = uploadImage('category', $request->avter);
            }

            $category = Category::findOrFail($id);

            $category->name = $request->name;
            $category->avter = $fileName;
            $category->save();
            toastr()->warning('Category updated successfully', 'warning');

            return redirect()->route('All.Category');

        } catch (\Exception $e) {
            return redirect()->back()->withErrors($e->getMessage());
        }
    }

    public function delete($id){
        $category = Category::findOrFail($id);
        $category->delete();
        toastr()->error('messages Delete Category');
        return redirect()->back();
    }

}
