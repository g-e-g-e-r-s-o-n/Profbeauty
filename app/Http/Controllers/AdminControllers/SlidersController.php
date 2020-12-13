<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Models\Sliders;
use Illuminate\Http\Request;

class SlidersController extends Controller
{
    public function index()
    {
        $sliders = Sliders::all();
        return view('admin.sliders')->with('sliders', $sliders);
    }

    public function slider()
    {
        return view('admin.slider-add');
    }

    public function add(Request $request)
    {
        $slider = new Sliders();

        $slider->slider_text = $request->input('slider_text');
        $slider->slider_url = $request->input('slider_url');

        if ($request->hasFile('slider_image'))
        {
            $file = $request->file('slider_image');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = time() . '.' . $extension;
            $file->move('uploads/slider/', $filename);
            $slider->slider_image = $filename;
        }
        else
        {
            return $request;
            $slider->slider_image = '';
        }

        $slider->save();


        return redirect('/sliders')->with('slider', $slider)->with('status', 'სლაიდერი წარმატებით დაემატა');

    }

    public function edit(Request $request, $id)
    {
        $sliders = Sliders::findOrFail($id);
        return view('admin.slider-edit')->with('sliders', $sliders);

    }

    public function update(Request $request, $id)
    {

        $sliders = Sliders::find($id);
        $sliders->slider_text = $request->input('slider_text');
        $sliders->slider_url = $request->input('slider_url');

        if ($request->hasFile('slider_image'))
        {
            $file = $request->file('slider_image');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = time() . '.' . $extension;
            $file->move('uploads/slider/', $filename);
            $sliders->slider_image = $filename;
        }
//        else
//        {
//            return $request;
//            $sliders->slider_image = '';
//        }

        $sliders->update();

        return redirect('/sliders')->with('status', 'სლაიდერი წარმატებით განახლდა');
    }

    public function delete($id)
    {
        $sliders = Sliders::findOrFail($id);
        $sliders->delete();

        return redirect('/sliders')->with('status', 'სლაიდერი წარმატებით წაიშალა');
    }


}
