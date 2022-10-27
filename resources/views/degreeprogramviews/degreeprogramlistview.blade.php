@extends('layouts.master')

@section('content')


<div class="container-fluid">
    <!-- Title & Breadcrumbs-->
    <div class="row page-titles">
        <div class="col-md-12 align-self-center">
            <h4 class="theme-cl">Degree Program List View</h4>
        </div>
    </div>


    <div class="card-box table-responsive">
        <table class="table table-striped table-bordered " id="example" style="width:100%">
            <thead>
            <tr>
                <th>NO</th>
                <th>Degree Program Title.</th>
                <th>Degree Qualification</th>
                <th>UCAS Code</th>
                <th>Degree Program Description</th>
                <th>Keywords</th>
                <th></th>
                <th></th>

            </tr>
            </thead>
            <tbody>
            @if(isset($degreeprogramlists))
            @foreach($degreeprogramlists as $degreeprogramlist)
            <tr>
                <td>{{ $degreeprogramlist->id}}</td>
                <td>{{ $degreeprogramlist->degree_program_title}}</td>
                <td>{{ $degreeprogramlist->degree_qualification}}</td>
                <td>{{ $degreeprogramlist->ucas_code}}</td>
                <td>{{ $degreeprogramlist->degree_program_description}}</td>
                <td>{{ $degreeprogramlist->keywords}}</td>
                <td><a class="btn btn-primary" href="{{route('updatedegreeprogram',['id'=>$degreeprogramlist->id])}}">Update</a></td>
                <td><a class="btn btn-danger" href ="{{route('deletedegreeprogram',['id'=>$degreeprogramlist->id])}}">Delete</a></td>

            </tr>
            @endforeach
            @endif
            </tbody>





            <tfoot>
            <tr>
                <th>NO</th>
                <th>Degree Program Title.</th>
                <th>Degree Qualification</th>
                <th>UCAS Code</th>
                <th>Degree Program Description</th>
                <th>Keywords</th>
                <th></th>
                <th></th>
            </tr>
            </tfoot>

        </table>

    </div>





</div>




@endsection

