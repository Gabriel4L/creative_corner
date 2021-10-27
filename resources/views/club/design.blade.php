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
  .col{
    font-size: 24px;
  }
  .col-lg-3{
    border-radius: 5px;
    min-width: 30%;
  }
  .col-lg-3 span{
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
    font-size: 2em;
  }
  .welcome-club h1{
    font-family: 'Baskervville', serif;
    font-size: 11em;
  }
  .welcome-club h3{
    font-family: 'Baskervville', serif;
    font-size: 6em;
  }
  .welcome-img img{
    width: 70%;
  }
  .col-lg-3 h6{
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
  
  /*Responsive Breakpoint*/
  @media (max-width: 768px){
    .welcome-img{
      width: 70%;
    }
    .welcome-club h5{
      font-size: 18px;
    }
    .welcome-club h1{
      font-size: 4em;
    }
    .welcome-club h3{
      font-size: 3em;
    }
    .projects .col-sm-6 .card {
      width: 100%;
    }
    .card{
      margin-bottom: 10%;
    }
  }
  </style>
  <body>
    
@extends('layout/layout')
@section('title', 'page index')

@section('body-container')
      <!-- Welcome to Club -->
      <div class="p-4 my-container">
      <!-- End Welcome to Club -->
      <div class="row" >
        <div class="welcome-img col-lg-6 col-sm-2">
          <img src="img/helloDG.png">
        </div>
        <div class="welcome-club  col-lg-6 col-sm-2  text-start">
          <h5 class="fw-bold mb-1">Hello, Stella. This is..</h5>
          <h1>Design</h1>
          <h3>Graphic</h3>
        </div>
      </div>
      <!-- Clubs -->
      <div class="row justify-content-between text-center ">
        <div class="box1 col-lg-3 col-sm-3 mb-3">
          <h6 class="angka">289</h6>
          <p class="tulisan">Members</p>
        </div>
        <div class="box2 col-lg-3 col-sm-3 mb-3">
          <h6 class="angka">800+</h6>
          <p class="tulisan">Creative Projects</p>
        </div>
        <div class="box3 col-lg-3 col-sm-3 mb-3">
          <h6 class="angka">14</h6>
          <p class="tulisan">Achievements</p>
        </div>
      </div>
      <!-- End Clubs -->
      
      <!-- Best of This Month -->
        <div class="row">
          <div class="best-projects col mt-5 mb-1 fw-bold">
            <p>Best of This Month</p>
          </div>
        </div>
        <div class="row justify-content-between projects"> 
          @foreach ($posts as $p)
          <div class="col-lg-3 col-sm-6 mb-3">
            <div class="card">
              <img src="img/{{ $p->file }}" class="card-img-top">
              <div class="card-body" >
                <p class="card-text">
                  <h6 class="text-center mb-3 fw-bold">{{ $p->title }}</h6>
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
          @endforeach

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