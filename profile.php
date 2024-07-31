<?php include('include/header.php'); ?>

<div class="position-relative mb-5">
    <div class="d-lg-flex">
        <div class="chat-leftsidebar card mb-5">
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
                        <!-- <div class="">
                                                    <div class="status"></div>
                                                </div> -->
                    </div>
                    <h5 class="font-size-16 mb-1 mt-3"><a href="#" class="text-reset">Aladin Call Centre </a></h5>
                    <p class="text-muted mb-0">Downtown, Dubai</p>
                </div>
            </div>

            <div class="mail-list">
                <a href="profile.php" class="active bg-primary-subtle">
                    <div class="d-flex align-items-center">
                        <i class="bx bx-user-circle font-size-20 align-middle me-3"></i>
                        <div class="flex-grow-1">
                            <h5 class="font-size-14 mb-0">Our Profile</h5>
                        </div>
                    </div>
                </a>
                <a href="profile-edit.php" class="border-bottom">
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
                <div class="text-center bg-light rounded px-4 py-3">
                    <div class="chat-user-status">
                        <img src="assets/images/clinic-logo.png" class="avatar-md rounded-circle" alt="" />
                        <!-- <div class="">
                                                    <div class="status"></div>
                                                </div> -->
                    </div>
                    <h5 class="font-size-16 mb-1 mt-3"><a href="#" class="text-reset">Aladin Call Centre </a></h5>
                </div>

                <div class="p-4 pt-0">
                    <div class="table-responsive mt-3 pb-3">
                        <table class="table align-middle table-sm table-nowrap table-borderless table-centered mb-0">
                            <tbody>
                                <tr>
                                    <td class="text-muted">Email Address :</td>
                                    <th class="fw-bold">example@example.com</th>
                                </tr>
                                <!-- end tr -->
                                <tr>
                                    <td class="text-muted">Phone Number :</td>
                                    <th class="fw-bold">+971 55669855680</th>
                                </tr>
                                <!-- end tr -->
                                <tr>
                                    <td class="text-muted">Website :</td>
                                    <th class="fw-bold">www.example.com</th>
                                </tr>
                                <!-- end tr -->
                                <tr>
                                    <td class="text-muted">Emirates :</td>
                                    <th class="fw-bold">Dubai</th>
                                </tr>
                                <!-- end tr -->

                                <tr>
                                    <td class="text-muted">Country :</td>
                                    <th class="fw-bold">UAE</th>
                                </tr>
                                <!-- end tr -->

                                <tr>
                                    <td class="text-muted">City :</td>
                                    <th class="fw-bold">Dubai</th>
                                </tr>
                                <tr>
                                    <td class="text-muted">Area :</td>
                                    <th class="fw-bold">Business Bay</th>
                                </tr>
                                <tr>
                                    <td class="text-muted">Address Of Organization :</td>
                                    <th class="fw-bold">Downtown, Dubai</th>
                                </tr>
                                <!-- <tr>
                                    <td class="text-muted">Locations</td>
                                    <th class="fw-bold">1. Down Town <br> 2. Business Bay</th>
                                </tr> -->
                                <!-- end tr -->
                            </tbody>
                            <!-- end tbody -->
                        </table>
                    </div>
                </div>
            </div>

            <div class="p-3 mt-3">
                <div class="row text-center">
                    <div class="col-6 border-end">
                        <div class="p-1">
                            <h5 class="mb-1">1,269</h5>
                            <p class="text-muted mb-0">Agents</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="p-1">
                            <h5 class="mb-1">5.2k</h5>
                            <p class="text-muted mb-0">Appointments</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- <div class="card mt-4">
                <div class="card-body">

                    <h5 class="font-size-24 mb-3">Description</h5>
                    <div class="mt-3">
                        <p class="text-muted">
                            Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at
                            Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the
                            undoubtable source. <br />
                            Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular
                            during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
                        </p>
                    </div>

                    <h5 class="font-size-24">Services :</h5>
                    <div class="row mb-3">
                        <div class="col-12">
                            <ul class="list-unstyled mb-0 pt-1">
                                <li class="py-1"><i class="mdi mdi-circle-medium me-1 text-success align-middle"></i>Donec vitae libero venenatis faucibus</li>
                                <li class="py-1"><i class="mdi mdi-circle-medium me-1 text-success align-middle"></i>Quisque rutrum aenean imperdiet</li>
                                <li class="py-1"><i class="mdi mdi-circle-medium me-1 text-success align-middle"></i>Integer ante a consectetuer eget</li>
                            </ul>
                        </div>
                    </div>

                    <h5 class="font-size-24">Specialties :</h5>
                    <div class="row mb-3">
                        <div class="col-12">
                            <ul class="list-unstyled mb-0 pt-1">
                                <li class="py-1"><i class="mdi mdi-circle-medium me-1 text-success align-middle"></i>Donec vitae libero venenatis faucibus</li>
                                <li class="py-1"><i class="mdi mdi-circle-medium me-1 text-success align-middle"></i>Quisque rutrum aenean imperdiet</li>
                                <li class="py-1"><i class="mdi mdi-circle-medium me-1 text-success align-middle"></i>Integer ante a consectetuer eget</li>
                            </ul>
                        </div>
                    </div>

                    <h5 class="font-size-24">Locations :</h5>
                    <div class="row mb-3">
                        <div class="col-12">
                            <ul class="list-unstyled mb-0 pt-1">
                                <li class="py-1"><i class="mdi mdi-circle-medium me-1 text-success align-middle"></i>Donec vitae libero venenatis faucibus</li>
                                <li class="py-1"><i class="mdi mdi-circle-medium me-1 text-success align-middle"></i>Quisque rutrum aenean imperdiet</li>
                                <li class="py-1"><i class="mdi mdi-circle-medium me-1 text-success align-middle"></i>Integer ante a consectetuer eget</li>
                            </ul>
                        </div>
                    </div>
                    <h5 class="font-size-24">Photos :</h5>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 mb-3">
                            <img src="assets/images/hospital1.webp" class="img-fluid rounded object-fit-cover w-100 h-100" alt="">
                        </div>
                        <div class="col-lg-4 col-md-6 mb-3">
                            <img src="assets/images/hospital2.jpg" class="img-fluid rounded object-fit-cover w-100 h-100" alt="">
                        </div>
                        <div class="col-lg-4 col-md-6 mb-3">
                            <img src="assets/images/hospital3.jpg" class="img-fluid rounded object-fit-cover w-100 h-100" alt="">
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
        <!-- end user chat -->
    </div>
    <!-- End d-lg-flex  -->
</div>

<?php include('include/footer.php'); ?>
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