<?php include('include/header.php'); ?>

<!-- <style>
    #base-style_wrapper{
        min-height: 400px;
    }
</style> -->
<div class="position-relative mb-5">
<div class="card ">
        
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
                                <th>Hospital/Clinic Name/ Dental Care/ Home Care</th>
                                <th>Email ID</th>
                                <th>Phone Number</th>
                                <th>Qualification</th>
                                <th>Specialty</th>
                                <th>Special Interest</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>DR S.K SHETTY M.S</td>
                                <th>Boston Dental Center</th>
                                <td>sksetty46@gmail.com</td>
                                <td>+971-22553369</td>
                                <td>ORTHOPIDIC SURGERY, MBBS,M.S</td>
                                <td>Specialit ORTHOPIDIC SURGEON</td>
                                <td>Bones, Heart</td>
                                <td>
                                    <div class="dropdown mt-4 mt-sm-0">
                                        <button class="btn btn-light btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bx bx-dots-horizontal-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item complete-link" href="view-doctor.php">View Profile </a>
                                            <a class="dropdown-item cancel-link" href="#!">Edit Profile</a>
                                            <a class="dropdown-item complete-link" href="#!">Delete Profile</a>
                                            <a class="dropdown-item complete-link" href="doctor-appointment.php">View Appointments</a>
                                            <a class="dropdown-item complete-link" href="availability.php">Schedule Appointments slots</a>
                                            <a class="dropdown-item complete-link" href="temporary-unavailable.php">Marks temporary unavailability </a>
                                            <a class="dropdown-item complete-link" href="holiday.php">Mark Holiday Date </a>
                                            <a class="dropdown-item complete-link" href="instant-appointment.php">Mark Instant Appointment Date</a>
                                        </div>
                                    </div>
                                    <!-- <a class="btn btn-sm btn-icon btn-secondary text-white" href="view-doctor.php">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="#fff" width="24" height="24" viewBox="0 0 24 24" class="eva eva-eye-outline icon nav-icon">
                                            <g data-name="Layer 2">
                                                <g data-name="eye">
                                                    <rect width="24" height="24" opacity="0"></rect>
                                                    <path
                                                        d="M21.87 11.5c-.64-1.11-4.16-6.68-10.14-6.5-5.53.14-8.73 5-9.6 6.5a1 1 0 0 0 0 1c.63 1.09 4 6.5 9.89 6.5h.25c5.53-.14 8.74-5 9.6-6.5a1 1 0 0 0 0-1zM12.22 17c-4.31.1-7.12-3.59-8-5 1-1.61 3.61-4.9 7.61-5 4.29-.11 7.11 3.59 8 5-1.03 1.61-3.61 4.9-7.61 5z"
                                                    ></path>
                                                    <path d="M12 8.5a3.5 3.5 0 1 0 3.5 3.5A3.5 3.5 0 0 0 12 8.5zm0 5a1.5 1.5 0 1 1 1.5-1.5 1.5 1.5 0 0 1-1.5 1.5z"></path>
                                                </g>
                                            </g>
                                        </svg>
                                    </a> -->

                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>DR SHAMIM SALIM</td>
                                <th>Boston Dental Center</th>
                                <td>drshamim0206@gmail.com</td>
                                <td>+971-22553369</td>
                                <td>MBBS</td>
                                <td>General Practioner</td>
                                <td>dermatology  & VENEROLOGY</td>
                                <td>
                                    <div class="dropdown mt-4 mt-sm-0">
                                        <button class="btn btn-light btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bx bx-dots-horizontal-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item complete-link" href="view-doctor.php">View Profile </a>
                                            <a class="dropdown-item cancel-link" href="#!">Edit Profile</a>
                                            <a class="dropdown-item complete-link" href="#!">Delete Profile</a>
                                            <a class="dropdown-item complete-link" href="doctor-appointment.php">View Appointments</a>
                                            <a class="dropdown-item complete-link" href="availability.php">Schedule Appointments slots</a>
                                            <a class="dropdown-item complete-link" href="temporary-unavailable.php">Marks temporary unavailability </a>
                                            <a class="dropdown-item complete-link" href="holiday.php">Mark Holiday Date </a>
                                            <a class="dropdown-item complete-link" href="instant-appointment.php">Mark Instant Appointment Date</a>
                                        </div>
                                    </div>
                                    <!-- <a class="btn btn-sm btn-icon btn-secondary text-white" href="view-doctor.php">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="#fff" width="24" height="24" viewBox="0 0 24 24" class="eva eva-eye-outline icon nav-icon">
                                            <g data-name="Layer 2">
                                                <g data-name="eye">
                                                    <rect width="24" height="24" opacity="0"></rect>
                                                    <path
                                                        d="M21.87 11.5c-.64-1.11-4.16-6.68-10.14-6.5-5.53.14-8.73 5-9.6 6.5a1 1 0 0 0 0 1c.63 1.09 4 6.5 9.89 6.5h.25c5.53-.14 8.74-5 9.6-6.5a1 1 0 0 0 0-1zM12.22 17c-4.31.1-7.12-3.59-8-5 1-1.61 3.61-4.9 7.61-5 4.29-.11 7.11 3.59 8 5-1.03 1.61-3.61 4.9-7.61 5z"
                                                    ></path>
                                                    <path d="M12 8.5a3.5 3.5 0 1 0 3.5 3.5A3.5 3.5 0 0 0 12 8.5zm0 5a1.5 1.5 0 1 1 1.5-1.5 1.5 1.5 0 0 1-1.5 1.5z"></path>
                                                </g>
                                            </g>
                                        </svg>
                                    </a> -->
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Dr. Heba Aboushady</td>
                                <th>Boston Dental Center</th>
                                <td>info@bostondentaluae.com</td>
                                <td>+971-22553369</td>
                                <td>ORTHOPIDIC SURGERY, MBBS,M.S</td>
                                <td>General Dentist</td>
                                <td>
                                Dr. Aboushady is General Dentist and her clinical expertise includes all aspects of general and cosmetic dentistry. She specializes in smile design, cosmetic dentistry, porcelain and composite veneers and lumineers, fillings, root canal treatment, gum treatment, crowns and bridges, removable aesthetic dentures.<br>She has extensive experience in dealing with children, patients with pain, dental-phobic patients using nitrous oxide gas (laughing gas) and medically compromised patients.
                                </td>
                                <td>
                                    <div class="dropdown mt-4 mt-sm-0">
                                        <button class="btn btn-light btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bx bx-dots-horizontal-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item complete-link" href="view-doctor.php">View Profile </a>
                                            <a class="dropdown-item cancel-link" href="#!">Edit Profile</a>
                                            <a class="dropdown-item complete-link" href="#!">Delete Profile</a>
                                            <a class="dropdown-item complete-link" href="doctor-appointment.php">View Appointments</a>
                                            <a class="dropdown-item complete-link" href="availability.php">Schedule Appointments slots</a>
                                            <a class="dropdown-item complete-link" href="temporary-unavailable.php">Marks temporary unavailability </a>
                                            <a class="dropdown-item complete-link" href="holiday.php">Mark Holiday Date </a>
                                            <a class="dropdown-item complete-link" href="instant-appointment.php">Mark Instant Appointment Date</a>
                                        </div>
                                    </div>
                                    <!-- <a class="btn btn-sm btn-icon btn-secondary text-white" href="view-doctor.php">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="#fff" width="24" height="24" viewBox="0 0 24 24" class="eva eva-eye-outline icon nav-icon">
                                            <g data-name="Layer 2">
                                                <g data-name="eye">
                                                    <rect width="24" height="24" opacity="0"></rect>
                                                    <path
                                                        d="M21.87 11.5c-.64-1.11-4.16-6.68-10.14-6.5-5.53.14-8.73 5-9.6 6.5a1 1 0 0 0 0 1c.63 1.09 4 6.5 9.89 6.5h.25c5.53-.14 8.74-5 9.6-6.5a1 1 0 0 0 0-1zM12.22 17c-4.31.1-7.12-3.59-8-5 1-1.61 3.61-4.9 7.61-5 4.29-.11 7.11 3.59 8 5-1.03 1.61-3.61 4.9-7.61 5z"
                                                    ></path>
                                                    <path d="M12 8.5a3.5 3.5 0 1 0 3.5 3.5A3.5 3.5 0 0 0 12 8.5zm0 5a1.5 1.5 0 1 1 1.5-1.5 1.5 1.5 0 0 1-1.5 1.5z"></path>
                                                </g>
                                            </g>
                                        </svg>
                                    </a> -->
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
