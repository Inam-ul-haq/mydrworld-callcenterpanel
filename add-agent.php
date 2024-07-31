<?php include('include/header.php'); ?>

<div class="card mb-5">
    <div class="position-relative">
        <div class="card-body">
            <form action="">
                <div class="row">
                    <div class="col-lg-6 mb-3">
                        <label class="form-label" for="">Agent Name</label>
                        <div class="position-relative input-custom-icon">
                            <input type="text" class="form-control" id="" placeholder="Enter Agent Name" />
                            <span class="bx bx-user"></span>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label class="form-label" for="">Gender</label>
                        <div class="position-relative select-custom-icon">
                            <select name="" id="" class="select2-single" data-placeholder="Select Gender">
                                <option></option>
                                <option value="1">Male</option>
                                <option value="2">Female</option>
                            </select>
                            <i class="fi fi-rr-venus-mars" style="margin-top: 2px;"></i>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label class="form-label" for="">Email</label>
                        <div class="position-relative input-custom-icon">
                            <input type="email" class="form-control" id="" placeholder="Enter Email" />
                            <span class="bx bx-envelope"></span>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label class="form-label" for="">Phone Number</label>
                        <div class="position-relative">
                            <input type="number" class="form-control" id="phone" placeholder="Enter Phone Number" />
                            <!-- <span class="bx bx-phone"></span> -->
                        </div>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label class="form-label" for="password-input">Password</label>
                        <div class="position-relative auth-pass-inputgroup input-custom-icon">
                            <span class="bx bx-lock-alt"></span>
                            <input type="password" class="form-control" id="password-input" placeholder="Enter Password" />
                            <button type="button" class="btn btn-link position-absolute h-100 end-0 top-0" id="password-addon">
                                <i class="mdi mdi-eye-outline font-size-18 text-muted"></i>
                            </button>
                        </div>
                    </div>

                    <div class="col-lg-6 mb-3">
                        <label class="form-label" for="password-input">Confirm Password</label>
                        <div class="position-relative auth-pass-inputgroup input-custom-icon">
                            <span class="bx bx-lock-alt"></span>
                            <input type="password" class="form-control" id="password-input" placeholder="Enter Confirm Password" />
                            <button type="button" class="btn btn-link position-absolute h-100 end-0 top-0" id="password-addon">
                                <i class="mdi mdi-eye-outline font-size-18 text-muted"></i>
                            </button>
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

                    <div class="col-lg-6 mb-3">
                        <label class="form-label" for="username">Address</label>
                        <div class="position-relative input-custom-icon">
                            <input type="text" class="form-control" id="" placeholder="Enter Address" />
                            <span class="bx bx-building"></span>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <div class="custom-upload">
                            <label for="uploadphotos" class="form-label">Upload Photo</label>
                            <input class="form-control" type="file" id="upload_imgs" accept="image/jpg, image/jpeg" />
                        </div>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label class="form-label" for="username">Status</label>
                        <div class="position-relative select-custom-icon">
                            <select name="" id="" class="select2-single" data-placeholder="Select Status">
                                <option></option>
                                <option value="1">Active</option>
                                <option value="2">Inactive</option>
                            </select>
                            <i class="fi fi-tr-dot-circle icon d-flex"></i>
                        </div>
                    </div>

                    <div class="col-12">
                        <button class="btn btn-primary" type="button">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include('include/footer.php'); ?>
<script src="https://maps.google.com/maps/api/js?key=AIzaSyCtSAR45TFgZjOs4nBFFZnII-6mMHLfSYI"></script>
<script src="assets/js/gmaps.min.js"></script>
<script src="assets/js/gmaps.init.js"></script>
<script>
    const input = document.querySelector("#phone");
    window.intlTelInput(input, {
        initialCountry: "AE",
        strictMode: true,
        utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@21.0.4/build/js/utils.js",
    });
</script>
