<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.css' rel='stylesheet' />

    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="navbar.css" rel="stylesheet">
    <script src="https://code.iconify.design/2/2.0.3/iconify.min.js"></script>
    <title>Creative Corner | Landing Page</title>
</head>
<style>
    body {
    font-family: 'Poppins';
    background-color: #F0F5FF;
    }  
    .mybanner{
        background:linear-gradient( 90deg, #445EF2 1.8%, rgba(94, 144, 242, 0) 140.8%);
    }
    .fw-bolder{
        color: #131073;
    }
    .fw-bold{
        color: #200A9B;
    }
    .card{
        background: #FFFFFF;
        box-shadow: 1px 2px 23px 10px rgba(94, 144, 242, 0.2);
        border-radius: 20px;
    }
    .card-title{
        color: #2C04BF;
    }
    .card-text{
        color: #445EF2;
    }
    h1.text-center{
        font-weight: bolder;
        color: #2C04BF;
    }
    p .lead{
        color: #5E90F2;
    }
    footer{
        background: #131073;
    }
</style>
<body>
<main>
    @extends('layout/layout')
    @section('title', 'page index')

    @section('body-container')
      <div class="mybanner">
        <!-- p-lg-0 pt-lg-5 text-center  text-sm-start -->
          <section class="text-dark text-center  text-sm-start "> 
            <div class="container p-4">
                <div class="d-sm-flex align-items-center justify-content-between">
                    <div>
                        <h1 class="fw-bolder">Welcome to,<br> Creative Corner</h1>
                        <p class="lead my-4"  style="color: #FFFFFF;">
                            pusat pengembangan kreativitas siswa - siswi  <br> SMK IMMANUEL PONTIANAK di berbagai bidang penting. <br>
                            Yang pastinya mendorong pertumbuhan kreativitas, <br> antusias, cerdas, percaya diri, dan berintegritas sebagai pemimpin bangsa generasi baru.
                        </p>
                        <!-- <button class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#enroll">Login</button> -->
                    </div>
                    <img class="img-fluid w-50  d-lg-block" src="img/Discussion-rafiki.svg" alt=""> 
                </div>
            </div>
        </section>  
      </div>
    
    <section id="service">
        <div class="container  p-4" >
            <div class="row g-4">
                <h2 class="text-center mt-5 fw-bold ">Our Awesome service</h2>  
                <p class="text-center" style="color: #445EF2;">Berikut Merupakan berbagai macam pelayanan yang dapat kami berikan di Creative Corner</p>
                    <div class="col-md">
                        <div class="card text-light">
                            <div class="card-body text-center">
                                <div class="h1">
                                    <span class="iconify" data-icon="ph:chalkboard-teacher-fill" style="color: #2C04BF"></span>
                                </div>
                                <h3 class="card-title mb-3">
                                   Mentoring
                                </h3>
                                <p class="card-text">
                                    In here you can find a mentor and we will talk about all of your work together as a team. Don’t worry about the mentor, we're really kind and soft hearted you can ask us anyhting!
                                </p>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="card text-light">
                            <div class="card-body text-center">
                                <div class="h1">
                                    <span class="iconify" data-icon="bi:chat-square-dots-fill"  style="color: #2C04BF"></span>
                                </div>
                                <h3 class="card-title mb-3">
                                   Chat Room
                                </h3>
                                <p class="card-text">
                                    This featture give you freedom to express your feeling via chat, in the chat room you can ask or give suggections to other members or even the mentors beause we are a team.
                                </p>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="card text-light">
                            <div class="card-body text-center">
                                <div class="h1">
                                    <span class="iconify" data-icon="foundation:upload"  style="color: #2C04BF"></span>
                                </div>
                                <h3 class="card-title mb-3">
                                   Upload & Share
                                </h3>
                                <p class="card-text">
                                    You can share your work here too! yeah every work related to the topic. share everything you did in here we gonna apreciated it and give you some advice for sure!
                                </p>
                                
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </section>
    <section id="corner">
        <div class="container p-4">
            <div class="row g-4">
                <h2 class="text-center mt-5 fw-bold">Our Corners</h2> 
                <div class="col-md-4">
                    <div class="card text-light">
                        <div class="card-body text-center">
                            <div class="h1">
                                <img src="img/Design team-rafiki.png" alt="" width="40%">
                            </div> 
                            <h3 class="card-title mb-2">
                               Design Graphic <br> Corner 
                             </h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-light">
                        <div class="card-body text-center">
                            <div class="h1">
                                <img src="img/Video files-rafiki.png" alt="" width="40%">
                            </div> 
                            <h3 class="card-title mb-2">
                              Video Editing <br> Corner 
                             </h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-light">
                        <div class="card-body text-center">
                            <div class="h1">
                                <img src="img/Website Creator-rafiki.png" alt="" width="40%">
                            </div> 
                            <h3 class="card-title mb-2">
                               Web Design <br> Corner 
                             </h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-light">
                        <div class="card-body text-center">
                            <div class="h1">
                                <img src="img/Design team-rafiki.png" alt="" width="40%">
                            </div> 
                            <h3 class="card-title mb-2">
                               Design Graphic <br> Corner 
                             </h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-light">
                        <div class="card-body text-center">
                            <div class="h1">
                                <img src="img/Video files-rafiki.png" alt="" width="40%">
                            </div> 
                            <h3 class="card-title mb-2">
                              Video Editing <br> Corner 
                             </h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-light">
                        <div class="card-body text-center">
                            <div class="h1">
                                <img src="img/Website Creator-rafiki.png" alt="" width="40%">
                            </div> 
                            <h3 class="card-title mb-2">
                               Web Design <br> Corner 
                             </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="choose" class=" choose bg-light text-dark p- p-lg-0 pt-lg-5 text-center text-sm-start mt-5 p-3">
        <div class="container">
            <div class="d-sm-flex align-items-center">
                <div>
                    <h1 class="text-center">Choose Your Corners</h1>
                    <p class="lead my-4 text-center"  style="color: #445EF2;">
                      Mari Bergabung bersama kami di Creative Corner, belajar bersama dan berkembang bersama. See you in Our Corners!!
                    </p>
                    <div class="d-flex justify-content-center">
                        <button type="button" class="btn btn-primary" style="width: 40%;">Join With Us!</button>
                    </div>
                </div>
                <img class="img-fluid w-50  d-lg-block" src="img/Collection-rafiki.png" alt=""> 
            </div>
        </div>
    </section> 
    
    <footer class="footer mt-auto py-3">
        <div class="container text-center">
          <span class="text-muted">@ Creative Corner</span>
        </div>
      </footer>
      
    
</main>
<!-- collapse -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
@endsection
</body>
</html>