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
            top: 160px;
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

        .card-tests {
            min-height: 60vh;
        }
        #correct_answer{
            display: none;
        }
        #fast_fact {
            display: none;
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
                                <div>
                                    <div class="mt-3">
                                        <audio controls autoplay>
                                            <source src="https://serum-myeloma.s3.amazonaws.com/Audio/10.mp3" type="audio/mp3">
                                        </audio>
                                    </div>
                                    <p class="mt-4">The correct diagnosis is MM due to:</p>
                                    <p class="ml-1">
                                        ??? ???10% clonal bone marrow (BM) plasma cells (62%)
                                    </p>
                                    <p class="ml-3">
                                        ??? positive CRAB criteria (Calcium elevation [hypercalcemia], Renal dysfunction,
                                        Anemia, and Bone disease [lesions])
                                    </p>
                                    <p class="ml-3">
                                        ??? An involved/uninvolved serum FLC ratio ???100 (ratio=108.75) and involved FLC
                                        concentration ???100 mg/dL (870 mg/dL)
                                    </p>
                                    <p class="ml-3">
                                        ??? Lytic bone lesion(s) on CT.
                                    </p>
                                    <p class="ml-3">
                                        ??? The criteria for diagnosis of MM were updated in 2014 by the International Myeloma
                                        Working Group (IMWG)
                                    </p>
                                    <p class="ml-3">
                                        ??? Diagnosis requires ???10% clonal BM plasma cells, or biopsy-proven bony or
                                        extra-medullary plasmacytoma, PLUS any ONE of the following myeloma-defining events:
                                    </p>
                                    <p class="ml-5">
                                        o Evidence of end-organ damage that is related to the underlying plasma cell
                                        disorder (CRAB criteria). Of note, renal insufficiency can be defined not only by
                                        creatinine >2 mg/dL but also by creatinine clearance <40 mL/min.
                                    </p>
                                    <p class="ml-5">
                                        o Any biomarkers of malignancy:
                                    </p>
                                    <p class="ml-5">
                                        ??? ???60% clonal BM plasma cells
                                    </p>
                                    <p class="ml-5">
                                        ??? Involved/uninvolved serum FLC ratio ???100 and involved FLC concentration ???100 mg/dL
                                    </p>
                                    <p class="ml-5">
                                        ??? >1 focal lesion on MRI (each focal lesion must be ???5 mm in size)
                                    </p>
                                    <p class="ml-3">
                                        ??? According to the 2021 National Comprehensive Cancer Network (NCCN) guidelines for
                                        MM,<sup>2</sup> the preferred imaging modalities during the diagnostic workup for MM are
                                        whole-body, low-dose CT and fluorodeoxyglucose (FDG)-positron emission tomography
                                        (PET)/CT. Skeletal survey is significantly less sensitive at detecting bone
                                        lesions.<sup>10, 11</sup>
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

@endsection()

