<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){

        $products = Product::orderBy('id', 'desc')->get();
        $total = Product::count();
        return view('admin.product.home', compact(['products', 'total']));
    }
    // Create Controller
    public function create(){
        return view('admin.product.create');
}

    public function save(Request $request){
        $validation = $request->validate([
            'title' => 'required',
            'category' => 'required',
            'price' => 'required',
        ]);

        // validation if the product successfull added or not
        $data = Product::create($validation);
        if($data){
            session()->flash('success','Product Added Successfully');
            return redirect(route('admin/products'));
        }
        else {
            session()->flash('error','Product problem occur');
            return redirect(route('admin.products/create'));
        }
    }

    public function edit($id){
        $products = Product::findOrFail($id);
        return view('admin.product.update', compact('products'));
    }

    public function update(Request $request, $id){

        $products = Product::findOrFail($id);
        $title = $request->title;
        $category = $request->category;
        $price = $request->price;

        $products->title = $title;
        $products->category = $category;
        $products->price = $price;
        $data = $products->save();

        if($data){
            session()->flash('success','Product Update Success');
            return redirect(route('admin/products'));
        }else{
            session()->flash('error','Some Problem Occur');
            return redirect(route('admin/products/update'));
        }
    }

        public function delete($id){
            $products = Product::findOrFail($id)->delete();
            if($products){  
                session()->flash('success','Product Deleted Success');
                return redirect(route('admin/products'));
            }else{
                session()->flash('error','Product Not Deleted');
                return redirect(route('admin/products'));
            }
        }
  


}
