@extends('base')

@section('main')
<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">Drivers</h1>  
    <div>
    <a style="margin: 19px;" href="{{ route('drivers.create')}}" class="btn btn-primary">New driver</a>
    </div>  
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Name</td>
          <td>Email</td>
          <td>Driving Liscence number</td>
          <td>Vehicle Type</td>
          <td>Vehicle Number</td>
          <td colspan = 2>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($drivers as $driver)
        <tr>
            <td>{{$driver->id}}</td>
            <td>{{$driver->first_name}} {{$driver->last_name}}</td>
            <td>{{$driver->email}}</td>
            <td>{{$driver->Driving_Liscence_number}}</td>
            <td>{{$driver->Vehicle_type}}</td>
            <td>{{$driver->Vehicle_Number}}</td>
            <td>
                <a href="{{ route('drivers.edit',$driver->id)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('drivers.destroy', $driver->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>

<div class="col-sm-12">

  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
</div>
@endsection