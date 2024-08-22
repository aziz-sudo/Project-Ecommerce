<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;



class ProductController extends Controller
{
    public function index()
    {
        $products=Product::orderBy('created_at','DESC')->paginate(10);
        return view('admin.products.products',compact('products'));
    }

    public function create()
    {

        $categories = Category::Select('id','name')->orderBy('name')->get();
        $brands = Brand::Select('id','name')->orderBy('name')->get();

        return view("admin.products.create",compact('categories','brands'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'slug'=>'required|unique:products,slug',
            'short_description'=>'required',
            'description'=>'required',
            'regular_price'=>'required',
            'sale_price'=>'required',
            'SKU'=>'required',
            'stock_status'=>'required',
            'featured'=>'required',
            'quantity'=>'required',
            'image'=>'required|mimes:png,jpg,jpeg|max:2048',
            'category_id'=>'required',
            'brand_id'=>'required',
        ]);

        $img_name = time().'.'.$request->image->getClientOriginalExtension();
        $product = new Product();
        $product->name = $request->name;
        $product->slug = Str::slug($request->name);
        $product->short_description = $request->short_description;
        $product->description = $request->description;
        $product->regular_price = $request->regular_price;
        $product->sale_price = $request->sale_price;
        $product->SKU = $request->SKU;
        $product->stock_status = $request->stock_status;
        $product->featured = $request->featured;
        $product->quantity = $request->quantity;
        $current_timestamp = Carbon::now()->timestamp;
        $product->image=$img_name;
        $product->images=$img_name;
        $product->category_id=$request->category_id;
        $product->brand_id=$request->brand_id;
        $product->save();
        $request->image->move(public_path('uploads\products'),$img_name);
        return redirect()->route('products.index')->with('success','Product added Successfully!');


    }
    public function edit($id)
    {
        $product = Product::find($id);
        $categories = Category::Select('id','name')->orderBy('name')->get();
        $brands = Brand::Select('id','name')->orderBy('name')->get();


        return view('admin.products.edit',compact('product','categories','brands'));

    }

    public function update(Request $request,$id)
    {
        $product = Product::find($id);
        $product->name=$request->input('name');
        $product->slug=$request->input('slug');
        $product->short_description->input('short_description');
        $product->description->input('description');
        $product->regular_price->input('regular_price');
        $product->sale_price->input('sale_price');
        $product->SKU->input('SKU');
        $product->stock_status->input('stock_status');
        $product->featured->input('featured');
        $product->quantity->input('quantity');
        if($request->hasFile('image')){
        $destination='uploads/products'.$product->image;
        if(File::exists($destination)){
            File::delete($destination);
        }
        $file=$request->file('image');
        $extention=$file->getClientOriginalExtension();
        $img_name = time().'.'.$extention;
        $file->move(public_path('uploads\products'),$img_name);
        $product->image=$img_name;
        }
        if($request->hasFile('image')){
            $destination='uploads/products'.$product->image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file=$request->file('images');
            $extention=$file->getClientOriginalExtension();
            $img_name = time().'.'.$extention;
            $file->move(public_path('uploads\products'),$img_name);
            $product->images=$img_name;
            }
        $product->update();
        return redirect()->route('products.index')->with('success','Product added Successfully!');
    }
    public function destroy(string $id)
    {
        $product = Product::find($id);
        $product ->delete();
        return redirect()->route('products.index')->with('success','Product deleted Successully!');

    }
}
