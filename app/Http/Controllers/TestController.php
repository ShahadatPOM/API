<?php 

namespace App\Http\Controllers;

class TestController extends Controller{
    public function test($name){
        return response('this is from '.$name.' controller')
        ->header('name', $name);
    }
}