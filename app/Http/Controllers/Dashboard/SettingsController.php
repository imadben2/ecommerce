<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingsController extends Controller
{

    public function editShipingMethods($type)
    {

        if ($type === 'free') {

            $shiping_methode = Setting::where('key', 'free_shiping_label')->first();


        } else if ($type === 'inner') {

            $shiping_methode = Setting::where('key', 'lcoal_label')->first();


        } else if ($type === 'outer') {

            $shiping_methode = Setting::where('key', 'outer_label')->first();


        }

        return $shiping_methode;

    }

    //
}
