@extends('base') 
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update a Driver</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br /> 
        @endif
        <form method="post" action="{{ route('drivers.update', $driver->id) }}">
            @method('PATCH') 
            @csrf
            <div class="form-group">

                <label for="first_name">First Name:</label>
                <input type="text" class="form-control" name="first_name" value={{ $driver->first_name }} />
            </div>

            <div class="form-group">
                <label for="last_name">Last Name:</label>
                <input type="text" class="form-control" name="last_name" value={{ $driver->last_name }} />
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" class="form-control" name="email" value={{ $driver->email }} />
            </div>
            <div class="form-group">
                <label for="Driving_Liscence_number">City:</label>
                <input type="text" class="form-control" name="Driving_Liscence_number" value={{ $driver->Driving_Liscence_number }} />
            </div>
            <div class="form-group">
                <label for="Vehicle_type">Vehicle_type:</label>
                <input type="text" class="form-control" name="Vehicle_type" value={{ $driver->Vehicle_type }} />
            </div>
            <div class="form-group">
                <label for="Vehicle_Number">Vehicle_Number:</label>
                <input type="text" class="form-control" name="Vehicle_Number" value={{ $driver->Vehicle_Number }} />
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection