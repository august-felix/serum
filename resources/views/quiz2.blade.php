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

        .question li:hover p {
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
        #answer_text {
            display: none;
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
                                <div>
                                    <audio controls autoplay>
                                        <source src="https://serum-myeloma.s3.amazonaws.com/Audio/21v2.mp3"
                                                type="audio/mp3">
                                    </audio>
                                </div>
                                <p>
                                    You recommend treatment with DaraVd, and Sarah agrees. In between her second and
                                    third cycles of treatment, she is admitted to the hospital with a non-ST segment
                                    elevation myocardial infarction. Following treatment, she is discharged on long-term
                                    aspirin and simvastatin. She completes eight cycles of DaraVd followed by ongoing
                                    daratumumab. A progression-free response of 7 months is achieved before a follow-up
                                    assessment shows disease progression. Treatment options are reviewed, in
                                    consultation with the patient, taking into account her high-risk cytogenetic
                                    abnormalities, previous treatments and related AEs, as well as her co-morbidities.
                                </p>

                            </div>
                            <div class="mt-4">
                                <div class="d-flex align-items-center">
                                    <p>Question 2. Which of the following treatment options for second-line therapy
                                        would you choose based on a category 1 recommendation (highest level of
                                        evidence) by the 2021 NCCN guidelines for MM? Select all answers that are
                                        correct.</p>
                                </div>
                                <hr>
                                <ul class="question">
                                    <li class="d-flex align-items-center mb-3">
                                        <button class="btn btn-secondary">A</button>
                                        <p class="m-0 px-3">DaraVd (daratumumab/bortezomib/dexamethasone) </p>
                                    </li>
                                    <li class="d-flex align-items-center mb-3">
                                        <button class="btn btn-secondary">B</button>
                                        <p class="m-0 px-3">DaraKd (daratumumab/carfilzomib/dexamethasone)</p>
                                    </li>
                                    <li class="d-flex align-items-center mb-3">
                                        <button class="btn btn-secondary">C</button>
                                        <p class="m-0 px-3">IsaPd (isatuximab/pomalidomide/dexamethasone)</p>
                                    </li>
                                    <li class="d-flex align-items-center mb-3">
                                        <button class="btn btn-secondary">D</button>
                                        <p class="m-0 px-3">PVd (pomalidomide/bortezomib/dexamethasone)</p>
                                    </li>
                                    <li class="d-flex justify-content-end align-items-right mb-3">
{{--                                        <a class="btn btn-info mr-3" id="answer_text" href="{{route('answer-2')}}">Answer Text</a>--}}
{{--                                        <a class="btn btn-success answer" href="{{$next}}">Submit Answer</a>--}}
                                    </li>
                                </ul>
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
            // $('.answer').click(function () {
            //     var id = "#" + $(this).data('id');
            //     $(id).slideToggle();
            // });
            // $('.question li').click(function(){
            //     $('#answer_text').show();
            // })
        })
    </script>
@endsection()
