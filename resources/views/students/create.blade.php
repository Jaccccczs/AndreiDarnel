@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create Student</h1>
        <form action="{{ route('students.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="fname">Name</label>
                <input type="text" class="form-control" id="fname" name="fname" required>
            </div>
            <div class="form-group">
                <label for="mname">Middle Name</label>
                <input type="text" class="form-control" id="mname" name="mname">
            </div>
            <div class="form-group">
                <label for="lname">Last Name</label>
                <input type="text" class="form-control" id="lname" name="lname" required>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" class="form-control" id="address" name="address" required>
            </div>
            <div class="form-group">
                <label for="dob">Date of Birth</label>
                <input type="date" class="form-control" id="dob" name="dob" required>
            </div>
            <button type="submit" class="btn btn-primary">Create Student</button>
        </form>
    </div>
@endsection