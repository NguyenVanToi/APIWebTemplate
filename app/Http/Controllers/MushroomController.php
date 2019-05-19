<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mushroom;

class MushroomController extends Controller
{
    public function index() {
        return Mushroom::get();
    }
}
