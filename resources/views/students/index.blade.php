<!DOCTYPE html>
<html>
<head>
    <title>Student Records</title>
    <style>
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid black; padding: 8px; }
    </style>
</head>
<body>
    <h1>Student Records</h1>

    <table>
        <tr>
            <th>Student ID</th>
            <th>Name</th>
            <th>Address</th>
            <th>Contact No.</th>
        </tr>

        @foreach ($students as $student)
        <tr>
            <td>{{ $student->student_id }}</td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->address }}</td>
            <td>{{ $student->contact_no }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>