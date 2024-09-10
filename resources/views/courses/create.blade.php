@extends('layout')

@section('content')
    <h1>Add New Course</h1>
    <form action="{{ route('courses.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="course_name" class="form-label">Course Name</label>
            <input type="text" class="form-control" id="course_name" name="course_name" required>
        </div>
        <!-- Add the rest of the form fields similar to your HTML example -->
        <button type="submit" class="btn btn-primary">Add Course</button>
    </form>
@endsection
