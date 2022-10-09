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
            <img
              src="icons/icons8-html-5.svg"
              alt=""
              loading="lazy"
              class="icon icon-card"/>
            <img
              src="icons/icons8-css3.svg"
              alt=""
              loading="lazy"
              class="icon icon-card"/>
            <img
              src="icons/icons8-javascript.svg"
              alt=""
              loading="lazy"
              class="icon icon-card"/>
            <img
              src="icons/icons8-bootstrap.svg"
              alt=""
              loading="lazy"
              class="icon icon-card"/>
          </div>
        </div>
        <div class="row d-flex justify-content-center">
          <div class="second-set animate__animated animate__pulse">
            <img
              src="icons/icons8-php.svg"
              alt=""
              loading="lazy"
              class="icon icon-card"/>
            <img
              src="icons/icons8-sql.svg"
              alt=""
              loading="lazy"
              class="icon icon-card"/>
            <img
              src="icons/icons8-mysql.svg"
              alt=""
              loading="lazy"
              class="icon icon-card"/>
            <img
              src="icons/icons8-git.svg"
              alt=""
              loading="lazy"
              class="icon icon-card"/>
          </div>
        </div>
      </div>

    

    <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>