<!doctype html>
<html lang="ru-RU">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">
    <title>Урок 2</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/album/">
    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>
    <header>
        <div class="navbar navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a href="index.php" class="navbar-brand d-flex align-items-center">
                    <strong>Урок 2</strong>
                </a>
            </div>
        </div>
    </header>
    <main>
        <section class="text-center container">
            <div class="row py-lg-1">
                <div class="col-lg-12">
                    <h1 class="fw-light">Результат работы с формами</h1>
                </div>
        </section>
        <section class="text-center container">
            <div class="row py-lg-2">
                <div class="col-lg-12">

                    <h1>Вы отправили сообщение: <span class="text-success"><?= $_POST["message"]; ?> </span></h1>

                    <?php
                    $uploaddir = './images/';
                    $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
                    if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) : ?>
                        <div class="alert alert-success" role="alert">
                            <h4 class="alert-heading">Отличная работа!</h4>
                            <p> Файл <b><?= $_FILES['userfile']['name'] ?></b> корректен и был успешно загружен! </p>
                        </div>
                        <div class="progress col-lg-12">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                <div>100%</div>
                            </div>
                        </div>
                    <?php else : ?>
                        <div class="alert alert-danger" role="alert">
                            Возникла ошибка, попробуйте еще раз!
                        </div>
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" style="width: 0%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                            <div>0%</div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>
    </main>
    <footer class="text-muted py-5">
        <div class="container">
            <p class="float-end mb-1">
            </p>
        </div>
    </footer>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>