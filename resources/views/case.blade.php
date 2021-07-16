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

        .case-card {
            min-height: 60vh;
        }

        .question {
            list-style-type: none;
        }

        .question li:hover p {
            color: #6bc5d0;
            cursor: pointer;
        }

        .question li:hover button {
            background: #6bc5d0;
            border-color: #6bc5d0;
        }
    </style>
@endsection()
@section('content')
    <div class="row pt-5">
        <div class="col-md-12 main-section">
            <div class="card border-0 case-card">
                <div class="card-body bg-gray-100">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mt-3">
                                <audio controls autoplay>
                                    <source src="https://serum-myeloma.s3.amazonaws.com/Audio/27.mp3" type="audio/mp3">
                                </audio>
                            </div>
                            <div class="mt-4">
                                <ul class="nav nav-tabs">
                                    <li class="active m-3"><a data-toggle="tab" href="#home">Closing Remarks</a></li>
                                    <li class="m-3"><a data-toggle="tab" href="#literature">Literature Review</a></li>
                                    <li class="m-3"><a data-toggle="tab" href="#summary">Summary</a></li>
                                    <li class="m-3"><a data-toggle="tab" href="#menu3">Peer Status</a></li>
                                </ul>

                                <div class="tab-content">
                                    <div id="home" class="tab-pane active">
                                        <p class="p-3">
                                            You discuss the options with Sarah. You avoid KPd in view of her cardiac
                                            issues, and as she has already progressed while on daratumumab, you
                                            recommend initiating treatment with EloPd, to which she agrees. She
                                            tolerates treatment with Grade 2 neutropenia that is managed with
                                            granulocyte colony-stimulating factor (G-CSF) therapy. You continue to
                                            monitor her every 3 months.
                                        </p>
                                    </div>
                                    <div id="literature" class="tab-pane fade">
                                        <p class="mt-3">References</p>
                                        <ol>
                                            <li>
                                                <p>ABIM Laboratory Test Reference Ranges – January 2021. American Board
                                                    of
                                                    Internal Medicine. Available from:
                                                    https://www.abim.org/~/media/ABIM%20Public/Files/pdf/exam/laboratory-reference-ranges.pdf.</p>
                                            </li>
                                            <li><p>National Comprehensive Cancer Network. Multiple myeloma (version
                                                    4.2021).
                                                    Available from:
                                                    https://www.nccn.org/professionals/physician_gls/PDF/myeloma.pdf.</p>
                                            </li>
                                            <li><p>Palumbo A, Avet-Loiseau H, Oliva S, et al. Revised International
                                                    Staging
                                                    System for Multiple Myeloma: A Report From International Myeloma
                                                    Working
                                                    Group. J Clin Oncol. 2015;33(26):2863–2869.</p></li>
                                            <li><p>Rajkumar SV. Multiple myeloma: 2020 update on diagnosis,
                                                    risk-stratification and management. Am J Hematol.
                                                    2020;95(5):548–567.</p></li>
                                            <li><p>O'Connell TX, Horita TJ, Kasravi B. Understanding and interpreting
                                                    serum
                                                    protein electrophoresis. Am Fam Physician. 2005;71(1):105–112.</p>
                                            </li>
                                            <li><p>Jenner E. Serum free light chains in clinical laboratory diagnostics.
                                                    Clinica Chimica Acta. 2014;427:15–20.</p></li>
                                            <li><p>Katzmann JA, Clark RJ, Abraham RS, et al. Serum reference intervals
                                                    and
                                                    diagnostic ranges for free κ and free λ immunoglobulin light chains:
                                                    relative sensitivity for detection of monoclonal light chains. Clin
                                                    Chem.
                                                    2002;48(9):1437–1444.</p></li>
                                            <li><p>Sonneveld P, Avet-Loiseau H, Lonial S, et al. Treatment of multiple
                                                    myeloma with high-risk cytogenetics: a consensus of the
                                                    International
                                                    Myeloma Working Group. Blood. 2016;127(24):2955–2962.</p></li>
                                            <li><p>Hillengass J, Usmani S, Rajkumar SV, et al. International Myeloma
                                                    Working
                                                    Group consensus recommendations on imaging in monoclonal plasma cell
                                                    disorders. Lancet Oncol. 2019;20(6):e302–e312.</p></li>
                                            <li><p>Hinge M, Andersen KT, Lund T, et al. Baseline bone involvement in
                                                    multiple myeloma – a prospective comparison of conventional X-ray,
                                                    low-dose
                                                    computed tomography, and 18flourodeoxyglucose [sic] positron
                                                    emission
                                                    tomography in previously untreated patients. Haematologica.
                                                    2016;101(10):e415–e418.</p></li>
                                            <li><p>Barwick T, Bretsztajn L, Wallitt K, Amiras D, Rockall A, Messiou C.
                                                    Imaging in myeloma with focus on advanced imaging techniques. Br J
                                                    Radiol.
                                                    2019;92(1095):20180768.</p></li>
                                            <li><p>Rajkumar SV, Dimopoulos MA, Palumbo A, et al. International Myeloma
                                                    Working Group updated criteria for the diagnosis of multiple
                                                    myeloma. Lancet
                                                    Oncol. 2014;15(12):e538–548.</p></li>
                                            <li><p>Joseph NS, Kaufman JL, Dhodapkar MV, et al. Long-term follow-up
                                                    results
                                                    of lenalidomide, bortezomib, and dexamethasone induction therapy and
                                                    risk-adapted maintenance approach in newly diagnosed multiple
                                                    myeloma. J
                                                    Clin Oncol. 2020;38(17):1928–1937.</p></li>
                                            <li><p>Uttervall K, Borg Bruchfeld J, Gran C, et al. Upfront bortezomib,
                                                    lenalidomide, and dexamethasone compared to bortezomib,
                                                    cyclophosphamide,
                                                    and dexamethasone in multiple myeloma. Eur J Haematol.
                                                    2019;103(3):247–254.</p></li>
                                            <li><p>Jasielec JK, Kubicki T, Raje N, et al. Carfilzomib, lenalidomide, and
                                                    dexamethasone plus transplant in newly diagnosed multiple myeloma.
                                                    Blood.
                                                    2020;136(22):2513–2523.</p></li>
                                            <li><p>Voorhees PM, Kaufman JL, Laubach J, et al. Daratumumab, lenalidomide,
                                                    bortezomib, and dexamethasone for transplant-eligible newly
                                                    diagnosed
                                                    multiple myeloma: the GRIFFIN trial. Blood. 2020;136(8):936–945.</p>
                                            </li>
                                            <li><p>Mikhael J, Ismaila N, Cheung MC, et al. Treatment of multiple
                                                    myeloma:
                                                    ASCO and CCO joint clinical practice guideline. J Clin Oncol.
                                                    2019;37(14):1228–1263.</p></li>
                                            <li><p>ARANESP® (darbepoetin alfa) injection. Prescribing information. Amgen
                                                    Inc. Revised January 2019. Available from:
                                                    https://www.pi.amgen.com/~/media/amgen/repositorysites/pi-amgen-com/aranesp/ckd/aranesp_pi_hcp_english.pdf.</p>
                                            </li>
                                            <li><p>National Comprehensive Cancer Network. Cancer-associated venous
                                                    thromboembolic disease (version 1.2020). Available from:
                                                    https://www.nccn.org/professionals/physician_gls/pdf/vte.pdf.</p>
                                            </li>
                                            <li><p>Kumar S, Paiva B, Anderson KC, et al. International Myeloma Working
                                                    Group consensus criteria for response and minimal residual disease
                                                    assessment in multiple myeloma. Lancet Oncol.
                                                    2016;17(8):e328–e346.</p></li>
                                            <li><p>Palumbo A, Chanan-Khan A, Weisel K, et al. Daratumumab, bortezomib,
                                                    and
                                                    dexamethasone for multiple myeloma. N Engl J Med.
                                                    2016;375(8):754–766.</p></li>
                                            <li><p>Spencer A, Lentzsch S, Weisel K, et al. Daratumumab plus bortezomib
                                                    and
                                                    dexamethasone versus bortezomib and dexamethasone in relapsed or
                                                    refractory
                                                    multiple myeloma: updated analysis of CASTOR. Haematologica.
                                                    2018;103(12):2079–2087.</p></li>
                                            <li><p>Dimopoulos M, Quach H, Mateos MV, et al. Carfilzomib, dexamethasone,
                                                    and
                                                    daratumumab versus carfilzomib and dexamethasone for patients with
                                                    relapsed
                                                    or refractory multiple myeloma (CANDOR): results from a randomised,
                                                    multicentre, open-label, phase 3 study. Lancet.
                                                    2020;396(10245):186–197.</p></li>
                                            <li><p>Dimopoulos M, Quach H, Mateos Maria-Victora et al. Carfilzomib,
                                                    Dexamethasone, and Daratumumab Versus Carfilzomib and Dexamethasone
                                                    in
                                                    Relapsed or Refractory Multiple Myeloma: Updated Efficacy and Safety
                                                    Results
                                                    of the Phase 3 CANDOR Study Presented at the 62nd American Society
                                                    of
                                                    Hematology Annual Meeting and Exposition, Virtual Meeting; December
                                                    5-8,
                                                    2020. Session name: 653. Myeloma: Therapy, excluding
                                                    Transplantation: Poster
                                                    II Date: Sunday, December 6, 2020. Abstract No 2325. Available at:
                                                    https://www.myeloma.org/videos/updated-efficacy-safety-results-phase-3-candor-study.
                                                    Accessed 24 March 2021.</p></li>
                                            <li><p>Attal M, Richardson PG, Rajkumar SV, et al. Isatuximab plus
                                                    pomalidomide
                                                    and low-dose dexamethasone versus pomalidomide and low-dose
                                                    dexamethasone in
                                                    patients with relapsed and refractory multiple myeloma (ICARIA-MM):
                                                    a
                                                    randomised, multicentre, open-label, phase 3 study. Lancet.
                                                    2019;394(10214):2096–2107.</p></li>
                                            <li><p>Krishnan A, Kapoor P, Palmer JM, et al. Phase I/II trial of the oral
                                                    regimen ixazomib, pomalidomide, and dexamethasone in
                                                    relapsed/refractory
                                                    multiple myeloma. Leukemia. 2018;32(7):1567–1574.</p></li>
                                            <li><p>Dimopoulos MA, Dytfeld D, Grosicki S, et al. Elotuzumab plus
                                                    pomalidomide and dexamethasone for multiple myeloma. N Engl J Med.
                                                    2018;379(19):1811–1822.</p></li>
                                            <li><p>Sonneveld P, Zweegman S, Cavo M, et al. Carfilzomib, pomalidomide and
                                                    dexamethasone (KPd) in patients with multiple myeloma refractory to
                                                    bortezomib and lenalidomide. The EMN011 trial. Blood.
                                                    2018;132(Suppl.
                                                    1):801.</p></li>
                                        </ol>
                                        <div class="table-responsive mt-5">
                                            <table class="table bordered table-hover">
                                                <thead>
                                                <th>Educational Gaps</th>
                                                <th>Learning Objectives</th>
                                                </thead>
                                                <tbody id="tableBody">
                                                <tr>
                                                    <td>HCPs may lack familiarity with recent advances in imaging,
                                                        assessment, and genomics, with key implications for the
                                                        diagnostic and prognostic workup standards in newly diagnosed
                                                        multiple myeloma (NDMM).
                                                    </td>
                                                    <td>Discuss the MM disease continuum and disease burden

                                                        Review evidence- and guideline-based strategies for diagnostic
                                                        workups, genetic/molecular assessments, and risk assessment
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>HCPs demonstrate suboptimal knowledge of the mechanisms of
                                                        action, clinical data, and risk-benefit profiles of new agents
                                                        and lack confidence in integrating new agents into routine
                                                        clinical practice.
                                                    </td>
                                                    <td>
                                                        Evaluate clinical data for new and emerging therapies to
                                                        facilitate selection of optimal treatment options based on
                                                        current guideline recommendations and expert recommendations

                                                        Describe adverse effect profiles of approved therapies to enable
                                                        incorporation of best practices for providing supportive care
                                                        measures to mitigate/manage side effects associated with
                                                        specific therapies
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        MM management needs an individualized approach that accounts for
                                                        a range of patient-, disease-, and treatment-related factors.
                                                        Significant barriers and suboptimal practice patterns have been
                                                        reported, which may hamper the HCP’s ability to individualize MM
                                                        management.
                                                    </td>
                                                    <td>
                                                        Devise personalized treatment plans based on patient-, disease-,
                                                        and treatment-related factors while providing opportunities for
                                                        patient engagement, education, and shared decision-making
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div id="summary" class="tab-pane fade">
                                        <div class="table-responsive">
                                            <table class="table bordered table-hover">
                                                <thead>
                                                <th>Educational Gaps</th>
                                                <th>Learning Objectives</th>
                                                </thead>
                                                <tbody id="tableBody">
                                                <tr>
                                                    <td>HCPs may lack familiarity with recent advances in imaging,
                                                        assessment, and genomics, with key implications for the
                                                        diagnostic and prognostic workup standards in newly diagnosed
                                                        multiple myeloma (NDMM).
                                                    </td>
                                                    <td>Discuss the MM disease continuum and disease burden

                                                        Review evidence- and guideline-based strategies for diagnostic
                                                        workups, genetic/molecular assessments, and risk assessment
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>HCPs demonstrate suboptimal knowledge of the mechanisms of
                                                        action, clinical data, and risk-benefit profiles of new agents
                                                        and lack confidence in integrating new agents into routine
                                                        clinical practice.
                                                    </td>
                                                    <td>
                                                        Evaluate clinical data for new and emerging therapies to
                                                        facilitate selection of optimal treatment options based on
                                                        current guideline recommendations and expert recommendations

                                                        Describe adverse effect profiles of approved therapies to enable
                                                        incorporation of best practices for providing supportive care
                                                        measures to mitigate/manage side effects associated with
                                                        specific therapies
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        MM management needs an individualized approach that accounts for
                                                        a range of patient-, disease-, and treatment-related factors.
                                                        Significant barriers and suboptimal practice patterns have been
                                                        reported, which may hamper the HCP’s ability to individualize MM
                                                        management.
                                                    </td>
                                                    <td>
                                                        Devise personalized treatment plans based on patient-, disease-,
                                                        and treatment-related factors while providing opportunities for
                                                        patient engagement, education, and shared decision-making
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div id="menu3" class="tab-pane fade">
                                        <p class="p-3">
                                            You discuss the options with Sarah. You avoid KPd in view of her cardiac
                                            issues, and as she has already progressed while on daratumumab, you
                                            recommend initiating treatment with EloPd, to which she agrees. She
                                            tolerates treatment with Grade 2 neutropenia that is managed with
                                            granulocyte colony-stimulating factor (G-CSF) therapy. You continue to
                                            monitor her every 3 months.
                                        </p>
                                    </div>
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
@endsection()

