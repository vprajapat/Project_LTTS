@include('body.header_login_register')
 
  <!-- Image carousel -->


  <div class="container-fluid">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="{{asset('frontend/img\img1.jpg')}}" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="{{asset('frontend/img/download1.jpg')}}" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="{{asset('frontend/img/download2.jpg')}}" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

  </div>


 <div class="container-fluid mt-5 mb-5 bg-light">
    <div class="container">
      <div class="row pt-5 pb-5">
        <div class="col-sm-3">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title text-center">Get confirmed LTTS ticket bookings</h5>
              <p class=" text-center pb-4">Quick book & Increase your chance of getting confirmed LTTS train tickets

              </p>


            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="card">
            <div class="card-body">
              <h5 class=" card-title text-center">Easy & secure payment
                gateway</h5>
              <p class=" text-center pb-4">A single click train ticket booking system. Now book tickets at your
                convenience

                </p>

            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title text-center">Confirmed PNR status, LiveTrain status & much more</h5>
              <p class=" text-center">Check out exciting new features for your quick & easy train ticket bookings!</p>

            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title text-center">Instant Refund & Cancellation LTTS train tickets</h5>
              <p class=" text-center">Pay through any payment mode & avail instant ticket refund and cancellation</p>

            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <div class="container-fluid  mb-5 bg-light">
    <div class="container">
      <div class="row">
        <div class="col">
         <p class="h3 mt-3"> Governement Safety Rules</p>
        </div>
      </div>
      <div class="row pt-2 pb-5">
        
        <div class="col-sm-4">
          <div class="card">
            <div class="card-body">
             <a href="https://contents.irctc.co.in/en/CovidVaccinationInfoEng.pdf"><img src="{{asset('frontend/img/gov2.png')}}" class="img-fluid img-thumbnail" alt=""></a>

            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card">
            <div class="card-body">
              <a href="https://contents.irctc.co.in/en/Covid19PMMessage.pdf"><img src="{{asset('frontend/img/gov3.png')}}" class="img-fluid img-thumbnail" alt=""></a>

            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card">
            <div class="card-body">
              <a href="https://contents.irctc.co.in/en/stateWiseAdvisory.html"><img src="{{asset('frontend/img/gov1.png')}}" class="img-fluid img-thumbnail" alt=""></a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
@include('body.footer')