<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PageController extends Controller
{
    function main(){
        return view('main');
    }
    
    function services(){
        return view('services');
    }
    
    function products(){
        return view('products');
    }
    
    function about(){
        return view('about');
    }
    
    function partners(){
        return view('partners');
    }
    
    function secret(){
        return view('secret');
    }
}