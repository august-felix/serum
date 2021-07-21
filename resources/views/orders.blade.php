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
            top: 340px;
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
{{--                            <div class="title">Orders</div>--}}
                            <div class="mt-3 d-flex justify-content-between">
                                <audio controls <?php if(Request::get('flag') == false) echo "autoplay" ?>>
                                    <source src="https://serum-myeloma.s3.amazonaws.com/Audio/15.mp3" type="audio/mp3">
                                </audio>
                                <form class="d-flex m-0" method="post" action="/complete-drag">
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-primary">Reveal complete answers</button>
                                </form>
                            </div>
                            <div class="mt-3">
                                <p>Sarah receives four cycles of VRd. She develops Grade 2 thrombocytopenia and anemia on
                                treatment. You prescribe the appropriate supportive care options during her MM
                                    treatment.</p>
                                <p>SUPPORTIVE CARE OPTIONS (ADD OR REMOVE OPTIONS FROM THE LIST BELOW. PLEASE PRESCRIBE ALL
                                APPROPRIATE OPTIONS AS RECOMMENDED BY THE 2021 NCCN GUIDELINES<sup>2</sup> AND THE 2019 AMERICAN
                                    SOCIETY OF CLINICAL ONCOLOGY [ASCO]/CANCER CARE ONTARIO [CCO] GUIDELINES<sup>17</sup>.)</p>
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" name="search" id="search"/>
                            </div>
                            <div class="bg-white shadow" id="result">

                            </div>
                            <div class="table-responsive">
                                <table class="table bordered table-hover">
                                    <thead>
                                    <th>Medication</th>
                                    <th>Guidance/Notes</th>
                                    <th>Action</th>
                                    </thead>
                                    <tbody id="tableBody">
                                    <?php foreach($returndata as $data) { ?>
                                    <tr>
                                        <td>{{$data['data']->name}}</td>
                                        <td>{!!  $data['data']->prompt!!}</td>
                                        <td class="text-center"><a href="/deletedragdata/{{$data['data']->id}}"><i class="fa fa-trash"></i></a></td>
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
    <script>
        $('#search').on('input', function () {
            var keyvalue = $(this).val();
            $.ajax({
                type: 'POST',
                url: '/searchDrag',
                data: {"_token": "{{ csrf_token() }}", key: keyvalue},
                success: function (data) {
                    $('#result').show();
                    var body = "";
                    for (var i = 0; i < data.length; i++) {
                        var content = '<div class="mt-2 item" data-id="' + data[i]['id'] + '">' + data[i]['name'] + '</div>';
                        body += content;
                    }
                    $('#result').html(body);
                }
            });
        })
        $(document).on("click", "div.item", function () {
            var id = $(this).data("id");
            console.log(id);
            $.ajax({
                type: 'POST',
                url: '/saveDrag',
                data: {"_token": '{{csrf_token()}}', id: id},
                success: function(data) {
                    $('#tableBody').empty();
                    for(var i = 0; i < data.length; i ++){
                        var content = "";
                        content = `<tr>
                                        <td>${data[i]['data']['name']}</td>
                                        <td>${data[i]['data']['prompt']}</td>
                                        <td class="text-center"><a href="/deleteTest/${data[i]['data']["id"]}"><i class="fa fa-trash"></i></a></td>
                                   </tr>`;
                        $('#tableBody').append(content);
                    }
                    console.log(data);
                }
            });
            $('#result').hide();
        });
    </script>
@endsection()

