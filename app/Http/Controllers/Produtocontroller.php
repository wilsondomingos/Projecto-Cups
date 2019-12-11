<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Produtocontroller extends Controller
{
   public function viewProdutos(){

    return view('produtos');
   }
}
