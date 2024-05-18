<?php

namespace App\Http\Controllers;

use App\Models\Watch;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about(){


        return view('about');
    }

    public function contact(){


        return view('contact');
    }

    public function cart(){


        return view('cart');
    }

    public function allitems(){

        return view('allitems');
    }

    public function details($id){
        $watch = Watch::where('id',$id)->get();
        return view('details',compact('watch'));
    }
}
