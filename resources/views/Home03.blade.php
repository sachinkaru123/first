<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <style>
        @media(min-width:768px) {
            .responsive-input {
                width: 50%;
            }
        }

        @media(min-width:768px) {
            .box-response {
                height: 470px;
                text-align: center;
                align-items: baseline;
            }
        }

        body::before {
            /*For privent navbar into body*/
            display: block;
            content: '';
            height: 60px;
        }

        body {

            background: rgb(101, 116, 116);
            background: linear-gradient(317deg, rgba(101, 116, 116, 1) 8%, rgba(74, 49, 49, 1) 29%, rgba(92, 91, 91, 1) 43%, rgba(86, 87, 87, 1) 67%, rgba(164, 144, 144, 1) 79%);
        }
    </style>
</head>

<body>
    <!--navbar-->
    <div class="nav navbar navbar-expand-lg bg-dark navbar-dark py-3 fixed-top" id="home">
        <div class="container">
            <a href="" class="navbar-brand">Server Club</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenue">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navmenue">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="#" class="nav-link">Home</a>

                    </li>

                    <li class="nav-item">
                        <a href="#questions" class="nav-link">Second</a>

                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link">Third</a>

                    </li>
                </ul>
            </div>
        </div>

    </div>
    <!--/navbar-->

    <!--showcase-->
    <section class="bg-dark text-light p-5 text-center text-sm-start">
        <!--untill small size text will be left aligned-->
        <div class="container">
            <div class="d-sm-flex align-item-center justify-content-between">
                <!--it flex untill small brakepoint-->
                <div>
                    <h1>This is a Webpage <span class="text-primary">showcase</span> </h1>
                    <p>Bootstrap is supported by an extensive color system that themes our styles and components. This
                        enables more comprehensive customization and extension for any project.</p>
                    <button class="btn btn-primary btn-lg my-4">Click to begin</button>
                </div>
                <img class="img-fluid w-50 d-none d-sm-flex" src="images/tree.jpg" alt="image">
            </div>
        </div>
    </section>
    <!--/showcase-->
    <!--news letter-->
    <section class="bg-primary text-light pt-3 align-items-center pt-lg-3">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h3 class="mb-3">
                    This is The news letter element
                </h3>
                <div class="input-group mb-3 responsive-input">
                    <!--responsive-input is i created class for custom responsive-->
                    <input type="text" class="form-control" placeholder="Search" aria-label="Recipient's username"
                        aria-describedby="button-addon2">
                    <button class="btn btn-dark" type="button" id="button-addon2">Search</button>
                </div>
            </div>
        </div>
    </section>
    <!--/news letter-->
    <!--box-->
    <section class="p-5">
        <div class="container">
            <div class="row text-center g-1">
                <!--g is the class for gutters (gap)-->
                <div class="col-md">
                    <div class="card bg-dark text-light box-response">
                        <div class="card-body text-center">
                            <div class="h1">
                                <i class="bi bi-laptop"></i>
                            </div>
                            <h3 class="mb-3">This is Laptop</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, dolore temporibus
                                voluptatem facilis harum illo ipsam ipsa cum! Adipisci in cumque recusandae sequi natus
                                animi sunt labore quaerat error laudantium.</p>
                            <a href="" class="btn btn-primary mt-lg-5"> Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card bg-danger text-light box-response">
                        <div class="card-body text-center">
                            <div class="h1">
                                <i class="bi bi-book"></i>
                            </div>
                            <h3 class="mb-3">This is a Book</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit perferendis, similique
                                quaerat
                                labore aspernatur culpa sequi soluta sapiente dicta! Maxime harum, repudiandae quo
                                nesciunt
                                expedita ex eveniet aliquid odit repellendus!</p>
                            <a href="" class="btn btn-light mt-lg-4"> Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card bg-secondary text-light box-response">
                        <div class="card-body text-center">
                            <div class="h1">
                                <i class="bi bi-tree"></i>
                            </div>
                            <h3 class="mb-3">This is a tree</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, dolore temporibus
                                voluptatem facilis harum illo ipsam ipsa cum! Adipisci in cumque recusandae sequi natus
                                animi sunt labore quaerat error laudantium.</p>
                            <a href="" class="btn btn-success border mt-lg-5"> Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/box-->
    <!--another section-->
    <section class="p-1">
        <div class="container">
            <div class="row align-items-center justify-content-between bg-secondary text-light">
                <div class="col-md">
                    <img src="images/img2.jpg" alt="" class="img-fluid mt-2">
                </div>
                <div class="col-md p-3">
                    <h2 class="text-info ">Learn Bootstrap</h2>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Adipisci voluptate odit alias earum
                        distinctio commodi. Iusto temporibus fugit animi vel amet delectus eos facilis repellendus odit!
                        Iure voluptatibus error sunt?</p>

                    <a href="" class="btn btn-secondary mt-2"><i class="bi bi-chevron-right"></i>read more</a>
                </div>
            </div>
        </div>
    </section>
    <!--another section(Accordion)-->
    <section class="pt-5 bg-dark pb-5" id="questions">
        <!--in this id we can show the this section using same id and href (#questions in nav menu item) -->
        <div class="container mb-3">
            <h2 class=" py-3 text-center text-light">Frequently Asked Questions</h2>
            <div class="accordion accordion-flush " id="questions">
                <!-- item1 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#question-01">
                            <!-- data-bs-target is the toggle element items ID -->
                            How to begin the course
                        </button>
                    </h2>
                    <div id="question-01" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                        data-bs-parent="#questions">
                        <div class="accordion-body">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Saepe eum
                            perspiciatis quidem temporibus enim iste veniam, minus nulla deleniti beatae hic, incidunt
                            ab cupiditate officia itaque minima quia, illo repellat quas alias
                            <code>reprehenderit</code> aliquid dignissimos pariatur optio? Quis debitis tempora minus
                            delectus vel doloribus quae facere, nihil rem deserunt ducimus optio ab doloremque!
                        </div>
                    </div>
                </div>
                <!-- Item2 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#question-02">
                            How much time need to spend to become a pro
                        </button>
                    </h2>
                    <div id="question-02" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                        data-bs-parent="#questions">
                        <div class="accordion-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis,
                            laborum ratione doloremque exercitationem repellendus accusamus ex dicta porro doloribus
                            itaque quibusdam, facere quis esse rem in deleniti commodi similique placeat, quidem
                            suscipit aliquam. Ducimus, nobis laborum!
                        </div>
                    </div>
                </div>
                <!-- item3 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="qu#question-03">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#question-03">
                            Do we need to proper knowladge for this
                        </button>
                    </h2>
                    <div id="question-03" class="accordion-collapse collapse" aria-labelledby="qu#question-03"
                        data-bs-parent="#questions">
                        <div class="accordion-body">Placeholder content for this accordion, which is intended to
                            demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion
                            body. Nothing more exciting happening here in terms of content, but just filling up the
                            space to make it look, at least at first glance, a bit more representative of how this would
                            look in a real-world application.</div>
                    </div>
                </div>

                <!-- item4 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="qu#question-03">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#question-04">
                            What do to get the course
                        </button>
                    </h2>
                    <div id="question-04" class="accordion-collapse collapse" aria-labelledby="qu#question-03"
                        data-bs-parent="#questions">
                        <div class="accordion-body">Placeholder content for this accordion, which is intended to
                            demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion
                            body. Nothing more exciting happening here in terms of content, but just filling up the
                            space to make it look, at least at first glance, a bit more representative of how this would
                            look in a real-world application.</div>
                    </div>
                </div>
            </div>
    </section>
    <section id="inst" class=" p-5 bg-dark text-white">
        <div class="container text-center">

            <h2>This is the instrctors</h2>
            <p class="lead">A card is a flexible and extensible content container. It includes options for headers and
                footers, a wide variety of content, contextual background colors, and powerful display options. If
                you’re familiar with Bootstrap 3, cards replace our old panels, wells, and thumbnails. Similar
                functionality to those components is available as modifier classes for cards.</p>
            <div class="row g-4">
                <!-- First col -->
                <div class="col-md-6 col-lg-3">
                    <div class="card bg-light text-dark">
                        <div class="card-body text-center">
                            <img src="https://randomuser.me/api/portraits/men/22.jpg" class="rounded-circle mb-2"
                                alt="">
                            <h4 class="mb-2">Sam Fisher</h4>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi dolores pariatur eaque?
                                Impedit fuga nulla eaque nesciunt quia laborum deleniti, velit ea pariatur dignissimos
                                sapiente distinctio, temporibus architecto accusamus! Fuga?
                            </p>
                            <div class="btn"> <i class="bi bi-whatsapp m-2"></i></div>
                            <div class="btn"> <i class="bi bi-facebook m-2"></i></div>
                            <div class="btn"> <i class="bi bi-twitter m-2"></i></div>
                            <div class="btn"> <i class="bi bi-linkedin m-2"></i></div>
                        </div>
                    </div>
                </div>
                <!-- second Col -->
                <div class="col-md-6 col-lg-3">
                    <div class="card bg-light text-dark">
                        <div class="card-body text-center">
                            <img src="https://randomuser.me/api/portraits/men/22.jpg" class="rounded-circle mb-2"
                                alt="">
                            <h4 class="mb-2">Sam Fisher</h4>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi dolores pariatur eaque?
                                Impedit fuga nulla eaque nesciunt quia laborum deleniti, velit ea pariatur dignissimos
                                sapiente distinctio, temporibus architecto accusamus! Fuga?
                            </p>
                            <div class="btn"> <i class="bi bi-whatsapp m-2"></i></div>
                            <div class="btn"> <i class="bi bi-facebook m-2"></i></div>
                            <div class="btn"> <i class="bi bi-twitter m-2"></i></div>
                            <div class="btn"> <i class="bi bi-linkedin m-2"></i></div>
                        </div>
                    </div>
                </div>
                <!-- third col -->
                <div class="col-md-6 col-lg-3">
                    <div class="card bg-light text-dark">
                        <div class="card-body text-center">
                            <img src="https://randomuser.me/api/portraits/men/22.jpg" class="rounded-circle mb-2"
                                alt="">
                            <h4 class="mb-2">Sam Fisher</h4>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi dolores pariatur eaque?
                                Impedit fuga nulla eaque nesciunt quia laborum deleniti, velit ea pariatur dignissimos
                                sapiente distinctio, temporibus architecto accusamus! Fuga?
                            </p>
                            <div class="btn"> <i class="bi bi-whatsapp m-2"></i></div>
                            <div class="btn"> <i class="bi bi-facebook m-2"></i></div>
                            <div class="btn"> <i class="bi bi-twitter m-2"></i></div>
                            <div class="btn"> <i class="bi bi-linkedin m-2"></i></div>
                        </div>
                    </div>
                </div>

                <!-- forth col -->
                <div class="col-md-6 col-lg-3">
                    <div class="card bg-light text-dark">
                        <div class="card-body text-center">
                            <img src="https://randomuser.me/api/portraits/men/22.jpg" class="rounded-circle mb-2"
                                alt="">
                            <h4 class="mb-2">Sam Fisher</h4>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi dolores pariatur eaque?
                                Impedit fuga nulla eaque nesciunt quia laborum deleniti, velit ea pariatur dignissimos
                                sapiente distinctio, temporibus architecto accusamus! Fuga?
                            </p>
                            <div class="btn"> <i class="bi bi-whatsapp m-2"></i></div>
                            <div class="btn"> <i class="bi bi-facebook m-2"></i></div>
                            <div class="btn"> <i class="bi bi-twitter m-2"></i></div>
                            <div class="btn"> <i class="bi bi-linkedin m-2"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact us -->
    <div class="container">
        <div class="row text-start bg-light text-dark">
            <div class="col col-lg-3 mb-3 ">
                <div class="btn"><i class="bi bi-bootstrap m-2 h3"><span class="m-2">Boostrap</span></i></div>
                <p>Designed and built with all the love in the world by the Bootstrap team with the help of our
                    contributors. </p>
                <p>Code licensed MIT, docs CC BY 3.0.</p>
                <p>Currently v5.0.2.</p>
                <p>Analytics by Fathom.</p>

            </div>

            <div class="col-6 col-lg-2 mb-3 offset-lg-1 mt-2">
                <h5>links </h5>
                <ul class="list-unstyled small text-muted">
                    <li class="mb-2"><a class="text-decoration-none text-dark" href="">Home</a></li>
                    <li class="mb-2"><a class="text-decoration-none text-dark" href="">Docs</a></li>
                    <li class="mb-2"><a class="text-decoration-none text-dark" href="">Example</a></li>
                    <li class="mb-2"><a class="text-decoration-none text-dark" href="">Themes</a></li>
                    <li class="mb-2"><a class="text-decoration-none text-dark" href="">Blog</a></li>
                    <li class="mb-2"><a class="text-decoration-none text-dark" href="">Swag store</a></li>
                </ul>
            </div>

            <div class="col-6 col-lg-2 mb-3 mt-2">
                <h5>Guides </h5>
                <ul class="list-unstyled">
                    <li class="mb-2"><a class="text-decoration-none text-dark" href="">Getting started</a></li>
                    <li class="mb-2"><a class="text-decoration-none text-dark" href="">Starter template</a></li>
                    <li class="mb-2"><a class="text-decoration-none text-dark" href="">Webpack</a></li>
                    <li class="mb-2"><a class="text-decoration-none text-dark" href="">Parcel</a></li>
                </ul>
            </div>

            <div class="col-6 col-lg-2 mb-3 mt-2">
                <h5>Projects </h5>
                <ul class="list-unstyled">
                    <li class="mb-2"><a class="text-decoration-none text-dark" href="">Bootstrap 5</a></li>
                    <li class="mb-2"><a class="text-decoration-none text-dark" href="">Bootstrap 4</a></li>
                    <li class="mb-2"><a class="text-decoration-none text-dark" href="">Icons</a></li>
                    <li class="mb-2"><a class="text-decoration-none text-dark" href="">RFS</a></li>
                    <li class="mb-2"><a class="text-decoration-none text-dark" href="">npm starter</a></li>
                </ul>
            </div>

            <div class="col-6 col-lg-2 mb-3 mt-2">
                <h5>Community </h5>
                <ul class="list-unstyled">
                    <li class="mb-2"><a class="text-decoration-none text-dark" href="">Issues</a></li>
                    <li class="mb-2"><a class="text-decoration-none text-dark" href="">Discussions</a></li>
                    <li class="mb-2"><a class="text-decoration-none text-dark" href="">Corporate sponsors</a></li>
                    <li class="mb-2"><a class="text-decoration-none text-dark" href="">Open Collective</a></li>
                    <li class="mb-2"><a class="text-decoration-none text-dark" href="">Stack Overflow</a></li>
                </ul>
            </div>

        </div>
    </div>

    <!-- footer -->
    <footer class="p-5 bg-dark text-light text-center">
        <div class="container">
            <p class="lead">Copyright &copy; 2022 ServerClub</p>
            <a href="#" class="position-absolute pb-1 ">
                <i class="bi bi-arrow-up-circle h1  bottom-0 end-0"></i>
            </a>

        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>