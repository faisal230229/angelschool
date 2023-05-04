<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Teacher List</title>

    <style>
        td {
            text-align: center;
        }
    </style>
</head>


<body>
    <h1>THE ANGELS SCHOOL SYSTEM TEACHERS LIST</h1>
    <table class="table table-striped table-hover" id="tableExport" style="width: 100%">
        <thead>
            <tr>
                <th>Teacher Name</th>
                <th>Email</th>
                <th>Contact Number</th>
                <th>CNIC Number</th>
                <th>Class Teacher</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $teacher)
            <tr>
                <td>{{ $teacher->name }}</td>
                <td>{{ $teacher->email }}</td>
                <td>{{ $teacher->phone }}</td>
                <td>{{ $teacher->cnic }}</td>
                <td>{{ $teacher->teacherClass ? $teacher->teacherClass->name : 'NILL' }}
                </td>

            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>