<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 06.06.2018
 * Time: 1:55
 */

namespace App\Providers\Models\ThingModels;

use Illuminate\Database\Eloquent\Model;
use App\Providers\Models\ThingModels\Thing;


class ThingsGetter extends Model
{


    protected $table = 'clothes';

    public  static function getThingsOnType($type){
        $Things=array();
        $spisok=self::where('type',$type)->get();
        foreach($spisok as $stroka){
            $Things[]=new Thing($stroka->id, $stroka->name, $stroka->type, $stroka->brand, $stroka->price,
                $stroka->color, $stroka->size, $stroka->description);
            }
        return $Things;
    }

    public static function getAllThings(){
        $Things=array();
        $spisok=self::all();
        foreach($spisok as $stroka){
            $Things[]=new Thing($stroka->id, $stroka->name, $stroka->type, $stroka->brand, $stroka->price,
                $stroka->color, $stroka->size, $stroka->description);
        }
        return $Things;
    }

    public static function getCountThingsOnType($type){
         return self::where('type',$type)->count();
    }


}