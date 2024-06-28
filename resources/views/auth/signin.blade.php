
<!DOCTYPE html>
<html lang="en">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign In</title>
  <style>
    body {
      overflow:hidden;
    }

    .view {
      bottom:0;
      left:0;
      position:absolute;
      right:0;
      top:0;
      transform:skew(-10deg);
      height: 90%;
    }

    .left,
    .right {
      bottom:0;
      overflow:hidden;
      position:absolute;
      top:0;
    }

    .left {
      left:-5%;
      right:50%;
    }

    .divider {
      background-color:white;
      bottom:-5%;
      left:49.7%;
      position:absolute;
      right:49.7%;
      top:-5%;
      z-index:1;
    }

    .right {
      left:50%;
      right:-10%;
      border-radius:15px;
      background-color:#74A3BF;
    }

    .sun,
    .moon {
      bottom:-5%;
      left:-5%;
      position:absolute;
      right:-5%;
      top:-5%;
      transform:skew(10deg);
    }

    .content-left {
      margin-left:25%;
      margin-top:10%;
      transform:skew(10deg);
    }

    .moon {
      background-color:#74A3BF;
    }

    .center {
      display: block;
      margin-top: 10%;
      margin-left: auto;
      margin-right: auto;
      width: 50%;
    }

    .element {
      max-width: fit-content;
      margin-left: auto;
      margin-right: auto;
    }


  </style>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
<div class="view">
  <div class="left">
    <div class="content-left" style=" height:400px; width:400px;">
      <h2 style="color:#5082A7;">LOGIN</h2>
      <p style="color:#67748E;">Enter your email and password to sign in</p>
      <div class="form-group">
        <b for="" style="margin-bottom:20px;color:#344767; ">Username</b>
        <input style="margin-top:10px;" type="text" placeholder="Username" class="form-control">
      </div>
      <div class="form-group mt-4">
        <b for="" style="margin-bottom:20px;color:#344767;">Password</b>
        <input style="margin-top:10px;" type="text" placeholder="Password" class="form-control">
      </div>
      <div class="form-group mt-2">
        <button class="btn form-control" style="background-image: linear-gradient(to right, #A6D0DF 15%,#5385A9 99.9%); color:white; padding:10px; border-radius:10px; font-weight:bold;">SIGN IN</button>
      </div>
      <div class="form-group mt-2 text-center">
        Don't have an account? <b style="color:#74A3BF;">Sign up</b>
      </div>
    </div>
  </div>
  <div class="divider"></div>
  <div class="right">
    <div class="moon">
    <img src="{{ URL::asset('assets/bg/logo.png')}}" class="center" style="width: 50%;" alt="main_logo'">
    </div>
  </div>
</div>
<div class="text-center" style="position: fixed; bottom:0; width: 100%;">
  <p>Copyright © 2024 Program Studi S1 Sistem Informasi Telkom University</p>
</div>
</body>
</html>
