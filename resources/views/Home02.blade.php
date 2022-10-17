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
        .cost_1 {
            align-items: center;
            margin-left: 100px;
        }

        body {
            background-image: url('/images/bg-01.jpg');
            background-size:100% auto;
            background-repeat:no-repeat;
            

        }

        .card {
            height: 400px;
            border:none;
        }

 

        .btn_width {
            width: 70%;
        }

        /* This is manually setting breakpoints */

        @media(min-width:320px) {

            .inside_sec {

                margin-left: 10px;
                height: 100%;
            }
            body {
            background-image:  url('/images/bg-01.jpg');
            background-size: auto;
            background-repeat:no-repeat;
        }
        }

        @media(min-width:576px) {

            .inside_sec {
                width: 50%;
                height: 100%;

            }
            body {
            background-image:  url('/images/bg-01.jpg');
            background-size: auto;
            background-repeat:no-repeat; 
            }

            
        }

        @media(max-width:768px) {
            .cous_03{
                display: none;
            }
            .img_01{
                width: 100%;
                height: 100%;
                object-fit: cover;
            }
        }

        @media(min-width:768px) {

            .inside_sec {
                width: 50%;
                height: 100%;
                margin-left: 60px;

            }
            
        }

        @media(min-width:992px) {

            .inside_sec {
                width: 50%;
                height: 100%;
                margin-left: 60px;

            }
            .img_01{
                width: 100%;
                height: 100%;
                object-fit: cover;
            }
            body {
            background-image:  url('/images/bg-01.jpg');;
            background-size:  100%;
            background-repeat:no-repeat; 
            }

        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent border-none mt-4">
        <div class="container">
            <a class="navbar-brand" href="#">ARCA</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse cost_1 fw-bold" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item mx-3">
                        <a class="nav-link ms-3" href="#">What is ARCA?</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link mx-3" href="#">Article</a>
                    </li>

                    <li class="nav-item mx-3">
                        <a class="nav-link  mx-3" href="#">Project</a>
                    </li>

                    <li class="nav-item mx-3">
                        <a class="nav-link mx-3 mx-3" href="#">Contact</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <button class="btn btn-outline-light mx-3" type="submit">Online</button>
                    <button class="btn btn-success" type="submit">Join Us</button>
                </form>
            </div>
        </div>
    </nav>
    <!-- Nav bar-end -->

    <div class="container">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner ">
                <!-- First Item -->
                <div class="carousel-item active">
                    <div class="text-white m-5">
                        <div class="card bg-transparent">
                            <div class="inside_sec  ">
                                <h1 class="text-left">An Arvawe community Fund A</h1>
                                <p class="mt-sm-5">ARCA announced the EcoRocket on November 17, 2020. This is a small
                                    orbital rocket
                                    designed around two main features: cost-effectiveness and eco-friendliness</p>
                                <button class="btn btn-success btn_width">Join Us</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Second Item -->
                <div class="carousel-item">
                    <div class="text-white m-5">
                        <div class="row">
                            <div class="col">
                                <div class="card bg-transparent">
                                    <div class="inside_sec  mt-lg-4 ">
                                        <h1 class="text-left">An Arvawe community Fund A</h1>
                                        <p class="mt-sm-5">ARCA announced the EcoRocket on November 17, 2020. This is a
                                            small
                                            orbital rocket
                                            designed around two main features: cost-effectiveness and eco-friendliness
                                        </p>
                                        <button class="btn btn-success btn_width">Join Us</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col cous_03">
                                <div class="card bg-transparent">
                                    <img src="/images/tree.jpg" alt="" class="img_01">
                                    
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
                <!-- Third Item -->
                <div class="carousel-item">
                    <div class="text-white m-5">
                        <div class="card bg-transparent">
                            <div class="inside_sec  mt-lg-4 ">
                                <h1 class="text-left">An Arvawe community Fund A</h1>
                                <p class="mt-sm-5">ARCA announced the EcoRocket on November 17, 2020. This is a small
                                    orbital rocket
                                    designed around two main features: cost-effectiveness and eco-friendliness</p>
                                <button class="btn btn-success btn_width">Join Us</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>