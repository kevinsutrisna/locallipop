<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function paginate(Request $request)
    {
        $query = $request->input('query');

        if ($query) {
            $news = News::where('name', 'like', '%' . $query . '%')->paginate(4);
        } else {
            $news = News::paginate(4);
        }
        return view('news', compact('news', 'query'));
    }

    public function showForm(){
        return view('addnews');
    }

    public function destroy($id)
    {
        $news = News::findOrFail($id);
        $news->delete();

        return redirect()->route('news.paginate')->with('success', 'News deleted successfully');
    }

    public function showDetail($id)
    {
        $news = News::findOrFail($id);

        return view('newsdetail', compact('news'));
    }

     public function submitForm(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'detail' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'release' => 'required|date|before:today',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->move(public_path('images'), $request->file('image')->getClientOriginalName());
        }

        News::create([
            'name' => $validatedData['name'],
            'detail' => $validatedData['detail'],
            'image' => 'images/' . $request->file('image')->getClientOriginalName(), 
            'release' => $validatedData['release'],
        ]);

        return redirect()->route('news.paginate')->with('success', 'News has been successfully added.');
    }
    public function edit($id)
    {
        $news = News::findOrFail($id);
        return view('editnews', compact('news'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'detail' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'release' => 'required|date|before_or_equal:today',
        ]);

        $news = News::findOrFail($id);
        $news->name = $validatedData['name'];
        $news->detail = $validatedData['detail'];
        $news->release = $validatedData['release'];

        if ($request->hasFile('image')) {
            if (file_exists(public_path($news->image))) {
                unlink(public_path($news->image));
            }

            $imagePath = $request->file('image')->move(public_path('images'), $request->file('image')->getClientOriginalName());
            $news->image = 'images/' . $request->file('image')->getClientOriginalName();
        }

        $news->save();

        return redirect()->route('news.paginate')->with('success', 'News updated successfully');
    }

}