<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Portafolio</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#" id="title">Jorge Peralta</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a href="#aboutme" class="nav-link">About Me</a>
              </li>
              <li class="nav-item">
                <a href="#skills" class="nav-link">Skills</a>
              </li>
              <li class="nav-item">
                <a href="#projects" class="nav-link">Projects</a>
              </li>
              <li class="nav-item">
                <a href="#contact" class="nav-link">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <div class="container" id="aboutme">
        <div class="row">
          <div class="col-md-7">
            <img src="images/wfh_1.png" alt="Jorge Peralta" loading="lazy" class="hero-img img-fluid">
          </div>  
          <div class="col-md-5 d-flex justify-content-center align-items-center">
            <div class="bio animate__animated animate__shakeX">
              <h2 class="bio-title text-center">About Me</h2>
              <p class="bio-text">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia sed dolorem fugit sapiente porro veniam pariatur dolore nostrum delectus inventore tempore minus nemo, iste ullam illo laboriosam maiores repudiandae quos!</p>
            </div>
          </div>
        </div>
      </div>

      <div class="container my-3">
        <div class="row">
          <h2 class="text-center">More About Me</h2>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quam, cumque est minima ex voluptatem ducimus ad! Vitae numquam aliquid dignissimos, cumque error adipisci accusantium dicta recusandae dolorem omnis iure corrupti?</p>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur laborum mollitia quia possimus hic animi ad optio sit sint voluptas inventore, quisquam praesentium est voluptatem eaque libero dicta exercitationem atque?</p>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Libero soluta eaque obcaecati, ipsa reiciendis dolore eum eligendi earum ipsum iure fuga iste alias magni minus quas hic laboriosam reprehenderit impedit?</p>
        </div>
      </div>

      <div class="container text-center">
        <h2 class="header-skills">My Top Skills</h2>
        <div class="row d-flex justify-content-center">
          <div class="first-set animate__animated animate__pulse">
            <img src="icons/icons8-html-5.svg" alt="Html5" loading="lazy" class="icon icon-card"/>
            <img src="icons/icons8-css3.svg" alt="Css3" loading="lazy" class="icon icon-card"/>
            <img src="icons/icons8-javascript.svg" alt="Javascript" loading="lazy" class="icon icon-card"/>
            <img src="icons/icons8-bootstrap.svg" alt="Bootstrap5" loading="lazy" class="icon icon-card"/>
          </div>
        </div>
        <div class="row d-flex justify-content-center">
          <div class="second-set animate__animated animate__pulse">
            <img src="icons/icons8-php.svg" alt="Php" loading="lazy" class="icon icon-card"/>
            <img src="icons/icons8-sql.svg" alt="Sql" loading="lazy" class="icon icon-card"/>
            <img src="icons/icons8-mysql.svg" alt="Mysql" loading="lazy" class="icon icon-card"/>
            <img src="icons/icons8-git.svg" alt="git" loading="lazy" class="icon icon-card"/>
          </div>
        </div>
      </div>

      <div class="container my-5" id="projects">
        <div class="row d-flex justify-content-center">
          <h2 class="title-of-projects">Algunos de mis proyectos recientes</h2>
            <div class="projects-container">
              <div class="text-center projects-card">
                <img src="images/RiverPlatePage.png" alt="River-Plate" loading="lazy" class="project-pic"/>
                <h3 class="title-of-project">River Plate Page</h3>
                <p class="detail-of-Project">
                  Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quas ratione vel inventore labore commodi modi quos culpa aut saepe! Alias!</p>
                <a href="https://jorge-73.github.io/Mi-Primera-pagina-web/" target="_blank" class="project-link btn btn-primary">Check it Out</a>
              </div>
              <div class="text-center projects-card">
                <img src="images/ParallaxPage.png" alt="Parallax-Page" loading="lazy" class="project-pic"/>
                <h3 class="title-of-project">Parallax Page</h3>
                <p class="detail-of-Project text-center">
                  Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quas ratione vel inventore labore commodi modi quos culpa aut saepe! Alias!</p>
                <a href="https://jorge-73.github.io/Parallax-page/" target="_blank" class="project-link btn btn-primary">Check it Out</a>
              </div>
              <div class="text-center projects-card">
                <img src="images/MemoryGame.png" alt="Memory-Game" loading="lazy" class="project-pic"/>
                <h3 class="title-of-project">Memory Game</h3>
                <p class="detail-of-Project text-center">
                  Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quas ratione vel inventore labore commodi modi quos culpa aut saepe! Alias!</p>
                <a href="https://jorge-73.github.io/Juego-de-memoria/" target="_blank" class="project-link btn btn-primary">Check it Out</a>
              </div>
            </div>
        </div>
      </div>

      <div class="container contact my-5" id="contact">
        <h2>Contact me</h2>
        <div class="contact-form-container">
          <div class="contact-form">
            <form action="send-message.php" method="POST" onsubmit="return validate();">
              <div class="control-form">
                <label for="name">Name</label>
                <input
                  type="text" id="name" name="sender-name" placeholder="Write your name" class="input-field" required/>
              </div>
              <div class="control-form">
                <label for="email">Email</label>
                <input type="email" id="email" name="sender-email" placeholder="Enter your email" class="input-field" required/>
              </div>
              <div class="control-form">
                <label for="message">Message</label>
                <textarea id="message" cols="60" rows="10" placeholder="Write your message" name="message" class="input-field" required></textarea>
              </div>
              <input type="submit" value="Submit" id="submit-btn"  class="submit-btn"/>
            </form>
          </div>
        </div>
      </div>

      <div class="social">
        <a href="https://www.facebook.com/jorge.peralta.1612147" target="_blank"
          ><img
            src="icons/icons8-facebook.gif"
            alt="Facebook"
            loading="lazy"
            class="socicon"
        /></a>
        <a href="https://www.instagram.com/jorge_a_peralta/" target="_blank"
          ><img
            src="icons/icons8-instagram.gif"
            alt="Instagram"
            loading="lazy"
            class="socicon"
        /></a>
        <a href="https://www.linkedin.com/in/jorge-peralta-ap/" target="_blank"
          ><img
            src="icons/icons8-linkedin-circled.gif"
            alt="Linkedin"
            loading="lazy"
            class="socicon"
        /></a>
        <a href="https://github.com/jorge-73" target="_blank"
          ><img src="icons/icons8-github.gif" alt="Github" class="socicon"/></a>
      </div>

  <footer>
    <p class="copy">&copy; Copyright 2022</p>
      <p class="copy">
        Built with by
        <a href="#" target="_blank">Jorge Peralta</a>
    </p>

    <i class="scroll-up" id="scroll-up">
      <img src="icons/icons8-upward-arrow.gif" class="socicon up-arrow" alt="scroll-up"/>
    </i>  
  </footer>

    <!-- Website scripts -->
  <script src="js/app.js"></script>
  <script src="js/validate.js"></script>
  <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Ion icons scripts -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>