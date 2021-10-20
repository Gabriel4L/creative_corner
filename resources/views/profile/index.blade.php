<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Profile Picture</title>
    <style>
        body{
    font-family: poppins;
}

.circle1{
    width: 280px;
    height: 280px;
    border-radius: 50%;
    background: #A9B5F1;
}
.circle2{
    width: 260px;
    height: 260px;
    border-radius: 50%;
    background: rgba(62, 86, 220, 0.4);
}
.circle3{
    width: 240px;
    height: 240px;
    border-radius: 50%;
    background: rgba(68, 94, 242, 0.7);
}
.circle4{
    width: 220px;
    height: 220px;
    border-radius: 50%;
    background-image: url(../img/stella.jpeg);
    background-size: contain;
}
.change{
    width: 90px;
    height: 90px;
    border-radius: 50%;
    background:#445ef2;
    position: relative;
    bottom: 100px;
    left: 190px;
}
.change i{
    position: relative;
    top: 10px;
    color: white;
    font-size: 2.5rem;
}
.iden h3{
    font-weight: bold;
}

    </style>
</head>
<body style="background: #F0F5FF;">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <ul class="navbar-nav ">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/dashboard" style="color: #445EF2;"> <i class="bi bi-chevron-left"></i> Profile</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>

    @foreach ($users as $u)
   <section class="d-flex justify-content-center">
       <div class="mt-3" style="height: 325px;">
           <div class="circle1 mx-auto p-2">
                <div class="circle2 mx-auto p-2">
                    <div class="circle3 mx-auto p-2">
                        <div class="circle4 mx-auto">
                        </div>
                    </div>
                </div>
            </div> 
            <div class="change">
                <a href="" style="text-decoration: none;color: inherit;"><i class=" camera bi bi-camera-fill  mx-4"></i></a>
            </div>    
       </div>
   </section>
   <section  class="d-flex justify-content-center mt-0">
        <div class="iden mx-4"  style="background:white;border-radius: 15px;width:30rem;height: 7%;">
            <div class="container">
                <div class="row mx-auto gap-2">
                    <div class="col-md text-center mt-3">
                        <h3 style="color: #5176F2;">Name</h3>
                        <p style="color: #A9BCF9;">{{ $u->name }}</p>
                    </div>
                    <div class="col-md text-center  mt-3">
                        <h3 style="color: #5176F2;"> Email</h3>
                        <p style="color: #A9BCF9;">{{ $u->email }}</p>
                    </div>
                    <div class="col-md text-center  mt-3">
                        <h3 style="color: #5176F2;"> Posts</h3>
                        <p style="color: #A9BCF9;">01</p>
                    </div>
                </div>
            </div>
        </div>
   </section>
       
   <h2 class="text-center mt-3 fw-bold" style="color: #5176F2;">Part Of</h2>
   <section class="d-flex justify-content-center mt-2 mb-3">
        <div class="corners" style="margin: 0 25%;">
            <div class="container">
                <div class="row mx-auto gap-3"  style="height:25%;">
                    <div class="col-md-6 mt-3" style="background:white;border-radius: 15px;width:14.3rem;height: 5%;">
                        <h4 class="text-end fw-bold">
                            <a href="" style="text-decoration: none;color: inherit;">></a>
                        </h4>
                        <div class="image">
                            <img src="img/kiri.png" alt="" class="mx-auto d-block">
                        </div>
                        <h6 class="text-center" style="color: #5176F2;">Video Editing Corner</h6>
                    </div>
                    <div class="col-md-6 mt-3" style="background:white;border-radius: 15px;width:14.3rem;height: 6%;">
                        <h4 class="text-end fw-bold">
                            <a href="" style="text-decoration: none;color: inherit;">></a>
                        </h4>
                        <div class="image">
                            <img src="img/kanan.png" alt="" class="mx-auto d-block">
                        </div>
                        <br>
                        <h6 class="text-center" style="color: #5176F2;">Web Design Corner</h6>
                    </div>
                   
                </div>
            </div>
        </div>         
   </section>
   <section class="d-flex justify-content-center mb-3">
        <a class="btn btn-primary" href="/profile/edit/{{ $u->id }}" role="button" style="width: 150px;padding: 10px;">Change</a>
   </section>
   @endforeach
</body>
</html>