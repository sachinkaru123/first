<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<style>
    tr {
        padding: 50px;
    }

    .card_size {
        height: 230px;
    }
    .card{
        height: 230px;
        border:none
    }

    .btn {
        width: 100px;
    }
</style>

<body>
    <div class="containar">
        <table class="table table-primary">
            <thead>
                <div>
                    <div class="col-sm-12">
                        <h1 class="text-center">Team meating</h1>
                    </div>
                </div>
                <tr class="row text-center">
                    <!--row-->
                    <td class="col-lg-4  mb-1 ">
                        <!--col-->
                        <!--first colomn-->
                        <p>This page is Normal webpage only use CSS/Html.</p>
                        <div class="text-center">
                            <h2 class="text-bottom"><a href="{{url('page01')}}">Visit page</a></h2>
                        </div>

                    </td>

                    <td class="col-lg-4  mb-1 ">
                        <!--col-->
                        <!--second colomn-->
                        <div class="align-bottom">
                            <p>This page is mobile responsive. ref to Facebook. used Boostrap</p>
                            <div class="text-center">
                                <h2><a href="{{url('page02')}}">Visit page</a></h2>
                            </div>
                        </div>

                    </td>

                    <td class="col-lg-4  mb-1">
                        <!--col-->
                        <!--third colomn-->
                        <p>This page design is divided to two col and mobile responsive. used Boostrap</p>
                        <div class="text-center">
                            <h2><a href="{{url('page03')}}">Visit page</a></h2>
                        </div>
                    </td>
                </tr>
            </thead>
        </table>
    </div>
    <!-- Section -->
    <section class="container">
        <div class=" text-center">
            <div class="row">
                <div class="col text-light bg-dark  col-12 col-md-4 col-lg-4 my-sm-1 ">
                    <div class="card bg-dark">
                        <div class=" card_size">
                            <h4 class="text-danger mb-4 "> page 01</h4>
                            <p class="mb-5">This page is Normal webpage only use CSS/Html.</p>
                        </div>
                    </div>
                    <a href="{{url('home2')}}" class="btn btn-primary mb-3">Visit page</a>
                </div>

                <div class="col text-light bg-dark col-12 col-md-4 col-lg-4  my-sm-1 ">
                    <div class="card bg-dark">
                        <div class=" card_size">
                            <h4 class="text-danger mb-4 "> page 02</h4>
                            <p class="mb-5">This page is mobile responsive. ref to Facebook. used Boostrap</p>
                        </div>
                    </div>
                    <a href="{{url('home3')}}" class="btn btn-primary mb-3">Visit page</a>
                </div>


                <div class="col text-light bg-dark  col-12 col-md-4 col-lg-4 my-sm-1 ">
                    <div class="card bg-dark">
                        <div class=" card_size">
                            <h4 class="text-danger mb-4 "> page 03</h4>
                            <p class="mb-5">This page design is divided to two col and mobile responsive. used Boostrap
                            </p>
                        </div>
                    </div>
                    <a href="{{url('home')}}" class="btn btn-primary mb-3">Visit page</a>
                </div>

            </div>
        </div>
    </section>
    <!-- /section -->

    <!-- new Research -->
    <div class="container text-center">
        <div class="row">
            <div class="col">
                <div class="bg-dark">
                    <div class="card bg-dark text-light mt-5">
                        <h4 class="text-danger mb-4 mt-2"> page 01</h4>
                        <p>
                            This page is Normal webpage only use CSS/Html.
                        </p>
                    </div>
                    <a href="" class="btn btn-primary mb-2">Visit Page</a>
                </div>
            </div>

            <div class="col">
                <div class="bg-dark">
                    <div class="card bg-dark text-light mt-5">
                        <h4 class="text-danger mb-4 mt-2"> page 02</h4>
                        <p>
                            This page is mobile responsive. ref to Facebook. used Boostrap
                        </p>
                    </div>
                    <a href="" class="btn btn-primary mb-2">Visit Page</a>
                </div>
            </div>

            <div class="col">
                <div class="bg-dark">
                    <div class="card bg-dark text-light mt-5">
                        <h4 class="text-danger mb-4 mt-2"> page 03</h4>
                        <p>
                            This page design is divided to two col and mobile responsive. used Boostrap
                        </p>
                    </div>
                    <a href="" class="btn btn-primary mb-2">Visit Page</a>
                </div>
            </div>

        </div>
    </div>
</body>

</html>