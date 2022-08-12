<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AWM</title>
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{('assets/css/fontawesome.min.css')}}">
    <style>
        h1{
            text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;
            color: white;

        }
    </style>
</head>
<body>
<div class="container-fluid bg-primary" >
        <div class="container">
          <nav class="navbar navbar-expand-sm navbar-dark ">
          <h3 class="navbar-brand " ><i class="fa fa-university"></i><a style="color: #051441; margin-top:-35px; margin-left:10px;" class="nav-link text-light" href="{{Route('welcom')}}">PLAY</a></h3>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarsExample03">
              <ul class="navbar-nav mr-auto text-light">
              <li class="nav-item ml-5">
                    <b> <a style="color: #051441;" class="nav-link text-light" href="{{Route('aa12')}}">AWM</a></b>
                </li>
                <li class="nav-item ml-5">
                    <b> <a style="color: #051441;" class="nav-link text-light" href="{{Route('ak47')}}">M762</a></b>
                </li>
                <li class="nav-item ml-5">
                    <b> <a style="color: #051441;" class="nav-link text-light" href="{{Route('ak74')}}">M416</a></b>
                </li>
                <li class="nav-item ml-5">
                    <b> <a style="color: #051441;" class="nav-link text-light" href="{{Route('akm')}}">AKM</a></b>
                </li>
                <li class="nav-item ml-5">
                    <b> <a style="color: #051441;" class="nav-link text-light" href="{{Route('desartegal')}}">DesartEagle</a></b>
                </li>
                
                
                <li class="nav-item ">
                  <p class="text-light mt-2" style="margin-left: 250px;" >Sign up</p>
                </li>
                <li class="nav-item">
                <button class="btn btn-info ml-2"> Sign up</button>
               </li>
              </ul>
            </div>
          </nav>
        </div>
    </div>
          <div class="container-fluid bg-primary p-5" >
      <div class="container">
        <h2 class="text-light text-center"><b> Open-Sourse Web Template For <br> SaaS,Startup,Apps and More </b></h2>
        <p class="text-light text-center mt-3">Lorem ipsum dolor sit amet consectetur, adipisicing .   <br>quas voluptatum, consequuntur quidem reiciendis?</p>
        <div class="row">
          <div class="col-md-12 text-center">
            <button class="btn btn-light ">Download Now</button>
            <button class="btn btn-primary ">Git Hub Repo <i class="fa fa-share"></i></button>  
          </div>
          <div class="col-md-12 text-center mt-4" >
           <i class=" text-light fa fa-leaf p-2"></i>     
           <i class=" text-light fa fa-recycle p-2"></i>
           <i class=" text-light fa fa-leaf p-2"></i>
           <i class=" text-light fa fa-universal-access p-2"></i>
          </div>
        </div>
      </div>
      </div>
    <b> <i><h1 class="text-center mt-5 pt-5 display-1">AWM</h1></i></b>
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
</body>
</html>