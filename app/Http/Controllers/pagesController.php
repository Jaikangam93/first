<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class pagesController extends Controller
{
    public function getabout(){
        
        return view('pages.about');
    }  
   
    
    public function landing(){
        
        return view('pages.landing');
    }  
    public function contact(){

    	
        return view('pages.contact');
    } 






}