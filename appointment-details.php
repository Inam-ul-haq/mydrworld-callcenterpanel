<?php include('include/header.php'); ?>

<div class="position-relative mb-5 d-none">
    <div class="card">
        <div class="card-body">
            <div class="">
                <div class="row mb-4">
                    <div class="col-xl-3 col-md-12">
                        <div class="pb-3 pb-xl-0 mt-2">
                            <h3 class="mb-0">Booking Id: <span class="text-primary">#MYDW1025</span></h3>
                        </div>
                    </div>

                    <div class="col-xl-9 col-md-12">
                        <div class="pb-3 pb-xl-0">
                            <div class="btn-toolbar float-end" role="toolbar">
                                <div class="d-flex flex-wrap gap-2">
                                    <button type="button" class="btn btn-primary waves-effect waves-light">Confirm</button>
                                    <button type="button" class="btn btn-dark waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#cancel-appointment">Cancel</button>
                                    <button type="button" class="btn btn-outline-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#reschedule-modal">Reschedule</button>
                                    <button type="button" class="btn btn-secondary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#followup-modal">Follow Up</button>
                                    <button type="button" class="btn btn-success waves-effect waves-light">Completed</button>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            


            <div class="row">
                <div class="col-md-8">
                    <h4 class="font-size-16">Patient Details</h4>
                    <div class="d-flex align-items-center mb-3">
                        <div class="flex-shrink-0 me-3">
                            <img style="width: 80px; height: 80px; border-radius: 5px;" src="assets/images/users/avatar-2.jpg" alt="Generic placeholder image" />
                        </div>
                        <div class="flex-grow-1">
                            <h4>John Doe</h4>
                            <h5 class="text-muted"><i class="fas fa-map-marker-alt me-2"></i> Downtown. Dubai</h5>
                        </div>
                    </div>
                    <div class="flex-grow-1">
                        <h5 class="mb-3"><i class="bx bx-envelope me-2"></i> test@example.com</h5>
                        <h5 class="mb-3"><i class="bx bxs-phone-call me-2"></i> +971-50-1234567</h5>
                        <h5 class="mb-3"><i class="bx bxl-whatsapp-square me-2"></i> +971-50-1234567</h5>
                        <h5 class="mb-3"><i class="bx bx-calendar me-2"></i> 10-05-1999</h5>
                        <h5><i class="fas fa-transgender me-2"></i> Male</h5>
                    </div>
                </div>
                <div class="col-md-4">
                    <h4 class="font-size-16">Doctor Details</h4>
                        
                        <div class="d-flex align-items-center mb-3">
                            <div class="flex-shrink-0 me-3">
                                <img style="width: 80px; height: 80px; border-radius: 5px;" src="assets/images/doctor.jpg" alt="Generic placeholder image" />
                            </div>
                            <div class="flex-grow-1">
                                <h4>Doctor 1</h4>
                                <h5 class="text-muted"><i class="fas fa-map-marker-alt me-2"></i> Downtown. Dubai</h5>
                            </div>
                        </div>
                        <div class="flex-grow-1">
                            <h5 class="mb-3"><i class="bx bx-envelope me-2"></i> test@example.com</h5>
                            <h5 class="mb-3"><i class="bx bxs-phone-call me-2"></i> +971-50-1234567</h5>
                        </div>
                    <div class="card p-0 overflow-hidden mt-4 shadow-none">
                        <div class="mail-list">
                            <a href="#" class="border-bottom">
                                <div class="d-flex align-items-center">
                                    <span class="icn-bx me-3">
                                        <i class="bx bx-calendar font-size-20 align-middle"></i>
                                    </span>
                                    <div class="flex-grow-1">
                                        <h5 class="font-size-14 mb-0">05 May 2024</h5>
                                        <span class="text-muted font-size-13">09:30 AM</span>
                                    </div>
                                    <!-- <div class="flex-shrink-0">
                                                                      <div class="float-end">
                                                                          <span class="bg-success badge">08</span>
                                                                      </div>
                                                                  </div> -->
                                </div>
                            </a>
                            <a href="#">
                                <div class="d-flex align-items-center">
                                    <span class="icn-bx me-3">
                                        <i class="bx bx-map font-size-20 align-middle"></i>
                                    </span>
                                    <div class="flex-grow-1">
                                        <h5 class="font-size-14 mb-0">NMC Royal Hospital</h5>
                                        <span class="text-muted font-size-13">Falcon House - Plot no # 598/122, DIPark 1, Dubai</span>
                                    </div>
                                    <div class="flex-shrink-0"></div>
                                </div>
                            </a>
                        </div>

                        
                    </div>
                </div>
            </div>


            <div class="d-flex justify-content-between">
                <div>
                    <h4 class="font-size-16 mb-3">Agent Details</h4>
                    <div class="d-flex align-items-center mb-4">
                        <div class="flex-shrink-0 me-3">
                            <img class="rounded-circle avatar-sm" src="assets/images/agent.jpeg" alt="Generic placeholder image" />
                        </div>
                        <div class="flex-grow-1">
                            <h5 class="font-size-14 mb-0">John Doe</h5>
                            <small class="text-muted"><i class="fas fa-map-marker-alt me-2"></i> Dubai, Downtown</small>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h5 class="font-size-14 mb-0"><i class="bx bxs-phone-call me-2"></i> +971-50-1234567</h5>
                            <small class="text-muted"><i class="fas fa-transgender me-2"></i> Male </small>
                        </div>
                    </div>
                </div>
            </div>

            <hr />

            <div class="">
                <h4 class="font-size-16">Follow Up Details</h4>
                <p>
                    Praesent dui ex, dapibus eget mauris ut, finibus vestibulum enim. Quisque arcu leo, facilisis in fringilla id, luctus in tortor. Nunc vestibulum est quis orci varius viverra. Curabitur dictum volutpat massa vulputate
                    molestie. In at felis ac velit maximus convallis.
                </p>
            </div>


            <hr />

            <div class="">
                <h4 class="font-size-16">Reason Of Cancellation</h4>
                <p>
                    Praesent dui ex, dapibus eget mauris ut, finibus vestibulum enim. Quisque arcu leo, facilisis in fringilla id, luctus in tortor. Nunc vestibulum est quis orci varius viverra. Curabitur dictum volutpat massa vulputate
                    molestie. In at felis ac velit maximus convallis.
                </p>
            </div>

            <hr />

            <div class="">
                <h4 class="font-size-16">Reason Of Reschedule</h4>
                <p>
                    Praesent dui ex, dapibus eget mauris ut, finibus vestibulum enim. Quisque arcu leo, facilisis in fringilla id, luctus in tortor. Nunc vestibulum est quis orci varius viverra. Curabitur dictum volutpat massa vulputate
                    molestie. In at felis ac velit maximus convallis.
                </p>
            </div>
        </div>
    </div>
</div>



<div class="position-relative mb-5">
    <div class="card">
        <div class="card-body">
            <div class="">
                <div class="row">
                    <div class="col-xl-3 col-md-12">
                        <div class="pb-3 pb-xl-0 mt-2">
                            <h3 class="mb-0">Booking Id: <span class="text-primary">#MYDW1025</span></h3>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="card border-0 p-0 overflow-hidden mt-4 shadow-none">
                            <div class="mail-list">
                                <a href="#!">
                                    <h4 class="font-size-16 mb-3">Date &amp; Time</h4>
                                    <div class="d-flex align-items-center">
                                        <span class="icn-bx me-3">
                                            <i class="bx bx-calendar font-size-20 align-middle"></i>
                                        </span>
                                        <div class="flex-grow-1">
                                            <h4 class="mb-2 font-size-18">05 May 2024</h4>
                                            <h5 class="font-size-14">09:30 AM</h5>
                                        </div>
                                    </div>
                                </a>
                                <hr />
                                <a href="#!">
                                    <h4 class="font-size-16 mb-3">Clinic</h4>
                                    <div class="d-flex align-items-center">
                                        <span class="icn-bx me-3">
                                            <i class="bx bx-map font-size-20 align-middle"></i>
                                        </span>
                                        <div class="flex-grow-1">
                                            <h4 class="mb-2 font-size-18">NMC Royal Hospital</h4>
                                            <h5 class="font-size-14">Falcon House - Plot no # 598/122, DIPark 1, Dubai</h5>
                                        </div>
                                        <div class="flex-shrink-0"></div>
                                    </div>
                                </a>

                                <hr />

                                <a href="#!">
                                    <h4 class="font-size-16 mb-3">Patient Details</h4>
                                    <div class="d-flex">
                                        <div class="me-3">
                                            <img style="width: 80px; height: 80px; border-radius: 5px;" src="assets/images/users/avatar-2.jpg" alt="Generic placeholder image" />
                                        </div>
                                        <div>
                                            <div class="flex-grow-1 mb-2">
                                                <h4 class="mb-2 font-size-18">John Doe</h4>
                                                <h5 class="mb-0 font-size-14"><i class="fas fa-map-marker-alt me-2"></i> Downtown. Dubai</h5>
                                            </div>
                                            <h5 class="mb-2 font-size-14"><i class="bx bx-calendar me-2"></i> 10-05-1999</h5>
                                            <h5 class="mb-2 font-size-14"><i class="fas fa-transgender me-2"></i> Male</h5>
                                            <h5 class="mb-2 font-size-14"><i class="bx bx-envelope me-2"></i> test@example.com</h5>
                                            <h5 class="mb-2 font-size-14"><i class="bx bxs-phone-call me-2"></i> +971-50-1234567</h5>
                                            <h5 class="mb-0 font-size-14"><i class="bx bxl-whatsapp-square me-2"></i> +971-50-1234567</h5>
                                        </div>
                                    </div>
                                </a>

                                <hr />

                                <a href="#!">
                                    <h4 class="font-size-16 mb-3">Doctor Details</h4>
                                    <div class="d-flex">
                                        <div class="me-3">
                                            <img style="width: 80px; height: 80px; border-radius: 5px;" src="assets/images/doctor.jpg" alt="Generic placeholder image" />
                                        </div>
                                        <div>
                                            <div class="flex-grow-1 mb-2">
                                                <h4 class="font-size-18 mb-2">DR S.K SHETTY M.S</h4>
                                                <h5 class="mb-0 font-size-14"><i class="fas fa-map-marker-alt me-2"></i> Downtown. Dubai</h5>
                                            </div>
                                            <h5 class="mb-2 font-size-14"><i class="fas fa-transgender me-2"></i> Male</h5>
                                            <h5 class="mb-2 font-size-14"><i class="bx bx-envelope me-2"></i> test@example.com</h5>
                                            <h5 class="mb-2 font-size-14"><i class="bx bxs-phone-call me-2"></i> +971-50-1234567</h5>
                                            <h5 class="mb-0 font-size-14"><i class="bx bxl-whatsapp-square me-2"></i> +971-50-1234567</h5>
                                        </div>
                                    </div>
                                </a>

                                <hr />

                                <a href="#!">
                                    <h4 class="font-size-16 mb-3">Agent Details</h4>
                                    <div class="d-flex">
                                        <div class="me-3">
                                            <img style="width: 80px; height: 80px; border-radius: 5px;" src="assets/images/agent.jpeg" alt="Generic placeholder image" />
                                        </div>
                                        <div>
                                            <div class="flex-grow-1 mb-2">
                                                <h4 class="font-size-18 mb-2">Agent 1</h4>
                                                <h5 class="mb-0 font-size-14"><i class="fas fa-map-marker-alt me-2"></i> Downtown. Dubai</h5>
                                            </div>
                                            <h5 class="mb-2 font-size-14"><i class="fas fa-transgender me-2"></i> Male</h5>
                                            <h5 class="mb-2 font-size-14"><i class="bx bx-envelope me-2"></i> test@example.com</h5>
                                            <h5 class="mb-2 font-size-14"><i class="bx bxs-phone-call me-2"></i> +971-50-1234567</h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row"></div>

            <hr />

            <div class="">
                <h4 class="font-size-16">Follow Up Details</h4>
                <p>
                    Praesent dui ex, dapibus eget mauris ut, finibus vestibulum enim. Quisque arcu leo, facilisis in fringilla id, luctus in tortor. Nunc vestibulum est quis orci varius viverra. Curabitur dictum volutpat massa vulputate
                    molestie. In at felis ac velit maximus convallis.
                </p>
            </div>

            <hr />

            <div class="">
                <h4 class="font-size-16">Reason Of Cancellation</h4>
                <p>
                    Praesent dui ex, dapibus eget mauris ut, finibus vestibulum enim. Quisque arcu leo, facilisis in fringilla id, luctus in tortor. Nunc vestibulum est quis orci varius viverra. Curabitur dictum volutpat massa vulputate
                    molestie. In at felis ac velit maximus convallis.
                </p>
            </div>

            <hr />

            <div class="">
                <h4 class="font-size-16">Reason Of Reschedule</h4>
                <p>
                    Praesent dui ex, dapibus eget mauris ut, finibus vestibulum enim. Quisque arcu leo, facilisis in fringilla id, luctus in tortor. Nunc vestibulum est quis orci varius viverra. Curabitur dictum volutpat massa vulputate
                    molestie. In at felis ac velit maximus convallis.
                </p>
            </div>
            <div class="appointment-status-btns">
                <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#confirm-appointment">Confirm</button>
                <button type="button" class="btn btn-dark waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#cancel-appointment">Cancel</button>
                <button type="button" class="btn btn-outline-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#reschedule-modal">Reschedule</button>
                <button type="button" class="btn btn-secondary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#followup-modal">Follow Up</button>
                <button type="button" class="btn btn-success waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#completed-appointment">Completed</button>
            </div>
        </div>
    </div>
</div>


<!-- End Page-content -->

<!-- Modal -->
<div class="modal fade" id="composemodal" tabindex="-1" role="dialog" aria-labelledby="composemodalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="composemodalTitle">New Message</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <input type="email" class="form-control" placeholder="To" />
                    </div>

                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Subject" />
                    </div>
                    <div class="mb-3">
                        <div id="email-editor"></div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Send <i class="fab fa-telegram-plane ms-1"></i></button>
            </div>
        </div>
    </div>
</div>

<?php include('include/footer.php'); ?>

<script>
    $("#base-style").DataTable();
</script>
