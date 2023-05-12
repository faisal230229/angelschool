<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="shortcut icon" href="/public/assets/img/logo.png" type="image/x-icon">

    <title>Student List</title>
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
    <div class="">
        <img src="/public/assets/img/logo.png" alt="">
    </div>
    <h1>THE ANGELS SCHOOL SYSTEM KHAN GARH</h1>
    <h1 class="text-center">STUDENTS LIST</h1>
    <table style="width: 100%; border: 1px solid #000">
        <thead>
            <tr>
                <th>Student ID</th>
                <th>Name</th>
                <th>Father's Name</th>
                <th>Class</th>
                <th >Contact Number</th>
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