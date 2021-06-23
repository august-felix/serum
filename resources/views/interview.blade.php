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
        .progressbar li.active img{
            border: 5px solid #6bc5d0;
        }

        .progressbar li.active::after {
            background-color: #6bc5d0;
        }

        /*.progressbar li.active + li:after {*/
        /*    background-color: #55b776;*/
        /*}*/
        .progressbar li img{
            border-radius: 50px;
        }
    </style>
@endsection()
@section('content')
    <div class="row pt-5">
        <div class="col-md-12 main-section">
            <div class="card border-0">
                <div class="card-body bg-gray-100">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="title">Interview</div>
                            <div class="mt-3">
                                <audio controls>
                                    <source src="https://serum-myeloma.s3.amazonaws.com/Audio/07.mp3" type="audio/mp3">
                                </audio>
                            </div>
                            <div class="mt-3">
                                <h4>History of presenting illness</h4>
                                <p>Sarah is a 70-year-old woman presenting with fatigue and lower back pain. These
                                    symptoms both began at the same time about 6 months ago and have both been
                                    worsening. She has tried chiropractic care, which has not alleviated her symptoms.
                                    She reports that she has easily lost weight in the past few months, which has
                                    previously been a struggle for her. Prior to these past 6 months, she was in good
                                    health and led an active lifestyle, including volunteering at the school where she
                                    used to teach before retirement and regularly babysitting her grandchildren.
                                    Currently her symptoms make these activities impossible.</p>
                                <h4>
                                    Medical history
                                </h4>
                                <p>
                                    Sarah’s medical history is notable for hypertension for the past 18 years, which is
                                    currently controlled with bendroflumethiazide, and mild Hashimoto’s thyroiditis for
                                    the past 15 years, which is controlled with levothyroxine.
                                </p>
                                <h4>
                                    Family history and social history
                                </h4>
                                <p>Sarah’s parents are deceased and died in their 80s. Sarah has one brother (aged 73)
                                    who received chemotherapy for leukemia about 10 years ago. She cannot remember the
                                    type of leukemia. Sarah has a second brother (aged 75) with a 20-year history of
                                    hypertension. Last year, he experienced a myocardial infarction for which he
                                    underwent a coronary artery bypass graft. Sarah has been assisting her eldest
                                    brother as much as possible over the past year. Sarah has two daughters, aged 41 and
                                    43; both daughters have two children each. Sarah used to babysit her grandchildren
                                    regularly but is no longer able to do so due to her fatigue and back pain.</p>
                                <h4>
                                    Physical examination notes
                                </h4>
                                <p>The physical examination is notable for a low-grade fever (99.5 °F/37.5 °C) and
                                    abdominal tenderness. </p>
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
