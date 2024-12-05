<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Лабораторная работа №4</title>
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Лабораторная работа №4</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <form class="form-inline ml-auto">
                <input class="form-control mr-sm-2" type="text" placeholder="Поиск" aria-label="Поиск">
                <button class="btn btn-success my-2 my-sm-0" type="submit">Поиск</button>
            </form>
        </div>
    </nav>

    <!-- Begin page content -->
<main role="main" class="container">
    <h1 class="mt-5">Вычислить площадь прямоугольника</h1>
    <div class="container">
        <form method="post">
            <div class="form-group">
                <label for="a">Введите значение A:</label>
                <input type="number" class="form-control" id="a" name="a" required>
            </div>

            <div class="form-group">
                <label for="b">Введите значение B:</label>
                <input type="number" class="form-control" id="b" name="b" required>
            </div>

            <button type="submit" class="btn btn-primary">Вычислить</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $a = $_POST['a'];
            $b = $_POST['b'];

            // Вычисление площади
            $area = $a * $b;

            // Проверка на квадрат
            if ($a == $b) {
                $message = "Фигура является квадратом.";
            } else {
                $message = "Фигура не является квадратом.";
            }

            echo "<div class='result alert alert-info mt-4'>Площадь: $area<br>$message</div>";
        }
        ?>
    </div>
</main>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>
</body>
</html>