<?php

namespace App\Http\Controllers\Admin\Salon;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Salon\SalonRequest;
use App\Models\Addres;
use App\Models\Category;
use App\Models\Image;
use App\Models\Location;
use App\Models\Salon;
use App\Models\Social_Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SalonController extends Controller
{
    public  function index(){
        $address =Addres::all();
        $Categories =Category::all();
        $salon = Salon::all();
        return view('backend.salon.index',compact('salon','address','Categories'));
    }
    public function store(SalonRequest $request){

        DB::beginTransaction();

        try {
            $salon = new Salon();
            $salon->name =$request->name ;
            $salon->street = $request->street;
            $salon->phone = $request->phone;
            $salon->address_id = $request->address_id;
            $salon->admin_id = auth()->user()->id;
            $salon->categories_id = $request->categories_id;
            $salon->save();


            $imageModels = []; // مصفوفة لتخزين الصور في جدول الصور

            if ($request->hasfile('photos')) {
                $folder = 'salon'; // اسم المجلد الهدف للتخزين
                $images = $request->file('photos'); // استخراج الملفات من الطلب

                foreach ($images as $image) {
                    $fileName = uploadImage($folder, $image); // استخدم الدالة لتحميل الصور

                    $image = new Image();
                    $image->filename = $fileName;
                    $image->imageable_id = $salon->id;
                    $image->imageable_type = 'App\Models\Salon';
                    $image->save();
                }

            }
            $location = new Location();
            $location->latitude = $request->latitude;
            $location->longitude = $request->longitude;
            $location->salon_id = $salon->id;
            $location->save();

            $Social = new Social_Media();
            $Social->facebook = $request->facebook;
            $Social->instagram = $request->instagram;
            $Social->salon_id = $salon->id;

            $Social->save();
            DB::commit(); // insert data

            toastr()->success('Salon create successfully', 'success');
            return redirect()->route('All.Salon');
        }

        catch (\Exception $e){
            DB::rollback();
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }

    }
}
