
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
                                <form action="{{route('admin/post-type-product/edit')}}" method="post" enctype="multipart/form-data">
              {{csrf_field()}}
              <input type="hidden" name="type_product_id" value="{{$type_products['id']}}" >
              <div class="modal-body">
                <div class="row">
                  <div class="col-sm-12">
                  <label for="name">Name</label>
                    <input type="text" name="name"  class="form-control" value="{{$type_products['name']}}" >
                  </div>
                </div>
                <div class="row">
                  <div class=" col-sm-12">
                  <label  for="show image">Show Image</label>
                   <img style="width: 300px;height: 300px" class="form-control" src="{{url("public/upload/images/".$type_products['image'])}}" alt="">
                  </div>
                  </div>
                  <div class="row">
                  <div class="col-sm-12">
                  <label for="name">Image</label>
                    <input type="file" name="image"  class="form-control" >
                  </div>
                </div>
                    <div class="row">
                  <div class="col-sm-12">
                  <label for="name">Description</label>
                    <textarea class="textarea_editor form-control" name="description" rows="15" placeholder="Enter text ...">{{$type_products['description']}}</textarea>  
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



   
