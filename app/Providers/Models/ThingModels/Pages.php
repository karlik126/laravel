<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 06.06.2018
 * Time: 10:33
 */

namespace App\Providers\Models\ThingModels;

use App\Providers\Models\ThingModels\ThingsGetter;
use Illuminate\Database\Eloquent\Model;

class Pages extends Model
{
    protected $table = 'clothes';
    private  $countPage;
    private  $activePage;



    public function __construct($activePage,$type)
    {
        $this->activePage=$activePage;
        $this->countPage=ceil(ThingsGetter::getCountThingsOnType($type)/ThingsGetter::$countThingsOnPage);
    }


    public function getCountPage()
    {
        return $this->countPage;
    }
    public function getActivePage()
    {
        return $this->activePage;
    }

    public function getPagesList(){
        $pageList=array();
        if($this->countPage<=10){
            for ($i=1;$i <= $this->countPage;$i++){
                $pageList[]=$i;
            }

        }else{
            if($this->activePage < 5){
                $pageList[0]=1;
                $pageList[1]=2;
                $pageList[2]=3;
                $pageList[3]=4;
                $pageList[4]=5;
                $pageList[5]=6;
                $pageList[6]=7;
                $pageList[7]='...';
                $pageList[8]=$this->countPage-1;
                $pageList[9]=$this->countPage;
            }else if($this->activePage <= $this->countPage-5){
                $pageList[0]=1;
                $pageList[1]='...';
                $pageList[2]=$this->activePage-2;
                $pageList[3]=$this->activePage-1;
                $pageList[4]=$this->activePage;
                $pageList[5]=$this->activePage+1;
                $pageList[6]=$this->activePage+2;
                $pageList[7]='...';
                $pageList[8]=$this->countPage-1;
                $pageList[9]=$this->countPage;
            }else if($this->activePage > $this->countPage-5){
                $pageList[0]=1;
                $pageList[1]='...';
                $pageList[3]=$this->countPage-7;
                $pageList[3]=$this->countPage-6;
                $pageList[4]=$this->countPage-5;
                $pageList[5]=$this->countPage-4;
                $pageList[6]=$this->countPage-3;
                $pageList[7]=$this->countPage-2;
                $pageList[8]=$this->countPage-1;
                $pageList[9]=$this->countPage;
            }

        }
        return $pageList;
    }


}