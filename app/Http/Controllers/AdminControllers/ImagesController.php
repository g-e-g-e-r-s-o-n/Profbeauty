<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Models\Images;
use App\Models\Products;
use Illuminate\Http\Request;

class ImagesController extends Controller
{

    public function index()
    {
        $images = Images::all();
        return view('admin.images')->with('images', $images);
    }

    public function image()
    {
        $product = Products::all();
        return view('admin.image-add')->with('product', $product);
    }

    public function add(Request $request)
    {
        $image = new Images();

        $image->foreign_prod_ID = $request->input('foreign_prod_ID');


        if ($request->hasFile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = time() . '.' . $extension;
            $file->move('uploads/image/', $filename);
            $image->image = $filename;
        }
        else
        {
            return $request;
            $image->image = '';
        }

        $image->save();


        return redirect('/images')->with('image', $image)->with('status', 'ფოტო წარმატებით დაემატა');

    }

    public function edit(Request $request, $id)
    {
        $images = Images::findOrFail($id);
        $image = Images::all();
        $products = Products::all();

        return view('admin.image-edit')->with('images', $images)->with('image', $image)->with('products', $products);

    }

    public function update(Request $request, $id)
    {

        $images = Images::find($id);

        $images->foreign_prod_ID = $request->input('foreign_prod_ID');


        if ($request->hasFile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = time() . '.' . $extension;
            $file->move('uploads/image/', $filename);
            $images->image = $filename;
        }
//        else
//        {
//            return $request;
//            $images->image = '';
//        }

        $images->update();

        return redirect('/images')->with('status', 'ფოტო წარმატებით განახლდა');
    }

    public function delete($id)
    {
        $images = Images::findOrFail($id);
        $images->delete();

        return redirect('/images')->with('status', 'ფოტო წარმატებით წაიშალა');
    }



}
