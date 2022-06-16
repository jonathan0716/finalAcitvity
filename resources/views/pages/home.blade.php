@extends('layouts.default')

@section('content')

<head>
  <title> Jonathan J. Mendoza</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

  <style>

* {
  box-sizing: border-box;
  height: auto;
}

body {
  background-color: #00FCF8;
  background-image: https://www.pexels.com/search/background%20image/;
  height: 100%;
}

.navigation {
  float:left;
  width: 15%;
  height: 98.1vh;
  background-color: #C2FD9C;
  background-size: cover;
  background: url("https://i.pinimg.com/736x/a7/f6/d0/a7f6d09791cbd6345096229c232ffd3c.jpg");
}

@media (max-width: 768px) {
  .navigation {
    padding: 5px;
  }
}
a {
  display: block;
  margin: 30% 0 35% 11.5%;
  text-decoration: none;
  color: #fff;
  font-weight: bold;
}
@media(max-width: 980px) {
  a {
    margin-left: 10%;
    font-size: 16px;
  }
}
@media(max-width: 780px) {
  a {
    margin-left: 9%;
    font-size: 14px;
  }
}
@media(max-width: 600px) {
  a {
    margin-left: 5%;
    font-size: 12px;
  }
}
@media(max-width: 400px) {
  a {
    margin-left: 1%;
    font-size: 11px;
  }
}

.btn {
  display: block;
  padding-top: 3px;
  margin: 50%  31%;
  text-decoration: none;
  color: #FC0B00;
  font-weight: bold;
  font-family: Montserrat;
  font-size: 17px;
  text-align: center;
}

.active, .btn:hover {
  color: #fa5700;
  transition-duration: .5s;
}

.page {
  float: right;
  width: 85%;
  height: 98.1vh;
  background-size: cover;
  background: url("https://cdn.wallpapersafari.com/55/36/pPG2fO.jpg");
  
}

#home-page {
  position: absolute;
  right: 8px;
  width: 84.3%;
  height: 98vh;
  transition-duration: 1.3s;
  overflow: hidden;
}

.card {
  position: relative;
  width:420px;
  height:340px;
  background-size: cover;
  background: url("https://img.rawpixel.com/s3fs-private/rawpixel_images/website_content/v546batch3-mynt-34-badgewatercolor_1.jpg?w=800&dpr=1&fit=default&crop=default&q=65&vib=3&con=3&usm=15&bg=F4F4F3&ixlib=js-2.2.1&s=89288ef4b47127f7f34a5998b50e4470");
  margin-left:50%;
  margin: 225px auto;
  align-items: center;
  box-shadow: 0 19px 38px rgba(0,0,0,0.30), 0 15px 12px rgba(0,0,0,0.22);
}

.card h2 {
  margin-top: -30px;
  padding-top: 30px;
  font-family: Serif;
  font-weight: bolder;
  font-style: normal;
  text-align: center;
  color: #000;
  font-size: 35px;
  background-size: cover;
  background: url("https://img.rawpixel.com/s3fs-private/rawpixel_images/website_content/v546batch3-mynt-34-badgewatercolor_1.jpg?w=800&dpr=1&fit=default&crop=default&q=65&vib=3&con=3&usm=15&bg=F4F4F3&ixlib=js-2.2.1&s=89288ef4b47127f7f34a5998b50e4470");
}

.card h5 {
  margin-top: 30px;
  color:gray;
  font-family: Serif;
  font-weight: 100;
  text-align:center;
  font-size: 16px;
}

.fa {
  font-size: 40px;
  width: 1px;
  text-align: center;
  text-decoration: none;
  margin-left: 17.5%;
  color: #00FCF8;
  margin-top: 2%;
  
}

.fa:hover {
  opacity: 0.7;
  transition-duration: .10s;
}

#about-page {
  position: absolute;
  right: 8px;
  width: 0;
  height: 98vh;
  transition-duration: 1.3s;
  overflow: hidden;
  
}

#about-page .blank {
  position: relative;
  width: 1050px;
  height: 650px;
  background: #edf2f4;
  background-size: cover;
  margin-left: 50%;
  margin: 40px auto;
  align-items: center;
  box-shadow: 0 19px 38px rgba(0,0,0,0.30), 0 15px 12px rgba(0,0,0,0.22);
  background-size: cover;
  background: url("https://img.rawpixel.com/s3fs-private/rawpixel_images/website_content/v546batch3-mynt-34-badgewatercolor_1.jpg?w=800&dpr=1&fit=default&crop=default&q=65&vib=3&con=3&usm=15&bg=F4F4F3&ixlib=js-2.2.1&s=89288ef4b47127f7f34a5998b50e4470");
}

#about-page h1 {
  font-size: 50px;
  color: #00FCF8;
  font-family: Serif;
  font-weight: bold;
  letter-spacing: 5px;
  padding-top: 5%;
  text-align: center;
  margin-bottom: -20px;
}

#about-page h3 {
  font-size: 40px;
  color: #00FCF8;
  font-family: Serif;
  font-weight: bold;
  letter-spacing: 5px;
  padding-top: 20px;
  text-align: center;
  text-decoration: underline;
}

#about-page p {
  font-size: 20px;
  color: rgb(0, 0, 0);
  font-family: Serif;
  font-weight: bold;
  letter-spacing: 1px;
  padding-left: 5%;
  padding-right: 5%;
}

#dream-page {
  position: absolute;
  right: 8px;
  width: 0;
  height: 98vh;
  transition-duration: 1.3s;
  overflow: hidden;
  
}

#dream-page .blank {
  position: relative;
  width: 1050px;
  height: 650px;
  background: #edf2f4;
  background-size: cover;
  margin-left: 50%;
  margin: 40px auto;
  align-items: center;
  box-shadow: 0 19px 38px rgba(0,0,0,0.30), 0 15px 12px rgba(0,0,0,0.22);
  background-size: cover;
  background: url("https://img.rawpixel.com/s3fs-private/rawpixel_images/website_content/v546batch3-mynt-34-badgewatercolor_1.jpg?w=800&dpr=1&fit=default&crop=default&q=65&vib=3&con=3&usm=15&bg=F4F4F3&ixlib=js-2.2.1&s=89288ef4b47127f7f34a5998b50e4470");
}

#dream-page h1 {
  font-size: 50px;
  color: #00FCF8;
  font-family: oxygen;
  font-weight: bold;
  letter-spacing: 5px;
  padding-top: 5%;
  text-align: center;
  margin-bottom: -20px;
}

#dream-page h3 {
  font-size: 40px;
  color: #00FCF8;
  font-family: oxygen;
  font-weight: bold;
  letter-spacing: 5px;
  padding-top: 20px;
  text-align: center;
  text-decoration: underline;
}

#dream-page p {
  font-size: 23px;
  color: rgb(0, 0, 0);
  font-family: Serif;
  font-weight: bold;
  letter-spacing: 1px;
  padding-left: 5%;
  padding-right: 5%;
}

#years-page {
  position: absolute;
  right: 8px;
  width: 0;
  height: 98vh;
  transition-duration: 1.3s;
  overflow: hidden;
}

#years-page .blank {
  position: relative;
  width: 1050px;
  height: 650px;
  background: #edf2f4;
  margin-left: 50%;
  margin: 40px auto;
  align-items: center;
  box-shadow: 0 19px 38px rgba(0,0,0,0.30), 0 15px 12px rgba(0,0,0,0.22);
  background-size: cover;
  background: url("https://img.rawpixel.com/s3fs-private/rawpixel_images/website_content/v546batch3-mynt-34-badgewatercolor_1.jpg?w=800&dpr=1&fit=default&crop=default&q=65&vib=3&con=3&usm=15&bg=F4F4F3&ixlib=js-2.2.1&s=89288ef4b47127f7f34a5998b50e4470");
}

#years-page h1 {
  font-size: 60px;
  color: #00FCF8;
  font-family: Serif;
  font-weight: bold;
  letter-spacing: 5px;
  padding-top: 5%;
  text-align: center;
}

#years-page p {
  font-size: 40px;
  color: rgb(0, 0, 0);
  font-family: Serif;
  font-weight: bold;
  letter-spacing: 1px;
  padding-left: 5%;
  padding-right: 5%;
   margin-top: 100px;
}
  </style>

</head>

<body>

 <div id="nav" class="navigation">
  <a class="btn active" href="#" id="home" target="_self">ABOUT ME</a>
  <a class="btn" href="#" id="about" target="_self">CS202</a>
  <a class="btn" href="#" id="dream" target="_self">CS405</a>
  <a class="btn" href="#" id="years" target="_self">6 YEARS FROM NOW </a>
</div>

<div class="page">
  <div class="paged" id="home-page">
      <div class="card">
        <h2>Jonathan Mendoza</h2>
        <h5>Hey! I'm Jonathan Mendoza, A Computer Science student<br>  Pamantasan ng Lungsod ng Pasig<br> & Future Game Developer.<br><br><br>Here's all My Social Media Platform!</h5>
          <a href="https://www.facebook.com/Mendoza.j.jonathan" class="fa fa-facebook"></a>   
          <a href="https://twitter.com/Mendoza.j.jonathan" class="fa fa-twitter"></a>
          <a href="jonathan1poh@gmail.com" class="fa fa-google"></a>
      </div>
  </div>

  <div class="paged" id="about-page">
    <div class="blank">
      <h1>CS202: Parallel and Distributed Programming</h1>
      <h3>Github</h3>
          <p>A GitHub repository can be used to store a development project.It can include folders and files of any type (HTML, CSS, JavaScript, Documents, Data, Images).A license file and a README file for the project should be included in a GitHub repository.A GitHub repository can also be used to store and exchange ideas or other materials.
          </p>

          <p>GitHub allows numerous developers to collaborate on a single project at the same time, which decreases the chance of duplicative or conflicting work and can assist shorten production time. Developers may use GitHub to concurrently write code, track changes, and come up with new solutions to problems that may occur during the site development process. It may also be used by non-developers to create, modify, and update website content.
          </p>
        </div>
      </div>

  
  <div class="paged" id="dream-page">
    <div class="blank">
      <h1>CS405: Open Source Programming with Framework</h1>
      <h3>Laravel Breeze</h3>
        <p>Laravel's MVC Architecture MVC is an architectural design pattern that aids in the development of online applications. MVC is an abbreviation for Model-View-Controller.</p>

        <p>Laravel apps adhere to the conventional Model-View-Controller design paradigm, in which Controllers handle user requests and obtain data via Models. Models for interacting with your database and retrieving information from your objects. Views are used to render pages.
        </p>
      </div>
    </div>
  </div>
  
  <div class="paged" id="years-page">
    <div class="blank">
      <h1>6 Years From Now</h1>
          <p>I will financially support my family as I become a Game Developer or Working Aabroad or as a Businessman with my future wife.
          </p>
        </div>
      </div>
      
    </div>
  </div>
</div>

  <script>
  const home = document.querySelector("#home");
const about = document.querySelector("#about");
const services = document.querySelector("#dream");
const contact = document.querySelector("#years");
var btnContainer = document.getElementById("nav");
var btns = btnContainer.getElementsByClassName("btn");

for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}

home.addEventListener("click", (event) => {
  document.querySelectorAll(".paged").forEach(function (el) {
    el.style.width = 0;
  });
  var hpage = document.getElementById("home-page");
  hpage.style.width = "84.3%";
});

about.addEventListener("click", (event) => {
  document.querySelectorAll(".paged").forEach(function (el) {
    el.style.width = 0;
  });
  var apage = document.getElementById("about-page");
  apage.style.width = "84.3%";
});

services.addEventListener("click", (event) => {
  document.querySelectorAll(".paged").forEach(function (el) {
    el.style.width = 0;
  });
  var spage = document.getElementById("dream-page");
  spage.style.width = "84.5%";
});

contact.addEventListener("click", (event) => {
  document.querySelectorAll(".paged").forEach(function (el) {
    el.style.width = 0;
  });
  var cpage = document.getElementById("years-page");
  cpage.style.width = "84.5%";
});

</script>

</body>
</html>

@stop
