<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Slide;

class SlideController extends Controller
{
    
    public function getSlide(){

    	$sliders=Slide::all();
    	return view('admin/slides/danhsach',compact('sliders'));
    }

    public function getAddSlide(){

    	return view('admin/slides/them');
    }

    public function postAddSlide(Request $request){

    	$rules=$this->validate($request, [
		    'link' => 'required',
		    'image' => 'required|mimes:jpeg,jpg,png|image',
		],

		[
			'link.required'=>'Vui long nhap link',
			'image.required'=>'Vui long chon hinh anh',
			'image.mimes'=>'Hinh anh khong dung dinh dang'
		]);
	
		$validate=Validator::make($request->all(),$rules);

		if($validate->passes()){


		}
		 return redirect()->withErrors($validate->errors());
    }
}
