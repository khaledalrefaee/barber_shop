@if(isset($item))

    <div class="modal fade" id="edit_categories{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="edit_categories{{$item->id}}Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Categories</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('update.category', $item->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT') {{-- يُستخدم لتحديد أنها عملية تحديث --}}
                    <div class="form-group">

                        <label>Categories Name <span class="text-danger">*</span></label>
                        <input class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $item->name) }}" name="name" type="text">
                        @error('name')
                        <div class="invalid-feedback" style="color: #8B0000;">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Categories Avatar <span class="text-danger">*</span></label>
                        <input class="form-control @error('avter') is-invalid @enderror" name="avter" value="{{$item->avter}}" type="file" id="avter-input">
                        @error('avter')
                        <div class="invalid-feedback" style="color: #8B0000;">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="text-center">
                        <img id="avatar-preview" src="{{ asset('back/assets/imag/category/' . $item->avter) }}" class="rounded-circle" style="width: 150px;" alt="Avatar" />
                    </div>

                    <div class="submit-section">
                        <button class="btn btn-primary submit-btn">Update</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    </div>


@endif
<script>
    document.getElementById('avter-input').addEventListener('change', function () {
        const fileInput = this;
        const previewImage = document.getElementById('avatar-preview');

        if (fileInput.files && fileInput.files[0]) {
            const reader = new FileReader();

            reader.onload = function (e) {
                previewImage.src = e.target.result;
            };

            reader.readAsDataURL(fileInput.files[0]);
        }
    });
</script>
