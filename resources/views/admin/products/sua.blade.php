@extends('admin/layouts/master')
@section('content')
<div class="right_col" role="main">
   <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
         <div class="x_title">
            <h2>TYPE PRODUCTS <small>EDIT</small></h2>
            <ul class="nav navbar-right panel_toolbox">
               <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
               </li>
               <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
               </li>
               <li><a class="close-link"><i class="fa fa-close"></i></a>
               </li>
            </ul>
            <div class="clearfix"></div>
         </div>
         <div class="x_content">
            <form action="{{route('admin/post-product/edit')}}" method="post" enctype="multipart/form-data">
               {{csrf_field()}}
               <input type="hidden" name="product_id" value="{{$products['id']}}">
               <div class="modal-body">
                  <div class="row">
                     <div class="col-sm-12">
                        <label for="Type Product">Type Product</label>
                        <select  class="form-control" name="type_product"  >
                           @foreach($typeproducts as $typeproduct)
                           <option value="{{$typeproduct['id']}}">{{$typeproduct['name']}}</option>
                           @endforeach  
                        </select>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-sm-12">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{$products['name']}}" >
                     </div>
                  </div>
                    <div class="row">
                     <div class="col-sm-12">
                        <label for="name"> Show Image</label>
                        <img src="{{url('public/upload/images/products/'.$products['image'])}}" style="width: 300px;height: 300px" alt="">
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-sm-12">
                        <label for="name">Image</label>
                        <input type="file" name="image" id="image" class="form-control" >
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-sm-12">
                        <label for="name">Price</label>
                        <input type="text" name="price" value="{{$products['unit_price']}}"  class="form-control" >
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-sm-12">
                        <label for="name">Promotion Price</label>
                        <input type="text" name="promotion_price" value="{{$products['promotion_price']}}"  class="form-control" >
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-sm-12">
                        <label for="name">Unit</label>
                        <select name="unit" id="" class="form-control">
                           <option value=""></option>
                           <option value="Cái">Cái</option>
                        </select>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-sm-12">
                        <label for="name">Description</label>
                        <textarea class="textarea_editor form-control" name="description" rows="15" placeholder="Enter text ...">{{$products['description']}}</textarea>  
                     </div>
                  </div>
               </div>
               <div class="modal-footer">
                  <button type="submit" class="btn btn-primary">Save changes</button>
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
@endsection