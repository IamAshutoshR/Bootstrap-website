<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap sample</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="js/bootstrap.min.js">
<link rel="stylesheet" type="text/css" href="js/bootstrap.bundle.min.js">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

  <style>

html,body
{
    width: 100%;
    height: 100%;
    margin: 0px;
    padding: 0px;
    overflow-x: hidden; 
}



.about-us{
  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("https://ak.picdn.net/shutterstock/videos/7402501/thumb/9.jpg");
  color: whitesmoke;
}

.navbar-nav li:hover ul.dropdown-menu {
    display: block;
}
.dropdown-submenu {
    position:relative;
}

.container1{
  display: block;
  width: 100%;
  height: 25%;
  background-color: black;
  color: whitesmoke;

}

.carousel-caption{opacity:0.5;
background-color: black;
color: white;
}



@media only screen and (max-width: 600px)
    {
.hide-para{
  display: none;
}

.img-fluid{
  width: 100%;
}

.container1{ display: block;
  width: 100%;
  height: 25%;
  background-color: black;
  color: whitesmoke;

}
}


.carousel .carousel-item {
  height: 800px;
}

.carousel-item img {
    position: absolute;
    object-fit:cover;
    top: 0;
    left: 0;
    min-height: 800px;
}

  </style>
</head>

<body>

  <div class="top-bar">
<div class="row">
  <div class="col">
<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
  <a class="navbar-brand" href="#">
    <img src="https://www.logodesign.net/logo/four-buildings-with-swoosh-symbol-5495ld.png" width="125" height="70" class="d-inline-block align-top" alt="">
    <p class="tag-line text-center" >Ashutosh Org.</p>
  </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>


    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only"></span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">About us</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Subject </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="#">Java</a></li>
                    <li><a class="dropdown-item" href="#">PHP Laravel</a></li>
                    <li><a class="dropdown-item" href="#">C++</a></li>
                    <li><a class="dropdown-item" href="#">Python</a></li> 
                </ul>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Other Services </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="#">AWS</a></li>
                    <li><a class="dropdown-item" href="#">Web Developing</a></li>
                    <li><a class="dropdown-item" href="#">Machine Learning</a></li>
                </ul>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#">Contact us</a>
            </li>
        </ul>
    </div>

    <div class="col hide-para">
  <p class="nav-link text-light font-weight-bold px-3 bg-primary text-right" >Email: ashu.org@gmail.com <br>Ph.no (+91)9999999999</p>
</div>
  </nav>
</div>

</div>

</div>

<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="img-fluid" src="https://media.istockphoto.com/photos/mountain-landscape-picture-id517188688?k=20&m=517188688&s=612x612&w=0&h=i38qBm2P-6V4vZVEaMy_TaTEaoCMkYhvLCysE7yJQ5Q=" alt="org1" width="100%">
      <div class="carousel-caption">
        <h3>1. “For every minute spent organizing, an hour is earned.”</h3>
        <p>-Anonymous</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img class="img-fluid" src="https://cdn.corporatefinanceinstitute.com/assets/types-of-organizations1.jpeg" alt="org2" width="100%" height="500px">
      <div class="carousel-caption">
        <h3>2. “Organizing is a journey, not a destination.”</h3>
        <p>– Anonymous</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img class="img-fluid" src="https://youthfirstinc.org/wp-content/uploads/2019/04/Organizational-1030x688.jpg" alt="org3" width="100%" height="500px">
      <div class="carousel-caption">
        <h3>3. “Clutter is nothing more than postponed decisions.” </h3>
        <p>– Barbara Hemphill</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>


<div class="about-us">
 <h2 style="text-align: center; font-size: 70px;">About Us
</h2> <br><br><br>
<p style="color: whitesmoke; text-align: center; font-size: 20px;">
Ashutosh Org. has done a commendable job of personifying their team and organization<br> while also narrating their story. 
  The top of the page features a friendly image of the company's employees,<br> and as you scroll, you will find their values, goals, journey, details about the founders, <br>the team, and the culture. Along the way, webdew continues to share<br> photos of its executives and all other team members, completely humanizing its brand <br>by putting various faces to its name. 
The organization has also done a fabulous job of establishing trust <br>by including elements of social proof (i.e., media, client testimonials, partner logos, etc.). 
<br>
</p>
<br>
</div>
<br>
<br>

<div class="container">
    <h1>Image Gallery</h1>
  
  <div class="row">
    <div class="col-sm">
      <img src="https://epale.ec.europa.eu/sites/default/files/organisation_of_work_resized.jpg" alt="" class="fluid img-thumbnail">      
    </div>
    <div class="col-sm">
      <img src="https://cdn.corporatefinanceinstitute.com/assets/types-of-organizations1.jpeg" alt="" class="fluid img-thumbnail">      
    </div>
    <div class="col-sm">
      <img src="https://www.careersinaudit.com/getasset/5f7dbe8a-ce92-4ab4-a60d-30bbed18a0ab" alt="" class="fluid img-thumbnail">      
    </div>
    </div>
<br>
<br>
    <div class="row">
     <div class="col-sm">
      <img src="https://thumbs.dreamstime.com/b/organisation-structure-people-s-social-network-business-technology-concept-organisation-structure-people-s-social-network-120754788.jpg/" alt="" class="fluid img-thumbnail">      
    </div>
    <div class="col-sm">
      <img src="https://assets.website-files.com/5a6eee1392eb9700011b712f/5bc4a05ee46b0ef979618990_Effective-team-organisation-The-dos-and-donts.jpg" alt="" class="fluid img-thumbnail">      
    </div>
    <div class="col-sm">
      <img src="https://www.thephoenixcapitalgroup.com/wp-content/uploads/2012/09/Why-Foreigners-Set-Up-a-Business-in-Phuket-Thailand-570x350.jpg" alt="" class="fluid img-thumbnail">      
    </div>
     </div>
  </div>
</div>

<br>
<br>

  <form>
<div class="container">

<h2 style="text-align: center;">Contact-US</h2>

<div class="form-row">
  <div class="col-sm">
Name:
<input type="text" name="name" class="form-control" placeholder="Name" required >    
  </div>
  
  <div class="col-sm">
    Email:
    <input type="email" name="email" class="form-control" placeholder="Email-id" required>
  </div>
</div>

<div class="form-row">
  <div class="col-sm">
    Mobile No:
    <input type="number" name="mobile" class="form-control" placeholder="Mobile No." required>
  </div>

<div class="col-sm">
Select City
<select class="form-control" required>
  <option>...</option>
<option>Noida</option>
<option>Delhi</option>
<option>Greater Noida</option>
<option>Gurugram</option>
</select>  
</div>

</div>
<br>
<div class="form-row">
<div class="col-sm">
<select class="form-control">
  <option>Subjects</option>
<option>Java</option>
<option>PHP</option>
<option>C++</option>
<option>Python</option>
</select>
  
</div>  

<div class="col-sm">
<select class="form-control">
<option>Other Services</option>
<option>AWS</option>
<option>Machine Learning</option>
<option>Web Developing</option>  
</select> 
  </div>
</div>
<br>

<div class="form-row">
  <div class="col-sm">
    <textarea name="message" class="form-control" placeholder="Message..."></textarea>
  </div>
</div>
<br>

<button type="button" class="btn btn-primary btn-lg btn-block">Submit</button>
</div>

</form>
<br>


<div class="container1">
<div class="row footer">
  <div class="col-sm">
  Ashutosh Org.
  </div>

<div class="col-sm">
<h6>Home</h6>
<h6>About</h6>
<h6>Subject</h6>
<h6>Other Services</h6>
</div>

<div class="col-sm">
 <h6>Address:- C 199, Sector 22, Noida</h6>
</div>

<div class="col-sm">
<h6>Email: ashu.org@gmail.com</h6>
    <h6>Contact no: (+91)9999999999</h6>
</div>
</div>
</div>

</body>
</html>