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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" integrity="sha256-PHcOkPmOshsMBC+vtJdVr5Mwb7r0LkSVJPlPrp/IMpU=" crossorigin="anonymous" />
    <title>Document</title>
    <style>
        body{
            background: rgb(120,115,205);
background: linear-gradient(90deg, rgba(120,115,205,1) 0%, rgba(119,119,224,1) 9%, rgba(0,212,255,1) 100%);
        }
        .titleBrand{
            font-family: 'Satisfy';
            font-size: 3rem;
        }

        .titleBrand2{
            font-family: 'Satisfy';
            font-size: 6rem;
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
        .mt-10{
            margin-top: 10rem;
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
    <div class="container mt-10">
        <div class="row ">
            <h1 class=" col-12 titleBrand text-center animated jello text-light">
                My Followers!    
            </h1>    
        </div>
        <form action="/search" method="post" class="row mt-4">
                @csrf
                <div class="input-group col-12 col-md-8 offset-md-2 
                     animated slideInLeft">
                    <div class="input-group-prepend">
                        <span class="input-group-text border-primary" id="basic-text1">
                            @
                        </span>
                    </div>
                    <input class=" form-control my-0 py-1 border-primary text-center 
                        titleBrandInput col-12" type="text" name="username" 
                        placeholder="Username here!" aria-label="Search">
                </div>
                <button type="submit" class=" animated slideInRight 
                        mt-4 btn btn-block col-8 col-md-6 mx-auto btn-primary">
                    <strong> Search</strong> 
                </button>
            </form>
        </div>
    </div>
</body>
</html>