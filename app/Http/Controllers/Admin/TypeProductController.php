<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\TypeProduct;

class TypeProductController extends Controller
{
    public function getListTypeProduct(){

    	$type_products=TypeProduct::all();
    	return view('admin/type_products/danhsach',compact('type_products'));
    }

    public function getAddTypeProduct(){

    	return view('admin/type_products/them');
    }
    public function postAddTypeProduct(Request $request){

    	$type_products=new TypeProduct;
    	$file_image=$request->file('image')->getClientOriginalName();
    	$type_products->name=$request->name;
    	$type_products->image=$file_image;
    	$request->file('image')->move('public/upload/images',$file_image);
    	$type_products->description=$request->description;
    	$type_products->save();

    	return redirect()->route('type-product');

    }
    public function getEditTypeProduct($id){
    	$type_products=TypeProduct::find($id);
        return view('admin/type_products/sua',compact('type_products'));
    }

    public function postEditTypeProduct(Request $request){

        $type_products=TypeProduct::where('id',$request->type_product_id)->first();
        $file_image=$request->file('image')->getClientOriginalName();
        $type_products->name=$request->name;
        $type_products->image=$file_image;
        $request->file('image')->move('public/upload/images',$file_image);
        $type_products->description=$request->description;
        $type_products->save();

        return redirect()->route('admin/type-product');

    }

    public function delete($id){

        $type_products=TypeProduct::find($id);
        File::delete('public/upload/images/'.$type_products['image']);
        $type_products->delete($id);
        return redirect()->route('admin/type-product');
        

   }
}
