<?php


namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class IndexController extends Controller{
    public function index(){
        return view('index');
    }
    public function interview(){
        return view('interview');
    }
    public function introduction(){
        return view('introduction');
    }
    public function tests(){
        return view('tests');
    }
}