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

        .case-card {
            min-height: 60vh;
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
            <div class="card border-0 case-card">
                <div class="card-body bg-gray-100">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="title">Case Interview</div>
                            <div class="mt-3">
                                <audio controls>
                                    <source src="https://serum-myeloma.s3.amazonaws.com/Audio/27.mp3" type="audio/mp3">
                                </audio>
                            </div>
                            <div class="mt-4">
                                <ul class="nav nav-tabs">
                                    <li class="active m-3"><a data-toggle="tab" href="#home">Closing Remarks</a></li>
                                    <li class="m-3"><a data-toggle="tab" href="#menu1">Literature Review</a></li>
                                    <li class="m-3"><a data-toggle="tab" href="#menu2">Performance Analysis</a></li>
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
                                    <div id="menu1" class="tab-pane fade">
                                        <p class="p-3">
                                            You discuss the options with Sarah. You avoid KPd in view of her cardiac
                                            issues, and as she has already progressed while on daratumumab, you
                                            recommend initiating treatment with EloPd, to which she agrees. She
                                            tolerates treatment with Grade 2 neutropenia that is managed with
                                            granulocyte colony-stimulating factor (G-CSF) therapy. You continue to
                                            monitor her every 3 months.
                                        </p>
                                    </div>
                                    <div id="menu2" class="tab-pane fade">
                                        <p class="p-3">
                                            You discuss the options with Sarah. You avoid KPd in view of her cardiac
                                            issues, and as she has already progressed while on daratumumab, you
                                            recommend initiating treatment with EloPd, to which she agrees. She
                                            tolerates treatment with Grade 2 neutropenia that is managed with
                                            granulocyte colony-stimulating factor (G-CSF) therapy. You continue to
                                            monitor her every 3 months.
                                        </p>
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

