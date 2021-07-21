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
        .stage{
            display:none;
        }
        .card-tests {
            min-height: 60vh;
        }
    </style>
@endsection()
@section('content')
    <div class="row pt-5">
        <div class="col-md-12 main-section">
            <div class="card border-0 card-tests">
                <div class="card-body bg-gray-100">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mt-3">
                                <p class="px-3">
                                    <p class="px-3">SELECT THE CORRECT REVISED INTERNATIONAL STAGING SYSTEM (R-ISS)
                                        STAGE</p>
                                </p>
                            </div>
                            <div class="mt-3">
                                <audio controls autoplay>
                                    <source src="https://serum-myeloma.s3.amazonaws.com/Audio/11.mp3" type="audio/mp3">
                                </audio>
                            </div>
                            <div class="mt-3">
                                <select class="form-control choose">
                                    <option value="0">--- Choose One ---</option>
                                    <option value="1">Stage I</option>
                                    <option value="2">Stage II</option>
                                    <option value="3">Stage III</option>
                                </select>
                            </div>
                            <div class="mt-3 ml-5">
                                <div class="mt-3 stage" id="stage1">
                                    <p class="mt-3 ml-1">
                                        ●	The Revised International Staging System (R-ISS) is recommended for risk stratification and prognostication<sup>3,12</sup>
                                    </p>
                                    <p class="mt-3 ml-1">
                                        ●	Stage I: All of the following:
                                    </p>
                                    <p class="mt-3 ml-3">
                                        ○	Serum albumin ≥3.5 gm/dL
                                    </p>
                                    <p class="mt-3 ml-3">
                                        ○	Serum β2-microglobulin <3.5 mg/L
                                    </p>
                                    <p class="mt-3 ml-3">
                                        ○	No high-risk cytogenetics
                                    </p>
                                    <p class="mt-3 ml-3">
                                        ○	Normal serum lactate dehydrogenase level
                                    </p>
                                </div>
                                <div class="mt-3 stage" id="stage2">
                                    <p class="mt-3 ml-1">
                                        ●	The Revised International Staging System (R-ISS) is recommended for risk stratification and prognostication<sup>3,12</sup>
                                    </p>
                                    <p class="mt-3 ml-1">
                                        ●	Stage II: Not fitting Stage I or III
                                    </p>
                                </div>
                                <div class="mt-3 stage" id="stage3">
                                    <p>The correct stage is III due to serum β2-microglobulin >5.5 mg/L (5.7 mg/L); high risk
                                        cytogenetics [t(4;14)]; and elevated serum lactate dehydrogenase level (340 U/L).<sup>3</sup></p>
                                    <p class="mt-3 ml-1">
                                        ●	The Revised International Staging System (R-ISS) is recommended for risk stratification and prognostication<sup>3,12</sup>
                                    </p>
                                    <p class="mt-3 ml-1">
                                        ●	Stage III: Both of the following:
                                    </p>
                                    <p class="mt-3 ml-3">
                                        ○	Serum β2-microglobulin >5.5 mg/L
                                    </p>
                                    <p class="mt-3 ml-3">
                                        ○	High risk cytogenetics [eg, t(4;14), t(14;16), del(17p)] OR elevated serum lactate dehydrogenase level
                                    </p>
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
        $('.choose').click(function(){
            var value =$(this).val();
            if(value == "3"){ // stage III
                $('#stage1').hide();
                $('#stage2').hide();
                $('#stage3').show();
            } else if (value == "2") { // stage II
                $('#stage1').hide();
                $('#stage2').show();
                $('#stage3').hide();
            } else if (value == "1"){ // stage I
                $('#stage1').show();
                $('#stage2').hide();
                $('#stage3').hide();
            } else {
            }
        })
    </script>
@endsection()

