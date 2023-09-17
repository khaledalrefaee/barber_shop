<div class="col-auto float-right ml-auto">
    <a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_leave"><i class="fa fa-plus"></i> Add Category</a>
</div>


<div id="add_leave" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
    <div class="modal-header">
    <h5 class="modal-title">Add Category</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    </div>
    <div class="modal-body">
    <form action="" method="POST">
        @csrf
    <div class="form-group">
    
    </div>
    <div class="form-group">
    <label>Nmae English <span class="text-danger">*</span></label>
    <div class="">
        <input class="form-control" name="name_en" value="{{old('name_en')}}" type="text">
    </div>
    </div>
    <div class="form-group">
    <label>Name Arabic <span class="text-danger">*</span></label>
    <div class="">
    <input class="form-control" name="name_ar" value="{{old('name_ar')}}" type="text">
    </div>
    </div>
    <div class="form-group">
    <label>Image <span class="text-danger">*</span></label>
    <input class="form-control" type="file">
    </div>

    <button class="btn btn-primary submit-btn">Submit</button>
    </div>
    </form>
    </div>
    </div>
    </div>
    </div>