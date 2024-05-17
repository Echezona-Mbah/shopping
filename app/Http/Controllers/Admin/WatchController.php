<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Watch;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class WatchController extends Controller
{
    public function watch(){

        return view('admin.watch');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:10055',
            'amount' => 'required|string|max:10055',
            'sold' => 'required|string|max:10055',
            'discription' => 'required|string',
            'img' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('img')) {
            $image = $request->file('img');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $imageName);
        } else {
            $imageName = null; 
        }

        $watch = new Watch();
        $watch->name = $request->name;
        $watch->amount = $request->amount;
        $watch->sold = $request->sold;
        $watch->discription = $request->discription;
        $watch->imgs = $imageName;
        $watch->user_id = auth()->user()->id;
        $watch->save();

        Alert::success(" $request->categories", 'Watch was successfully Upload.')->showConfirmButton('OK');
        return redirect()->back();
    }
}
