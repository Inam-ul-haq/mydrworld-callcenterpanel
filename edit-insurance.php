<?php include('include/header.php'); ?>
<style>
    .check-container {
    }
    /*.checkbox-list {*/
    /*  max-height: 200px;*/
    /*  overflow-y: auto;*/
    /*}*/

    .checkbox-item {
        margin-bottom: 10px;
    }

    .checkbox-item input[type="checkbox"] {
        margin-right: 10px;
    }
    .input-custom-icon .form-control {
        padding: 10px 20px 10px 40px;
        font-size: 16px;
        border: 1px solid var(--card-bg);
        height: 50px;
        border-radius: 5px;
    }
</style>
<div class="position-relative mb-5">
    <div class="card">
        <div class="p-4 pt-4">
            <form action="">
                <div class="row">
                    <div class="col-lg-6 mb-3"></div>
                    <div class="col-lg-6 mb-3">
                        <button type="button" onclick="addInsuType()" style="margin-left: auto;" class="btn btn-outline-primary waves-effect waves-light">Add Insurance Type</button>
                    </div>
                </div>
                <div class="row insu-form-row">
                    <div class="col-lg-12 mb-3">
                        <label class="form-label" for="">Insurances Type</label>
                        <div class="position-relative select-custom-icon">
                            <select name="" id="" class="select2-single" data-placeholder="Select Insurances Type">
                                <option></option>
                                <option value="1" selected>Abu Dhabi National Insurance Company</option>
                                <option value="2">Aafiya</option>
                                <option value="3">Advance Medical Center - Aafiya</option>
                                <option value="4">AETNA</option>
                                <option value="5">Al Ain Ahlia Insurance Company</option>
                                <option value="6">Al Arabiya Group of Companies</option>
                                <option value="7">AL Buhaira National Insurance Company</option>
                                <option value="8">Al Khazna Insurance Company</option>
                                <option value="9">AL RAFAH PHARMACY</option>
                                <option value="10">Al Saha travels</option>
                                <option value="11">Allianz Arab Orient Insurance Company</option>
                                <option value="12">Allianz Marine Services LLC</option>
                                <option value="13">AlMadallah HealthCare</option>
                                <option value="14">Amity</option>
                                <option value="15">Arabian Scandinavaian Insurance</option>
                                <option value="16">Axa</option>
                                <option value="17">BARWIL ABU DHABI RUWAIS LLC</option>
                                <option value="18">Better To Know</option>
                                <option value="19">Daman National Health Insurance Company</option>
                                <option value="20">DAMAN THIQA</option>
                            </select>
                            <i class="fi fi-rr-compliance-document" style="margin-top: 2px;"></i>
                        </div>
                    </div>
                    <div class="col-lg-12 mb-3">
                        <label class="form-label" for="">Sub Insurances</label>
                        <!--<select class="form-control" data-trigger-->
                        <!--name="choices-multiple-default" id="choices-multiple-default"-->
                        <!--placeholder="This is a placeholder" multiple>-->
                        <!--    <option value="Sub Insurances 1">Sub Insurances 1</option>-->
                        <!--    <option value="Sub Insurances 2">Sub Insurances 2</option>-->
                        <!--    <option value="Sub Insurances 3">Sub Insurances 3</option>-->
                        <!--    <option value="Sub Insurances 4">Sub Insurances 4</option>-->
                        <!--</select>-->
                        <div class="check-container">
                            <!--<div class="position-relative input-custom-icon">-->
                            <!--    <input  class="form-control mb-3" type="text" id="searchInput" placeholder="Search...">-->
                            <!--    <span class="bx bx bx-search-alt-2"></span>-->
                            <!--</div>-->
                            <div class="checkbox-list">
                                <div class="checkbox-item form-check">
                                    <input class="form-check-input" type="checkbox" id="item1" value="Item 1" />
                                    <label for="item1" class="form-check-label">ABUDHABI NATIONAL NETWORK</label>
                                </div>
                                <div class="checkbox-item form-check">
                                    <input class="form-check-input" type="checkbox" id="item2" value="Item 2" />
                                    <label for="item2" class="form-check-label">HIGH-GN,GNPLUS,GNR-INS017</label>
                                </div>
                                <div class="checkbox-item form-check">
                                    <input class="form-check-input" type="checkbox" id="item3" value="Item 3" />
                                    <label for="item3" class="form-check-label">HIGH-RNA,RNB-INS017</label>
                                </div>

                                <div class="checkbox-item form-check">
                                    <input class="form-check-input" type="checkbox" id="item4" value="Item 4" />
                                    <label for="item4" class="form-check-label">HIGH-SILVER-INS017</label>
                                </div>

                                <!--<div class="checkbox-item form-check">-->
                                <!--  <input class="form-check-input" type="checkbox" id="item5" value="Item 5">-->
                                <!--  <label for="item5" class="form-check-label">Item 5</label>-->
                                <!--</div>-->

                                <!--<div class="checkbox-item form-check">-->
                                <!--  <input class="form-check-input" type="checkbox" id="item6" value="Item 6">-->
                                <!--  <label for="item6" class="form-check-label">Item 6</label>-->
                                <!--</div>-->
                                <!-- Add more items as needed -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
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
    // $(document).ready(function() {
    //   $('#searchInput').on('keyup', function() {
    //     var searchText = $(this).val().toLowerCase();
    //     $('.checkbox-item').each(function() {
    //       var itemText = $(this).text().toLowerCase();
    //       if (itemText.includes(searchText)) {
    //         $(this).show();
    //       } else {
    //         $(this).hide();
    //       }
    //     });
    //   });

    //   $('.checkbox-item input[type="checkbox"]').on('change', function() {
    //     if ($(this).prop('checked')) {
    //       $(this).closest('.checkbox-item').prependTo('.checkbox-list');
    //     }
    //   });
    // });
    function addInsuType() {
        $(".insu-form-row").before(`<div class="row insu-form-row">
                            <div class="col-lg-12 mb-3">
                                <label class="form-label" for="">Insurances Type</label>
                                <div class="position-relative select-custom-icon">
                                    <select name="" id="" class="select2-single" data-placeholder="Select Insurances Type">
                                        <option></option>
                                        <option value="1">Abu Dhabi National Insurance Company</option>
                                        <option value="2">Aafiya</option>
                                        <option value="3">Advance Medical Center - Aafiya</option>
                                        <option value="4">AETNA</option>
                                        <option value="5">Al Ain Ahlia Insurance Company</option>
                                        <option value="6">Al Arabiya Group of Companies</option>
                                        <option value="7">AL Buhaira National Insurance Company</option>
                                        <option value="8">Al Khazna Insurance Company</option>
                                        <option value="9">AL RAFAH PHARMACY</option>
                                        <option value="10">Al Saha travels</option>
                                        <option value="11">Allianz Arab Orient Insurance Company</option>
                                        <option value="12">Allianz Marine Services LLC</option>
                                        <option value="13">AlMadallah HealthCare</option>
                                        <option value="14">Amity</option>
                                        <option value="15">Arabian Scandinavaian Insurance</option>
                                        <option value="16">Axa</option>
                                        <option value="17">BARWIL ABU DHABI RUWAIS LLC</option>
                                        <option value="18">Better To Know</option>
                                        <option value="19">Daman National Health Insurance Company</option>
                                        <option value="20">DAMAN THIQA</option>
                                    </select>
                                    <i class="fi fi-rr-compliance-document" style="margin-top: 2px;"></i>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-3">
                                <label class="form-label" for="">Sub Insurances</label>
                                    <div class="checkbox-list">
                                        <div class="checkbox-item form-check">
                                          <input class="form-check-input" type="checkbox" id="item16" value="Item 16">
                                          <label for="item16" class="form-check-label">ABUDHABI NATIONAL NETWORK</label>
                                        </div>
                                        <div class="checkbox-item form-check">
                                          <input class="form-check-input" type="checkbox" id="item26" value="Item 26">
                                          <label for="item26" class="form-check-label">HIGH-GN,GNPLUS,GNR-INS017</label>
                                        </div>
                                        <div class="checkbox-item form-check">
                                          <input class="form-check-input" type="checkbox" id="item36" value="Item 36">
                                          <label for="item36" class="form-check-label">HIGH-RNA,RNB-INS017</label>
                                        </div>
                                        
                                        <div class="checkbox-item form-check">
                                          <input class="form-check-input" type="checkbox" id="item46" value="Item 46">
                                          <label for="item46" class="form-check-label">HIGH-SILVER-INS017</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="mb-3">`);
        $(".select2-single").select2({
            placeholder: $(this).data("placeholder"),
        });
    }
</script>
