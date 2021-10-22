<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Document</title>
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
    top: 15px;
    color: white;
    font-size: 2.5rem;
}
.form h4{
    color:#5176F2;
}
    </style>
</head>
<body style="background: #F0F5FF;">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <ul class="navbar-nav ">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/profile" style="color: #445EF2;"> <i class="bi bi-chevron-left"></i> Profile</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>

    @foreach ($users as $u)
    <div class="box1 position-absolute top-50 start-50 translate-middle" style="width:23rem;height: 500px;background:white;margin-top: 100px;border-radius: 20px;">
    </div> 
    <section class="position-absolute top-0 start-50 translate-middle-x" style="margin-top: 60px;"> 
        <div class="mt-3" style="height: 325px">
            <div class="circle1 mx-auto p-2">
                    <div class="circle2 mx-auto p-2">
                        <div class="circle3 mx-auto p-2">
                            <div class="circle4 mx-auto">
                                <img src="img/{{ $u->foto_profile }}" alt="pp" width="100%" class="rounded-circle">
                            </div>
                        </div>
                    </div>
                </div> 
                <div class="change">
                    <a href="" style="text-decoration: none;color: inherit;"><i class=" camera bi bi-camera-fill  mx-4"></i></a>
                </div>    
        </div>
    </section>
    <section class=" form position-absolute top-50 start-50 translate-middle" style="margin-top: 10rem; color:#5176F2;">
        <form action="/profile/update" method="post">
            {{ csrf_field() }}
        <div class="txt text-center mb-3">
            <h4>Name</h4>
            <input type="text" class="form-control"  name="name" id="name" value="{{ $u->name }}">
        </div>
        <div class="txt text-center mb-3">
            <h4>Username</h4>
            <input type="text" class="form-control" name="username" id="username" value="{{ $u->username }}" >
        </div>
        <div class="txt text-center mb-3">
            <h4>Password</h4>
            <input type="password" class="form-control" name="password" id="password" value="{{ $u->password }}">
        </div>
        <div class="txt text-center mb-3">
            <input class="btn btn-primary" type="submit" value="Submit">
        </div>
        </form>
    </section>
    @endforeach
</body>
</html>