<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container {
            border: 1px solid black;
            width: 500px;
            height: 500px;
            margin: 0 40px;
            padding-left: 60px;
            padding-top: 60px;
            position: absolute;
            background-color: rgb(215, 220, 221);
        }
    .inputf{
        margin: 15px;
        }
    .inputf input{
        width: 50%;
        margin: 0 60px 10px;
        border-radius: 20px;
        height: 20px;
        padding: 10px;
        margin-left: 50px;
        border: 1px rgb(167, 103, 25);
        font-size: 15px;
        font-family: sans-serif;
       
    }
    .inputf input:hover{
        width: 55%;
        margin: 0 60px 10px;
        border-radius: 20px;
        height: 20px;
        padding: 10px;
        margin-left: 50px;
        border: 1px rgb(167, 25, 32);
        transition: 0.5s;
    }
    .inputf label{
        color: rgb(27, 131, 100);
        margin: 50px;
        text-align: center;
        font-size: 18px;
       
    }
    .button_submit input{
        width: 50%;
        border-radius: 10px;
        margin-left: 70px;
        height: 45px;
        background-color: rgb(144, 198, 243);
        border: none;
        color: blue;
        font-size: 18px;
    }
    .button_submit input:hover{
        width: 50%;
        border-radius: 10px;
        margin-left: 70px;
        height: 45px;
        background-color: rgb(73, 163, 236);
        border: none;
        color: rgb(241, 241, 248);
        font-size: 18px
    }
    h1{
        color: blueviolet;
        margin-left: 100px;
        margin-bottom: 50px;
    }

    .links{
        margin-top: 50px;
    }

    .links .createAcc{
      text-align: right;
      margin-left: 80px;
      margin-top: 20px;
    }
    .links .createAcc a{
        color: rgb(88, 0, 252);
        font-size: 15px;
        margin-bottom: 20px;
    }
    
    .inputf .forgetpass{
        color: rgb(88, 0, 252);
        margin-left: 195px;
        font-size: 15px;
        margin-bottom: 20px;
    }

    </style>
</head>

<body>

    <div class="container">
        <h1>Login Page</h1>
        <form action="">
            <div class="inputf">
                <label for="name">User Name</label><br>
                <input type="text" name="" id="name">
            </div>

            <div class="inputf">
                <label for="pass">Password</label><br>
                <input type="password" name="" id="pass"><br>
                <a href="" class="forgetpass">Forgotten password?</a>
            </div>

            <div class="button_submit">
                <input type="submit" value="Submit">
            </div>

            <div class="links">
                    <label class="createAcc"> Don't have a account <a href="">Create Account </a> </label>
                </div>
               
            </div>

            
        </form>
    </div>
</body>

</html>