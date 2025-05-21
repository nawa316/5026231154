<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class BiodataController extends Controller
{
    public function index(){
    	$name = "Muhammad Ade Dzakwan";
      $age = 20;
      $makanan_favorit = ["Nasi Goreng", "Ayam Penyet", "Sate", "Bakso"];
    	return view('biodata',['name' => $name, 'age' => $age, 'makanan_favorit' => $makanan_favorit]);
    }
}