<div class="modal fade"   role="dialog"  aria-hidden="true" id="product-show" >
  <div class="modal-dialog" >
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title">ADD PRODUCT</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{route('admin/product/add')}}" method="post" enctype="multipart/form-data">
      {{csrf_field()}}
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
            <input type="text" name="name" id="name" class="form-control" placeholder="Name" >
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
            <input type="text" name="price"  class="form-control" >
          </div>
        </div>
         <div class="row">
          <div class="col-sm-12">
          <label for="name">Promotion Price</label>
            <input type="text" name="promotion_price"  class="form-control" >
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
            <textarea class="textarea_editor form-control" name="description" rows="15" placeholder="Enter text ..."></textarea>  
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
