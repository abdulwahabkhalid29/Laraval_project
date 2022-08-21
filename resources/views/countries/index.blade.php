@extends('layout.scaffold')
@section('content')
<div class="container mt-5" >
    <div class="row">
    <div class="col-md-12">
                <a href="{{route('countries.create')}}" class="btn btn-primary float-right mb-2"> ADD NEW</a>
        </div>
        @if(Session::has('success'))
        <div class="col-md-12">
            <div class="alert alert-success">{{Session::get('success')}}</div>
        </div>
        @endif
    </div>
    <table class="table table-bordered">
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Number</th>
            <th>Population</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach($countries as $country)
            <tr>
                <td >{{ $country->id }}</td>
                <td style="width:10%;">{{ $country->name }}</td>
                <td style="width:10%;">{{ $country->number }}</td>
                <td style="width:10%;">{{ $country->population }}</td>

                <td>
                @if($country->status == 0)
                        <span class="badge badge-success">Active</span>
                    @else
                        <span class="badge badge-danger">Deactive</span>
                    @endif

                </td>
                <td>
                    <a href="{{route('countries.edit',$country->id)}} "class="btn btn-primary btn-sm">EDIT</a>
                    &nbsp;|&nbsp;
                    <a href="{{route('countries.delete',$country->id)}} " class="btn btn-danger btn-sm">DELETE</a>

                </td>
            </tr>
            @endforeach

        </tbody>
      </table>
</div>
@endsection