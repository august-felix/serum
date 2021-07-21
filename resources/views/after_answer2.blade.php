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
                                            <source src="https://serum-myeloma.s3.amazonaws.com/Audio/06.mp3"
                                                    type="audio/mp3">
                                        </audio>
                                    </div>
                                    Answer text: The correct answer is Option A. The 2021 NCCN guidelines<sup>2</sup>
                                    recommend
                                    that all MM patients receiving primary myeloma therapy receive bisphosphonates
                                    (category 1 evidence) or denosumab (preferred in patients with renal insufficiency).
                                    <br><br>
                                    Option B is incorrect. The guidelines recommend initiating recombinant human
                                    erythropoietin for myeloma-associated anemia (hemoglobin level <10.0 g/dL) if other
                                    causes of anemia have been excluded.
                                    <br><br>
                                    Option C is incorrect. The guidelines note that intravenous immunoglobulin
                                    prophylaxis is not routinely recommended in MM but is recommended in patients with
                                    low IgG levels (<400-500 mg of IgG) and recurrent severe infections.
                                    <br><br>
                                    Option D is incorrect. The guidelines recommend aspirin only in patients undergoing
                                    immunomodulator therapy who are at low risk of thrombotic events. Higher-risk
                                    patients should receive therapeutic anticoagulation.
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
