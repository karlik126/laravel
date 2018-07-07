<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 20.06.2018
 * Time: 23:59
 */

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Providers\Models\ThingModels\ThingsGetter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function panel(){
        return view('adminPanel');
    }

    public function delete()
    {
        $things_list=ThingsGetter::getAllThings();
        return view('adminDelete')->with(compact('things_list'));
    }

    public function actionDelete($id){
        DB::table('clothes')->where('id',$id)->delete();
        return redirect('/admin/delete');
    }

    public function actionInsert(Request $request){
        if(preg_match('/^[1-9]{0,100}$/i',$request->input('price'))){
            DB::table('clothes')->insert(
                ['name' => $request->input('name'),
                    'description' => $request->input('description'),
                    'size' => $request->input('size'),
                    'color' => $request->input('color'),
                    'price' => $request->input('price'),
                    'brand' => $request->input('brand'),
                    'type' => $request->input('type')
                ]
            );
            return redirect('/admin/insert');
        }else{
            $error='неправильно введена цена';
            return view('adminInsert')->with(compact('error'));
        }

    }

    public function update(){
        return view('adminUpdate');
    }
    public function actionUpdate(Request $request){
        DB::table('clothes')->where('id',$request->input('id'))->update(
            ['name' => $request->input('name'),
                'description' => $request->input('description'),
                'size' => $request->input('size'),
                'color' => $request->input('color'),
                'price' => $request->input('price'),
                'brand' => $request->input('brand'),
                'type' => $request->input('type')
            ]
        );
        return redirect('/admin/update');
    }

    public function insert(Request $request){
        $error='';
        return view('adminInsert')->with(compact('error'));
    }



}