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
      <a href="#" title="Capabilities" onclick="slowScroll('#main')">Capabilities</a>
      <a href="#" onclick="slowScroll('#overview')" title="Benefits">Benefits</a>
      <a href="#" onclick="slowScroll('#contacts')" title="Contacts">Contacts</a>
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

  	<iframe width="1000" height="550" src="https://www.youtube.com/embed/PK3u5mdA_g0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

  </div>

  <div id="contacts">
    <center><h5>Feedback</h5></center>

  <form action="submit.php" sethad="POST" id="form_input">
    
    <label for="email">Your mail <span>*</span></label><br>
    <input name="email" placeholder="Email" id="email"><br>
    <label for="name">name <span>*</span></label><br>
    <input name="name" placeholder="Name" id="name"><br>
    <label for="name">Phone <span>*</span></label><br>
    <input name="phone" placeholder="Phone" id="name"><br>
    <label for="message">Message <span>*</span></label><br>
    <textarea id="message"  placeholder="Enter your message" name="message"></textarea>
    <input type="submit"  style="border-color: blue;" value="Send"> 

  </form>

  <div class="faq">
    <div>
      <p style="font-size: 22px;">Contact</p> <i class="fab fa-instagram-square"></i>

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
