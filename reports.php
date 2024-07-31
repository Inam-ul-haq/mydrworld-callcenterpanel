<?php include('include/header.php'); ?>

<div class="card">
    <div class="card-body">
        <div class="position-relative">
            <div class="row align-items-end">
                <div class="col-lg-3 col-md-6 mb-3">
                    <label class="form-label" for="username">From</label>
                    <div class="position-relative input-custom-icon">
                        <input type="text" class="form-control flatpicker-input" id="" placeholder="From" />
                        <span class="bx bx-calendar-event"></span>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-3">
                    <label class="form-label" for="username">To</label>
                    <div class="position-relative input-custom-icon">
                        <input type="text" class="form-control flatpicker-input" id="" placeholder="To" />
                        <span class="bx bx-calendar-event"></span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-3">
                    <label class="form-label" for="username">Select Type</label>
                    <div class="position-relative select-custom-icon">
                        <select name="" id="" class="select2-single" data-placeholder="Select Type">
                            <option></option>
                            <option value="1">Pending</option>
                            <option value="2">Confirmed</option>
                            <option value="3">Cancelled</option>
                            <option value="4">Re Scheduled</option>
                            <option value="5">Completed</option>
                        </select>
                        <i class="bx bx-calendar-event"></i>
                        
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-3">
                    <label class="form-label" for="username">Select Agent</label>
                    <div class="position-relative select-custom-icon">
                        <select name="" id="" class="select2-single" data-placeholder="Select Agent">
                            <option></option>
                            <option value="1">Agent 1</option>
                            <option value="2">Agent 2</option>
                        </select>
                        <i class="fi fi-rr-user-md icon d-flex"></i>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="mt-3 mt-md-0 mb-3 d-flex gap-2">
                        <button type="button" class="btn btn-primary">Search</button>
                        <button type="button" class="btn btn-sm btn-icon btn-dark text-white"><i class="mdi mdi-file-excel"></i></button>

                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="table-responsive">
                 <table id="base-style" class="table table-striped table-bordered  align-middle">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Booking Id</th>
                        <th>Patient Name</th>
                        <th>Age</th>
                        <th>Agent</th>
                        <th>Booking Status</th>
                        <th>Booking Date</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>#MYDW1025</td>
                        <td>John Doe</td>
                        <td>24</td>
                        <td>Agent 1</td>
                        <td><span class="badge pending-bg">Pending</span></td>
                        <td>08-04-2024</td>
                        <td>
                          <a class="btn btn-sm btn-icon btn-secondary text-white" href="appointment-details.php">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="#fff" width="24" height="24" viewBox="0 0 24 24" class="eva eva-eye-outline icon nav-icon"><g data-name="Layer 2"><g data-name="eye"><rect width="24" height="24" opacity="0"></rect><path d="M21.87 11.5c-.64-1.11-4.16-6.68-10.14-6.5-5.53.14-8.73 5-9.6 6.5a1 1 0 0 0 0 1c.63 1.09 4 6.5 9.89 6.5h.25c5.53-.14 8.74-5 9.6-6.5a1 1 0 0 0 0-1zM12.22 17c-4.31.1-7.12-3.59-8-5 1-1.61 3.61-4.9 7.61-5 4.29-.11 7.11 3.59 8 5-1.03 1.61-3.61 4.9-7.61 5z"></path><path d="M12 8.5a3.5 3.5 0 1 0 3.5 3.5A3.5 3.5 0 0 0 12 8.5zm0 5a1.5 1.5 0 1 1 1.5-1.5 1.5 1.5 0 0 1-1.5 1.5z"></path></g></g></svg>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>#MYDW1026</td>
                        <td>John Doe</td>
                        <td>24</td>
                        <td>Agent 2</td>
                        <td><span class="badge confirmed-bg">Confirmed</span></td>
                        <td>08-04-2024</td>
                        <td>
                          <a class="btn btn-sm btn-icon btn-secondary text-white" href="appointment-details.php">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="#fff" width="24" height="24" viewBox="0 0 24 24" class="eva eva-eye-outline icon nav-icon"><g data-name="Layer 2"><g data-name="eye"><rect width="24" height="24" opacity="0"></rect><path d="M21.87 11.5c-.64-1.11-4.16-6.68-10.14-6.5-5.53.14-8.73 5-9.6 6.5a1 1 0 0 0 0 1c.63 1.09 4 6.5 9.89 6.5h.25c5.53-.14 8.74-5 9.6-6.5a1 1 0 0 0 0-1zM12.22 17c-4.31.1-7.12-3.59-8-5 1-1.61 3.61-4.9 7.61-5 4.29-.11 7.11 3.59 8 5-1.03 1.61-3.61 4.9-7.61 5z"></path><path d="M12 8.5a3.5 3.5 0 1 0 3.5 3.5A3.5 3.5 0 0 0 12 8.5zm0 5a1.5 1.5 0 1 1 1.5-1.5 1.5 1.5 0 0 1-1.5 1.5z"></path></g></g></svg>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>#MYDW1027</td>
                        <td>John Doe</td>
                        <td>24</td>
                        <td>Agent 2</td>
                        <td><span class="badge success-bg">Completed</span></td>
                        <td>08-04-2024</td>
                        <td>
                          <a class="btn btn-sm btn-icon btn-secondary text-white" href="appointment-details.php">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="#fff" width="24" height="24" viewBox="0 0 24 24" class="eva eva-eye-outline icon nav-icon"><g data-name="Layer 2"><g data-name="eye"><rect width="24" height="24" opacity="0"></rect><path d="M21.87 11.5c-.64-1.11-4.16-6.68-10.14-6.5-5.53.14-8.73 5-9.6 6.5a1 1 0 0 0 0 1c.63 1.09 4 6.5 9.89 6.5h.25c5.53-.14 8.74-5 9.6-6.5a1 1 0 0 0 0-1zM12.22 17c-4.31.1-7.12-3.59-8-5 1-1.61 3.61-4.9 7.61-5 4.29-.11 7.11 3.59 8 5-1.03 1.61-3.61 4.9-7.61 5z"></path><path d="M12 8.5a3.5 3.5 0 1 0 3.5 3.5A3.5 3.5 0 0 0 12 8.5zm0 5a1.5 1.5 0 1 1 1.5-1.5 1.5 1.5 0 0 1-1.5 1.5z"></path></g></g></svg>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>#MYDW1028</td>
                        <td>John Doe</td>
                        <td>24</td>
                        <td>Agent 1</td>
                        <td><span class="badge cancelled-bg">Cancelled</span></td>
                        <td>08-04-2024</td>
                        <td>
                          <a class="btn btn-sm btn-icon btn-secondary text-white" href="appointment-details.php">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="#fff" width="24" height="24" viewBox="0 0 24 24" class="eva eva-eye-outline icon nav-icon"><g data-name="Layer 2"><g data-name="eye"><rect width="24" height="24" opacity="0"></rect><path d="M21.87 11.5c-.64-1.11-4.16-6.68-10.14-6.5-5.53.14-8.73 5-9.6 6.5a1 1 0 0 0 0 1c.63 1.09 4 6.5 9.89 6.5h.25c5.53-.14 8.74-5 9.6-6.5a1 1 0 0 0 0-1zM12.22 17c-4.31.1-7.12-3.59-8-5 1-1.61 3.61-4.9 7.61-5 4.29-.11 7.11 3.59 8 5-1.03 1.61-3.61 4.9-7.61 5z"></path><path d="M12 8.5a3.5 3.5 0 1 0 3.5 3.5A3.5 3.5 0 0 0 12 8.5zm0 5a1.5 1.5 0 1 1 1.5-1.5 1.5 1.5 0 0 1-1.5 1.5z"></path></g></g></svg>
                          </a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</div>




<?php include('include/footer.php'); ?>

<script>
   $('#base-style').DataTable();
   
</script>