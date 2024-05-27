<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('frontend')}}/css/bootstrap.min.css">

    <link rel="stylesheet" href="{{asset('frontend')}}/css/style.css">

    <title>Hello, world!</title>
  </head>
  <body> <!-- Tidak memberikan kelas background -->

    <div class="login">
        <div class="jumbotron  d-flex align-items-center">
            <div class="container">
                <div class="log">
                    <form action="/authlogin" method="POST" class="shadow">
                        @csrf
                       
                        <div class="container">

                                <h3 class="title-text text-white">LOGIN</h3>
                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="text-white" >Username</label>
                                    <input type="text" class="form-control" name="username">
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleInputPassword1" class="text-white" name="password">Password</label>
                                    <input type="password" class="form-control" name="password">
                                  </div>
                                  <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                      </form>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('frontend')}}/jquery.js"></script>
    <script src="{{asset('frontend')}}/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
