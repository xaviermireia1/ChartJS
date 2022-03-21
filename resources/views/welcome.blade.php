<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gráficas </title>
    <meta name="csrf-token" id="token" content="{{ csrf_token() }}">

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="js/main.js"></script>

</head>
<body>
    <div>
        <canvas id="myChart"></canvas>
    </div>
</body>
</html>