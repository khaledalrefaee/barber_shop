<?php

namespace App\Http\Controllers\Api\User\Salon;

use App\Http\Controllers\Controller;
use App\Models\Location;
use App\Models\Salon;
use App\Models\Social_Media;
use Illuminate\Http\Request;

class SalonController extends Controller
{
    public function index()
    {
        $salon = Salon::get();

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

    public function location_By_salon($id){
        $salon = Location::where('salon_id',$id)->get();

        $social =Social_Media::where('salon_id',$id)->get();
        if (!$salon->isEmpty()) {

            return response()->json(['data' => $salon,'social'=>$social, 'status' => true]);
        }
        return response(['data' => 'No  found', 'status' => false]);
    }
}
