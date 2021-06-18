<?php


namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class IndexController extends Controller{
    public function index(){

        return view('index');
    }
    public function interview(){
        $next = 'introduction';
        return view('interview', compact( 'next'));
    }
    public function introduction(){
        $next = 'tests';
        return view('introduction', compact( 'next'));
    }
    public function tests(){
        $next = 'diagnosis';
        return view('tests', compact( 'next'));
    }
    public function upload(){
        return view('upload');
    }
}
