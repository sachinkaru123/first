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
        h1 {
            font-weight: bold;
        }

        .inputbox {
            border: 1px solid black;
            height: 90%;
            width: 100%;
            margin-top: 10%;
            padding: 20px;
            background-color: white;
            border: none;

        }

        .form-control {
            margin-bottom: 10px;
            width: 100%;
            margin-right: 10px;

        }

        .btn-primary {
            width: 100%;
            font-weight: bold;
        }

        .createNew {
            background-color: #1aac07;
            border: none;
            border-radius: 5px;
            height: 40px;
            color: white;
            font-weight: bold;
        }

        .container {
            padding: 10px;
        }

        .inputbox .fp {
            font-size: 14px;
        }
    </style>

</head>

<body class="bg-light">
    <div class="container bg-light ">
        <div class="row">
            <div class="col-md-6 ">
                <!--first col-->
                <div class="textlbl align-middle">
                    <h1 class="text-primary">Facebook</h1>
                    <h3>Facebook helps you connect and share with the people in your life.</h3>
                </div>
            </div>

            <div class="col-md-6">
                <!--second col-->
                <div class="inputbox shadow ">
                    <input class="form-control" type="text" placeholder="Email address or Phone number">
                    <input class="form-control" type="text" placeholder="Password">
                    <button class="btn btn-primary btn-lg btn-block" type="submit">Log in</button><br>
                    <p class="fp text-center"><a href="">Forgotten password?</a> </p>
                    <hr>
                    <div class="text-center">
                        <button class="createNew">Create New Account</button>
                    </div>


                </div>
            </div>
        </div>
    </div>
</body>

</html>