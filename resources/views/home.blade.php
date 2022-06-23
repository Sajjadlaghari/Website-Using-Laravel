<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</head>
<body>
    
    <nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background-color: #45526e; height:70px" >
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Website Name</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active"  href="#portfolio">Portfolio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="#aboutus">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="/view-company">View Company</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="/view-employee">View Employee</a>
              </li>        
            </ul>
          </div>
          <a href="add-employee" class="fw-bold" style="color: white; text-decoration:none">Add Employee</a> &nbsp;&nbsp;&nbsp;
          <a href="add-company" class="fw-bold" style="color: white; text-decoration:none">Add Company</a>
        </div>
      </nav>


      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://helpx.adobe.com/content/dam/help/en/photoshop/using/convert-color-image-black-white/jcr_content/main-pars/before_and_after/image-before/Landscape-Color.jpg" class="d-block w-100" alt="..." height="500px">
          </div>
          <div class="carousel-item">
            <img src="https://media.istockphoto.com/photos/pakistan-monument-islamabad-picture-id535695503?k=20&m=535695503&s=612x612&w=0&h=S16wHXc-b3AkL7YMrcFkR2pDGFJA1bRsPmAfQlfrwkc=" class="d-block w-100" alt="..." height="500px">
          </div>
          <div class="carousel-item">
            <img src="https://www.w3schools.com/css/img_5terre.jpg" class="d-block w-100" alt="..." height="500px">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <div class="container">
        <div class="row mt-4" id="portfolio">
            <h1 class="fw-bold text-center p-2 text-white" style="background-color: teal">PORTFOLIOS</h1>
            <div class="col-md-4 mt-3 shadow-lg">
                <div class="card" style="width: 18rem;">
                    <img src="https://hackr.io/blog/best-web-development-projects/thumbnail/large" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-3 shadow-lg">
                <div class="card" style="width: 18rem;">
                    <img src="https://saigontechnology.com/assets/media/how-to-estimate-a-web-application-development-project.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-3 shadow-lg">
                <div class="card" style="width: 18rem;">
                    <img src="https://www.kindpng.com/picc/m/272-2723867_web-showcase-project-presentation-hd-png-download.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-4 mt-3 shadow-lg">
                <div class="card" style="width: 18rem;">
                    <img src="https://alvarotrigo.com/blog/assets/imgs/2021-12-21/css-grid-layout-project-for-student.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-3 shadow-lg">
                <div class="card" style="width: 18rem;">
                    <img src="https://thewebsitearchitect.com/wp-content/uploads/2021/02/school-website-project.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-3 shadow-lg">
                <div class="card" style="width: 18rem;">
                    <img src="https://images.squarespace-cdn.com/content/v1/5cc859bc458c4b0001969644/1571847189359-3K5GH55CXG8YF5IADDLL/novatofamilydental.com_mockup.png?format=1000w" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
        </div>
      </div>

      <div class="container mt-5" id="aboutus">
        <div class="row" >
            <h1 class="text-center fw-bold text-white p-2" style="background-color: teal">ABOUT US</h1>
            <div class="col-md-6 shadow-lg">
                <img src="https://svmsolutions.b-cdn.net/wp-content/uploads/2020/01/converting-about-us-page.jpg" class="img-fluid rounded" alt="">
            </div>
            <div class="col-md-6 shadow-lg">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere cupiditate nihil officia quibusdam accusamus, obcaecati amet quos nam eos? Culpa aspernatur pariatur tempora assumenda sunt nemo consequatur quidem voluptate voluptates.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, tenetur. Sit ullam vel maiores reiciendis, debitis, quidem hic quasi magnam, mollitia id rerum aut atque alias expedita saepe veritatis explicabo.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti quam in quas, odit iure eveniet, molestiae doloribus porro accusantium id placeat quaerat facere ipsa error ea veritatis excepturi voluptatem vero.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus sed ipsum dolorum, et, fugiat maxime nulla eius architecto aut possimus veniam ipsam eaque animi. Iusto excepturi non quos fugit mollitia?
                </p>
            </div>
        </div>
      </div>
      <br>
         
	  <footer class="text-center text-lg-start text-white pt-4"style="background-color: #45526e"
      >
<div class="container-fluid">
    <div class="row">
      <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">
          Online Blogging Application
        </h6>
        <p>
          Here you can use rows and columns to organize your footer
          content. Lorem ipsum dolor sit amet, consectetur adipisicing
          elit.
        </p>
      </div>

      <hr class="w-100 clearfix d-md-none" />
      <div class="col-md-1"></div>
      <div class="col-md-3 col-lg-3 col-xl-3  mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">
          Useful links
        </h6>
        <p>
          <a class="text-white " href="index.php"  style="text-decoration:none">Home</a>
        </p>
        <p>
          <a class="text-white " href="feedback.php"  style="text-decoration:none">Feedback</a>
        </p>
        <p>
          <a class="text-white" href="about-us.php" style="text-decoration:none">About Us</a>
        </p>
        <p>
          <a class="text-white" href="user-registration.php" style="text-decoration:none">Registration</a>
        </p>
        <p>
          <a class="text-white" href="login.php" style="text-decoration:none">Login</a>
        </p>
      </div>

      <hr class="w-100 clearfix d-md-none" />
      <div class="col-md-1"></div>

      <div class="col-md-4 col-lg-4 col-xl-4 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
        <p><i class="fas fa-home mr-3"></i> Gulshan E Iqbal, Karachi </p>
        <p><i class="fas fa-envelope mr-3"></i> obateam@gmail.com</p>
        <p><i class="fas fa-phone mr-3"></i> (0223)-4049447</p>
        <p><i class="fas fa-print mr-3"></i> +92300-3929585</p>
      </div>
    </div>

  <hr class="my-3">
  <section class="p-3 pt-0">
    <div class="row d-flex align-items-center">
      <!-- Grid column -->
      <div class="col-md-7 col-lg-8 text-center text-md-start">
        <!-- Copyright -->
        <div class="p-3">
          © 2020 Copyright:
          <a class="text-white text-decoration-none" href="https://mdbootstrap.com/"
             >Online Blogging Application</a
            >
        </div>
        <!-- Copyright -->
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-5 col-lg-4 ml-lg-0 text-center text-md-end">
        <!-- Facebook -->
        <a
           class="btn btn-outline-light btn-floating m-1"
           class="text-white"
           role="button"
           ><i class="fab fa-facebook-f"></i
          ></a>

        <!-- Twitter -->
        <a
           class="btn btn-outline-light btn-floating m-1"
           class="text-white"
           role="button"
           ><i class="fab fa-twitter"></i
          ></a>

        <!-- Google -->
        <a
           class="btn btn-outline-light btn-floating m-1"
           class="text-white"
           role="button"
           ><i class="fab fa-google"></i
          ></a>

        <!-- Instagram -->
        <a
           class="btn btn-outline-light btn-floating m-1"
           class="text-white"
           role="button"
           ><i class="fab fa-instagram"></i
          ></a>
      </div>
      <!-- Grid column -->
    </div>
  </section>
  <!-- Section: Copyright -->
</div>
<!-- Grid container -->
</footer>
<!-- Footer -->
</div>
<!-- End of .container -->
</body>
</html>