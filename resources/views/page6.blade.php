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
{{--                            <div class="title">CASE DESCRIPTION:</div>--}}
                            <div class="mt-3 d-flex justify-content-between align-items-center">
                                <audio controls autoplay>
                                    <source src="https://serum-myeloma.s3.amazonaws.com/Audio/17.mp3" type="audio/mp3">
                                </audio>
                                <div>
                                <a href="/page6-fact" class="btn btn-primary">FAST FACTS</a>
                                </div>
                            </div>
                            <div class="mt-3">
                                <p>Sarah receives appropriate supportive care and is closely monitored. After induction
                                    treatment with VRd, she receives high-dose melphalan conditioning and ASCT, with
                                    lenalidomide maintenance treatment. At her 6-month follow-up, the serum and urine
                                    immunofixation electrophoresis tests are negative. The sFLC analysis reveals that
                                    the κ (involved) concentration is 7.6 mg/dL and the λ (uninvolved) sFLC
                                    concentration is 8.0 mg/dL. The involved/uninvolved sFLC ratio is 0.95. There is an
                                    absence of clonal cells in bone marrow biopsy by immunohistochemistry, and
                                    next-generation sequencing (NGS) confirms minimal residual disease (MRD) negativity
                                    (sequencing MRD-negativity).<sup>20</sup> </p>
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
