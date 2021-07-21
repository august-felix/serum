@extends('app')
@section('header_style')
    <style>
        .progressbar {
            counter-reset: step;
        }

        .progressbar li {
            list-style-type: none;
            width: 7%;
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
        .btn-continue{
            display:none;
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
                            <p>EDUCATIONAL IMPACT CHALLENGE</p>
                            <div class="mb-3">
                                <audio controls autoplay>
                                    <source src="https://serum-myeloma.s3.amazonaws.com/Audio/05.mp3"
                                            type="audio/mp3">
                                </audio>
                            </div>
                            <div class="mt-4">
                                <div class="d-flex align-items-center">
                                    <p>Question 2. According to the 2021 National Comprehensive Cancer Network
                                        guidelines for multiple myeloma, which of the following supportive care options
                                        should be offered to all patients receiving primary myeloma therapy?</p>
                                </div>
                                <hr>
                                <ul class="question">
                                    <li class="d-flex align-items-center mb-3">
                                        <button class="btn btn-secondary">A</button>
                                        <p class="m-0 px-3">Bisphosphonates or denosumab</p>
                                    </li>
                                    <li class="d-flex align-items-center mb-3">
                                        <button class="btn btn-secondary">B</button>
                                        <p class="m-0 px-3">Erythropoietin</p>
                                    </li>
                                    <li class="d-flex align-items-center mb-3">
                                        <button class="btn btn-secondary">C</button>
                                        <p class="m-0 px-3">Intravenous immunoglobulin prophylaxis</p>
                                    </li>
                                    <li class="d-flex align-items-center mb-3">
                                        <button class="btn btn-secondary">D</button>
                                        <p class="m-0 px-3">Aspirin</p>
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
{{--    @include('next')--}}
@endsection()
@section('footer_script')
@endsection()
