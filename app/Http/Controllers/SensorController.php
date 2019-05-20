<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sensor;

class SensorController extends Controller
{
    //
    public function index() {
        return Sensor::get();
    }
}
