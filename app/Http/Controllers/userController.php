<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function PHPUnit\Framework\isEmpty;

class userController extends Controller
{
    public function homepage(){
        return view('welcome');
    }

    public function users(){

        //DB returns array of json objects
        $json = DB::table('students')
        ->select('st_id','name','email','phone','city')
        // ->where('name','like','%a%')
        // ->orWhere('name','raheel')
        // ->orWhere('name','<>','raheel') //not condition in OR statment
        // ->whereBetween('age',[20,30])
        // ->whereIn('city',[1,2,3,4])
        // ->whereNull('city')
        // ->whereNotNull('city')
        // ->where([['age','>',7],['name','like','%a%'],['city','=',7]]) //multiple conditions in where 
        // ->distinct('city')
        // ->orderBy('city')
        // ->limit(5)  //fetch 5 records
        // ->offset(4) //start at 4rth record
        ->get();

        //first record only. Donot use get
        // ->first();
        // dd($json);

        //aggregate methods
        // ->sum('city'); //donot use get
        // ->count('name'); //donot use get
        // dd($json);

        //convert json to multidimentional associative array
        $data = json_decode($json,true);

        //return browser users page with data
        return view('users',['data'=>$data]);


        //Trouble shooting statments
        //display data in browser and then exit
        // dd($data);
        //display data in browser and continue
        // dump($data);
    }

    public function user(int $id){
        //check if record exists
        if(DB::table('students')->select('st_id','name','email','age','address','phone','city')->where('st_id','=',$id)->exists()){
 
            //db class returns array of json objects
            $json = DB::table('students')->select('st_id','name','email','age','address','phone','city')->where('st_id','=',$id)->get();
            
            //convert json objects to multidimentional associative array
            $records = json_decode($json,true);
        }else{

            //if user enters id directly through url and is not in database then return error
            abort(404);
        }


        // $record = $data[$id];
        // return view('user',['record'=>$record]);

        // if argument key and value have same name then we can use compact function 
        return view('user',compact('records'));
    }

    public function about(){

        return view('about');
    }
}
