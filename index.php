<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Graduation Wishes from Space</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://fonts.googleapis.com/css?family=Kanit&subset=thai,latin' rel='stylesheet' type='text/css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container">
            <a href="index.html" class="navbar-brand">Spaceship</a>
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="index.html" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a href="#friendship" class="nav-link">Friendship</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="jumbotron jumbotron-fluid-bg-dark">
      <br><br><div class="container text-light text-center">
        <h1 class="display-4">Hello !</h1>
        <p class="lead">ไงทุกคน Website นี้เป็นอีก project นึงที่เราตั้งใจทำขึ้นมา ให้ทุกคนมาเขียน friendship ให้เรา<br>ซึ่งทำไมไม่ให้เขียนในสมุดหรือเสื้อหรอ มันไม่สื่อถึงความเป็นตัวเรามากพอ ฮ่า <br>ก็สามารถกดปุ่มด้านล่างข้อความนี้เขียน friendship ให้เราได้เลยนะคับ : )</p>
        <a href="#friendship" class="btn btn-primary">Leave a wish !</a><br><br><br>
      </div>
    </div>
    </header>
    <main>
      <section id="contact">
        <section id="contact" class="">
          <div class="container-fluid text-light py-5">
              <div class="container text-light">
                  <div class="container pb-3">
                      <h1 class="text-center">Contact ME!</h1>
                  </div>
              </div>
              <div class="row">
                  <div class="col md-6 text-center mb-5">
                      <h3>Peravich Samerpitak</h3>
                      <a href="mailto:pperavichhh@gmail.com" class="btn btn-primary pb-2" >e-mail</a>
                      <a href="https://www.instagram.com/pperavichhh/" class="btn btn-primary pb-2">instagram</a>
                      <a href="https://www.facebook.com/peravich.samerpitak.270151" class="btn btn-primary pb-2"></i>facebook</a>
                     <a href="https://github.com/pperavichhh" class="btn btn-primary pb-2">github</a>
                  </div>
              </div>
          </div>
      </section>
      </section>
      <section id="friendship">
        <br><h2>FRIENDSHIP</h2>
        <p>เขียนข้อความให้เราได้ตรงนี้ !</p>
        <div class="container">
          <form method="post">
            <div class="form-group py-1">
              <label>ชื่อ :</label>
              <input name="name" type="text" placeholder="ชื่อ" class="form-control" required>
            </div>
            <div class="form-group py-1">
              <label>ข้อความถึงเรา :</label>
              <textarea name="message"cols="8" rows="5" placeholder="ข้อความถึงยู : )" class="form-control" required></textarea>
            </div>
            <br><button type="submit" class="btn btn-primary">submit</button><br><br>
          </form>
        </div>
      </section>
    </main>
    <footer class="text-center py-4 bg-dark text-light">
      <div class="container">
          <div class="row">
              <div class="col">
                  <p>Copyright &copy; Peravich Samerpitak 2023 </p>
              </div>
          </div>
      </div>
  </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>


<?php
//Get data
$name = $_POST['name'];
$message = $_POST['message'];

//Save data
$filename='wishes.txt';
$file =fopen($filename,'a');
fwrite($file, "Name $name\nMessage:$message\n\n");
fclose($file);

//Redirect
header('Location:index.html');
exit;
?>