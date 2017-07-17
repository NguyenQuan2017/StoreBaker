<div class="modal fade"   role="dialog"  aria-hidden="true" id="slide-show" >
  <div class="modal-dialog" >
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title">ADD PRODUCT</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      @include('admin/errors/error')
      <form action="{{route('admin/slide/add')}}" method="post" enctype="multipart/form-data">
      {{csrf_field()}}
      <div class="modal-body">
        <div class="row">
          <div class="col-sm-12">
          <label for="name">Link</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Name" >
          </div>
        </div>
          <div class="row">
          <div class="col-sm-12">
          <label for="name">Image</label>
            <input type="file" name="image" id="image" class="form-control" >
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
