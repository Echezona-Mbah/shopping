<?php

namespace App\Http\Controllers;

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
}
