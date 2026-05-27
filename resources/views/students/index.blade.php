@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Students</h1>
        <a href="{{ route('students.create') }}" class="btn btn-primary mb-3">Add Student</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Date of Birth</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($students as $student)
                    <tr>
                        <td>{{ $student->id }}</td>
                        <td>{{ $student->fname }} {{ $student->mname }} {{ $student->lname }}</td>
                        <td>{{ $student->address }}</td>
                        <td>{{ $student->dob }}</td>
                        <td>
                            <a href="{{ route('students.edit', $student->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <a href="{{ route('students.delete', $student->id) }}" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>