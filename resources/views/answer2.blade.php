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
                                <div class="answer-section">
                                    <div>
                                        <audio controls autoplay>
                                            <source src="https://serum-myeloma.s3.amazonaws.com/Audio/22.mp3"
                                                    type="audio/mp3">
                                        </audio>
                                    </div>
                                    Option A (DaraVd): This option has a category 1 recommendation in the 2021 NCCN
                                    guidelines for second-line therapy in patients who cannot tolerate lenalidomide.<sup>2</sup>
                                    The recommendation is supported by data from the Phase III CASTOR trial,<sup>21,22</sup> in
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
                                    guidelines for second-line therapy in patients who cannot tolerate lenalidomide.<sup>2</sup>
                                    The recommendation is supported by data from the Phase III CANDOR trial23 that
                                    enrolled 466 patients with relapsed/refractory MM who were randomized 2:1 to receive
                                    DaraKd or Kd. After median follow-up of 17 months, the median PFS was not reached in
                                    the DaraKd group and was 15.8 months in the Kd group (HR 0.63; 95% CI, 0.46–0.85;
                                    p=0.0027). The most common Grade 3/4 AEs were thrombocytopenia (25% in the DaraKd
                                    group vs. 16% in Kd group), anemia (17% vs. 14%), pneumonia (13% vs. 9%), and
                                    infusion-related reactions (12% vs. 5%). An update of this study in 2020 reported
                                    that median PFS (by ORCA, onyx response computer algorithm) was 28.6 months for the
                                    KdD group and 15.2 months for the Kd group.<sup>24</sup>
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
