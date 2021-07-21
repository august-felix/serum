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
    </style>
@endsection()
@section('content')
    <div class="row pt-5">
        <div class="col-md-12 main-section">
            <div class="card border-0">
                <div class="card-body bg-gray-100">
                    <div class="row">
                        <div class="col-md-12">
                            {{--                            <div class="title">CASE DESCRIPTION:</div>--}}
                            <div class="mt-3 d-flex justify-content-between align-items-center">
                                <audio controls autoplay>
                                    <source src="https://serum-myeloma.s3.amazonaws.com/Audio/18.mp3" type="audio/mp3">
                                </audio>
                            </div>
                            <div class="mt-3">
                                <ul>
                                    <li>
                                        The quality and the depth of response have improved over the last 10 years in
                                        the context of novel agent-based therapies, allowing for the introduction of new
                                        response grades for MRD by the IMWG.<sup>20</sup>
                                    </li>
                                    <li style="list-style-type: none;">
                                        <div class="table-responsive mt-3">
                                            <table class="table bordered table-hover">
                                                <thead>
                                                <th width="30%">Response subcategory</th>
                                                <th>Response Criteria</th>
                                                </thead>
                                                <tbody id="tableBody">
                                                <tr>
                                                    <td>Sustained MRD-negative</td>
                                                    <td>MRD-negative in the marrow (next-generation flow cytometry and/or NGS) and
                                                        by imaging as defined below, confirmed 1 year apart. Subsequent evaluations
                                                        can be used to further specify the duration of
                                                        negativity (eg, MRD-negative at 5 years).
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Flow MRD-negative</td>
                                                    <td>Absence of phenotypically aberrant clonal plasma cells by next-generation
                                                        ﬂow cytometry on bone marrow aspirates using the EuroFlow standard operation
                                                        procedure for MRD detection in MM (or validated equivalent method) with a
                                                        minimum sensitivity of 1 in 10<sup>5</sup> nucleated cells or higher.
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Sequencing MRD-negative</td>
                                                    <td>Absence of clonal plasma cells by NGS on bone marrow aspirates, in which
                                                        presence of a clone is defined as less than two identical sequencing reads
                                                        obtained after DNA sequencing of bone aspirates using the LymphoSIGHT®
                                                        platform (or validated equivalent method), with a minimum sensitivity of 1
                                                        in 10<sup>5</sup> nucleated cells or higher.
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Imaging MRD-negative</td>
                                                    <td>MRD-negative as defined by next-generation flow cytometry or NGS, plus
                                                        disappearance of every area of increased tracer uptake found at baseline or
                                                        a preceding PET-CT, or decrease
                                                        to less than mediastinal blood pool standardized uptake value, or decrease
                                                        to less than that of surrounding normal tissue.
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </li>
                                    <li>
                                        There is insufficient evidence to make modifications to maintenance therapy
                                        based on depth of response, including MRD status.<sup>2,17</sup>
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
