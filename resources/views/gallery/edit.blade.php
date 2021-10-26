<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/uploadPage.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baskervville&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
   
    <title>Creative Corner | Upload Page</title>
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
.your-uploads p{
	margin-bottom: -8%;
	font-size: 24px;
	color: #131073;
}
.upload-button{
	background-color: #445EF2;
	color: #ffffff;
	font-size: 18px;
}
hr{
	width: 100%;
	color: #4149F2;
	border: 1px solid;
}
.buttons img{
	width: 8%;
	cursor: pointer;
}
.buttons{
	position: relative;
	z-index: 1;
	bottom: 82%;
	left: 4%;
}

/*Responsive Breakpoints*/
@media (max-width: 768px){
	.projects .col-sm-6 .card {
		width: 100%;
	}
	.card{
		margin-bottom: 10%;
	}
}
  </style>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
          <ul class="navbar-nav ">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/gallery" style="color: #445EF2;"> <i class="bi bi-chevron-left"></i>Back</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
<section class="container-fluid">
    <!-- Your Uploads -->
      <div class="row">
        <div class="your-uploads col fw-bold d-flex justify-content-between mt-3">
          <p>Edit Your Uploads</p>
        </div>
      </div>

      <hr class="hr-uploads mt-5" >

      @foreach ($posts as $p)
      <form action="/gallery/update" method="post">
      <table class="table">
        <thead style="background-color: #445EF2; color:#fff;">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Title</th>
            <th scope="col">File</th>
            <th scope="col">Desc</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
          {{ csrf_field() }}
        <tbody>
          <tr>
            <th scope="row">{{ $p->id }}</th>
            <td> <input type="text" class="form-control" id="title" name="title" required="required" value="{{ $p->title }}">
            </td>
            <td>  <input type="text" class="form-control" id="title" name="title" required="required" value="{{ $p->file }}">
            </td>
            <td> <input type="text" class="form-control" id="title" name="title" required="required" value="{{ $p->desc}}">
            </td>
            <td>
              <input type="submit" class="btn btn-success " value="Save">
            </td>
          </tr>
        </tbody>
      </table>
    </form>
      @endforeach
      
      

  </body>
</html>