<?php include('include/header.php'); ?>

<!-- <style>
    #base-style_wrapper{
        min-height: 400px;
    }
</style> -->

<div class="card mb-5">
    <div class="position-relative">
        <div class="card-header card-header d-flex justify-content-between">
            <a href="add-department.php" class="btn btn-primary w-auto ml-auto"> Add Department</a>
        </div>
        <div class="card-body">
            <div class="table-wrap" id="tableDiv">
                <div class="table-responsive">
                    <table id="base-style" class="table table-striped table-bordered align-middle w-100">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Department Name</th>
                                <th>Hospital Name</th>
                                <th>Department Manager</th>
                                <th>Email</th>
                                <th>Phone Number</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Anesthetics</td>
                                <td>
                                    Aster Hospital
                                </td>
                                <td>John</td>
                                <td>anesthetics@asterhospitals.com</td>
                                <td>+971 593684841</td>
                                <td>
                                    <div class="dropdown mt-4 mt-sm-0">
                                        <button class="btn btn-light btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bx bx-dots-horizontal-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item cancel-link" href="#!">Edit Department</a>
                                            <a class="dropdown-item complete-link" href="#!">Delete Department</a>
                                            <a class="dropdown-item complete-link" href="add-doctor.php">Add Doctor</a>
                                            <a class="dropdown-item complete-link" href="view-department-doctor.php">View Doctor</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Anesthetics</td>
                                <td>
                                    Aster Hospital
                                </td>
                                <td>John</td>
                                <td>anesthetics@asterhospitals.com</td>
                                <td>+971 593684841</td>
                                <td>
                                    <div class="dropdown mt-4 mt-sm-0">
                                        <button class="btn btn-light btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bx bx-dots-horizontal-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item cancel-link" href="#!">Edit Department</a>
                                            <a class="dropdown-item complete-link" href="#!">Delete Department</a>
                                            <a class="dropdown-item complete-link" href="add-doctor.php">Add Doctor</a>
                                            <a class="dropdown-item complete-link" href="view-department-doctor.php">View Doctor</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Anesthetics</td>
                                <td>
                                    Aster Hospital
                                </td>
                                <td>John</td>
                                <td>anesthetics@asterhospitals.com</td>
                                <td>+971 593684841</td>
                                <td>
                                    <div class="dropdown mt-4 mt-sm-0">
                                        <button class="btn btn-light btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bx bx-dots-horizontal-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item cancel-link" href="#!">Edit Department</a>
                                            <a class="dropdown-item complete-link" href="#!">Delete Department</a>
                                            <a class="dropdown-item complete-link" href="add-doctor.php">Add Doctor</a>
                                            <a class="dropdown-item complete-link" href="view-department-doctor.php">View Doctor</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Anesthetics</td>
                                <td>
                                    Aster Hospital
                                </td>
                                <td>John</td>
                                <td>anesthetics@asterhospitals.com</td>
                                <td>+971 593684841</td>
                                <td>
                                    <div class="dropdown mt-4 mt-sm-0">
                                        <button class="btn btn-light btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bx bx-dots-horizontal-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item cancel-link" href="#!">Edit Department</a>
                                            <a class="dropdown-item complete-link" href="#!">Delete Department</a>
                                            <a class="dropdown-item complete-link" href="add-doctor.php">Add Doctor</a>
                                            <a class="dropdown-item complete-link" href="view-department-doctor.php">View Doctor</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Anesthetics</td>
                                <td>
                                    Aster Hospital
                                </td>
                                <td>John</td>
                                <td>anesthetics@asterhospitals.com</td>
                                <td>+971 593684841</td>
                                <td>
                                    <div class="dropdown mt-4 mt-sm-0">
                                        <button class="btn btn-light btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bx bx-dots-horizontal-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item cancel-link" href="#!">Edit Department</a>
                                            <a class="dropdown-item complete-link" href="#!">Delete Department</a>
                                            <a class="dropdown-item complete-link" href="add-doctor.php">Add Doctor</a>
                                            <a class="dropdown-item complete-link" href="view-department-doctor.php">View Doctor</a>
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
<!-- End Page-content -->

<?php include('include/footer.php'); ?>

<script>
    $("#base-style").DataTable();
</script>
