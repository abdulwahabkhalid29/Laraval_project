@extends('layout.scaffold')
@section('content')
<div class="container mt-5" >
    <table class="table table-bordered">
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Population</th>
            <th>permission</th>
            <th>Information</th>
            <th>Date</th>
            <th>Time</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach($countries as $country)
            <tr>
                <td >{{ $country->id }}</td>
                <td style="width:10%;">{{ $country->name }}</td>
                <td style="width:10%;">{{ $country->population }}</td>
                <td style="width:10%;">{{ $country->permission }}</td>
                <td style="width:20%;">{{ $country->information }}</td>
                <td style="width:10%;">{{ $country->date }}</td>
                <td style="width:15%;">{{ $country->time }}</td>
                <td>
                @if($country->status == 0)
                        <span class="badge badge-success">Active</span>
                    @else
                        <span class="badge badge-danger">Deactive</span>
                    @endif

                </td>
                <td>
                    <button class="btn btn-primary btn-sm">EDIT</button>
                    <button class="btn btn-danger btn-sm">DELETE</button>

                </td>
            </tr>
            @endforeach

        </tbody>
      </table>
</div>
@endsection