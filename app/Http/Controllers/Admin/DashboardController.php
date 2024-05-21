<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CartItem;
use App\Models\Watch;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function showUserCount()
    {
        $CartItemCount = CartItem::count();

        $watch = Watch::all();
       // dd($userCount);die();

        return view('admin.home', compact('CartItemCount','watch'));
    }
}
