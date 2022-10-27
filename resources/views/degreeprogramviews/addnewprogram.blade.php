@extends('layouts.master')

@section('content')
    <div class="container-fluid">

        <!-- Title & Breadcrumbs-->
        <div class="row page-titles">
            <div class="col-md-12 align-self-center">
                <h4 class="theme-cl">Add a New Degree Program</h4>
            </div>
        </div>
        <!-- Title & Breadcrumbs-->

        <!-- row -->
        <div class="row">
            <!-- col-md-12 -->
            <div class="col-md-12 col-lg-12 col-sm-12">
                <div class="card">
                    <div class="card-header" style="background-color: darkkhaki">
                        <h4 style="color: #ee1c25; align-content: center">Fill the Form</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{route('addnewprogrampost')}}" enctype="multipart/form-data" method="post">@csrf

                            @if ($message = \Illuminate\Support\Facades\Session::get('msg'))
                                <div class="alert alert-danger">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @endif
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>Degree Program Title</label>
                                        <input type="text" name="degree_program_title" class="form-control" placeholder="" value="{{ old('degree_program_title') }}" required>

                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>Degree Qualification</label>
                                        <input type="text" name="degree_qualification" class="form-control" placeholder="" value="{{ old('degree_qualification') }}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>UCAS Code</label>
                                        <input type="text" name="ucas_code" class="form-control" placeholder="" required value="{{ old('ucas_code') }}">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>Degree Programme Description</label>
                                        <textarea type="text" name="degree_program_description" class="form-control" placeholder="" required>{{ old('degree_program_description') }}</textarea>

                                    </div>
                                </div>
                            </div>

                            <div class="row">

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Keywords ie Optional Name</label>
                                        <input type="text" name="keywords" class="form-control" placeholder="" required value="{{ old('keywords') }}">
                                    </div>
                                </div>

                            </div>



                            <div>
                                <button class="btn btn-primary" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.col-md-12 -->

        </div>
        <!-- /.row -->
    </div>





@endsection
