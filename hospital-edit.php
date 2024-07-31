<?php include('include/header.php'); ?>

<div class="position-relative mb-5">

            <div class="card">
                <div class="p-4 pt-5">
                    <form action="dashboard.php" class="registerform">
                        <div class="row">
                            <div class="col-lg-6 mb-3">
                                <label class="form-label" for="username">Hospital Name</label>
                                <div class="position-relative input-custom-icon">
                                    <input type="text" class="form-control" id="" placeholder="Hospital Name" />
                                    <span class="bx bx-building"></span>
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
                                <label class="form-label" for="username">Emirates / City / Province</label>
                                <div class="position-relative select-custom-icon">
                                    <select name="" id="" class="select2-single" data-placeholder="Select Emirates">
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
                                <div class="custom-upload">
                                    <label for="uploadphotos" class="form-label">Trade License</label>
                                    <input class="form-control" type="file" id="upload_imgs" accept="image/jpg, image/jpeg, image/pdf" maxlength="3" />
                                </div>
                                <div id="image_preview" class="row"></div>
                            </div>
                            
                            <div class="col-12 mb-3">
                                <label class="form-label" for="username">Address Of Organization</label>
                                <div class="position-relative input-custom-icon">
                                    <input type="text" class="form-control" id="" placeholder="Enter Address Of Organization" />
                                    <span class="bx bx-building"></span>
                                </div>
                            </div>
        
                            <div class="col-lg-6 mb-3">
                                <label class="form-label" for="username">Phone Number</label>
                                <div class="position-relative">
                                    <input type="number" class="form-control" id="phone" placeholder="Enter Phone Number" />
                                    <!-- <span class="bx bx-phone"></span> -->
                                </div>
                            </div>
                            
                            <div class="col-lg-6 mb-3">
                                <label class="form-label" for="username">Email Address</label>
                                <div class="position-relative input-custom-icon">
                                    <input type="email" class="form-control" id="" placeholder="Enter Address" />
                                    <span class="bx bx-envelope"></span>
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
                                <label class="form-label" for="username">Direct Call for Appointment Number</label>
                                <div class="position-relative">
                                    <input type="number" class="form-control" id="phone1" placeholder="Enter Direct Call for Appointment Number" />
                                    <!-- <span class="bx bx-phone"></span> -->
                                </div>
                            </div>

                           
                            
                            <div class="col-12 mb-3">
                                <div class="custom-textarea">
                                    <label class="form-label" for="username">Hospital Profile</label>
                                    <textarea class="form-control" id="ckeditor-classic" row="5"></textarea>
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <div class="custom-upload">
                                    <label for="uploadphotos" class="form-label">Hospital Images <span>(Allowed 3 Photos with Dim 750px X 750px)</span></label>
                                    <input class="form-control" type="file" id="upload_imgs" accept="image/jpg, image/jpeg" maxlength="3" multiple />
                                </div>
                                <div id="image_preview" class="row"></div>
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

<?php include('include/footer.php'); ?>
<script src="assets/js/ckeditor.js"></script>
<script src="assets/js/form-editor.init.js"></script>


<script>

const input = document.querySelector("#phone");
        window.intlTelInput(input, {
            
            initialCountry: "AE",
            strictMode: true,
            utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@21.0.4/build/js/utils.js",
        });

        const input1 = document.querySelector("#phone1");
        window.intlTelInput(input1, {
            
            initialCountry: "AE",
            strictMode: true,
            utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@21.0.4/build/js/utils.js",
        });
</script>