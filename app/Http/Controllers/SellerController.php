<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SellerController extends Controller
{
    //
    public function getAllSellers()
    {
        DB::table('seller')->get();
    }
}
