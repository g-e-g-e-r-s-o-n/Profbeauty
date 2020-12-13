<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {

        $products = Products::all();
        return view('admin.products')->with('products', $products);
    }


    public function product()
    {
        return view('admin.product-add');
    }



    public function add(Request $request)
    {

        $validated = $request->validate([
            'prod_ID' => 'required|unique:products|max:255'
        ],
            [
                'prod_ID.required' => 'მოცემული ველი ცარიელია',
                'prod_ID.unique' => 'პროდუქტი მოცემული შტრიხ-კოდით უკვე არსებობს',
                'prod_ID.max' => 'მაქსიმუმ 255 სიმბოლო'
            ]

        );

        $product = new Products();
        $product->prod_ID = $request->input('prod_ID');
        $product->prod_name = $request->input('prod_name');
        $product->prod_price = $request->input('prod_price');
        $product->prod_description = $request->input('prod_description');
        $product->prod_category = $request->input('prod_category');
        $product->prod_brand = $request->input('prod_brand');
        $product->prod_tags = $request->input('prod_tags');

        if ($request->hasFile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = time() . '.' . $extension;
            $file->move('uploads/product/', $filename);
            $product->image = $filename;
        }
        else
        {
            return $request;
            $product->image = '';
        }

        $product->save();


        return redirect('/products')->with('product', $product)->with('status', 'პროდუქტი წარმატებით დაემატა');
    }


    public function edit(Request $request, $id)
    {

        $products = Products::findOrFail($id);
        return view('admin.product-edit')->with('products', $products);
    }


    public function update(Request $request, $id)
    {
        $products = Products::find($id);
        $products->prod_ID = $request->input('prod_ID');
        $products->prod_name = $request->input('prod_name');
        $products->prod_price = $request->input('prod_price');
        $products->prod_description = $request->input('prod_description');
        $products->prod_category = $request->input('prod_category');
        $products->prod_brand = $request->input('prod_brand');
        $products->prod_tags = $request->input('prod_tags');

        if ($request->hasFile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = time() . '.' . $extension;
            $file->move('uploads/product/', $filename);
            $products->image = $filename;
        }
//        else
//        {
//            return $request;
//            $products->image = '';
//        }

        $products->update();

        return redirect('/products')->with('status', 'პროდუქტი წარმატებით განახლდა');
    }

    public function delete($id)
    {

        $products = Products::findOrFail($id);
        $products->delete();

        return redirect('/products')->with('status', 'პროდუქტი წარმატებით წაიშალა');

    }


}
