<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

  <title>Local Train Ticket System!</title>
</head>

<body>
  <div class="container-fluid ">
    <div class="container">
      <div class="row ">
        <div class="col-sm-1 p-1">
          <img src="{{asset('frontend\img\LTTS_Logo.png')}}" class="rounded mx-auto d-block" width="100" height="100" alt="LTTS_logo">
        </div>
          <div class="col-sm-6 p-4">
            <p class="h1 text-left text-decoration-underline text-center">Local Train Ticket System</p>
          </div>
          <div class="col-sm-3"></div>
            <div class="col-sm-1 p-4">
            <button type="button"  class="btn btn-primary"><a class="text-white" href="{{route('login')}}">Login</a> </button>

          </div>
          <div class="col-sm-1 p-4">
          <button type="button"  class="btn btn-secondary"><a class="text-white" href="{{route('register')}}">Register</a> </button>
           
          </div>

      </div>
      <div class="row">



      </div>

    </div>
  </div>
  <div class="container-fulid">
    <nav class="navbar navbar-expand-lg navbar-light  " style="background-color: #e3f2fd;">
      <div class="container">

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2  mb-lg-0">
            <li class="nav-item ml-3">
              <a class="nav-link active text-dark" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link  text-dark" href="#">Bus Ticket Booking</a>
            </li>
            <li class="nav-item">
              <a class="nav-link  text-dark" href="#">Flight Ticket Booking</a>
            </li>
            <li class="nav-item">
              <a class="nav-link  text-dark" href="#">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link  text-dark" href="{{url('/contact')}}">Contact us</a>
            </li>

          </ul>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
  </div>
  