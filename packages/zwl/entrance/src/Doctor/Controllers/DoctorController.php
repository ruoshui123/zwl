<?php

namespace zwl\Entrance\Doctor\Controllers;

use App\Http\Controllers\Controller;

class DoctorController extends Controller
{
    public function index(){

        return view("zwl::doctor/index");
    }
}
