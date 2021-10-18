<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="clubRoom.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baskervville&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>Creative Corner | Club Room</title>
  </head>
  <style>
    .imgstyle{
      width: 8%; 
      margin-left: 2%; 
      margin-right: 3%; 
    }
    .imgstyle2{
     width: 6%; 
     margin-left: 2%; 
     margin-right: 3%;
    }
    *{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	font-family: 'Poppins', sans-serif;
}
body{
	min-height: 100vh;
	background-color: #fff;
}
.my-container{
	transition: 0.4s;
}

/*for main section*/
.active-cont{
	margin-left: 250px;
}
#menu-btn{
	background-color: transparent;
}
.search-box{
	width: 897px;
	height: 50px;
	background-color: white;
	border-radius: 30px;
	display: flex;
	align-items: center;
	padding: 20px;
	border-style: solid;
	border-width: 2px;
	border-color: #445EF2;
}
.search-box > i{
	font-size: 20px;
	color: #777;
}
.search-box > input{
	flex:1;
	height: 40px;
	border: none;
	outline: none;
	font-size: 18px;
	padding-left: 10px;
}
/*Isi Container*/
.welcome h3{
	font-size: 48px;
}
.welcome p{
	font-size: 18px;
}
.banner img{
	width: 100%;
}
.col{
	font-size: 24px;
}
.col-3{
	border-radius: 5px;
	min-width: 30%;
}
.col-3 span{
	font-size: 20px;
}
.desc{
	background-color: #4F72F2;
	border-radius: 20px;
	padding: 2%;
}
.small-profile img{
	border-radius: 100%;
	width: 16%;
	margin-right: 5%;
}
.topmenu img{
	border-radius: 100%;
	width: 3%;
	height: 3%;
}
.welcome-club h5{
	margin-top: 15%;
	color: #131073;
	font-size: 28px;
}
.welcome-club h1{
	font-family: 'Baskervville', serif;
	font-size: 144px;
}
.welcome-club h3{
	font-family: 'Baskervville', serif;
	font-size: 96px;
	margin-top: -2%;
}
.welcome-img img{
	width: 545px;
	height: 548px;
}
.col-3 h6{
	font-size: 36px;
	font-weight: 700;
	margin-bottom: -1%;
}
.tulisan p{
	font-size: 18px;
}
.box1{
	color: #4A5CAC;
	background-color: #CDD4FF;
	padding-top: 1%;
}
.box2{
	color: #D6B15E;
	background-color: #F9F9D2;
	padding-top: 1%;
}
.box3{
	color: #7F5B97;
	background-color: #EBE7F1;
	padding-top: 1%;
}
.best-projects p{
	font-size: 36px;
	color: #131073;
}
  </style>
  <body>
    
@extends('layout/layout')
@section('title', 'page index')

@section('body-container')
      <!-- Welcome to Club -->
      
      <!-- End Welcome to Club -->
      <div class="row" style="padding:2%;">
        <div class="welcome-img col-6">
          <img src="img/helloDG.png">
        </div>
        <div class="welcome-club col-6 text-start">
          <h5 class="fw-bold mb-1">Hello, Stella. This is..</h5>
          <h1>Design</h1>
          <h3>Graphic</h3>
        </div>
      </div>
      <!-- Clubs -->
      <div class="row justify-content-between text-center" style="padding:2%;">
        <div class="box1 col-3">
          <h6 class="angka">289</h6>
          <p class="tulisan">Members</p>
        </div>
        <div class="box2 col-3">
          <h6 class="angka">800+</h6>
          <p class="tulisan">Creative Projects</p>
        </div>
        <div class="box3 col-3">
          <h6 class="angka">14</h6>
          <p class="tulisan">Achievements</p>
        </div>
      </div>
      <!-- End Clubs -->
      
      <!-- Best of This Month -->
        <div class="row" style="margin-left: 15px;">
          <div class="best-projects col mt-5 mb-1 fw-bold">
            <p>Best of This Month</p>
          </div>
        </div>
        <div class="row" style="margin-left: 5%;"> 
          <div class="col-md-4 mb-5">
            <div class="card" style="width: 20rem;border-radius: 20px;">
              <img src="img/lisa.jpg" class="card-img-top" style="border-radius: 20px 20px 0 0 ;">
              <div class="card-body" style="box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);background: #FFFFFF;border-radius: 20px;">
                <p class="card-text">
                  <h6 class="text-center mb-3 fw-bold">Lisa of Blackpink</h6>
                    <div class="small-profile d-flex">
                      <img src="img/profile.jpg">
                      <div>
                        <span>Ayam goreng</span>
                        <br>
                        <span>ayamgoreng@gmail.com</span>
                      </div>
                    </div>
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4">
            <div class="card" style="width: 20rem;border-radius: 20px;">
              <img src="img/lisa.jpg" class="card-img-top" style="border-radius: 20px 20px 0 0 ;">
              <div class="card-body" style="box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);background: #FFFFFF;border-radius: 20px;">
                <p class="card-text">
                  <h6 class="text-center mb-3 fw-bold">Lisa of Blackpink</h6>
                    <div class="small-profile d-flex">
                      <img src="img/profile.jpg">
                      <div>
                        <span>Ayam goreng</span>
                        <br>
                        <span>ayamgoreng@gmail.com</span>
                      </div>
                    </div>
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4">
            <div class="card" style="width: 20rem;border-radius: 20px;">
              <img src="img/lisa.jpg" class="card-img-top" style="border-radius: 20px 20px 0 0 ;">
              <div class="card-body" style="box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);background: #FFFFFF;border-radius: 20px;">
                <p class="card-text">
                  <h6 class="text-center mb-3 fw-bold">Lisa of Blackpink</h6>
                    <div class="small-profile d-flex">
                      <img src="img/profile.jpg">
                      <div>
                        <span>Ayam goreng</span>
                        <br>
                        <span>ayamgoreng@gmail.com</span>
                      </div>
                    </div>
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4">
            <div class="card" style="width: 20rem;border-radius: 20px;">
              <img src="img/lisa.jpg" class="card-img-top" style="border-radius: 20px 20px 0 0 ;">
              <div class="card-body" style="box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);background: #FFFFFF;border-radius: 20px;">
                <p class="card-text">
                  <h6 class="text-center mb-3 fw-bold">Lisa of Blackpink</h6>
                    <div class="small-profile d-flex">
                      <img src="img/profile.jpg">
                      <div>
                        <span>Ayam goreng</span>
                        <br>
                        <span>ayamgoreng@gmail.com</span>
                      </div>
                    </div>
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4">
            <div class="card" style="width: 20rem;border-radius: 20px;">
              <img src="img/lisa.jpg" class="card-img-top" style="border-radius: 20px 20px 0 0 ;">
              <div class="card-body" style="box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);background: #FFFFFF;border-radius: 20px;">
                <p class="card-text">
                  <h6 class="text-center mb-3 fw-bold">Lisa of Blackpink</h6>
                    <div class="small-profile d-flex">
                      <img src="img/profile.jpg">
                      <div>
                        <span>Ayam goreng</span>
                        <br>
                        <span>ayamgoreng@gmail.com</span>
                      </div>
                    </div>
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4">
            <div class="card" style="width: 20rem;border-radius: 20px;">
              <img src="img/lisa.jpg" class="card-img-top" style="border-radius: 20px 20px 0 0 ;">
              <div class="card-body" style="box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);background: #FFFFFF;border-radius: 20px;">
                <p class="card-text">
                  <h6 class="text-center mb-3 fw-bold">Lisa of Blackpink</h6>
                    <div class="small-profile d-flex">
                      <img src="img/profile.jpg">
                      <div>
                        <span>Ayam goreng</span>
                        <br>
                        <span>ayamgoreng@gmail.com</span>
                      </div>
                    </div>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

        <div class="row">
         
        </div>

        <div class="row">
  
        </div>
      <!-- End Best of This Month -->




    </section>

    








    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- custom js -->
    <script>
        var menu_btn = document.querySelector("#menu-btn")
        var sidebar = document.querySelector("#sidebar")
        var container = document.querySelector(".my-container")
        menu_btn.addEventListener("click", () => {
            sidebar.classList.toggle("active-nav")
            container.classList.toggle("active-cont")
        })
    </script>
    @endsection
  </body>
</html>