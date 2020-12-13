<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Models\Suggestions;
use Illuminate\Http\Request;

class SuggestionsController extends Controller
{
    public function index()
    {
        $suggestions = Suggestions::all();
        return view('admin.suggestions')->with('suggestions', $suggestions);
    }

    public function suggestion()
    {
        return view('admin.suggestion-add');
    }

    public function add(Request $request)
    {
        $suggestion = new Suggestions();

        $suggestion->suggestion_title = $request->input('suggestion_title');
        $suggestion->suggestion_text = $request->input('suggestion_text');
        $suggestion->suggestion_deadline = $request->input('suggestion_deadline');


        $suggestion->save();


        return redirect('/suggestions')->with('suggestion', $suggestion)->with('status', 'შეთავაზება წარმატებით დაემატა');

    }

    public function edit(Request $request, $id)
    {
        $suggestions = Suggestions::findOrFail($id);
        return view('admin.suggestion-edit')->with('suggestions', $suggestions);

    }

    public function update(Request $request, $id)
    {

        $suggestions = Suggestions::find($id);
        $suggestions->suggestion_title = $request->input('suggestion_title');
        $suggestions->suggestion_text = $request->input('suggestion_text');
        $suggestions->suggestion_deadline = $request->input('suggestion_deadline');



        $suggestions->update();

        return redirect('/suggestions')->with('status', 'შეთავაზება წარმატებით განახლდა');
    }

    public function delete($id)
    {
        $suggestions = Suggestions::findOrFail($id);
        $suggestions->delete();

        return redirect('/suggestions')->with('status', 'შეთავაზება წარმატებით წაიშალა');
    }
}
