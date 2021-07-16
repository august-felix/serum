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

        /*.answer-section {*/
        /*    display: none;*/
        /*    color: #0000bd;*/
        /*    font-weight: bold;*/
        /*}*/


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
                                <div class="answer-section" id="quiz-5">
                                    <div>
                                        <audio controls autoplay>
                                            <source src="https://serum-myeloma.s3.amazonaws.com/Audio/26.mp3"
                                                    type="audio/mp3">
                                        </audio>
                                    </div>
                                    Option A (IsaPd): This option has a category 1 recommendation in the guidelines and
                                    is FDA-approved for patients who have received at least two prior lines of therapy,
                                    including a proteasome inhibitor and lenalidomide, which is the case for Sarah. The
                                    recommendation is supported by data from the open-label Phase III ICARIA-MM trial<sup>25</sup>
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
                                    lenalidomide-refractory patients are encouraging.<sup>26</sup> With a median follow-up of 11.9
                                    months, 48% achieved a partial response (PR) or better, with five patients (20%)
                                    achieving very good partial response (VGPR) and 76% experiencing stable disease or
                                    better. The most common Grade 3/4 AEs were anemia, neutropenia, thrombocytopenia,
                                    and infections. Peripheral neuropathy was infrequent.
                                    <br><br>
                                    Option C (EloPd): EloPd has a category 2A recommendation in the NCCN guidelines and
                                    is FDA-approved for patients who have received at least two prior lines of therapy,
                                    including an immunomodulatory agent and a proteasome inhibitor. This recommendation
                                    is supported by data from the Phase II ELOQUENT-3 study<sup>27</sup> that randomized 117
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
                                    based on promising Phase II data from the EMN011 trial<sup>28</sup> in which 60 patients with
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
