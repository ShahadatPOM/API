<?php 

namespace App\Http\Controllers;

class TestController extends Controller{
    public function test($name){
        return 'this is from '. $name. ' controller';
    }
}