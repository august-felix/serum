@extends('app')
@section('header_style')
    <style>
        .progressbar {
            counter-reset: step;
        }

        .progressbar li {
            list-style-type: none;
            width: 12%;
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
                            <div class="title">EDUCATIONAL IMPACT CHALLENGE</div>

                            <div class="mt-4">
                                <div class="d-flex align-items-center">
                                    <h5>Question 1. According to the 2021 National Comprehensive Cancer Network
                                        guidelines for MM,
                                        which of the following are preferred imaging modalities for the detection of
                                        bone lesions during the diagnostic workup of suspected MM?</h5>
                                    <p></p>
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
                                </ul>
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
@endsection()
