<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomePage</title>
</head>
<body>
    <div class="container">
        <h1>{{ $presentation }}</h1>
        <h2>{{ $my_class }}</h2>
        <p><b>Coordinatore: </b>{{ $staff_class }}</p>

        <ul>
            @foreach ($classroom as $student)
                <li>{{ $student }}</li>
            @endforeach
        </ul>
    </div>
</body>
</html>