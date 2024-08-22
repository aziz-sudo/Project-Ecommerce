<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use Carbon\Carbon;
use App\Models\OrderItem;
use App\Models\Transaction;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{
    //dashbord
    public function indexx()
    {
        return view('admin.index');
    }

    //index
    public function index()
    {
        $brands=Brand::orderBy('id','DESC')->paginate(10);
        return view('admin.brands.brands',compact('brands'));
    }

    //create
    public function create()
    {

        return view('admin.brands.create');
    }

    //store
    public function store(Request $request)
    {
        $this->validate(request(),[
            'name' => 'required',
            'slug' => 'required|unique:brands,slug',
            'image' => 'image|mimes:png,jpg,jpeg,gif|max:2048'
    ]);
        $img_name = time().'.'.$request->image->getClientOriginalExtension();
        $brand = new Brand;
        $brand->name=request('name');
        $brand->slug=request('slug');
        $brand->image=$img_name;
        $brand->save();
        $request->image->move(public_path('uploads\brands'),$img_name);
        return redirect()->route('brand.index')->with('success','Brand added Successfully!');


    }

     //edit
    public function edit(string $id)

    {
        $brand= Brand::findOrFail($id);
        return view('admin.brands.edit',compact('brand'));

    }

    //update
    public function update(Request $request,$id)
    {

        $brand=Brand::find($id);
        $brand->name=$request->input('name');
        $brand->slug=$request->input('slug');

        if($request->hasFile('image')){
        $destination='uploads/products'.$brand->image;
        if(File::exists($destination)){
            File::delete($destination);
        }
        $file=$request->file('image');
        $extention=$file->getClientOriginalExtension();
        $img_name = time().'.'.$extention;
        $file->move(public_path('uploads\brands'),$img_name);
        $brand->image=$img_name;
        }
        $brand->update();
        return redirect()->route('brand.index')->with('success','Brand added Successfully!');
    }

    //delete
    public function destroy(string $id)
    {
        $brand=Brand::find($id);
        $brand->delete();
        return redirect()->route('brand.index')->with('success','Brand deleted Successully!');

    }
    //myAccount
    public function account(){
        return view('admin.compte.Account');
    }

    public function users()
    {
        $users=User::orderBy('created_at','DESC')->paginate(10);
        return view('admin.users.users',compact('users'));

    }
    public function orders()
    {
        $orders = Order::orderBy('created_at','DESC')->paginate(12);
        return view("admin.orders.orders",compact('orders'));
    }

    public function order_details($order_id){

        $order = Order::find($order_id);
          $orderItems = OrderItem::where('order_id',$order_id)->orderBy('id')->paginate(12);
          $transaction = Transaction::where('order_id',$order_id)->first();
          return view("admin.orders.order-details",compact('order','orderItems','transaction'));
    }


public function update_order_status(Request $request){
    $order = Order::find($request->order_id);
    $order->status = $request->order_status;
    if($request->order_status=='delivered')
    {
        $order->delivered_date = Carbon::now();
    }
    else if($request->order_status=='canceled')
    {
        $order->canceled_date = Carbon::now();
    }
    $order->save();
    if($request->order_status=='delivered')
    {
        $transaction = Transaction::where('order_id',$request->order_id)->first();
        $transaction->status = "approved";
        $transaction->save();
    }
    return back()->with("status", "Status changed successfully!");
}





}
