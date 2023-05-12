<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Teacher List</title>

    <style>
            h1 {
            text-align: center;
        }
        td {
            text-align: center;   
        }
        table,td,th {
            border: 1px solid #000;
        }
        table {
            border-collapse: collapse;
        }
    </style>
</head>


<body>
<h1>THE ANGELS SCHOOL SYSTEM KHAN GARH</h1>
    <h1 class="text-center">TEACHERS LIST</h1>
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