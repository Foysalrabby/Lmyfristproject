<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function showHome(){
  return view('Home');
  }
  public function showAbout(){

    return view('About');
}
public function showService(){

    return view('Service');
} 
public function showPortfolio(){
   
    return view('Portfolio');

}
}
