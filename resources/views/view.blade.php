@extends('app')
@section('header_style')
@endsection()
@section('content')
    <div class="row pt-5 min-vh-100">
        <div class="col-md-4">
            <h4>Tests</h4>
            <div class="table-responsive">
                <table class="table table-striped bordered table-hover">
                    <thead>
                    <th>id</th>
                    <th>name</th>
                    <th>prompt</th>
                    <th>result1</th>
                    <th>result2</th>
                    </thead>
                    <tbody>
                    <?php
                        foreach( $tests as $index=>$item) { ?>
                        <tr>
                            <td>{{$index + 1}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->prompt}}</td>
                            <td>{{$item->result1}}</td>
                            <td>{{$item->result1}}</td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-md-4">
            <h4>Diagnosis</h4>
            <div class="table-responsive">
                <table class="table table-striped bordered table-hover">
                    <thead>
                    <th>id</th>
                    <th>name</th>
                    <th>prompt</th>
                    </thead>
                    <tbody>
                    <?php
                    foreach( $diagnosis as $index=>$item) { ?>
                    <tr>
                        <td>{{$index + 1}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->prompt}}</td>
                    </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-md-4">
            <h4>Drags</h4>
            <div class="table-responsive">
                <table class="table table-striped bordered table-hover">
                    <thead>
                    <th>id</th>
                    <th>name</th>
                    <th>prompt</th>
                    </thead>
                    <tbody>
                    <?php
                    foreach( $drags as $index=>$item) { ?>
                    <tr>
                        <td>{{$index + 1}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->prompt}}</td>
                    </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>

@endsection()
@section('footer_script')
@endsection()
