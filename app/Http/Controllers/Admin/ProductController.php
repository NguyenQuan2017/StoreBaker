<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\TypeProduct;

class ProductController extends Controller
{
    public function getProduct(){

    	$products=Product::with('typeproduct')->get();
    	$typeproducts=TypeProduct::all();
    	return view('admin/products/danhsach',compact('products','typeproducts'));
    }

    public function getAddProduct(){

    	return view('admin/products/them');
    }

    public function postAddProduct(Request $request){

    	$products=new Product;

    	$image_product=$request->file('image')->getClientOriginalName();
    	$products->type_product_id=$request->type_product;
    	$products->name=$request->name;
    	$products->description=$request->description;
    	$products->image=$image_product;
    	$request->file('image')->move('public/upload/images/products',$image_product);
    	$products->unit_price=$request->price;
    	$products->promotion_price=$request->promotion_price;
    	$products->unit=$request->unit;
    	$products->save();

    	return redirect()->route('product');
    }

    public function getEditProduct($id){

    	$products=Product::find($id);
    	$typeproducts=TypeProduct::all();
    	return view('admin/products/sua',compact('products','typeproducts'));
    }

    public function postEditProduct(Request $request){

        $products=Product::where('id',$request->product_id)->first();
        $image_product=$request->file('image')->getClientOriginalName();
        $products->type_product_id=$request->type_product;
        $products->name=$request->name;
        $products->description=$request->description;
        $products->image=$image_product;
        $request->file('image')->move('public/upload/images/products',$image_product);
        $products->unit_price=$request->price;
        $products->promotion_price=$request->promotion_price;
        $products->unit=$request->unit;
        $products->save();

        return redirect()->route('admin/product');
    }

    public function delete($id){

        $products=Product::find($id);
        Filn::delete('public/upload/images/products/'.$products['image']);
        $products->delete($id);
        return redirect()->route('admin/product');

    }
}
