<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Classes List</title>
</head>

<body>
    <h1>THE ANGELS SCHOOL SYSTEM CLASSES LIST</h1>
    <table class="table table-striped table-hover" id="tableExport" style="width: 100%">
        <thead>
            <tr>
                <th>Class ID</th>
                <th>Class Name</th>
                <th>Class Teacher Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $class)
            <tr>
                <td>{{ $class->id }}</td>
                <td>{{ $class->name }}</td>
                <td>{{ $class->classTeacher ? $class->classTeacher->name : 'NILL' }}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>