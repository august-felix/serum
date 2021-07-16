@extends('app')
@section('header_style')
    <style>
        .progressbar {
            counter-reset: step;
        }

        .progressbar li {
            list-style-type: none;
            width: 8%;
            float: left;
            font-size: 18px;
            position: relative;
            text-align: center;
            z-index: 0;
        }

        .progressbar li:before {
            content: counter(step);
            counter-increment: step;
            width: 50px;
            height: 50px;
            line-height: 47px;
            border: 2px solid #7d7d7d;
            display: block;
            text-align: center;
            margin: 0 auto 10px auto;
            border-radius: 50%;
            background-color: white;
        }

        .progressbar li:after {
            width: 100%;
            height: 6px;
            content: '';
            position: absolute;
            background-color: #858796;
            top: 22px;
            z-index: -1;
        }

        .progressbar li a {
            color: #858796;
        }

        .progressbar li:last-child:after {
            content: none;
        }

        .progressbar li.active::before {
            border: 3px solid #6bc5d0;
        }

        .progressbar li.active a {
            color: #6bc5d0;
            font-weight: bold;
        }

        .progressbar li.active img {
            border: 5px solid #6bc5d0;
        }

        .progressbar li.active::after {
            background-color: #6bc5d0;
        }

        /*.progressbar li.active + li:after {*/
        /*    background-color: #55b776;*/
        /*}*/
        .progressbar li img {
            border-radius: 50px;
        }

        #result {
            position: absolute;
            top: 90px;
            right: 15px;
            left: 15px;
            border: 1px solid #d1d3e2;
            border-radius: 5px;
            display: none;
        }

        #result div {
            line-height: 1.5;
            padding: 10px;
        }

        #result div:hover {
            background: whitesmoke;

        }

        .question {
            list-style-type: none;
        }

        .question li:hover h5 {
            color: #6bc5d0;
            cursor: pointer;
        }

        .question li:hover button {
            background: #6bc5d0;
            border-color: #6bc5d0;
        }

        .answer-section {
            display: none;
            color: #0000bd;
            font-weight: bold;
        }

    </style>
@endsection()
@section('content')

    <div class="row pt-5">
        <div class="col-md-12 main-section">
            <div class="card border-0">
                <div class="card-body bg-gray-100">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="title">QUIZ</div>

                            <div class="mt-4">
                                <div class="d-flex align-items-center">
                                    <h5>Question 1. According to the 2021 National Comprehensive Cancer Network
                                        guidelines for MM,
                                        which of the following are preferred imaging modalities for the detection of
                                        bone lesions during the diagnostic workup of suspected MM?</h5>
                                    <div>
                                        <audio controls autoplay>
                                            <source src="https://serum-myeloma.s3.amazonaws.com/Audio/03.mp3"
                                                    type="audio/mp3">
                                        </audio>
                                    </div>
                                </div>
                                <hr>
                                <ul class="question">
                                    <li class="d-flex align-items-center mb-3">
                                        <button class="btn btn-secondary">A</button>
                                        <h5 class="m-0 px-3">Skeletal survey with conventional X-ray</h5>
                                    </li>
                                    <li class="d-flex align-items-center mb-3">
                                        <button class="btn btn-secondary">B</button>
                                        <h5 class="m-0 px-3">Whole body low dose CT</h5>
                                    </li>
                                    <li class="d-flex align-items-center mb-3">
                                        <button class="btn btn-secondary">C</button>
                                        <h5 class="m-0 px-3">Fluorodeoxyglucose (FDG)-positron emission tomography
                                            (PET)/CT</h5>
                                    </li>
                                    <li class="d-flex align-items-center mb-3">
                                        <button class="btn btn-secondary">D</button>
                                        <h5 class="m-0 px-3">B and C only </h5>
                                    </li>
                                    <li class="d-flex align-items-center mb-3">
                                        <button class="btn btn-secondary">E</button>
                                        <h5 class="m-0 px-3">A, B, and C</h5>
                                    </li>
                                    <li class="d-flex justify-content-end align-items-right mb-3">
                                        <button class="btn btn-success answer" data-id="quiz-1">Answer Text</button>
                                    </li>
                                </ul>
                                <div class="answer-section" id="quiz-1">
                                    The correct answer is D. According to the 2021 National Comprehensive Cancer Network
                                    guidelines for multiple myeloma,2 the preferred imaging modalities during the
                                    diagnostic workup for MM are whole body low dose CT and FDG PET/CT. Skeletal survey
                                    is significantly less sensitive at detecting bone lesions.10,11
                                    <hr>
                                </div>
                            </div>
                            <div class="mt-4">
                                <div class="d-flex align-items-center">
                                    <h5>Question 2. According to the 2021 National Comprehensive Cancer Network
                                        guidelines for multiple myeloma, which of the following supportive care options
                                        should be offered to all patients receiving primary myeloma therapy?</h5>
                                    <div>
                                        <audio controls>
                                            <source src="https://serum-myeloma.s3.amazonaws.com/Audio/05.mp3"
                                                    type="audio/mp3">
                                        </audio>
                                    </div>
                                </div>
                                <hr>
                                <ul class="question">
                                    <li class="d-flex align-items-center mb-3">
                                        <button class="btn btn-secondary">A</button>
                                        <h5 class="m-0 px-3">Bisphosphonates or denosumab</h5>
                                    </li>
                                    <li class="d-flex align-items-center mb-3">
                                        <button class="btn btn-secondary">B</button>
                                        <h5 class="m-0 px-3">Erythropoietin</h5>
                                    </li>
                                    <li class="d-flex align-items-center mb-3">
                                        <button class="btn btn-secondary">C</button>
                                        <h5 class="m-0 px-3">Intravenous immunoglobulin prophylaxis</h5>
                                    </li>
                                    <li class="d-flex align-items-center mb-3">
                                        <button class="btn btn-secondary">D</button>
                                        <h5 class="m-0 px-3">Aspirin</h5>
                                    </li>
                                    <li class="d-flex justify-content-end align-items-right mb-3">
                                        <button class="btn btn-success answer" data-id="quiz-2">Answer Text</button>
                                    </li>
                                </ul>
                                <div class="answer-section" id="quiz-2">
                                    The correct answer is Option A. The 2021 NCCN guidelines2 recommend that all MM
                                    patients receiving primary myeloma therapy receive bisphosphonates (category 1
                                    evidence) or denosumab (preferred in patients with renal insufficiency).
                                    <br><br>
                                    Option B is incorrect. The guidelines recommend initiating recombinant human
                                    erythropoietin for myeloma-associated anemia (hemoglobin level <10.0 g/dL) if other
                                    causes of anemia have been excluded.
                                    <br><br>
                                    Option C is incorrect. The guidelines note that intravenous immunoglobulin
                                    prophylaxis is not routinely recommended in MM but is recommended in patients with
                                    low IgG levels (<400-500 mg of IgG) and recurrent severe infections.
                                    <br><br>
                                    Option D is incorrect. The guidelines recommend aspirin only in patients undergoing
                                    immunomodulator therapy who are at low risk of thrombotic events. Higher-risk
                                    patients should receive therapeutic anticoagulation.
                                    <hr>
                                </div>
                            </div>

                            <div class="mt-4">
                                <div class="d-flex align-items-center">
                                    <h5>Question 3. Because Sarah is a relatively fit patient, she is determined to be a
                                        candidate for autologous stem cell transplantation (ASCT). Which of the
                                        following treatment options for induction therapy would you choose based on a
                                        category 1 recommendation (highest level of evidence) by the 2021 NCCN
                                        guidelines for MM?</h5>
                                    <div>
                                        <audio controls>
                                            <source src="https://serum-myeloma.s3.amazonaws.com/Audio/13.mp3"
                                                    type="audio/mp3">
                                        </audio>
                                    </div>
                                </div>
                                <hr>
                                <ul class="question">
                                    <li class="d-flex align-items-center mb-3">
                                        <button class="btn btn-secondary">A</button>
                                        <h5 class="m-0 px-3">VRd (bortezomib/lenalidomide/dexamethasone)</h5>
                                    </li>
                                    <li class="d-flex align-items-center mb-3">
                                        <button class="btn btn-secondary">B</button>
                                        <h5 class="m-0 px-3">VCd (bortezomib/cyclophosamide/dexamethasone) </h5>
                                    </li>
                                    <li class="d-flex align-items-center mb-3">
                                        <button class="btn btn-secondary">C</button>
                                        <h5 class="m-0 px-3">KRd (carfilzomib/lenalidomide/dexamethasone)</h5>
                                    </li>
                                    <li class="d-flex align-items-center mb-3">
                                        <button class="btn btn-secondary">D</button>
                                        <h5 class="m-0 px-3">DaraVRd
                                            (daratumumab/bortezomib/lenalidomide/dexamethasone)</h5>
                                    </li>
                                    <li class="d-flex justify-content-end align-items-right mb-3">
                                        <button class="btn btn-success answer" data-id="quiz-3">Answer Text</button>
                                    </li>
                                </ul>
                                <div class="answer-section" id="quiz-3">
                                    The correct answer is Option A, bortezomib/lenalidomide/dexamethasone (VRd). The
                                    2021 NCCN guidelines2 recommend VRd as a category 1 treatment (preferred, high level
                                    of evidence, uniform panel agreement) for newly diagnosed MM (NDMM) patients who are
                                    eligible for transplant. This recommendation was based on data from a retrospective
                                    analysis of 1000 patients (751 patients eligible for ASCT) with NDMM who were
                                    treated with VRd induction.13 The median progression-free survival (PFS) was 65
                                    months, median overall survival (OS) was 126.6 months, and the 10-year OS rates were
                                    29% and 58% for high- and standard-risk patients, respectively.
                                    <br><br>
                                    Option B, bortezomib/cyclophosamide/dexamethasone (VCd), is incorrect. The 2021 NCCN
                                    guidelines2 recommend VCd for newly diagnosed, transplant-eligible MM patients who
                                    have renal insufficiency or where VRd is not available. This recommendation has a
                                    category 2A rating (lower level of evidence, uniform panel agreement). Given that
                                    Sarah does not have renal insufficiency (creatinine: 0.8 mg/dL [reference range1:
                                    0.5-1.1 mg/dL]), VRd is the preferred option. This recommendation is supported by a
                                    Swedish retrospective study14 that compared outcomes for NDMM patients treated with
                                    frontline VRd (n=117; 71 with ASCT and 46 without ASCT) or VCd (n=564; 351 with ASCT
                                    and 213 without ASCT). PFS was significantly better at 18 months with VRD than with
                                    VCD in the entire population (88% vs 63%, P<0.001), the non‐ASCT group (82% vs 32%,
                                    P<0.001), and the ASCT group (91% vs 73%, P=0.022).
                                    <br><br>
                                    Option C, carfilzomib/lenalidomide/dexamethasone (KRd), is incorrect. The 2021 NCCN
                                    guidelines2 place KRD into a category 2a (lower level of evidence and uniform panel
                                    agreement) recommendation for newly diagnosed, transplant-eligible MM patients. A
                                    recent Phase II study15 showed promising results with four cycles of KRd induction
                                    followed by ASCT, four cycles of KRd consolidation, and 10 cycles of KRd maintenance
                                    in 76 NDMM patients (35.5% with high-risk cytogenetics). The stringent complete
                                    response (sCR) rate was 60% after eight cycles. After a median follow-up of 56
                                    months, the 5-year PFS and OS rates were 72% and 84%.
                                    <br><br>
                                    Option D, daratumumab/bortezomib/lenalidomide/dexamethasone (DaraVRd), is incorrect.
                                    The 2021 NCCN guidelines2 place DaraVRd into a category 2A (lower level of evidence
                                    and uniform panel agreement) recommendation for newly diagnosed, transplant-eligible
                                    MM patients. The available data are promising. In the Phase II GRIFFIN study,16 207
                                    patients were randomized to receive four cycles of DaraVRd or VRd induction followed
                                    by ASCT, DaraVRd or VRd consolidation for two cycles, and DaraR or R (lenalidomide)
                                    maintenance for 26 cycles. The 24-month PFS rates were 95.8% for DaraVRd and 89.8%
                                    for VRd.

                                    <hr>
                                </div>
                            </div>
                            <div class="mt-4">
                                <div class="d-flex align-items-center">
                                    <h5>Question 4. Which of the following treatment options for second-line therapy
                                        would you choose based on a category 1 recommendation (highest level of
                                        evidence) by the 2021 NCCN guidelines for MM? Select all answers that are
                                        correct.</h5>
                                    <div>
                                        <audio controls>
                                            <source src="https://serum-myeloma.s3.amazonaws.com/Audio/21.mp3"
                                                    type="audio/mp3">
                                        </audio>
                                    </div>
                                </div>
                                <hr>
                                <ul class="question">
                                    <li class="d-flex align-items-center mb-3">
                                        <button class="btn btn-secondary">A</button>
                                        <h5 class="m-0 px-3">DaraVd (daratumumab/bortezomib/dexamethasone) </h5>
                                    </li>
                                    <li class="d-flex align-items-center mb-3">
                                        <button class="btn btn-secondary">B</button>
                                        <h5 class="m-0 px-3">DaraKd (daratumumab/carfilzomib/dexamethasone)</h5>
                                    </li>
                                    <li class="d-flex align-items-center mb-3">
                                        <button class="btn btn-secondary">C</button>
                                        <h5 class="m-0 px-3">IsaPd (isatuximab/pomalidomide/dexamethasone)</h5>
                                    </li>
                                    <li class="d-flex align-items-center mb-3">
                                        <button class="btn btn-secondary">D</button>
                                        <h5 class="m-0 px-3">PVd (pomalidomide/bortezomib/dexamethasone)</h5>
                                    </li>
                                    <li class="d-flex justify-content-end align-items-right mb-3">
                                        <button class="btn btn-success answer" data-id="quiz-4">Answer Text</button>
                                    </li>
                                </ul>
                                <div class="answer-section" id="quiz-4">
                                    Option A (DaraVd): This option has a category 1 recommendation in the 2021 NCCN
                                    guidelines for second-line therapy in patients who cannot tolerate lenalidomide.2
                                    The recommendation is supported by data from the Phase III CASTOR trial,21,22 in
                                    which 498 patients with relapsed or refractory MM were randomized to receive DaraVd
                                    or Vd. After a median follow-up of 19.4 months, the median PFS was 16.7 months in
                                    the DVd group and 7.1 months in the Vd group (hazard ratio [HR], 0.31; 95%
                                    confidence interval [CI], 0.24–0.39; p<0.0001). Patients who had received 1 prior
                                    line of therapy (as is the case with Sarah) had the greatest benefit in PFS: not
                                    reached vs 7.9 months in the Vd group (HR, 0.19; 95% CI, 0.12-0.29; P<0.0001), and
                                    an 81% reduction in risk of disease progression or death with 18-month PFS of 68.0%
                                    versus 11.5%, respectively. The most common Grade 3/4 adverse events (AEs) included
                                    thrombocytopenia (45.3% in the DVd group and 32.9% in the Vd group), anemia (14.4%
                                    and 16.0%), and neutropenia (12.8% and 4.2%, respectively).
                                    <br>
                                    <br>
                                    Option B (DaraKd): This option has a category 1 recommendation in the 2021 NCCN
                                    guidelines for second-line therapy in patients who cannot tolerate lenalidomide.2
                                    The recommendation is supported by data from the Phase III CANDOR trial23 that
                                    enrolled 466 patients with relapsed/refractory MM who were randomized 2:1 to receive
                                    DaraKd or Kd. After median follow-up of 17 months, the median PFS was not reached in
                                    the DaraKd group and was 15.8 months in the Kd group (HR 0.63; 95% CI, 0.46–0.85;
                                    p=0.0027). The most common Grade 3/4 AEs were thrombocytopenia (25% in the DaraKd
                                    group vs. 16% in Kd group), anemia (17% vs. 14%), pneumonia (13% vs. 9%), and
                                    infusion-related reactions (12% vs. 5%). An update of this study in 2020 reported
                                    that median PFS (by ORCA, onyx response computer algorithm) was 28.6 months for the
                                    KdD group and 15.2 months for the Kd group.24
                                    <br>
                                    <br>
                                    Option C (IsaPd): This option has a category 1 recommendation in the guidelines for
                                    patients who have received at least two prior lines of therapy, including a
                                    proteasome inhibitor and lenalidomide. It is therefore not recommended in the
                                    second-line setting for Sarah.
                                    <br>
                                    <br>
                                    Option D (PVd): This option has a category 1 recommendation in the guidelines for
                                    patients who have received at least two prior lines of therapy, including an
                                    immunomodulatory agent and a proteasome inhibitor, and who have demonstrated disease
                                    progression on or within 60 days of completion of the last therapy. It is therefore
                                    not recommended in the second-line setting for Sarah.

                                    <hr>
                                </div>
                            </div>
                            <div class="mt-4">
                                <div class="d-flex align-items-center">
                                    <h5>Question 5. Which of the following options for third-line therapy is
                                        FDA-approved and a category 1 preferred option for MM for patients who have
                                        previously received lenalidomide and a protease inhibitor, per the 2021 NCCN
                                        guidelines? </h5>
                                    <div>
                                        <audio controls>
                                            <source src="https://serum-myeloma.s3.amazonaws.com/Audio/24.mp3"
                                                    type="audio/mp3">
                                        </audio>
                                    </div>
                                </div>
                                <hr>
                                <ul class="question">
                                    <li class="d-flex align-items-center mb-3">
                                        <button class="btn btn-secondary">A</button>
                                        <h5 class="m-0 px-3">IsaPd (isatuximab/pomalidomide/dexamethasone) </h5>
                                    </li>
                                    <li class="d-flex align-items-center mb-3">
                                        <button class="btn btn-secondary">B</button>
                                        <h5 class="m-0 px-3">IPd (ixazomib/pomalidomide/dexamethasone)</h5>
                                    </li>
                                    <li class="d-flex align-items-center mb-3">
                                        <button class="btn btn-secondary">C</button>
                                        <h5 class="m-0 px-3">EloPd (elotuzumab/pomalidomide/dexamethasone)</h5>
                                    </li>
                                    <li class="d-flex align-items-center mb-3">
                                        <button class="btn btn-secondary">D</button>
                                        <h5 class="m-0 px-3">KPd (carfilzomib/pomalidomide/dexamethasone)</h5>
                                    </li>
                                    <li class="d-flex justify-content-end align-items-right mb-3">
                                        <button class="btn btn-success answer" data-id="quiz-5">Answer Text</button>
                                    </li>
                                </ul>
                                <div class="answer-section" id="quiz-5">
                                    Option A (IsaPd): This option has a category 1 recommendation in the guidelines and
                                    is FDA-approved for patients who have received at least two prior lines of therapy,
                                    including a proteasome inhibitor and lenalidomide, which is the case for Sarah. The
                                    recommendation is supported by data from the open-label Phase III ICARIA-MM trial25
                                    that randomized 307 patients with relapse/refractory MM who had received at least
                                    two previous lines of treatment, including lenalidomide and a proteasome inhibitor,
                                    to IsaPd or Pd. At a median follow-up of 11.6 months, the median PFS was 11.5 months
                                    (95% CI, 8.9–13.9) in the IsaPd group and 6.5 months (95% CI, 4.5–8.3) in the Pd
                                    group (HR 0.596; 95% CI, 0.44–0.81; p=0.001). The most common Grade 3/4 AEs were
                                    neutropenia (85% in the IsaPd group vs. 70% in the Pd group), anemia (32% vs. 28%),
                                    thrombocytopenia (31% vs. 25%), and pneumonia (16% vs. 14%).
                                    <br><br>
                                    Option B (IPd): IPd has a category 2A recommendation in the NCCN guidelines for
                                    patients who have received at least two prior lines of therapy, including an
                                    immunomodulatory agent and a proteasome inhibitor. This option is not FDA-approved
                                    to date. Early data from an open-label Phase II trial that enrolled 51
                                    lenalidomide-refractory patients are encouraging.26 With a median follow-up of 11.9
                                    months, 48% achieved a partial response (PR) or better, with five patients (20%)
                                    achieving very good partial response (VGPR) and 76% experiencing stable disease or
                                    better. The most common Grade 3/4 AEs were anemia, neutropenia, thrombocytopenia,
                                    and infections. Peripheral neuropathy was infrequent.
                                    <br><br>
                                    Option C (EloPd): EloPd has a category 2A recommendation in the NCCN guidelines and
                                    is FDA-approved for patients who have received at least two prior lines of therapy,
                                    including an immunomodulatory agent and a proteasome inhibitor. This recommendation
                                    is supported by data from the Phase II ELOQUENT-3 study27 that randomized 117
                                    patients with relapsed/refractory MM to EloPd or Pd. All patients had received two
                                    or more previous lines of therapy, including lenalidomide and a proteasome
                                    inhibitor. After a minimum follow-up period of 9.1 months, the median PFS was 10.3
                                    months in the EloPd group and 4.7 months in the Pd group (HR 0.54; 95% CI,
                                    0.34–0.86; p=0.008). The most common Grade 3/4 AEs were neutropenia (13% in the
                                    EloPd group vs. 27% in the Pd group), anemia (10% vs. 20%), and hyperglycemia (8%
                                    vs. 7%).
                                    <br><br>
                                    Option D (KPd): KPd has a category 2A recommendation in the NCCN guidelines for
                                    patients who have received at least two prior lines of therapy, including an
                                    immunomodulatory agent and a proteasome inhibitor. Although Kd is FDA-approved for
                                    third-line MM treatment, KPd is not FDA-approved to date. The NCCN recommendation is
                                    based on promising Phase II data from the EMN011 trial28 in which 60 patients with
                                    relapsed MM that was refractory to bortezomib and lenalidomide were treated with up
                                    to eight cycles of open-label KPd followed by Kd maintenance. At a median follow-up
                                    of 16.3 months, the median PFS was 18 months. KPd-emerging non-hematologic Grade 3/4
                                    AEs included cardiovascular (5%) and respiratory issues (5%), infections (20%), and
                                    neuropathy (3%). KPd-emerging Grade 3/4 hematological toxicity occurred in 30% of
                                    patients.

                                    <hr>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('stepbar')
@endsection()
@section('footer_script')
    <script>
        $(function () {
            $('.answer').click(function () {
                var id = "#" + $(this).data('id');
                $(id).slideToggle();
            });
        })
    </script>
@endsection()
