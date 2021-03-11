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
        <a href="#" class="navbar-brand d-flex align-items-center">
          <strong>Урок 2</strong>
        </a>
      </div>
    </div>
  </header>
  <main>
    <section class="py-5 text-center container">
      <div class="row py-lg-1">
        <div class="col-lg-6 col-md-8 mx-auto">
          <h1 class="fw-light">Работа с формами</h1>
        </div>
        <div class="col-lg-12">
          <form class="needs-validation" action="result.php" enctype="multipart/form-data" method="post">
            <div class="row g-3">
              <div class="col-sm-6">
                <label for="file" class="form-label">Выберите картинку</label>
                <input type="file" name="userfile" class="form-control" id="file" placeholder="" accept="image/*,image/jpeg" required>
              </div>
              <div class="col-sm-6">
                <label for="message" class="form-label">Введите сообщение</label>
                <input type="text" name="message" class="form-control" id="message" placeholder="Текст . . . . " required>
              </div>
              <hr class="my-4">
              <button class="w-100 btn btn-primary btn-lg" type="submit">Подтвердить </button>
            </div>
          </form>
        </div>
      </div>
    </section>
    <div class="album py-5 bg-light">
      <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        </div>
      </div>
    </div>
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