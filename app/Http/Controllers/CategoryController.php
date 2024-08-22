<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Facades\File;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories=Category::orderBy('id','DESC')->paginate(10);
        return view('admin.categories.categories',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required|unique:categories,slug',
            'image' => 'mimes:png,jpg,jpeg|max:2048'
        ]);
        $img_name = time().'.'.$request->image->getClientOriginalExtension();
        $category = new Category();
        $category->name=request('name');
        $category->slug=request('slug');
        $category ->image=$img_name;
        $category ->save();
        $request->image->move(public_path('uploads\categories'),$img_name);
        return redirect()->route('categories.index')->with('success','categorie added Successfully!');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = Category::find($id);
        return view('admin.categories.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $category = Category::find($id);
        $category->name=$request->input('name');
        $category->slug=$request->input('slug');

        if($request->hasFile('image')){
        $destination='uploads/products'.$category->image;
        if(File::exists($destination)){
            File::delete($destination);
        }
        $file=$request->file('image');
        $extention=$file->getClientOriginalExtension();
        $img_name = time().'.'.$extention;
        $file->move(public_path('uploads\categories'),$img_name);
        $category->image=$img_name;
        }
        $category->update();
        return redirect()->route('categories.index')->with('success','Category added Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()->route('categories.index')->with('success','Brand deleted Successully!');

    }
}
