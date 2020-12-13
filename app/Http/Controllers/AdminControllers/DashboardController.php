<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Models\Offers;
use App\Models\Products;
use App\Models\Sliders;
use App\Models\User;
use Illuminate\Http\Request;


class DashboardController extends Controller
{
    public function registered()
    {
        $users = User::all();
        return view('admin.register')->with('users',$users);
    }

    public function registeredit(Request $request, $id)
    {
        $users = User::findOrFail($id);
        return view('admin.register-edit')->with('users',$users);
    }

    public function registerupdate(Request $request, $id)
    {
        $users = User::find($id);
        $users->name = $request->input('name');
        $users->permission = $request->input('permission');
        $users->update();

        return redirect('/role-register')->with('status', 'მონაცემი წარმატებით განახლდა');
    }

    public function registerdelete($id)
    {
        $users = User::findOrFail($id);
        $users->delete();

        return redirect('/role-register')->with('status', 'მონაცემი წარმატებით წაიშალა');
    }


    public function main()
    {
        $count_users = User::all()->count();
        $count_products = Products::all()->count();
        $count_sliders = Sliders::all()->count();
        $count_offers = Offers::all()->count();

        return view('admin.dashboard')->with('count_users', $count_users)->with('count_products', $count_products)
            ->with('count_sliders', $count_sliders)->with('count_offers', $count_offers);

    }



}
