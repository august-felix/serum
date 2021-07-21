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
        .card-tests {
            min-height: 60vh;
        }
    </style>
@endsection()
@section('content')
    <div class="row pt-5">
        <div class="col-md-12 main-section">
            <div class="card border-0">
                <div class="card-body bg-gray-100 card-tests">
                    <div class="row">
                        <div class="col-md-12">
{{--                            <div class="title">CASE DESCRIPTION: page 7</div>--}}
                            <div class="mt-3">
                                <audio controls autoplay>
                                    <source src="https://serum-myeloma.s3.amazonaws.com/Audio/19.mp3" type="audio/mp3">
                                </audio>
                            </div>
                            <div class="mt-3">
                                <p>You continue to follow Sarah every 3 months. She continues on lenalidomide
                                    maintenance but complains of Grade 2 diarrhea and Grade 1 rash with pruritus. You
                                    prescribe topical corticosteroids for the rash. You counsel her on dietary
                                    modifications for the diarrhea and refer her to the gastroenterology clinic for
                                    management. At her 1-year follow up, Sarah tells you that she has discontinued
                                    lenalidomide maintenance due to no longer being able to tolerate the diarrhea.
                                    Dietary modifications and medical management reduced the diarrhea to Grade 1 but
                                    were unsuccessful in completely mitigating it. </p>
                                <p>At her 2-year follow-up, Sarah returns complaining of pain in her right hip and fatigue. </p>
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
