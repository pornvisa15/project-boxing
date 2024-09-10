
@extends('layout')

@section('content')
    <h1>Course List</h1>
    <a href="{{ route('courses.create') }}" class="btn btn-primary">Add New Course</a>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Category</th>
                <th>Duration</th>
                <th>Details</th>
                <th>Price</th>
                <th>Teacher</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($courses as $course)
                <tr>
                    <td>{{ $course->id }}</td>
                    <td>{{ $course->course_name }}</td>
                    <td>{{ $course->course_category }}</td>
                    <td>{{ $course->course_duration }} hours</td>
                    <td>{{ $course->course_details }}</td>
                    <td>{{ $course->course_price }}</td>
                    <td>{{ $course->course_teacher }}</td>
                    <td>
                        <a href="{{ route('courses.edit', $course->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('courses.destroy', $course->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
</style>
</head>
<body>
