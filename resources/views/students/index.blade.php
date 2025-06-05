<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Ariane Benitez">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student View</title>
</head>
<body>
    <h1>Student</h1>

    <ul>
        @foreach ($students as $student)
        <li>name: {{$student->name}} <br> age: {{$student->age}}</li>
        @endforeach
    </ul>
</body>
</html>