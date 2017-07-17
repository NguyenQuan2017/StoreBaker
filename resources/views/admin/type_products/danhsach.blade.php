  @extends('admin/layouts/master')
  @section('content')
  @include('admin/type_products/them')
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
                    <a href="" class="btn btn-info " data-toggle="modal" id="add-type-product" style="float: right;">ADD</a>
                    <table id="datatable" class="table  table-hover table-bordered">
                      <thead>
                        <tr>
                          <th>STT</th>
                          <th>NAME</th>
                          <th>IMAGE</th>
                          <th>DESCRIPTION</th>
                          <th>ACTION</th>
                        </tr>
                      </thead>

                      <tbody>
                 
                        <?php $stt=1; ?>
                        @foreach($type_products as $item )
                        <tr>

                          <td>{{$stt++}}</td>
                          <td>{{$item['name']}}</td>
                          <td><img src="{{url('public/upload/images/'.$item['image'])}}" alt="" style="width: 100px;height: 100px"></td>
                          <td>{{$item['description']}}</td>
                          <td><a href="{{route('admin/type-product/edit',$item['id'])}}" class="btn btn-info" data-toggle="modal" ><i class="fa fa-pencil"></i>&nbsp;EDIT</a> <a href="{{route('admin/type-product/delete',$item['id'])}}" class="btn btn-danger confirm"> <i class="fa fa-trash"></i>&nbsp;DELETE</a> </td>
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
    $("#add-type-product").click(function(){
        $("#type-product-show").modal();
    });
});
</script>
@endsection



   
			