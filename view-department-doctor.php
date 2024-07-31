<?php include('include/header.php'); ?>

<!-- <style>
    #base-style_wrapper{
        min-height: 400px;
    }
</style> -->
<div class="position-relative mb-5">
<div class="card mb-5">

        <div class="card-header card-header d-flex justify-content-between">
            <a href="add-doctor.php" class="btn btn-primary w-auto ml-auto"> Add Doctor</a>
        </div>
        <div class="card-body">
            <div class="table-wrap" id="tableDiv">
                <div class="table-responsive">
                    <table id="base-style" class="table table-striped table-bordered align-middle w-100">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Doctor Name</th>
                                <th>Hospital Name</th>
                                <th>Email ID</th>
                                <th>Phone Number</th>
                                <th>Qualification</th>
                                <th>Department</th>
                                <th>Specialty</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>DR S.K SHETTY M.S</td>
                                <td>
                                    Aster Hospital
                                </td>
                                <td>sksetty46@gmail.com</td>
                                <td>+971-22553369</td>
                                <td>ORTHOPIDIC SURGERY, MBBS,M.S</td>
                                <td>Cardiology</td>
                                <td>Specialit ORTHOPIDIC SURGEON</td>
                                <td>
                                    <div class="dropdown mt-4 mt-sm-0">
                                        <button class="btn btn-light btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bx bx-dots-horizontal-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item cancel-link" href="#!">Edit Doctor Profile</a>
                                            <a class="dropdown-item complete-link" href="#!">Delete Doctor Profile</a>
                                            <a class="dropdown-item complete-link" href="view-doctor.php">View Doctor Profile</a>
                                            <a class="dropdown-item complete-link" href="doctor-appointment.php">Doctors Appointment</a>
                                            <a class="dropdown-item complete-link" href="availability.php">Schedule Appointment Slots</a>
                                            <a class="dropdown-item complete-link" href="holiday.php">Holiday</a>
                                            <a class="dropdown-item complete-link" href="temporary-unavailable.php">Temporary Unavailable</a>
                                            <a class="dropdown-item complete-link" href="instant-appointment.php">Schedule Instant Appointment Date</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>DR SHAMIM SALIM</td>
                                <td>
                                    Aster Hospital
                                </td>
                                <td>drshamim0206@gmail.com</td>
                                <td>+971-22553369</td>
                                <td>MBBS</td>
                                <td>Cardiology</td>
                                <td>General Practioner</td>
                                
                                <td>
                                    <div class="dropdown mt-4 mt-sm-0">
                                        <button class="btn btn-light btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bx bx-dots-horizontal-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item cancel-link" href="#!">Edit Doctor Profile</a>
                                            <a class="dropdown-item complete-link" href="#!">Delete Doctor Profile</a>
                                            <a class="dropdown-item complete-link" href="view-doctor.php">View Doctor Profile</a>
                                            <a class="dropdown-item complete-link" href="doctor-appointment.php">Doctors Appointment</a>
                                            <a class="dropdown-item complete-link" href="availability.php">Schedule Appointment Slots</a>
                                            <a class="dropdown-item complete-link" href="holiday.php">Holiday</a>
                                            <a class="dropdown-item complete-link" href="temporary-unavailable.php">Temporary Unavailable</a>
                                            <a class="dropdown-item complete-link" href="instant-appointment.php">Schedule Instant Appointment Date</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Dr. Heba Aboushady</td>
                                <td>
                                    Aster Hospital
                                </td>
                                <td>info@bostondentaluae.com</td>
                                <td>+971-22553369</td>
                                <td>
                                    General Dentist / Australian Board Certified.(Holds a Bachelor of Dental Medicine and oral surgery from Cairo University (Egypt) since 1993. <br />
                                    Member of the Australian Board and Australian Dental Association (ADA). <br />
                                    Attended multiple lectures and seminars).
                                </td>
                                <td>Cardiology</td>
                                <td>General Dentist</td>
                                
                                <td>
                                    <div class="dropdown mt-4 mt-sm-0">
                                        <button class="btn btn-light btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bx bx-dots-horizontal-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item cancel-link" href="#!">Edit Doctor Profile</a>
                                            <a class="dropdown-item complete-link" href="#!">Delete Doctor Profile</a>
                                            <a class="dropdown-item complete-link" href="view-doctor.php">View Doctor Profile</a>
                                            <a class="dropdown-item complete-link" href="doctor-appointment.php">Doctors Appointment</a>
                                            <a class="dropdown-item complete-link" href="availability.php">Schedule Appointment Slots</a>
                                            <a class="dropdown-item complete-link" href="holiday.php">Holiday</a>
                                            <a class="dropdown-item complete-link" href="temporary-unavailable.php">Temporary Unavailable</a>
                                            <a class="dropdown-item complete-link" href="instant-appointment.php">Schedule Instant Appointment Date</a>
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
