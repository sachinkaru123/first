<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .no-gutters {
            margin-right: 0;
            margin-left: 0;
        }

        body{
            background-color: rgb(182, 164, 164);
        }
        .row{
            background-color: white;
            border-radius: 20px;
            box-shadow: 12px 12px 22px gray;

        }

        img{
            border-radius: 20px;
        }

        .btn-dark{
            width: 95%;
            height: 35px;
            margin-bottom: 40px;
        }

        .btn-dark:hover{
            background-color: rgb(62, 62, 70);
            color: white ;
            border:none;

        }
        .form-row{
            margin-top: 15px;
          
        }
        h1{
            font-weight:750;
        }
        h3{
            font-weight: 400;
        }

        .form-control{
            width: 95%;
            border-color: blue;
            border-radius: 10px;
        }
        .form-control:hover{
            width: 100%;
            transition: 0.6s;
        }

    </style>
</head>
<body>
   <section class="Form my-4 mx-5">
    <div class="container-fluid">
        <div class="row no-gutters">
            <div class="col-lg-5 ml-2 mt-2 mb-2">
                <img src="/images/night.jpg" alt="" class="img-fluid">
            </div>
            <div class="col-lg-7 px-5 pt-5">
                <h1>Login</h1>
                <h3>Please Login to continue</h3>
                <form action="">
                    <div class="form-row">
                        <div class="col-lg-7">
                            <input type="email" class="form-control" name="" id="" placeholder="Email Address">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-lg-7">
                            <input type="password" class="form-control" name="" id="" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-lg-7">
                            <input type="submit" class="btn-dark" name="" id="" >
                        </div>
                    </div>
                    <a href="">Forgot Password</a>
                    <p>Dont have any acc? <a href=""> Create an account</a></p>
                </form>
            </div>
        </div>
    </div>
   </section>
</body>
</html>