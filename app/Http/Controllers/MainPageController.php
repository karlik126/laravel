<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 29.05.2018
 * Time: 16:19
 */

namespace App\Http\Controllers;



use Illuminate\Http\Request;


class MainPageController extends Controller
{

    public function __invoke(Request $request){
        return  response()->view('welcome');
    }



}