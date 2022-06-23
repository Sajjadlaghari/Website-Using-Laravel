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
    
    <nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background-color: #45526e; height:70px">
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


      <h1 class="text-center fw-bold" style="margin-top: 5%; ">Update Employee</h1>

    <div class="container ">
      <div class="row shadow-lg p-2">
        <div class="col-md-5 mt-4 mb-4">
          <img src="https://dxavhl1p2dibq.cloudfront.net/sites/default/files/styles/image_1200x700/public/2018-08/10_ways_course%20registration_students.jpg?itok=YpRABFCs" height="400px" width="450px" class="rounded" alt="">
        </div>
        <div class="col-md-7">
          <form method="POST" action="/update-employee/{{$employee->employee_id}}">
            @csrf
            <div class="row">
              <div class="col">
                <label for="" class="fw-bold mb-1 mt-3">Employee Name</label>
                <input type="text" class="form-control" value="{{$employee->employee_name}}" name="name">
               <span class="text-danger">
                @error('name')
                  {{$message}}
                  @enderror
            </span>
              </div>
              <div class="col">
                <label for="" class="fw-bold mb-1 mt-3">Employee Email</label>
                <input type="email" class="form-control" value="{{$employee->employee_email}}" name="email">
                <span class="text-danger">
                @error('email')
                  {{$message}}
                  @enderror
            </span>
              </div>
         

            <div class="row">
              <div class="col">
                <label for="" class="fw-bold mb-1 mt-3">Contact Number</label>
                <input type="text" class="form-control" value="{{$employee->employee_contact}}" name="number">
              </div>
            </div>

            <div class="row">
              <div class="col">
                <label for="" class="fw-bold mb-1 mt-3">Select Gender</label><br>
                <input type="radio"  name="gender" @if($employee->employee_gender=="Male")
                checked
                @endif value="Male"> Male
                <input type="radio" @if($employee->employee_gender=="Female")
                 checked
                @endif  name="gender" value="Female"> Female
                
                
              </div>
            </div>

            <div class="row">
              <div class="col">
                <label for="" class="fw-bold mb-1 mt-3">Contact Number</label>
                <textarea class="form-control" placeholder="Enter Employee Address" name="address">{{$employee->employee_address}}</textarea>
                <span class="text-danger">
                @error('address')
                  {{$message}}
                  @enderror
            </span>
              </div>
            </div>

            <div class="row mt-3">
              <div class="col-md-2"></div>
              <div class="col-md-2"></div>
            
              <div class="col-md-4 mb-2">
                <button class="btn btn-success ">Update Employee</button>
              </div>
            </div>
            


          </form>
        </div>
      </div>
    </div>

</div>
    <br>
    <br>
    <br>


      <footer class="text-center text-lg-start text-white pt-4"style="background-color: #45526e"
      >
<div class="container-fluid">
    <div class="row">
      <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">
          CRUD APPLICATION
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
             >CRUD APPLICATION</a
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
