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
        //dd($request->img);die();


        if ($request->hasFile('img')) {
            $image = $request->file('img');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $imageName);
        } else {
            $imageName = null; 
        }

       // dd($imageName);die();
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

    public function allWatch(){
        $allWatchs = Watch::all();
        return view('admin.watch-table',compact('allWatchs'));
    }

    public function editWatch($id){
        $editWatch = Watch::where('id',$id)->first();
        return view('admin.Watch-edit',compact('editWatch'));
    }

    public function update(Request $request, $id)
    {
        $watch = watch::find($id);
        if (!$watch) {
            Alert::error("error", 'About not found.')->showConfirmButton('OK');

            return redirect()->back();
        }
        $request->validate([
            'name' => 'required|string|max:10055',
            'amount' => 'required|string|max:10055',
            'sold' => 'required|string|max:10055',
            'discription' => 'required|string',
            'img' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $watch->name = $request->name;
        $watch->amount = $request->amount;
        $watch->sold = $request->sold;
        $watch->discription = $request->discription;
        if ($request->hasFile('img')) {
            $image = $request->file('img');
    
            if ($watch->imgs) {
                $oldImagePath = public_path('uploads') . '/' . $watch->imgs;
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $imageName);
            $watch->imgs = $imageName;
        }

        Alert::success("success", 'Product updated successfully.')->showConfirmButton('OK');

        return redirect()->back();
    }


    
}
