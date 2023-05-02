<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student List</title>
</head>

<body>
    <h1>THE ANGELS SCHOOL SYSTEM STUDENTS LIST</h1>
    <table style="width: 100%">
        <thead>
            <tr>
                <th>Student ID</th>
                <th>Name</th>
                <th>Father's Name</th>
                <th>Class</th>
                <th>Contact Number</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $student)
            <tr>
                <td>{{ $student->id }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->father_name }}</td>
                <td>{{ $student->class_id }}</td>
                <td>{{ $student->phone }}</td>

            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>