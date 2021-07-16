<!-- Sidebar -->


<ul class="navbar-nav bg-gray-100 sidebar sidebar-dark accordion align-items-stretch" id="profileSidebar">
    <li>
        <a class="sidebar-brand text-primary d-flex align-items-center justify-content-center">
            <div class="sidebar-brand-icon" id="profileToggle">
                <i class="fa fa-bars"></i>
            </div>
        </a>
    </li>
    <li class="nav-item">
        <div class="p-3">
            <h3 class="mb-4 title">Patient Chart</h3>
            <ul class="nav nav-tabs justify-content-between">
                <li class="m-2 active">
                    <a href="#demographics">Demographics</a></li>
                <li class="m-2">
                    <a href="#menu_visits">Visits</a></li>
                <li class="m-2">
                    <a href="#menu_tests">Tests</a></li>
                <li class="m-2">
                    <a href="#menu_diagnosis">Diagnosis</a></li>
                <li class="m-2">
                    <a href="#menu_orders">Orders</a></li>
            </ul>
            <div class="tab-content" >
                <div class="row mt-4 p-2" id="demographics">
                    <div class="col-md-3">
                        <img src="/img/undraw_profile.svg" width="100px">
                    </div>
                    <div class="col-md-9">
                        <p class="title">Sarah</p>
                        <p>My primary care provider arranged this visit. I've also seen a chiropractor, but no one
                            can seem to help me with my back pain and constant feeling of tiredness.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card border-0">
                            <div class="card-body bg-gray-200">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-md-6 font-weight-bold">Age:</label>
                                            <div class="col-md-6">
                                                <p>70 years</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-md-6 font-weight-bold">Gender:</label>
                                            <div class="col-md-6">
                                                <p>Female</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-md-6 font-weight-bold">Weight:</label>
                                            <div class="col-md-6">
                                                <p>130 lbs. (59.0 kg)</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-md-6 font-weight-bold">Height:</label>
                                            <div class="col-md-6">
                                                <p>5 ft (152.4 cm)</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-md-6 font-weight-bold">BMI:</label>
                                            <div class="col-md-6">
                                                <p>25.4 kg/m<sup>2</sup></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-md-6 font-weight-bold">Allergies</label>
                                            <div class="col-md-6">
                                                <p>No known allergies</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4 ">
                    <div class="col-md-12">
                        <p><i class="fas fa-clipboard p-2"></i>Case Description</p>
                        <p class="p-2">
                            The patient is a 70-year-old woman who was referred to hematology/oncology by er primary
                            care physician (PCP) due to persistent fatigue, lower back pain, low-grade fever,
                            abdominal tenderness, and abnormal laboratory results on 2 February 2021 for serum
                            calcium, phosphate, hemoglobin, creatinine, and total protein.
                        </p>
                    </div>
                </div>

                <div class="row mt-4" id="menu_visits">
                    <div class="col-md-12">
                        <p><i class="fas fa-clipboard p-2"></i>Visits</p>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <th>DATE</th>
                                <th>WEIGHT</th>
                                <th>BMI</th>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <p>Today</p>
                                        <a href="javascript:void(0)" class="btn-view-more" data-id="visit_1">view more</a>
                                    </td>
                                    <td>130 lbs. (59.0 kg)</td>
                                    <td>25.4 kg/m<sup>2</sup></td>
                                </tr>
                                <tr>
                                    <td class="view-more" id="visit_1" colspan="3">NOTES: Referred from PCP for possible hematological malignancy</td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>January 20, 2019</p>
                                        <a href="javascript:void(0)" class="btn-view-more" data-id="visit_2">view more</a>
                                    </td>
                                    <td>130 lbs. (59.0 kg)</td>
                                    <td>25.4 kg/m<sup>2</sup></td>
                                </tr>
                                <tr>
                                    <td class="view-more" id="visit_2" colspan="3">NOTES: Regular exercise (eg, walking) recommended</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="row mt-4" id="menu_tests">
                    <div class="col-md-12">
                        <p><i class="fas fa-clipboard p-2"></i>Tests</p>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <th>DATE</th>
                                <th>NAME</th>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <p>February 2, 2021</p>
                                        <a href="javascript:void(0)" class="btn-view-more" data-id="test_1">view more</a>
                                    </td>
                                    <td>Calcium (serum)</td>
                                </tr>
                                <tr>
                                    <td class="view-more" id="test_1" colspan="2">RESULT: 11.5 mg/dL (reference range1: 8.6-10.2 mg/dL)</td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>February 2, 2021</p>
                                        <a href="javascript:void(0)" class="btn-view-more" data-id="test_2">view more</a>
                                    </td>
                                    <td>Phosphate (serum)</td>
                                </tr>
                                <tr>
                                    <td class="view-more" id="test_2" colspan="2">RESULT: 4.8 mg/dL (reference range1: 3.0-4.5 mg/dL)</td>
                                </tr>

                                <tr>
                                    <td>
                                        <p>February 2, 2021</p>
                                        <a href="javascript:void(0)" class="btn-view-more" data-id="test_3">view more</a>
                                    </td>
                                    <td>Creatinine (serum)</td>
                                </tr>
                                <tr>
                                    <td class="view-more" id="test_3" colspan="2">RESULT: 0.8 mg/dL (reference range1: 0.5-1.1 mg/dL)</td>
                                </tr>


                                <tr>
                                    <td>
                                        <p>February 2, 2021</p>
                                        <a href="javascript:void(0)" class="btn-view-more" data-id="test_4">view more</a>
                                    </td>
                                    <td>Hemoglobin</td>
                                </tr>
                                <tr>
                                    <td class="view-more" id="test_4" colspan="2">RESULT: 10 g/dL (reference range1: 12-16 g/dL)</td>
                                </tr>

                                <tr>
                                    <td>
                                        <p>February 2, 2021</p>
                                        <a href="javascript:void(0)" class="btn-view-more" data-id="test_5">view more</a>
                                    </td>
                                    <td>Total protein (serum)</td>
                                </tr>
                                <tr>
                                    <td class="view-more" id="test_5" colspan="2">RESULT:  10.2 g/dL (reference range1: 5.5-9.0 g/dL)</td>
                                </tr>

                                <tr>
                                    <td>
                                        <p>January 21, 2019</p>
                                        <a href="javascript:void(0)" class="btn-view-more" data-id="test_6">view more</a>
                                    </td>
                                    <td>Thyroid-stimulating hormone level (serum)</td>
                                </tr>
                                <tr>
                                    <td class="view-more" id="test_6" colspan="2"> RESULT: 1.1 mU/L (reference range1: 0.5-4.0 mU/L)</td>
                                </tr>

                                <tr>
                                    <td>
                                        <p>January 21, 2019</p>
                                        <a href="javascript:void(0)" class="btn-view-more" data-id="test_7">view more</a>
                                    </td>
                                    <td>Thyroxine (T4), free (serum)</td>
                                </tr>
                                <tr>
                                    <td class="view-more" id="test_7" colspan="2"> RESULT: 1.2 ng/dL (reference range1: 0.8-1.8 ng/dL)</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row mt-4 " id="menu_diagnosis">
                    <div class="col-md-12">
                        <p><i class="fas fa-clipboard p-2"></i>Diagnosis</p>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <th>NAME</th>
                                <th>START DATE</th>
                                <th>END DATE</th>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <p>Hashimoto’s thyroiditis</p>
                                    </td>
                                    <td>August 5, 2004</td>
                                    <td>Ongoing</td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Hypertension</p>
                                    </td>
                                    <td>June 8, 2001</td>
                                    <td>Ongoing</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row mt-4 " id="menu_orders">
                    <div class="col-md-12">
                        <p><i class="fas fa-clipboard p-2"></i>Orders</p>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <th>NAME</th>
                                <th>DOSE</th>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <p>Levothyroxine (oral) </p>
                                    </td>
                                    <td>75 mcg daily in the morning</td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Bendroflumethiazide (oral)</p>
                                    </td>
                                    <td>2.5 mg daily in the morning</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </li>

    {{--    <!-- Sidebar Toggler (Sidebar) -->--}}
    {{--    <div class="text-center d-none d-md-inline">--}}
    {{--        <button class="rounded-circle border-0" id="sidebarToggle"></button>--}}
    {{--    </div>--}}

</ul>
<!-- End of Sidebar -->
