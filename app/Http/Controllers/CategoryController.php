<?php

namespace App\Http\Controllers;

use App\Models\Category;

use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

class CategoryController extends Controller
{
    public function list()
    {
        $categories = Category::orderBy('id','asc')->paginate(5);
        return view('backend.pages.category.list', compact('categories'));
    }

    public function delete($id)
    {
        try {
            $category = Category::findOrFail($id);
            $category->delete();
            Toastr::success('Category delete successfully');
            return redirect()->route('category.list');
        } catch (\Illuminate\Database\QueryException $e) {
            if ($e->errorInfo[1] === 1451) {
                Toastr::warning('Cannot delete this category because it has associated products.');
                return redirect()->route('category.list');
            }
            Toastr::warning('Something went wrong');
            return redirect()->route('category.list');
        }
    }

    public function view($id)
    {
        $categories = Category::find($id);
        // $categories=Category::all();

        return view('backend.pages.category.view', compact('categories'));
    }



    public function edit($id)
    {
        $categories = Category::find($id);
        // $categories=Category::all();
        return view('backend.pages.category.edit', compact('categories'));
    }



    public function form()
    {
        return view('backend.pages.category.create');
    }




    public function store(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'category_name' => 'required'
            // 'description'=>'required'

        ]);


        Category::create([
            //bam pase table er column name => dan pase input field er nam
            'name' => $request->category_name,
            'description' => $request->description // nullable
        ]);

        return redirect()->route('category.list')->with('msg', 'Category Created successfully.');
    }



    public function update(Request $request, $id)
    {


        // dd($request->all());

        $request->validate([
            'category_name' => 'required',
            'description' => 'required'
        ]);


        $category = Category::find($id);

        $category->update([
            'name' => $request->category_name,
            'description' => $request->description,

        ]);
        return redirect()->route('category.list')->with('msg', 'Category Created successfully.');
    }
}
