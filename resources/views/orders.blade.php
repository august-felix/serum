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
            top: 165px;
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
    </style>
@endsection()
@section('content')
    <div class="row pt-5">
        <div class="col-md-12 main-section">
            <div class="card border-0 card-tests">
                <div class="card-body bg-gray-100">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="title">Orders</div>
                            <div class="mt-3">
                                <audio controls autoplay>
                                    <source src="https://serum-myeloma.s3.amazonaws.com/Audio/08.mp3" type="audio/mp3">
                                </audio>
                            </div>
                            <div class="table-responsive">
                                <table class="table bordered table-hover">
                                    <thead>
                                    <th>Name</th>
                                    <th>&nbsp;</th>
                                    <th>&nbsp;</th>
                                    <th>&nbsp;</th>
                                    </thead>
                                    <tbody>
                                    <?php foreach($returndata as $data) { ?>
                                    <tr>
                                        <td>{{$data->name}}</td>
{{--                                        <td>{{$data->prompt}}</td>--}}
{{--                                        <td>{{$data->result1}}</td>--}}
{{--                                        <td>{{$data->result2}}</td>--}}
{{--                                        <td class="text-center"><a href="/deleteTest/{{$data->id}}"><i class="fa fa-trash"></i></a></td>--}}
                                    </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
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

