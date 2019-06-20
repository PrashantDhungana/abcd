<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>HomePage</title>
    <style>
    /*body{
      background-color: ;
    }*/
      .hover{
        color: yellow;
      }
      .hover:hover{
          color: black;
      }
    </style>
  </head>
  <body>
     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>




<!-- For Navbar -->
    <nav class="navbar navbar-expand-md navbar-dark bg-danger sticky-top ">
        <button class="navbar-toggler" data-toggle="collapse" data-target="#prashant">
          <span class="navbar-toggler-icon"></span>1
        </button>
      <span class="brand-name p-3 text-white" >Prashant</span>
      <div class="collapse navbar-collapse" id="prashant">
      <ul class="navbar-nav">
        <li class="nav-item" style="padding-left: 30px">
          <a href="#" class="nav-link mr-auto" title="Home">Home
          </a>
        </li>
        <li class="nav-item" style="padding-left: 30px">
          <a href="contact.html" class="nav-link" title="Contact Me!" target="_blank">Contact
          </a>
        </li>
        <li class="nav-item" style="padding-left: 30px">
          <a href="about.html" class="nav-link" title="Details about Me">My Details
          </a>
        </li><li class="nav-item" style="padding-left: 30px">
          <a href="follow.html" class="nav-link" title="On Social Media">Follow Me
          </a>
      </ul>
      </div>
    </nav>

    
<!-- For img Slideshow -->
<div class="container">
  <div class="row">
    <div class="col-lg-10">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="me.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Wedding with Noone!</h5>
              <p>Not mine of course</p>
            </div>
          </div>

          <div class="carousel-item">
            <img src="me_2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Phulari Gumba!</h5>
              <p>Saanti lukaau kaha ??</p>
            </div>
          </div>

          <div class="carousel-item">
            <img src="me_3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Nepalese Re-Union</h5>
              <p>Re-union with +2 Friends.</p>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>

    <div class="col-lg-2" style="border-left: 3px solid #000;">
      <h4>SideBar</h4>
    </div>
  </div>
</div>

<!--For 3 divs i.e. 1st sem,2nd and 3rd  -->
<br>
<div class="container">
  <div class="row-fluid">
    <div class="col-lg-10">
        <div class="bg-primary text-white">
            <h4>1<sup>st</sup> semester:</h4>
            <p>1<sup>st</sup> semester was a wonderful experience.Many things were new and awesome.Made some really <span class="hover" title="Karishma,Shagun and Pushpa">close friends</span> despite of my rude behaviour.Also learned many things and also tasted the flavour of failure for the first time in the Board Exams.   </p>
        </div>
          <div class="bg-secondary text-white">
            <h4>2<sup>nd</sup> semester:</h4>
            <p>2<sup>nd</sup> semester was more fun and exiciting than the 1<sup>st</sup> semester because we were all used to each other. This is the semester in which My friends made me feel very Happy. They planned a Birthday Surprise for me which is the Day I will never forget for so many reasons.Boards of this sem also wasn't too good.Hope I don't get failed again.Jay Maata Di(P.S. Thank God I am atheist)</p>

          </div>

          <div class="bg-success text-white">
            <h4>3<sup>rd</sup> semester:</h4>
            <p>As a <span class="hover" title="I,Me and Myself">famous person</span> said,"Zindagi Sadhai ek Naas ko hudaina...Eknaas ko vayo vane tw naas vai halyo ni!"</p>
          </div>
    </div>
  </div>        
</div>
<br> <br>
          <!-- Footer -->
<footer class="page-footer font-small bg-secondary fixed-bottom">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2018 Copyright:
    <a href="fb.com/dhunganaprashant" style="color: white;">Prashant Sharma Dhungana</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
  </body>

</html>


