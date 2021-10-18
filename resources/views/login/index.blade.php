<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="css/loginPage.css" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous" />

    <title>Creative Corner | Login</title>
  </head>
  <body>
      <div class="container-fluid">
    <div class="row fs-5">
      <div class="col-lg-6" style="background-color: #f0f5ff">
        <img src="img/amico2.png" alt="login" width="100%" style="margin-bottom: 8%;">
      </div>
      <div class="col-lg-6">

        <form action="/login" method="post" class="ms-4 " style="margin-top: 10%;">
          @csrf
          <h1 style="font-weight: bold">
            Sign In to <br />
            Creative Corner !
          </h1>
          <hr style="background-color: #5E90F2;width: 60%;height: 5px;border-radius: 50px;">
          <p class="mb-5" style="color: #808080">Where everything can be a thing!</p>
          <div class="mb-4">
            <input type="email" name="email" style="width: 95%" placeholder="Email Address" class="form-control form-control-lg" id="email"  required value="{{ old('email') }}"  />
          </div>
          <div class="mb-5">
            <input type="password" name="password" style="width: 95%" placeholder="Password" class="form-control form-control-lg" id="password" required />
          </div>
          <button type="submit" style="width: 95%; background-color: #445ef2; font-weight: bold;" class="btn btn-primary form-control form-control-lg mb-3">Sign In</button>
          <p class="text-center" style="color: #808080;font-size:1.0rem;">Or you don’t have any account?<a href="/signup"> Sign Up!</a></p>
        </form>

      </div>
    </div>
  </body>
</html>
