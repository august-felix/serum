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
    </style>
@endsection()
@section('content')

    <div class="row pt-5">
        <div class="col-md-12 main-section">
            <div class="card border-0">
                <div class="card-body bg-gray-100">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mt-4">
                                <div class="answer-section" id="quiz-3">
                                    <div>
                                        <audio controls autoplay>
                                            <source src="https://serum-myeloma.s3.amazonaws.com/Audio/14.mp3"
                                                    type="audio/mp3">
                                        </audio>
                                    </div>
                                    The correct answer is Option A, bortezomib/lenalidomide/dexamethasone (VRd). The
                                    2021 NCCN guidelines<sup>2</sup> recommend VRd as a category 1 treatment (preferred, high level
                                    of evidence, uniform panel agreement) for newly diagnosed MM (NDMM) patients who are
                                    eligible for transplant. This recommendation was based on data from a retrospective
                                    analysis of 1000 patients (751 patients eligible for ASCT) with NDMM who were
                                    treated with VRd induction.<sup>13</sup> The median progression-free survival (PFS) was 65
                                    months, median overall survival (OS) was 126.6 months, and the 10-year OS rates were
                                    29% and 58% for high- and standard-risk patients, respectively.
                                    <br><br>
                                    Option B, bortezomib/cyclophosamide/dexamethasone (VCd), is incorrect. The 2021 NCCN
                                    guidelines<sup>2</sup> recommend VCd for newly diagnosed, transplant-eligible MM patients who
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
                                    guidelines<sup>2</sup> lace KRD into a category 2a (lower level of evidence and uniform panel
                                    agreement) recommendation for newly diagnosed, transplant-eligible MM patients. A
                                    recent Phase II study<sup>15</sup> showed promising results with four cycles of KRd induction
                                    followed by ASCT, four cycles of KRd consolidation, and 10 cycles of KRd maintenance
                                    in 76 NDMM patients (35.5% with high-risk cytogenetics). The stringent complete
                                    response (sCR) rate was 60% after eight cycles. After a median follow-up of 56
                                    months, the 5-year PFS and OS rates were 72% and 84%.
                                    <br><br>
                                    Option D, daratumumab/bortezomib/lenalidomide/dexamethasone (DaraVRd), is incorrect.
                                    The 2021 NCCN guidelines<sup>2</sup> place DaraVRd into a category 2A (lower level of evidence
                                    and uniform panel agreement) recommendation for newly diagnosed, transplant-eligible
                                    MM patients. The available data are promising. In the Phase II GRIFFIN study,<sup>16</sup> 207
                                    patients were randomized to receive four cycles of DaraVRd or VRd induction followed
                                    by ASCT, DaraVRd or VRd consolidation for two cycles, and DaraR or R (lenalidomide)
                                    maintenance for 26 cycles. The 24-month PFS rates were 95.8% for DaraVRd and 89.8%
                                    for VRd.
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
