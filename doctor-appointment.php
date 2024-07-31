<?php include('include/header.php'); ?>

<div class="mb-5">
    
<div class="card">
    <h5 class="card-header card-header d-flex justify-content-between">DR S.K SHETTY M.S Appointments 
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#appointment-modal-doctor">Make an Appointment</button></h5>
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
                    <label class="form-label" for="username">Booking Status</label>
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
                <!-- <div class="col-lg-3 col-md-6 mb-3">
                    <label class="form-label" for="username">Select Doctor</label>
                    <div class="position-relative select-custom-icon">
                        <select name="" id="" class="select2-single" data-placeholder="Select Doctor">
                            <option></option>
                            <option value="1">DR S.K SHETTY M.S</option>
                            <option value="2">DR SHAMIM SALIM</option>
                        </select>
                        <i class="fi fi-rr-user-md icon d-flex"></i>
                    </div>
                </div> -->
                <div class="col-sm">
                    <div class="d-flex justify-content-between">
                        <div class="mt-3 mt-md-0 mb-3 me-3">
                            <button type="button" class="btn btn-primary">Search</button>
                        </div>
                        <div class="btn-group toggle-btn-g-tabs-cale" role="group" aria-label="Basic checkbox toggle button group">
                            <input type="radio" class="btn-check" name="scs" id="btncheck4" autocomplete="off" checked />
                            <label class="btn btn-outline-primary" for="btncheck4"><img class="icn" src="assets/images/table-view.png" alt="" /></label>

                            <input type="radio" class="btn-check" name="scs" id="btncheck5" autocomplete="off" />
                            <label class="btn btn-outline-primary" for="btncheck5"><img class="icn" src="assets/images/calender-icon.png" alt="" /></label>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
            <div class="table-wrap" id="tableDiv">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered align-middle" id="example2">
                    <thead>
                            <tr>
                                <th>#</th>
                                <th>Booking Id</th>
                                <th>Patient Name</th>
                                <th>Time Slot</th>
                                <th>Booking Status</th>
                                <th>Booking Date</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>#MYDW1025</td>
                                <td>
                                    <a href="#!" class="patient-link"><img src="assets/images/user.png" width="32" height="32" class="me-2" alt="" />John Doe</a>
                                </td>
                                <td>09:30 AM</td>
                                <td><div class="status-badge pending-badge"><span></span> Pending</div></td>
                                <td>04-04-2024</td>
                                <td>
                                    <div class="dropdown mt-4 mt-sm-0">
                                        <button class="btn btn-light btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bx bx-dots-horizontal-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                          <a class="dropdown-item cancel-link" href="appointment-details-pending.php">View Appointment</a>
                                                    <a class="dropdown-item cancel-link" href="#!" data-bs-toggle="modal" data-bs-target="#cancel-appointment">Cancel Appointment</a>
                                                    <a class="dropdown-item accept-link" href="#!" data-bs-toggle="modal" data-bs-target="#confirm-appointment">Confirm Appointment</a>
                                                    <a class="dropdown-item reschdule-link" href="#!" data-bs-toggle="modal" data-bs-target="#reschedule-modal">Reschedule Appointment</a>
                                                    <!-- <a class="dropdown-item followup-link" href="#!" data-bs-toggle="modal" data-bs-target="#followup-modal">Follow Up</a> -->
                                                    <a class="dropdown-item followup-link" href="#!" data-bs-toggle="modal" data-bs-target="#completed-appointment">Complete Appointment</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>#MYDW1028</td>
                                <td>
                                    <a href="#!" class="patient-link"><img src="assets/images/user.png" width="32" height="32" class="me-2" alt="" />John Doe</a>
                                </td>
                                <td>09:30 AM</td>
                                <td><div class="status-badge reschedule-badge"><span></span> Re Scheduled</div></td>
                                <td>04-04-2024</td>
                                <td>
                                    <div class="dropdown mt-4 mt-sm-0">
                                        <button class="btn btn-light btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bx bx-dots-horizontal-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                          <a class="dropdown-item cancel-link" href="appointment-details-rescheduled.php">View Appointment</a>
                                                    <a class="dropdown-item cancel-link" href="#!" data-bs-toggle="modal" data-bs-target="#cancel-appointment">Cancel Appointment</a>
                                                    <a class="dropdown-item accept-link" href="#!" data-bs-toggle="modal" data-bs-target="#confirm-appointment">Confirm Appointment</a>
                                                    <a class="dropdown-item reschdule-link" href="#!" data-bs-toggle="modal" data-bs-target="#reschedule-modal">Reschedule Appointment</a>
                                                    <!-- <a class="dropdown-item followup-link" href="#!" data-bs-toggle="modal" data-bs-target="#followup-modal">Follow Up</a> -->
                                                    <a class="dropdown-item followup-link" href="#!" data-bs-toggle="modal" data-bs-target="#completed-appointment">Complete Appointment</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>#MYDW1031</td>
                                <td>
                                    <a href="#!" class="patient-link"><img src="assets/images/user.png" width="32" height="32" class="me-2" alt="" />John Doe</a>
                                </td>
                                <td>09:30 AM</td>
                                <td><div class="status-badge completed-badge"><span></span> Completed</div></td>
                                <td>04-04-2024</td>
                                <td>
                                    <div class="dropdown mt-4 mt-sm-0">
                                        <!-- <a href="#!" class="dropdown-toggle btn-light" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bx bx-dots-horizontal-rounded"></i>
                              </a> -->
                                        <button class="btn btn-light btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bx bx-dots-horizontal-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item cancel-link" href="appointment-details-completed.php">View Appointment</a>
                                                    <a class="dropdown-item cancel-link" href="#!" data-bs-toggle="modal" data-bs-target="#cancel-appointment">Cancel Appointment</a>
                                                    <a class="dropdown-item accept-link" href="#!" data-bs-toggle="modal" data-bs-target="#confirm-appointment">Confirm Appointment</a>
                                                    <a class="dropdown-item reschdule-link" href="#!" data-bs-toggle="modal" data-bs-target="#reschedule-modal">Reschedule Appointment</a>
                                                    <!-- <a class="dropdown-item followup-link" href="#!" data-bs-toggle="modal" data-bs-target="#followup-modal">Follow Up</a> -->
                                                    <a class="dropdown-item followup-link" href="#!" data-bs-toggle="modal" data-bs-target="#completed-appointment">Complete Appointment</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>#MYDW1034</td>
                                <td>
                                    <a href="#!" class="patient-link"><img src="assets/images/user.png" width="32" height="32" class="me-2" alt="" />John Doe</a>
                                </td>
                                <td>09:30 AM</td>
                                <td><div class="status-badge cancelled-badge"><span></span> Cancelled</div></td>
                                <td>04-04-2024</td>
                                <td>
                                    <div class="dropdown mt-4 mt-sm-0">
                                        <button class="btn btn-light btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bx bx-dots-horizontal-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                          <a class="dropdown-item cancel-link" href="appointment-details-cancelled.php">View Appointment</a>
                                                    <a class="dropdown-item cancel-link" href="#!" data-bs-toggle="modal" data-bs-target="#cancel-appointment">Cancel Appointment</a>
                                                    <a class="dropdown-item accept-link" href="#!" data-bs-toggle="modal" data-bs-target="#confirm-appointment">Confirm Appointment</a>
                                                    <a class="dropdown-item reschdule-link" href="#!" data-bs-toggle="modal" data-bs-target="#reschedule-modal">Reschedule Appointment</a>
                                                    <!-- <a class="dropdown-item followup-link" href="#!" data-bs-toggle="modal" data-bs-target="#followup-modal">Follow Up</a> -->
                                                    <a class="dropdown-item followup-link" href="#!" data-bs-toggle="modal" data-bs-target="#completed-appointment">Complete Appointment</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>#MYDW1037</td>
                                <td>
                                    <a href="#!" class="patient-link"><img src="assets/images/user.png" width="32" height="32" class="me-2" alt="" />John Doe</a>
                                </td>
                                <td>09:30 AM</td>
                                <td><div class="status-badge confirmed-badge"><span></span> Confirmed</div></td>
                                <td>04-04-2024</td>
                                <td>
                                    <div class="dropdown mt-4 mt-sm-0">
                                        <button class="btn btn-light btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bx bx-dots-horizontal-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item cancel-link" href="appointment-details-confirmed.php">View Appointment</a>
                                                    <a class="dropdown-item cancel-link" href="#!" data-bs-toggle="modal" data-bs-target="#cancel-appointment">Cancel Appointment</a>
                                                    <a class="dropdown-item accept-link" href="#!" data-bs-toggle="modal" data-bs-target="#confirm-appointment">Confirm Appointment</a>
                                                    <a class="dropdown-item reschdule-link" href="#!" data-bs-toggle="modal" data-bs-target="#reschedule-modal">Reschedule Appointment</a>
                                                    <!-- <a class="dropdown-item followup-link" href="#!" data-bs-toggle="modal" data-bs-target="#followup-modal">Follow Up</a> -->
                                                    <a class="dropdown-item followup-link" href="#!" data-bs-toggle="modal" data-bs-target="#completed-appointment">Complete Appointment</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- <div class="calender-wrap" id="calenderDiv">
                <div class="card card-h-100">
                    <div class="card-body">
                        <div id="calendar" style="min-height: 500px;"></div>
                        
                    </div>
                </div>
            </div> -->
            <div class="calender-wrap" id="calenderDiv">
                                        <div class="card-h-100 my-3">
                                            <div >
                                                <h4  class="mb-3" >Today <span class="text-muted">(23 Apr 2024)</span> </h4>
                                                
                                                <div class="section-area-grid-view d-flex flex-wrap">
                                                    <div class="col-slot-item">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#event-modal" class="border-styles completed">
                                                            <div>
                                                                <p class="time">10:00 AM</p>
                                                                <p class="name">Basher</p>
                                                                <span class="status">Completed</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    
                                                    <div class="col-slot-item">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#event-modal" class="border-styles completed">
                                                            <div>
                                                                <p class="time">10:30 AM</p>
                                                                <p class="name">Basher</p>
                                                                <span class="status">Completed</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    
                                                    
                                                    <div class="col-slot-item">
                                                        <a href="#" class="border-styles">
                                                            <div>
                                                                <p class="time">11:30 AM</p>
                                                                <!--<p class="name">Basher</p>-->
                                                                <!--<span class="status">Completed</span>-->
                                                            </div>
                                                        </a>
                                                    </div>
                                                    
                                                    
                                                    
                                                </div>
                                            </div>
                                            <hr>
                                            <div>
                                                <h4 class="mb-3">Tomorrow <span class="text-muted">(24 Apr 2024)</span> </h4>
                                                <div class="section-area-grid-view d-flex flex-wrap">
                                                    <div class="col-slot-item">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#event-modal" class="border-styles completed">
                                                            <div>
                                                                <p class="time">10:00 AM</p>
                                                                <p class="name">Basher</p>
                                                                <span class="status">Completed</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    
                                                    <div class="col-slot-item">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#event-modal" class="border-styles completed">
                                                            <div>
                                                                <p class="time">10:30 AM</p>
                                                                <p class="name">Basher</p>
                                                                <span class="status">Completed</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    
                                                    <div class="col-slot-item">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#event-modal" class="border-styles scheduled">
                                                            <div>
                                                                <p class="time">11:00 AM</p>
                                                                <p class="name">Basher</p>
                                                                <span class="status">Scheduled</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    
                                                    <div class="col-slot-item">
                                                        <a href="#" class="border-styles">
                                                            <div>
                                                                <p class="time">11:30 AM</p>
                                                                <!--<p class="name">Basher</p>-->
                                                                <!--<span class="status">Completed</span>-->
                                                            </div>
                                                        </a>
                                                    </div>
                                                    
                                                    
                                                    <div class="col-slot-item">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#event-modal" class="border-styles scheduled">
                                                            <div>
                                                                <p class="time">12:00 PM</p>
                                                                <p class="name">Basher</p>
                                                                <span class="status">Scheduled</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    
                                                    <div class="col-slot-item">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#event-modal" class="border-styles completed">
                                                            <div>
                                                                <p class="time">12:30 PM</p>
                                                                <p class="name">Basher</p>
                                                                <span class="status">Completed</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    
                                                    <div class="col-slot-item">
                                                        <a href="#" class="border-styles">
                                                            <div>
                                                                <p class="time">01:00 PM</p>
                                                                <!--<p class="name">Basher</p>-->
                                                                <!--<span class="status">Completed</span>-->
                                                            </div>
                                                        </a>
                                                    </div><div class="col-slot-item">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#event-modal" class="border-styles completed">
                                                            <div>
                                                                <p class="time">01:30 PM</p>
                                                                <p class="name">Basher</p>
                                                                <span class="status">Completed</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    
                                                    <div class="col-slot-item">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#event-modal" class="border-styles completed">
                                                            <div>
                                                                <p class="time">02:00 PM</p>
                                                                <p class="name">Basher</p>
                                                                <span class="status">Completed</span>
                                                            </div>
                                                        </a>
                                                    </div><div class="col-slot-item">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#event-modal" class="border-styles completed">
                                                            <div>
                                                                <p class="time">02:30 PM</p>
                                                                <p class="name">Basher</p>
                                                                <span class="status">Completed</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    
                                                    <div class="col-slot-item">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#event-modal" class="border-styles completed">
                                                            <div>
                                                                <p class="time">03:00 PM</p>
                                                                <p class="name">Basher</p>
                                                                <span class="status">Completed</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            
                                            <hr>
                                            
                                            <div>
                                                <h4 class="mb-3">25 Apr 2024</h4>
                                                <div class="section-area-grid-view d-flex flex-wrap">
                                                    <div class="col-slot-item">
                                                        <a href="#" class="border-styles completed">
                                                            <div>
                                                                <p class="time">10:00 AM</p>
                                                                <p class="name">Basher</p>
                                                                <span class="status">Completed</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    
                                                    <div class="col-slot-item">
                                                        <a href="#" class="border-styles completed">
                                                            <div>
                                                                <p class="time">10:30 AM</p>
                                                                <p class="name">Basher</p>
                                                                <span class="status">Completed</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    
                                                    <div class="col-slot-item">
                                                        <a href="#" class="border-styles scheduled">
                                                            <div>
                                                                <p class="time">11:00 AM</p>
                                                                <p class="name">Basher</p>
                                                                <span class="status">Scheduled</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    
                                                    <div class="col-slot-item">
                                                        <a href="#" class="border-styles">
                                                            <div>
                                                                <p class="time">11:30 AM</p>
                                                                <!--<p class="name">Basher</p>-->
                                                                <!--<span class="status">Completed</span>-->
                                                            </div>
                                                        </a>
                                                    </div>
                                                    
                                                    
                                                    <div class="col-slot-item">
                                                        <a href="#" class="border-styles scheduled">
                                                            <div>
                                                                <p class="time">12:00 PM</p>
                                                                <p class="name">Basher</p>
                                                                <span class="status">Scheduled</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    
                                                    <div class="col-slot-item">
                                                        <a href="#" class="border-styles completed">
                                                            <div>
                                                                <p class="time">12:30 PM</p>
                                                                <p class="name">Basher</p>
                                                                <span class="status">Completed</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    
                                                    <div class="col-slot-item">
                                                        <a href="#" class="border-styles">
                                                            <div>
                                                                <p class="time">01:00 PM</p>
                                                                <!--<p class="name">Basher</p>-->
                                                                <!--<span class="status">Completed</span>-->
                                                            </div>
                                                        </a>
                                                    </div><div class="col-slot-item">
                                                        <a href="#" class="border-styles completed">
                                                            <div>
                                                                <p class="time">01:30 PM</p>
                                                                <p class="name">Basher</p>
                                                                <span class="status">Completed</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    
                                                    <div class="col-slot-item">
                                                        <a href="#" class="border-styles completed">
                                                            <div>
                                                                <p class="time">02:00 PM</p>
                                                                <p class="name">Basher</p>
                                                                <span class="status">Completed</span>
                                                            </div>
                                                        </a>
                                                    </div><div class="col-slot-item">
                                                        <a href="#" class="border-styles completed">
                                                            <div>
                                                                <p class="time">02:30 PM</p>
                                                                <p class="name">Basher</p>
                                                                <span class="status">Completed</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    
                                                    <div class="col-slot-item">
                                                        <a href="#" class="border-styles completed">
                                                            <div>
                                                                <p class="time">03:00 PM</p>
                                                                <p class="name">Basher</p>
                                                                <span class="status">Completed</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <!--<div class="card card-h-100">-->
                                        <!--    <div class="card-body">-->
                                        <!--        <div id="calendar" style="min-height: 500px;"></div>-->
                                        <!--    </div>-->
                                        <!--</div>-->
                                    </div>
        </div>
    </div>
</div>

</div>





<?php include('include/footer.php'); ?>
<!-- <script src="assets/js/pages/calendar.init.js"></script> -->
<script>
    $("#example2").DataTable();
    //  document.addEventListener('DOMContentLoaded', function() {
    function calenderLoad() {
        var calendarEl = document.getElementById("calendar");

        var calendar = new FullCalendar.Calendar(calendarEl, {
            customButtons: {
                myCustomButton: {
                    icon: "bell",
                    click: function () {
                        alert("clicked the custom button!");
                    },
                },
            },
            headerToolbar: {
                left: "prev,today,next",
                // left: 'prevYear,prev,today,next,nextYear myCustomButton',
                center: "title",
                right: "dayGridMonth,timeGridWeek,listMonth",
                // right: 'multiMonthYear,dayGridMonth,timeGridWeek,listMonth'
            },

            eventClick: function (events, jsEvent, view) {
                $("#event-modal").modal("show");
                $("#modal-title").html(events.title);
                $("#modal-start").html(events.start);
                $("#modal-end").html(events.end);
            },

            themeSystem: "bootstrap5",
            // buttonIcons: {
            //   close: 'x-octagon',
            //   prev: 'arrow-left-circle-fill',
            //   next: 'arrow-right-circle-fill',
            //   prevYear: 'arrow-return-left',
            //   nextYear: 'arrow-return-right'
            // },
            initialView: "timeGridWeek", // Set the default view to weekly
            initialDate: "2024-04-13",
            editable: false,
            // render: true,
            dayMaxEvents: true, // allow "more" link when too many events
            navLinks: true,
            eventLimit: true,
            eventTimeFormat: {
                // like '14:30:00'
                hour: "2-digit",
                minute: "2-digit",
                hour12: true,
            },
            events: [

                {
                    title: "#MYDW1020, Joseph Consultation",
                    start: "2024-04-14T11:00:00",
                    end: "2024-04-14T11:30:00",
                },
                {
                    title: "#MYDW1025, Joseph Consultation",
                    start: "2024-04-15T16:00:00",
                    end: "2024-04-15T16:30:00",
                },



                {
                    title: "#MYDW1032, Ajay Consultation",
                    start: "2024-04-17T11:00:00",
                    end: "2024-04-17T11:30:00",
                },
                {
                    title: "#MYDW1023, Nasar Consultation",
                    start: "2024-04-18T16:00:00",
                    end: "2024-04-18T16:30:00",
                },

                
                {
                    title: "#MYDW1028, Fairouz Consultation",
                    start: "2024-04-16T09:00:00",
                    end: "2024-04-16T09:30:00",
                },
                {
                    title: "#MYDW1031, John Doe Consultation",
                    start: "2024-04-25T16:00:00",
                    end: "2024-04-25T16:30:00",
                },
                {
                    title: "#MYDW1034, Robert Consultation",
                    start: "2024-04-25T09:00:00",
                    end: "2024-04-25T09:30:00",
                },
                {
                    title: "#MYDW1037, Maria Consultation",
                    start: "2024-04-25T13:00:00",
                    end: "2024-04-25T13:30:00",
                },
                {
                    title: "#MYDW1036, Mark Consultation",
                    start: "2024-04-25T11:00:00",
                    end: "2024-04-25T11:30:00",
                },
            ],
        });

        calendar.render();
        // });
    }
    const btncheck4 = document.getElementById("btncheck4");
    const btncheck5 = document.getElementById("btncheck5");
    const div1 = document.getElementById("tableDiv");
    const div2 = document.getElementById("calenderDiv");
    div2.style.display = "none";

    btncheck4.addEventListener("change", function () {
        if (this.checked) {
            div1.style.display = "block";
            div2.style.display = "none";
        }
    });

    btncheck5.addEventListener("change", function () {
        if (this.checked) {
            div1.style.display = "none";
            // calenderLoad();
            div2.style.display = "block";
        }
    });
</script>
