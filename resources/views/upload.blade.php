@extends('app')
@section('header_style')
@endsection()
@section('content')
    <div class="row pt-5 min-vh-100">
        <div class="col-md-6">
            <div class="card border-0">
                <div class="card-header">
                    <h5>Test Upload</h5>
                </div>

                <div class="card-body shadow">
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="project">Project Title</label>
                                    <input type="text" class="form-control" name="project"/>
                                </div>
                                <div class="form-group">
                                    <label for="project">Project Source (CSV)</label>
                                    <input type="file" class="form-control" name="project"/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <button class="btn btn-primary">Upload</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card border-0">
                <div class="card-header">
                    <h5>Diagnosis Upload</h5>
                </div>
                <div class="card-body shadow">
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="project">Project Title</label>
                                    <input type="text" class="form-control" name="project"/>
                                </div>
                                <div class="form-group">
                                    <label for="project">Project Source (CSV)</label>
                                    <input type="file" class="form-control" name="project"/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <button class="btn btn-info">Upload</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>


@endsection()
@section('footer_script')
@endsection()
