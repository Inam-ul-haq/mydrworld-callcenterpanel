<?php include('include/header.php'); ?>
<div class="position-relative mb-5">
    <div class="card">
        <div class="p-4 pt-0">
            <div class="d-flex justify-content-between align-items-center mt-3">
                <h5 class="font-size-16 me-3 mb-0">Our Locations</h5>
                <a href="#!" style="margin-left: auto;" class="btn btn-outline-primary waves-effect waves-light">Add Location</a>
            </div>
            <hr class="my-3" />

            <div class="row">
                <div class="col-12 mt-4">
                    <div class="d-md-flex gap-3">
                        <div class="position-relative input-custom-icon w-100">
                            <input type="text" class="form-control" placeholder="Enter location or Drag the marker" />
                            <span class="bx bx-calendar-event"></span>
                        </div>
                        <button class="btn btn-sm btn-icon btn-danger text-white ml-auto mt-3 mt-md-0">
                            <i class="bx bx-trash-alt"></i>
                        </button>
                    </div>

                    <div id="map2" class="gmaps mt-2"></div>
                </div>

                <div class="col-12 mt-4">
                    <div class="d-md-flex gap-3">
                        <div class="position-relative input-custom-icon w-100">
                            <input type="text" class="form-control" placeholder="Enter location or Drag the marker" />
                            <span class="bx bx-calendar-event"></span>
                        </div>
                        <button class="btn btn-sm btn-icon btn-danger text-white ml-auto mt-3 mt-md-0">
                            <i class="bx bx-trash-alt"></i>
                        </button>
                    </div>

                    <div id="map3" class="gmaps mt-2"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('include/footer.php'); ?>
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $("#imagePreview").css("background-image", "url(" + e.target.result + ")");
                $("#imagePreview").hide();
                $("#imagePreview").fadeIn(650);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#imageUpload").change(function () {
        readURL(this);
    });
</script>
<script src="https://maps.google.com/maps/api/js?key=AIzaSyCtSAR45TFgZjOs4nBFFZnII-6mMHLfSYI"></script>
<script src="assets/js/gmaps.min.js"></script>
<script src="assets/js/gmaps.init.js"></script>
