<div id="add_employee" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Salon</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{route('store.Salon')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">Name Salon <span class="text-danger">*</span></label>
                                <input class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" name="name" type="text">
                                @error('name')
                                <div class="invalid-feedback" style="color: #8B0000;">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">Phone </label>
                                <input class="form-control @error('name') is-invalid @enderror" value="{{ old('phone') }}"  name="phone" type="text">
                                @error('phone')
                                <div class="invalid-feedback" style="color: #8B0000;">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">Street Salon</label>
                                <input class="form-control @error('street') is-invalid @enderror" value="{{ old('street') }}" name="street" type="text">
                                @error('street')
                                <div class="invalid-feedback" style="color: #8B0000;">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="academic_year">Image Salon : <span class="text-danger">*</span></label>
                                <input type="file" accept="image/*" class="form-control @error('photos') is-invalid @enderror"   name="photos[]" multiple>
                                @error('photos')
                                <div class="invalid-feedback" style="color: #8B0000;">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">Addres</label>
                                <select name="address_id" class="form-control @error('address_id') is-invalid @enderror">
                                    @foreach($address as $addres)
                                    <option    value="{{$addres->id}}"{{ old('address_id') == $addres->id ? 'selected' : '' }}>{{$addres->name}}</option>
                                    @endforeach
                                </select>
                                @error('address_id')
                                <div class="invalid-feedback" style="color: #8B0000;">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">Category</label>
                                <select name="categories_id" class="form-control @error('categories_id') is-invalid @enderror">
                                    @foreach($Categories as $Categore)
                                        <option value="{{$Categore->id}}"{{ old('categories_id') == $Categore->id ? 'selected' : '' }}>{{$Categore->name}}</option>
                                    @endforeach

                                </select>
                                @error('categories_id')
                                <div class="invalid-feedback" style="color: #8B0000;">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">Facebook Salon <span class="text-danger">*</span></label>
                                <input class="form-control @error('facebook') is-invalid @enderror" value="{{ old('facebook') }}" name="facebook" type="text">
                                @error('facebook')
                                <div class="invalid-feedback" style="color: #8B0000;">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">instagram </label>
                                <input class="form-control @error('instagram') is-invalid @enderror" value="{{ old('instagram') }}"  name="instagram" type="text">
                                @error('instagram')
                                <div class="invalid-feedback" style="color: #8B0000;">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>


                    <input type="hidden" name="longitude" value="{{ old('longitude') }}" id="longitude"  readonly>

                    <div id="map" style="height: 500px"></div>

                    <input type="hidden" name="latitude" class="form-control @error('latitude') is-invalid @enderror"  value="{{ old('latitude') }}"  id="latitude" readonly>
                    @error('latitude')
                    <div class="invalid-feedback" style="color: #8B0000;">{{ $message }}</div>
                    @enderror
                    <div class="submit-section">
                        <button class="btn btn-primary submit-btn">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    function initMap() {
        // Create a new map centered on your current location
        navigator.geolocation.getCurrentPosition(function(position) {
            var map = new google.maps.Map(document.getElementById('map'), {
                center: {
                    lat: position.coords.latitude,
                    lng: position.coords.longitude
                },
                zoom: 17
            });

            // Create a marker at your current location
            var marker = new google.maps.Marker({
                position: {
                    lat: position.coords.latitude,
                    lng: position.coords.longitude
                },
                map: map,
                icon: {
                    url: "http://maps.google.com/mapfiles/ms/icons/red-dot.png"
                }
            });

            // Allow the user to drag the marker
            marker.setDraggable(true);

            // Update the marker's position when the user drags it
            google.maps.event.addListener(marker, 'dragend', function(event) {
                document.getElementById("latitude").value = this.getPosition().lat();
                document.getElementById("longitude").value = this.getPosition().lng();
            });
        });
    }
</script>
