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
@extends('layout/layout')
@section('title', 'page index')

@section('body-container')
<section class="p-4 my-container">
    <!-- Your Uploads -->
      <div class="row">
        <div class="your-uploads col fw-bold d-flex justify-content-between mt-3">
          <p>Your Uploads</p>
          <button type="button" class="btn-primary p-2 rounded upload-button" data-bs-toggle="modal" data-bs-target="#myModal">
            <i class="fas fa-upload"></i>
            Upload
          </button>
        </div>
      </div>

      <hr class="hr-uploads">

      <div class="row justify-content-between projects">
        <div class="col-lg-3 col-sm-6 mb-3">
          <div class="card">
            <img src="img/lisa.jpg" class="card-img-top">
            <div class="card-body">
              <p class="card-text">
                <h6 class="text-center mb-3">Lisa of Blackpink</h6>
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
          <div class="buttons">
              <img src="img/close-button.png" style="margin-bottom: 2%;">
              <br>
              <img src="img/edit-button.png">
          </div>
        </div>

        <div class="col-lg-3 col-sm-6 mb-3">
          <div class="card">
            <img src="img/lisa.jpg" class="card-img-top">
            <div class="card-body">
              <p class="card-text">
                <h6 class="text-center mb-3">Lisa of Blackpink</h6>
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
          <div class="buttons">
              <img src="img/close-button.png" style="margin-bottom: 2%;">
              <br>
              <img src="img/edit-button.png">
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 mb-3">
          <div class="card">
            <img src="img/lisa.jpg" class="card-img-top">
            <div class="card-body">
              <p class="card-text">
                <h6 class="text-center mb-3">Lisa of Blackpink</h6>
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
          <div class="buttons">
              <img src="img/close-button.png" style="margin-bottom: 2%;">
              <br>
              <img src="img/edit-button.png">
          </div>
        </div>
      </div>
      <div class="row justify-content-between projects">
        <div class="col-lg-3 col-sm-6 mb-3">
          <div class="card">
            <img src="img/lisa.jpg" class="card-img-top">
            <div class="card-body">
              <p class="card-text">
                <h6 class="text-center mb-3">Lisa of Blackpink</h6>
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
          <div class="buttons">
              <img src="img/close-button.png" style="margin-bottom: 2%;">
              <br>
              <img src="img/edit-button.png">
          </div>
        </div>

        <div class="col-lg-3 col-sm-6 mb-3">
          <div class="card">
            <img src="img/lisa.jpg" class="card-img-top">
            <div class="card-body">
              <p class="card-text">
                <h6 class="text-center mb-3">Lisa of Blackpink</h6>
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
          <div class="buttons">
              <img src="img/close-button.png" style="margin-bottom: 2%;">
              <br>
              <img src="img/edit-button.png">
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 mb-3">
          <div class="card">
            <img src="img/lisa.jpg" class="card-img-top">
            <div class="card-body">
              <p class="card-text">
                <h6 class="text-center mb-3">Lisa of Blackpink</h6>
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
          <div class="buttons">
              <img src="img/close-button.png" style="margin-bottom: 2%;">
              <br>
              <img src="img/edit-button.png">
          </div>
        </div>
      </div>
    <!-- End Your Uploads -->

    <!-- Modal Pop Up -->
    <div class="modal" id="myModal">
      <div class="modal-dialog">
        <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title">Upload File</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>
          <div class="modal-body">
            <form action="/gallery/store" method="post">
                {{ csrf_field() }}
              <div class="mb-3">
                <label class="form-label required" >Title</label>
                <input type="text" class="form-control" id="title" name="title" required="required">
              </div>
              <div class="mb-3">
                <label class="form-label required" >File</label>
                <input type="file" class="form-control" id="file" name="file" required="required">
              </div>
              <div class="mb-3">
                <label class="form-label required" >Description</label>
                <textarea class="form-control" id="desc" name="desc" required="required"></textarea>
              </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success" data-bs-dismiss="modal" onclick="confirm()">Upload</button>
                {{-- <button type="submit" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button> --}}
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- End Modal Pop Up -->


  </section>

  








  <!-- bootstrap js -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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

      function showPreview(event){
        if(event.target.files.length > 0){
          var src = URL.createObjectURL(event.target.files[0]);
          var preview = document.getElementById("file-ip-1-preview");
          preview.src = src;
          preview.style.display = "block";
        }
      }

      function confirm(){
        Swal.fire(
          'Tunggu Confirm Admin',
          'We will inform you in notification panels',
          'success'
        )
      }
  </script>
  @endsection
  </body>
</html>