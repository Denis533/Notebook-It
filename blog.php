<!DOCTYPE html>
<html lang="en">
<head>
  <script src="https://kit.fontawesome.com/6a3844d1f4.js" crossorigin="anonymous"></script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>It-Notebook.ru</title>
  <link rel="stylesheet" href="css/index.css">
  <link rel="shortcut icon" href="img/icon.png" type="image/png"/>
</head>
<body>
  <header>
    <div id="logo" onclick="slowScroll('#top')">
      <span>It-Notebook.ru</span>
    </div>
    <div id="about">
      <a href="http://www.it-notebook.ru/" title="Home" onclick="slowScroll('#main')">Home</a>
      <a href="blog.php" onclick="slowScroll('#blog')" title="Blog">Blog</a>
      <a href="Feetback.php" onclick="slowScroll('#Feetback')" title="Feetback">Feetback</a>
      <a href="#" onclick="slowScroll('#faq')" title="Answers on questions">FAQ</a>
    </div>
  </header>

  <div id="top">
    <h1>Programming</h1>
    <h3>as a way of life!</h3>
  </div>

  <div id="main">
    <div class="intro">
      <h2>Our services will help you!</h2>
      <span>A wide selection of everything that can come in handy</span>
    </div>
    <div class="text">
      <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos impedit, ut vero commodi voluptate? Ipsam reiciendis, necessitatibus incidunt ipsa quis sapiente excepturi, optio iusto voluptatibus dolorem officia quidem, numquam eaque minus, autem praesentium rem architecto dolores. Ipsa unde id velit optio magni enim! Illum obcaecati, dolorem distinctio nemo, ipsum iure.</span>
    </div>
  </div>

  <div id="overview">
    <h2>Benefits</h2>
    <h4>everything is easier with us</h4>

    <div class="img">
      <a href="Learn_HTML_5.php"><img src="img/2.jfif" alt=""></a>
      <span>Learn HTML 5 for Beginners</span>
    </div>
    <div class="img">
      <a href="Learn_CSS_3.php"><img src="img/1.jfif" alt=""></a>
      <span>Learn CSS 3 for Beginners</span>
    </div>

        <div class="img">
      <a href="Learn_PHP.php"><img src="img/3.jfif" alt=""></a>
      <span>Learn Php for Beginners</span>
    </div>
    <div class="img">
      <a href="Learn_Java_Script.php"><img src="img/4.jfif" alt=""></a>
      <span>Learn Java Script for Beginners</span>
    </div>

        <div class="img">
      <a href="Learn_AJAX.php"><img src="img/5.jfif" alt=""></a>
      <span>Learn Ajax for Beginners</span>
    </div>
    <div class="img">
      <a href="Learn_C++.php"><img src="img/6.jfif" alt=""></a>
      <span>Learn C++ for Beginners</span>
    </div>
  </div>

  <div id="faq">
    <div>
      <span class="title">Social networks</span><br>
    </div>
    <div>
      <a href=""></a><i class="title fab fa-instagram-square"></i></a>
      <a href=""><i class="title fab fa-youtube-square"></i></a>
      <a href=""><i class="title fab fa-vk"></i></a>
      <a href=""><i class="title fab fa-facebook-square"></i></a>

    </div>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script>
    function slowScroll(id) {
      $('html, body').animate({
        scrollTop: $(id).offset().top
      }, 500);
    }

    $(document).on("scroll", function () {
      if($(window).scrollTop() === 0)
        $("header").removeClass("fixed");
      else
        $("header").attr("class", "fixed");
    });
  </script>
</body>
</html>
