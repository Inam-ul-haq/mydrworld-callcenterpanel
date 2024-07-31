<?php include('include/header.php'); ?>
<div class="position-relative mb-5">
<div class="card ">

        <div class="card-header d-flex justify-content-between">
            <a href="hospital-edit.php" class="btn btn-primary w-auto ml-auto"> Add Hospital</a>
        </div>
        <div class="card-body">
            <div class="table-wrap" id="tableDiv">
                <div class="table-responsive">
                    <table id="base-style" class="table table-striped table-bordered align-middle w-100">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Hospital Name</th>
                                <th>Email ID</th>
                                <th>Phone Number</th>
                                <th>Emirates</th>
                                <th>Country</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>
                                    Aster Hospital
                                </td>
                                <td>info@asterhospital.com</td>
                                <td>+971 26667070</td>
                                <td>Dubai</td>
                                <td>UAE</td>
                                <td>
                                    <!-- <a class="btn btn-sm btn-icon btn-secondary text-white" href="view-hospital.php">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="#fff" width="24" height="24" viewBox="0 0 24 24" class="eva eva-eye-outline icon nav-icon"><g data-name="Layer 2"><g data-name="eye"><rect width="24" height="24" opacity="0"></rect><path d="M21.87 11.5c-.64-1.11-4.16-6.68-10.14-6.5-5.53.14-8.73 5-9.6 6.5a1 1 0 0 0 0 1c.63 1.09 4 6.5 9.89 6.5h.25c5.53-.14 8.74-5 9.6-6.5a1 1 0 0 0 0-1zM12.22 17c-4.31.1-7.12-3.59-8-5 1-1.61 3.61-4.9 7.61-5 4.29-.11 7.11 3.59 8 5-1.03 1.61-3.61 4.9-7.61 5z"></path><path d="M12 8.5a3.5 3.5 0 1 0 3.5 3.5A3.5 3.5 0 0 0 12 8.5zm0 5a1.5 1.5 0 1 1 1.5-1.5 1.5 1.5 0 0 1-1.5 1.5z"></path></g></g></svg>
                                    </a> -->
                                    <div class="dropdown mt-4 mt-sm-0">
                                        <button class="btn btn-light btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bx bx-dots-horizontal-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item complete-link" href="view-hospital.php">View Profile </a>
                                            <a class="dropdown-item cancel-link" href="hospital-edit.php">Edit Profile</a>
                                            <a class="dropdown-item complete-link" href="#!">Delete Profile</a>
                                            <a class="dropdown-item complete-link" href="hospital-insurance.php">View Insurances</a>
                                            <a class="dropdown-item complete-link" href="hospital-locations.php">View Location</a>
                                            <a class="dropdown-item complete-link" href="department.php">View Department</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>
                                    Seha Emirates Hospital
                                </td>
                                <td>info@asterhospital.com</td>
                                <td>+971 26667070</td>
                                <td>Dubai</td>
                                <td>UAE</td>
                                <td>
                                    <!-- <a class="btn btn-sm btn-icon btn-secondary text-white" href="view-hospital.php">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="#fff" width="24" height="24" viewBox="0 0 24 24" class="eva eva-eye-outline icon nav-icon"><g data-name="Layer 2"><g data-name="eye"><rect width="24" height="24" opacity="0"></rect><path d="M21.87 11.5c-.64-1.11-4.16-6.68-10.14-6.5-5.53.14-8.73 5-9.6 6.5a1 1 0 0 0 0 1c.63 1.09 4 6.5 9.89 6.5h.25c5.53-.14 8.74-5 9.6-6.5a1 1 0 0 0 0-1zM12.22 17c-4.31.1-7.12-3.59-8-5 1-1.61 3.61-4.9 7.61-5 4.29-.11 7.11 3.59 8 5-1.03 1.61-3.61 4.9-7.61 5z"></path><path d="M12 8.5a3.5 3.5 0 1 0 3.5 3.5A3.5 3.5 0 0 0 12 8.5zm0 5a1.5 1.5 0 1 1 1.5-1.5 1.5 1.5 0 0 1-1.5 1.5z"></path></g></g></svg>
                                    </a> -->
                                    <div class="dropdown mt-4 mt-sm-0">
                                        <button class="btn btn-light btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bx bx-dots-horizontal-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item complete-link" href="view-hospital.php">View Profile </a>
                                            <a class="dropdown-item cancel-link" href="hospital-edit.php">Edit Profile</a>
                                            <a class="dropdown-item complete-link" href="#!">Delete Profile</a>
                                            <a class="dropdown-item complete-link" href="hospital-insurance.php">View Insurances</a>
                                            <a class="dropdown-item complete-link" href="hospital-locations.php">View Location</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>
                                    HMS Al Garhoud Hospital
                                </td>
                                <td>info@asterhospital.com</td>
                                <td>+971 26667070</td>
                                <td>Dubai</td>
                                <td>UAE</td>
                                <td>
                                    <!-- <a class="btn btn-sm btn-icon btn-secondary text-white" href="view-hospital.php">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="#fff" width="24" height="24" viewBox="0 0 24 24" class="eva eva-eye-outline icon nav-icon"><g data-name="Layer 2"><g data-name="eye"><rect width="24" height="24" opacity="0"></rect><path d="M21.87 11.5c-.64-1.11-4.16-6.68-10.14-6.5-5.53.14-8.73 5-9.6 6.5a1 1 0 0 0 0 1c.63 1.09 4 6.5 9.89 6.5h.25c5.53-.14 8.74-5 9.6-6.5a1 1 0 0 0 0-1zM12.22 17c-4.31.1-7.12-3.59-8-5 1-1.61 3.61-4.9 7.61-5 4.29-.11 7.11 3.59 8 5-1.03 1.61-3.61 4.9-7.61 5z"></path><path d="M12 8.5a3.5 3.5 0 1 0 3.5 3.5A3.5 3.5 0 0 0 12 8.5zm0 5a1.5 1.5 0 1 1 1.5-1.5 1.5 1.5 0 0 1-1.5 1.5z"></path></g></g></svg>
                                    </a> -->
                                    <div class="dropdown mt-4 mt-sm-0">
                                        <button class="btn btn-light btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bx bx-dots-horizontal-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item complete-link" href="view-hospital.php">View Profile </a>
                                            <a class="dropdown-item cancel-link" href="hospital-edit.php">Edit Profile</a>
                                            <a class="dropdown-item complete-link" href="#!">Delete Profile</a>
                                            <a class="dropdown-item complete-link" href="hospital-insurance.php">View Insurances</a>
                                            <a class="dropdown-item complete-link" href="hospital-locations.php">View Location</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>
                                    International Modern Hospital
                                </td>
                                <td>info@asterhospital.com</td>
                                <td>+971 26667070</td>
                                <td>Dubai</td>
                                <td>UAE</td>
                                <td>
                                    <!-- <a class="btn btn-sm btn-icon btn-secondary text-white" href="view-hospital.php">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="#fff" width="24" height="24" viewBox="0 0 24 24" class="eva eva-eye-outline icon nav-icon"><g data-name="Layer 2"><g data-name="eye"><rect width="24" height="24" opacity="0"></rect><path d="M21.87 11.5c-.64-1.11-4.16-6.68-10.14-6.5-5.53.14-8.73 5-9.6 6.5a1 1 0 0 0 0 1c.63 1.09 4 6.5 9.89 6.5h.25c5.53-.14 8.74-5 9.6-6.5a1 1 0 0 0 0-1zM12.22 17c-4.31.1-7.12-3.59-8-5 1-1.61 3.61-4.9 7.61-5 4.29-.11 7.11 3.59 8 5-1.03 1.61-3.61 4.9-7.61 5z"></path><path d="M12 8.5a3.5 3.5 0 1 0 3.5 3.5A3.5 3.5 0 0 0 12 8.5zm0 5a1.5 1.5 0 1 1 1.5-1.5 1.5 1.5 0 0 1-1.5 1.5z"></path></g></g></svg>
                                    </a> -->
                                    <div class="dropdown mt-4 mt-sm-0">
                                        <button class="btn btn-light btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bx bx-dots-horizontal-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item complete-link" href="view-hospital.php">View Profile </a>
                                            <a class="dropdown-item cancel-link" href="hospital-edit.php">Edit Profile</a>
                                            <a class="dropdown-item complete-link" href="#!">Delete Profile</a>
                                            <a class="dropdown-item complete-link" href="hospital-insurance.php">View Insurances</a>
                                            <a class="dropdown-item complete-link" href="hospital-locations.php">View Location</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('include/footer.php'); ?>
<script>
    $("#base-style").DataTable();
</script>