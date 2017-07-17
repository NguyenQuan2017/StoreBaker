  @extends('admin/layouts/master')
  @section('content')
  @include('admin/slides/them')
    <div class="right_col" role="main">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>SLIDER <small>LIST</small></h2>
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
                    <a href="" class="btn btn-info " data-toggle="modal" id="add-slide" style="float: right;">ADD</a>
                    <table id="datatable" class="table  table-hover table-bordered">
                      <thead>
                        <tr>
                          <th>STT</th>
                          <th>LINK</th>
                          <th>IMAGE</th>
                          <th style="width:200px" >ACTION</th>
                        </tr>
                      </thead>

                      <tbody>
                 
                        <?php $stt=1; ?>
                        @foreach($sliders as $slider )
                        <tr>

                          <td>{{$stt++}}</td>
                          <td>{{$slider['link']}}</td>
                            <td><img src="{{url('public/upload/images/slider/'.$slider['image'])}}" alt="" style=" width: 300px;height: 200px"></td>
                          <td><a href="" class="btn btn-info" data-toggle="modal" ><i class="fa fa-pencil"></i>&nbsp;EDIT</a> <a href="" class="btn btn-danger confirm"> <i class="fa fa-trash"></i>&nbsp;DELETE</a> </td>
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
    $("#add-slide").click(function(){
        $("#slide-show").modal();
    });
});
</script>
@endsection



   
			