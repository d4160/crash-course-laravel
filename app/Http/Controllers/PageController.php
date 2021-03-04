<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;

class PageController extends Controller
{
    //
    public function get()
    {
        //$page = Page::all()->first();
        $page = Page::where('id', 1)->first();

        //dd("$page->name - $page->description");
        // foreach($pages as $page)
        // {
        //     echo "$page->name - $page->description <br>";
        // }
        return view('page', ['page'=>$page]);
    }
}
