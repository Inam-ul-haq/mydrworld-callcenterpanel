<?php include('include/header.php'); ?>

<div class="card mb-5">
    <div class="position-relative">
        <div class="card-header card-header d-flex justify-content-between">
            <a href="add-agent.php" class="btn btn-primary w-auto ml-auto"> Add Agent</a>
        </div>
        <div class="card-body">
            <div class="table-wrap" id="tableDiv">
                <div class="table-responsive">
                    <table id="base-style" class="table table-striped table-bordered align-middle w-100">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Agent Name</th>
                                <th>Email ID</th>
                                <th>Phone Number</th>
                                <th>Emirates</th>
                                <th>Country</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>
                                    <div class="flex-shrink-0 me-3">
                                        <img class="rounded-circle avatar-sm" src="assets/images/agent.jpeg" alt="Generic placeholder image" /> Agent 1
                                    </div>
                                </td>
                                <td>example@example.com</td>
                                <td>+971-22553369</td>
                                <td>Dubai</td>
                                <td>UAE</td>
                                <td>
                                    <div class="form-check form-switch form-switch-lg mb-0" dir="ltr">
                                        <input type="checkbox" class="form-check-input" id="customSwitchsizelg" checked>
                                    </div>
                                </td>
                                <td>
                                    <div class="dropdown mt-4 mt-sm-0">
                                        <button class="btn btn-light btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bx bx-dots-horizontal-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item cancel-link" href="#!">Edit Details</a>
                                            <a class="dropdown-item complete-link" href="#!">Delete Details</a>
                                            <a class="dropdown-item complete-link" href="agent-appointments.php">View Appointments</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>
                                    <div class="flex-shrink-0 me-3">
                                        <img class="rounded-circle avatar-sm" src="assets/images/user-avatar.svg" alt="Generic placeholder image" /> Agent 2
                                    </div>
                                </td>
                                <td>example@example.com</td>
                                <td>+971-22553369</td>
                                <td>Dubai</td>
                                <td>UAE</td>
                                <td>
                                    <div class="form-check form-switch form-switch-lg mb-0" dir="ltr">
                                        <input type="checkbox" class="form-check-input" id="customSwitchsizelg" checked>
                                    </div>
                                </td>
                                <td>
                                    <div class="dropdown mt-4 mt-sm-0">
                                        <button class="btn btn-light btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bx bx-dots-horizontal-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item cancel-link" href="#!">Edit Details</a>
                                            <a class="dropdown-item complete-link" href="#!">Delete Details</a>
                                            <a class="dropdown-item complete-link" href="agent-appointments.php">View Appointments</a>
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