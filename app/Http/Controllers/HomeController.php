<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;

class HomeController extends Controller
{
    public function index() {

        return view('welcome');
    }

    public function page($id) {

        return view('website.home', ['id' => $id]);
    }
}
