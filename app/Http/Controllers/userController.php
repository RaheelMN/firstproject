<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function homepage(){
        return view('welcome');
    }

    public function users(){
        $data = $this->getData();
        return view('users',['data'=>$data]);
    }

    public function user(int $id){
        $data = $this->getData();
        abort_if(!isset($data[$id]),404);
        $record = $data[$id];
        // return view('user',['record'=>$record]);
        // if argument key and value have same name then we can use compact function 
        return view('user',compact('record'));
    }

    public function about(){

        return view('about');
    }

    private function getData(){
        return [1 => ['name'=>'raheel','age'=>33,'city'=>'peshawar'],
                2 => ['name'=>'hamid','age'=>43,'city'=>'islamabad'],
                3 => ['name'=>'idrees','age'=>35,'city'=>'peshawar'],   
                4 => ['name'=>'bilal','age'=>36,'city'=>'quetta'],   
                5 => ['name'=>'sareer','age'=>24,'city'=>'karachi'],   
                6 => ['name'=>'junaid','age'=>35,'city'=>'karak'],   
                 ];
    }
}
