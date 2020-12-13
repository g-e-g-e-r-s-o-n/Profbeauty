<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Models\Offers;
use Illuminate\Http\Request;

class OffersController extends Controller
{
    public function index()
    {
        $offers = Offers::all();
        return view('admin.offers')->with('offers', $offers);
    }

    public function offer()
    {
        return view('admin.offer-add');
    }

    public function add(Request $request)
    {
        $offer = new Offers();

        $offer->offer_text = $request->input('offer_text');
        $offer->offer_url = $request->input('offer_url');

        if ($request->hasFile('offer_image'))
        {
            $file = $request->file('offer_image');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = time() . '.' . $extension;
            $file->move('uploads/offer/', $filename);
            $offer->offer_image = $filename;
        }
        else
        {
            return $request;
            $offer->offer_image = '';
        }

        $offer->save();


        return redirect('/offers')->with('offer', $offer)->with('status', 'შეთავაზება წარმატებით დაემატა');

    }

    public function edit(Request $request, $id)
    {
        $offers = Offers::findOrFail($id);
        return view('admin.offer-edit')->with('offers', $offers);

    }

    public function update(Request $request, $id)
    {

        $offers = Offers::find($id);
        $offers->offer_text = $request->input('offer_text');
        $offers->offer_url = $request->input('offer_url');

        if ($request->hasFile('offer_image'))
        {
            $file = $request->file('offer_image');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = time() . '.' . $extension;
            $file->move('uploads/offer/', $filename);
            $offers->offer_image = $filename;
        }
//        else
//        {
//            return $request;
//            $offers->offer_image = '';
//        }

        $offers->update();

        return redirect('/offers')->with('status', 'შეთავაზება წარმატებით განახლდა');
    }

    public function delete($id)
    {
        $offers = Offers::findOrFail($id);
        $offers->delete();

        return redirect('/offers')->with('status', 'შეთავაზება წარმატებით წაიშალა');
    }
}
