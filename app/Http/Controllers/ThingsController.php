<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 06.06.2018
 * Time: 3:09
 */

namespace App\Http\Controllers;

use App\Providers\Models\ThingModels\ThingsGetter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ThingsController extends Controller
{


    public function index(Request $request,$type){
        $things_list=ThingsGetter::getThingsOnType($type);
        return  view('things')->with(compact('things_list','type'));
    }



}