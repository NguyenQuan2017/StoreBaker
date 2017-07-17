  @extends('admin/layouts/master')
  @section('content')
  @include('admin/products/them')
    <div class="right_col" role="main">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Type Products <small>List</small></h2>
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
                    <a href="" class="btn btn-info " data-toggle="modal" id="add-product" style="float: right;">ADD</a>
                    <table id="datatable" class="table  table-hover table-bordered">
                      <thead>
                        <tr>
                          <th>STT</th>
                          <th>TYPE PRODUCT</th>
                          <th>NAME</th>
                          <th>DESCRIPTION</th>
                          <th style="width: 80px">PRICE</th>
                          <th>PROMOTION PRICE</th>
                          <th>IMAGE</th>
                          <th>UNIT</th>
                          <th>ACTION</th>
                        </tr>
                      </thead>

                      <tbody>
                 
                        <?php $stt=1; ?>
                        @foreach($products as $product )
                        <tr>

                          <td>{{$stt++}}</td>
                          <td>{{$product->typeproduct['name']}}</td>
                        
                          <td>{{$product['name']}}</td>
                          <td>{{$product['description']}}</td>
                          <td>{{number_format($product['unit_price'],0,",",".")}} VNĐ</td>
                          <td>{{number_format($product['promotion_price'],0,",",".")}} VNĐ</td>
                            <td><img src="{{url('public/upload/images/products/'.$product['image'])}}" alt="" style="width: 100px;height: 100px"></td>
                          <td>{{$product['unit']}}</td>
                          <td><a href="{{route('admin/product/edit',$product['id'])}}" class="btn btn-info" data-toggle="modal" ><i class="fa fa-pencil"></i>&nbsp;EDIT</a> <a href="{{route('admin/product/delete',$product['id'])}}" class="btn btn-danger confirm"> <i class="fa fa-trash"></i>&nbsp;DELETE</a> </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
</div>

@endsection
@section('script')
  <script>
$(document).ready(function(){
    $("#add-product").click(function(){
        $("#product-show").modal();
    });
});
</script>
@endsection



   
			