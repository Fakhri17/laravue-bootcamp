<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;

class TestController extends Controller
{
    //
    public function test1(){
        // echo "Controller Test 1";

        $pagesFirst = Page::where('id', 1)->first();
        $pagesGet = Page::where('id', 1)->get();
        $pagesAll = Page::All();

        return view('test1', ['page' => $pagesAll]);
        return view('website.test1');

        // // $testing = Page::where('id', 1)->where('name', 'Contact Us')->orWhere;

        // echo " $pagesFirst->name - $pagesFirst->description ";
        // echo '<br><br>';
 
        // foreach ($pagesAll as $item) {
        //     echo " $item->name - $item->description ";
        //     echo '<br>';
           
        // }
    }
}
