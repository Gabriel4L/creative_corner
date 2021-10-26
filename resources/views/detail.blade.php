<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/postPage.css">
    <title>Post Detail</title>
    <style>
      * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}
body {
  min-height: 900px;
  background-color: #fff;
}
li {
  color: #445ef2;
}

li {
  list-style: none;
  margin-bottom: 10px;
}
.text1 {
  font-weight: bold;
  font-size: 20px;
}
.komen1 {
  background-color: #f0f5ff;
  border-radius: 20px;
}
.cm1 {
  background-color: #fff;
  padding: 5px 5px;
  border-radius: 10px;
  margin-right: 20px;
}
input[type="text"] {
  border-radius: 10px;
  font-weight: normal;
  width: 95%;
  border: none;
}

    </style>
  </head>
  <body>
    <!-- navbar -->
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
    <!-- end nav -->

    <!-- postingan-->

@foreach ($posts as $p)
@endforeach
    <section id="file">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 ">
                    <img src="img/{{ $p->file }}"  alt="postingan" width="100%" class="rounded ">
                </div>
                <div class="col-md-4">
                  <h3 class="mt-2">{{ $p->title }}</h3>
                    <img src="img/profile.jpg" alt="profile" width="20%" class="rounded-circle mt-2">
                    <span class="ms-2" style="color: #445EF2;font-size: 24px;font-weight: bold;">Lalisa Nababan</span>
                    <div class="form mt-3">
                      <label for="floatingTextarea2" class=" text-wrap" style="color: white;background-color: #7E8FE9;border-radius: 20px;font-size: 20px;"><p class="mt-2 ms-2">
                        {{ $p->desc }}
                      </div>
                    <div class="form mt-3 komen1  pt-4 pb-4" >
                        <ul >
                          <li>
                            <p class="text1">Comments</p>
                          </li>
                          <li class="cm1">
                              <img src="img/profile.jpg" alt="member1" class="rounded-circle me-3" width="10%">
                              <span>Andy Wijaya</span>
                          </li>
                          <li class="cm1">
                            <img src="img/profile.jpg" alt="member1" class="rounded-circle me-3" width="10%">
                            <span>Andy Wijaya</span>
                        </li>
                        <li class="cm1">
                            <img src="img/profile.jpg" alt="member1" class="rounded-circle me-3" width="10%">
                            <span>Andy Wijaya</span>
                        </li>
                        <li>
                          <p class="text1">More</p>
                        </li>
                        <li>
                          <input type="text" class="form-control text1" placeholder="Add your comment" id="comment" aria-describedby="comment">
                        </li>
                      </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  -->
  </body>
</html>
