<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
    <title>Document</title>
    <style>
        .titleBrand{
            font-family: 'Satisfy';
            font-size: 3rem;
        }

        .ml-100{
            margin-left: 50%;
        }
        .centered {
            position: absolute;
            top: 40%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-family: 'Satisfy';
            font-size: 2.5rem;
            color: white;
        }
        .blur{
            -webkit-filter: blur(2px);
            filter:brightness(50%) blur(2px);
        }
        .blur:hover{
            -webkit-filter: blur(0px);
            filter:brightness(100%)  blur(0px);
            color: transparent;
            transition: 0.2s;
        }
        .shadow {
            box-shadow: 0 19px 38px rgba(0,0,0,0.30), 0 15px 12px rgba(0,0,0,0.22);
        }
        .ml-10{
            margin-left: 16rem !important;
        }   
        .mb-10{
            margin-top: -4rem !important;
        }
        .shadow-hover {
            box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
            transition: all 0.3s cubic-bezier(.25,.8,.25,1);
            }

        .shadow-hover:hover {
            box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
        }

    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light shadow">
        <a class="navbar-brand titleBrand p-2" href="/" >
            <i class="fas fa-camera-retro"></i>
            My Followers
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" 
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse ml-100" id="navbarSupportedContent">
            <form class="form-inline my-2 my-lg-0" method="POST" action="/search">
                @csrf
                <input class="form-control mr-sm-2" type="search" placeholder="" 
                    aria-label="Search" name="username" required>
                <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search!</button>
            </form>
        </div>
    </nav>
    <div class="container">
        <div class="row mt-5 p-5">
            <div class="col-12 mt-5 d-none d-md-block">
                <img src="{{$userJson->profilePic}}" alt="..." class="rounded-circle shadow">
                <span class="display-4 ml-4">
                    {{ ($userJson->fullname)}} 
                    <span style="color:#3452eb">/</span>
                    <span class="text-muted"> {{"@".$userJson->username}}<span>
                        <div class="ml-10 mb-10 ">
                            <span class="badge badge-pill badge-primary" 
                            style="font-size:1.5rem">
                            Followers {{$userJson->followers}}
                        </span>
                        <span class="badge badge-pill badge-danger"  
                        style="background:#f20a76;font-size:1.5rem">
                        Following {{$userJson->following}}
                    </span>    
                </div>
                <p class="text-muted ml-10 mt-3" style="font-size:2rem">{{$userJson->bio}}</p>
                </span>
            </div>
            <div class="col-12 d-block d-md-none">
                <img src="{{$userJson->profilePic}}" alt="..." class="rounded-circle shadow ml-4">
                <span class="display-4 ml-4">
                    {{ ($userJson->fullname)}} 
                    <span class="text-muted"> {{"@".$userJson->username}}<span>
                    <div>
                        <span class="badge badge-pill badge-primary" 
                            style="font-size:1.5rem">
                            Followers {{$userJson->followers}}
                        </span>
                        <span class="badge badge-pill badge-danger"  
                            style="background:#f20a76;font-size:1.5rem">
                            Following {{$userJson->following}}
                        </span>    
                    </div>
                <p class="text-muted mt-3"style="font-size:2rem">{{$userJson->bio}}</p>
                </span>
            </div>
        </div>
            <hr>
        
        @if (!empty($userJson->posts))
            <div class="card-columns">
                <div class="card shadow-hover">
                    <img src="{{$userJson->mostLiked->url}}" class="card-img-top blur" alt="...">
                    <div id="liked" class="centered">
                            <span style="color:#f5426c">
                                <i class="far fa-heart"></i>  
                            </span>
                            {{$userJson->mostLiked->count}}
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Your Most liked Post!</h5>
                        <p class="card-text">You got {{$userJson->mostLiked->count}} likes!</p>
                    </div>
                </div>
                <div class="card shadow-hover">
                    <img src="{{$userJson->mostComented->url}}" class="card-img-top blur" alt="...">
                    <div class="centered" id="comented">
                        <span style="color:#42bff5">
                            <i class="far fa-comment"></i>
                        </span>
                        {{$userJson->mostComented->count}}
                    </div>
                    <div class="card-body">
                    <h5 class="card-title">Your Most Commented Post!</h5>
                    <p class="card-text">You got {{$userJson->mostComented->count}} coments on this one!</p>
                    </div>
                </div>
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">
                        <i class="far fa-images"></i>
                        You have a total of {{$userJson->postNumber}} posts!</h5>
                    <p class="card-text">click here to see the last 12</p>
                </div>
                </div>
            </div>
        
        @else
            <div class="display-4 text-center">
                Private Profile 
                <i class="fas fa-user-lock"></i>
            </div>
        @endif
        </div>
        <footer class="bg-dark col-12 p-4 text-center mt-5">
            <small class="text-white">Made by Lucky FB - {{date('Y')}}</small>
        </footer>
</body>
</html>