@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Student</h1>
        <form action="{{ route('students.update', $student->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="fname">First Name</label>
                <input type="text" class="form-control" id="fname" name="fname" value="{{ $student->fname }}" required>
            </div>
            <div class="form-group">
                <label for="mname">Middle Name</label>
                <input type="text" class="form-control" id="mname" name="mname" value="{{ $student->mname }}">
            </div>
            <div class="form-group">
                <label for="lname">Last Name</label>
                <input type="text" class="form-control" id="lname" name="lname" value="{{ $student->lname }}" required>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" class="form-control" id="address" name="address" value="{{ $student->address }}" required>
            </div>
            <div class="form-group">
                <label for="dob">Date of Birth</label>
                <input type="date" class="form-control" id="dob" name="dob" value="{{ $student->dob }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update Student</button>
        </form>
    </div>
@endsection