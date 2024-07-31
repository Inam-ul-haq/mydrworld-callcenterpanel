<?php include('include/header.php'); ?>
<div class="position-relative mb-5">
    <div class="card">
        <div class="p-4 pt-5">
            <form action="dashboard.php" class="registerform">
                <div class="row">
                    <div class="col-lg-6 mb-3">
                        <label class="form-label" for="username">Clinic Name</label>
                        <div class="position-relative input-custom-icon">
                            <input type="text" class="form-control" id="" placeholder="Clinic Name" />
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
                            <label class="form-label" for="username">Clinic Profile</label>
                            <textarea class="form-control" id="ckeditor-classic" row="5"></textarea>
                        </div>
                    </div>
                    <div class="col-12 mb-3">
                        <div class="custom-upload">
                            <label for="uploadphotos" class="form-label">Clinic Images <span>(Allowed 3 Photos with Dim 750px X 750px)</span></label>
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
</div>

<?php include('include/footer.php'); ?>

<script>
    $(document).ready(function () {
        var fileArr = [];
        $("#upload_imgs").change(function () {
            // check if fileArr length is greater than 0
            if (fileArr.length > 0) fileArr = [];

            $("#image_preview").html("");
            var total_file = document.getElementById("upload_imgs").files;
            if (!total_file.length) return;
            for (var i = 0; i < total_file.length; i++) {
                if (total_file[i].size > 1048576) {
                    return false;
                } else {
                    fileArr.push(total_file[i]);
                    $("#image_preview").append(
                        "<div class='img-div col-lg-4 col-md-6 mb-3 mt-2' id='img-div" +
                            i +
                            "'><img src='" +
                            URL.createObjectURL(event.target.files[i]) +
                            "' class='img-fluid w-100' title='" +
                            total_file[i].name +
                            "'><div class='middle'><button id='action-icon' value='img-div" +
                            i +
                            "' class='btn btn-danger btn-icon' role='" +
                            total_file[i].name +
                            "'><i class='fa fa-trash'></i></button></div></div>"
                    );
                }
            }
        });

        $("body").on("click", "#action-icon", function (evt) {
            var divName = this.value;
            var fileName = $(this).attr("role");
            $(`#${divName}`).remove();

            for (var i = 0; i < fileArr.length; i++) {
                if (fileArr[i].name === fileName) {
                    fileArr.splice(i, 1);
                }
            }
            document.getElementById("images").files = FileListItem(fileArr);
            evt.preventDefault();
        });

        function FileListItem(file) {
            file = [].slice.call(Array.isArray(file) ? file : arguments);
            for (var c, b = (c = file.length), d = !0; b-- && d; ) d = file[b] instanceof File;
            if (!d) throw new TypeError("expected argument to FileList is File or array of File objects");
            for (b = new ClipboardEvent("").clipboardData || new DataTransfer(); c--; ) b.items.add(file[c]);
            return b.files;
        }
    });

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
