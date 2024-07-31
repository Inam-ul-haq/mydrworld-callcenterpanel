<?php include('include/header.php'); ?>

<div class="position-relative mb-5">
    <div class="card">
        <div class="card-body">
            <form action="">
                <div class="row">

                    <div class="row">
                        
                        <div class="col-lg-6 mb-3">
                            <label class="form-label" for="">Hospital Name</label>
                            <div class="position-relative input-custom-icon">
                                <input type="text" class="form-control" id="" placeholder="Enter Hospital Name" value="Aster Hospital" disabled />
                                <span class="bx bx-building"></span>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <label class="form-label" for="">Department Name</label>
                            <div class="position-relative input-custom-icon">
                                <input type="text" class="form-control" id="" placeholder="Enter Department Name" />
                                <span class="bx bx-user"></span>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <label class="form-label" for="">Department Manager</label>
                            <div class="position-relative input-custom-icon">
                                <input type="text" class="form-control" id="" placeholder="Enter Department Manager" />
                                <span class="bx bx-user-circle"></span>
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
                            <label class="form-label" for="">Email</label>
                            <div class="position-relative input-custom-icon">
                                <input type="email" class="form-control" id="" placeholder="Enter Email" />
                                <span class="bx bx-envelope"></span>
                            </div>
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
