@extends('layout.scaffold')
@section('content')
<div class="container mt-5">
    <div class="row">
            <div class="col-md-12">
                    <a href="{{route('countries.index')}}" class="btn btn-primary float-right mb-2"> VIEW ALL</a>
            </div>
            @if(Session::has('error'))
            <div class="col-md-12">
                <div class="alert alert-danger">{{Session::get('error')}}</div>
            </div>
            @endif
    </div>
    <div class="card">
        <h5 class="card-header">Edit Country</h5>
        <div class="card-body">
            <form action="{{route('countries.update',$country->id)}}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" value="{{$country->name}}">
                        <small class="text-danger">@error('name')  {{$message}} @enderror</small>
                    </div>
                    <div class="col-md-6">
                        <label>Number</label>
                        <input type="number" name="number" class="form-control"  value="{{$country->number}}">
                        <small class="text-danger">@error('number')  {{$message}} @enderror</small>
                    </div>
                    <div class="col-md-6">
                        <label>Population</label>
                        <input type="text" name="population" class="form-control" value="{{$country->population}}">
                        <small class="text-danger">@error('population')  {{$message}} @enderror</small>
                    </div>
                    <div class="col-md-6">
                        <label>Status</label>
                        <select name="status"  class="form-control" value="{{$country->status}}">
                            <option value="">Please Select</option>
                            <option value="1" @if(old("status",$country->status) == 1) selected @endif>Active</option>
                            <option value="0" @if(old("status",$country->status) == 0) selected @endif>Deactive</option>
                        </select>
                        <small class="text-danger">@error('status')  {{$message}} @enderror</small>
                    </div>
                    <div class="col-md-12 mt-3">
                        <button type="submit" class="btn btn-primary btn-block">UPDATE</button>
                    </div>
                </div>
            </form>
        </div>
      </div>
</div>
@endsection