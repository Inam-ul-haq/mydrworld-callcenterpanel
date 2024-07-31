<?php include('include/header.php'); ?>

<div class="position-relative mb-5">
    <div class="d-lg-flex">
        <div class="chat-leftsidebar card">
            <div class="card-body" style="flex: 0;">
                <div class="text-center bg-light rounded px-4 py-3">
                    <!-- <div class="text-end">
                        <div class="dropdown chat-noti-dropdown">
                            <button class="btn dropdown-toggle p-0" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-cog"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="profile.php">Profile</a>
                                <a class="dropdown-item" href="profile-edit.php">Edit</a>
                            </div>
                        </div>
                    </div> -->
                    <div class="chat-user-status mt-4">
                        <!-- <img src="assets/images/clinic-logo.png" class="avatar-md rounded-circle" alt="" /> -->
                        <div class="avatar-upload position-relative">
                            <div class="avatar-edit">
                                <input type="file" id="imageUpload" accept=".png, .jpg, .jpeg">
                                <label for="imageUpload"></label>
                            </div>
                            <div class="avatar-preview">
                                <div id="imagePreview" class="avatar-md rounded-circle mx-auto" style="background-image: url(assets/images/clinic-logo.png);background-size: contain;">
                                </div>
                            </div>
                        </div>
                    </div>
                    <h5 class="font-size-16 mb-1 mt-3"><a href="#" class="text-reset">Aladin Call Centre </a></h5>
                    <p class="text-muted mb-0">Downtown, Dubai</p>
                </div>
            </div>

            <div class="mail-list">
                <a href="profile.php" class=" ">
                    <div class="d-flex align-items-center">
                        <i class="bx bx-user-circle font-size-20 align-middle me-3"></i>
                        <div class="flex-grow-1">
                            <h5 class="font-size-14 mb-0">Our Profile</h5>
                        </div>
                    </div>
                </a>
                <a href="profile-edit.php" class="border-bottom active bg-primary-subtle">
                    <div class="d-flex align-items-center">
                        <i class="mdi mdi-star-outline font-size-20 align-middle me-3"></i>
                        <div class="flex-grow-1">
                            <h5 class="font-size-14 mb-0">Edit Profile</h5>
                        </div>
                        <div class="flex-shrink-0"></div>
                    </div>
                </a>

                <a href="change-password.php" class="border-bottom">
                    <div class="d-flex align-items-center">
                        <i class="mdi mdi-key-outline font-size-20 align-middle me-3"></i>
                        <div class="flex-grow-1">
                            <h5 class="font-size-14 mb-0">Change Password</h5>
                        </div>
                        <div class="flex-shrink-0"></div>
                    </div>
                </a>
            </div>
        </div>
        <!-- end chat-leftsidebar -->

        <div class="w-100 user-chat mt-4 mt-sm-0 ms-lg-3">
            <div class="card">
                <div class="p-4 pt-5">
                    <form action="dashboard.php" class="registerform">
                        <div class="row">
                            <div class="col-lg-6 mb-3">
                                <label class="form-label" for="username">Call Center Name</label>
                                <div class="position-relative input-custom-icon">
                                    <input type="text" class="form-control" id="" placeholder="Call Center Name" />
                                    <span class="bx bx-user"></span>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label class="form-label" for="username">Email Address</label>
                                <div class="position-relative input-custom-icon">
                                    <input type="email" class="form-control" id="" placeholder="Enter Email" />
                                    <span class="bx bx-envelope"></span>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label class="form-label" for="username">Phone Number</label>
                                <div class="position-relative">
                                    <input type="text" class="form-control" id="phone" placeholder="Enter Phone Number" />
                                    <!-- <span class="bx bx-phone"></span> -->
                                </div>
                            </div>

                            <div class="col-lg-6 mb-3">
                                <label class="form-label" for="username">Website</label>
                                <div class="position-relative input-custom-icon">
                                    <input type="text" class="form-control" id="" placeholder="Enter Website" />
                                    <span class="bx bx-globe"></span>
                                </div>
                            </div>

                            <div class="col-lg-6 mb-3">
                                <label class="form-label" for="username">Emirates</label>
                                <div class="position-relative input-custom-icon">
                                    <input type="text" class="form-control" id="" placeholder="Enter Emirates" />
                                    <span class="bx bx-layer"></span>
                                </div>
                            </div>

                            <div class="col-lg-6 mb-3">
                                <label class="form-label" for="username">Country</label>
                                <div class="position-relative select-custom-icon">
                                    <select name="" id="" class="select2-single" data-placeholder="Select Country">
                                        <option></option>
                                        <option value="1">Uae</option>
                                        <option value="2">India</option>
                                    </select>
                                    <i class="bx bx-navigation"></i>
                                </div>
                            </div>

                            <div class="col-lg-6 mb-3">
                                <label class="form-label" for="username">City</label>
                                <div class="position-relative select-custom-icon">
                                    <select name="" id="" class="select2-single" data-placeholder="Select City">
                                        <option></option>
                                        <option value="1">Dubai</option>
                                        <option value="2">Abu Dhabi</option>
                                    </select>
                                    <i class="bx bx-navigation"></i>
                                </div>
                            </div>

                            <div class="col-lg-6 mb-3">
                                <label class="form-label" for="username">Area</label>
                                <div class="position-relative select-custom-icon">
                                    <select name="" id="" class="select2-single" data-placeholder="Select Area">
                                        <option></option>
                                        <option value="1">Business Bay</option>
                                        <option value="2">Al Barsha</option>
                                    </select>
                                    <i class="bx bx-navigation"></i>
                                </div>
                            </div>

                            <div class="col-12 mb-3">
                                <label class="form-label" for="username">Address Of Organization</label>
                                <div class="position-relative input-custom-icon">
                                    <input type="text" class="form-control" id="" placeholder="Enter Address Of Organization" />
                                    <span class="bx bx-building"></span>
                                </div>
                            </div>

                            <!-- <div class="col-lg-6 mb-3">
                <div class="custom-upload">
                    <label for="formFile" class="form-label">Logo</label>
                    <input class="form-control" type="file" id="formFile" />
                </div>
            </div>

            <div class="col-lg-6 mb-3">
                <div class="custom-upload">
                    <label for="formFile" class="form-label">Trade License</label>
                    <input class="form-control" type="file" id="formFile" />
                </div>
            </div>

            <div class="col-lg-6 mb-3">
                <label class="form-label" for="username">Trade License Number</label>
                <div class="position-relative input-custom-icon">
                    <input type="text" class="form-control" id="" placeholder="Enter Trade License Number">
                    <span class="bx bx-git-commit"></span>
                </div>
            </div>
            
            
            <div class="col-lg-6 mb-3">
                <label class="form-label" for="username">Trade License Expiry</label>
                <div class="position-relative input-custom-icon">
                    <input type="text" class="form-control flatpicker-input" id="" placeholder="Trade License Expiry" />
                    <span class="bx bx-calendar-event"></span>
                </div>
            </div>
            <div class="col-12 mb-3">
                <label class="form-label" for="username">Enter the location or Drag the marker</label>
                <div class="position-relative input-custom-icon">
                    <input type="text" class="form-control" placeholder="Enter Location" />
                    <span class="bx bx-calendar-event"></span>
                </div>

                <div id="gmaps-markers" class="gmaps mt-2"></div>
            </div> -->

                            <div class="col-12 mb-3">
                                <label class="form-label" for="username">Location or Drag the marker</label>
                                <div class="position-relative input-custom-icon">
                                    <input type="text" class="form-control" placeholder="Enter location or Drag the marker" />
                                    <span class="bx bx-calendar-event"></span>
                                </div>

                                <div id="map1" class="gmaps mt-2"></div>
                            </div>

                            

                            <div class="col-12">
                                <button class="btn btn-primary waves-effect waves-light" type="submit">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- end user chat -->
        </div>
        <!-- End d-lg-flex  -->
    </div>
</div>

<?php include('include/footer.php'); ?>
<script src="assets/js/ckeditor.js"></script>
<script src="assets/js/form-editor.init.js"></script>
<script src="https://maps.google.com/maps/api/js?key=AIzaSyCtSAR45TFgZjOs4nBFFZnII-6mMHLfSYI"></script>
<script src="assets/js/gmaps.min.js"></script>
<script src="assets/js/gmaps.init.js"></script>
<script>
    $("#base-style").DataTable();

    const input = document.querySelector("#phone");
        window.intlTelInput(input, {
            
            initialCountry: "AE",
            strictMode: true,
            utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@21.0.4/build/js/utils.js",
        });
</script>
<script>
        function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#imagePreview').css('background-image', 'url('+e.target.result +')');
            $('#imagePreview').hide();
            $('#imagePreview').fadeIn(650);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
$("#imageUpload").change(function() {
    readURL(this);
});
</script>