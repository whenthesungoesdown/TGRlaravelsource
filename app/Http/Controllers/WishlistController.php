<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WishlistController extends Controller
{
    //

    public function __construct(){
        $this->middleware(['auth']);
    }

   }
