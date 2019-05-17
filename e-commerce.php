<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">

    <title>port </title>

    <link href="https://fonts.googleapis.com/css?family=Bentham|Playfair+Display|Raleway:400,500|Suranna|Trocchi"
        rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" type="text/css" href="ecomerce.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/flexboxgrid/6.3.1/flexboxgrid.min.css'>
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.010/css/all.css'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Dancing+Script|Roboto'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css"
        integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    <link rel="stylesheet" href="css/contactstyle.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>




</head>
<style>
body {
    background-color: #f5e1da;
}

.wrapper {
    height: 420px;
    width: 654px;
    margin: 50px auto;
    border-radius: 7px 7px 7px 7px;
    /* VIA CSS MATIC https://goo.gl/cIbnS */
    -webkit-box-shadow: 0px 14px 32px 0px rgba(0, 0, 0, 0.15);
    -moz-box-shadow: 0px 14px 32px 0px rgba(0, 0, 0, 0.15);
    box-shadow: 0px 14px 32px 0px rgba(0, 0, 0, 0.15);
}

.product-img {
    float: left;
    height: 420px;
    width: 327px;
}

.product-img img {
    border-radius: 7px 0 0 7px;
}

.product-info {
    float: left;
    height: 420px;
    width: 327px;
    border-radius: 0 7px 10px 7px;
    background-color: #ffffff;
}

.product-text {
    height: 300px;
    width: 327px;
}

.product-text h1 {
    margin: 0 0 0 38px;
    padding-top: 52px;
    font-size: 34px;
    color: #474747;
}

.product-text h1,
.product-price-btn p {
    font-family: 'Bentham', serif;
}

.product-text h2 {
    margin: 0 0 47px 38px;
    font-size: 13px;
    font-family: 'Raleway', sans-serif;
    font-weight: 400;
    text-transform: uppercase;
    color: #d2d2d2;
    letter-spacing: 0.2em;
}

.product-text p {
    height: 125px;
    margin: 0 0 0 38px;
    font-family: 'Playfair Display', serif;
    color: #8d8d8d;
    line-height: 1.7em;
    font-size: 15px;
    font-weight: lighter;
    overflow: hidden;
}

.product-price-btn {
    height: 103px;
    width: 327px;
    margin-top: 17px;
    position: relative;
}

.product-price-btn p {
    display: inline-block;
    position: absolute;
    top: -13px;
    height: 50px;
    font-family: 'Trocchi', serif;
    margin: 0 0 0 38px;
    font-size: 28px;
    font-weight: lighter;
    color: #474747;
}

span {
    display: inline-block;
    height: 50px;
    font-family: 'Suranna', serif;
    font-size: 34px;
}

.product-price-btn button {
    float: right;
    display: inline-block;
    height: 50px;
    width: 176px;
    margin: 0 40px 0 16px;
    box-sizing: border-box;
    border: transparent;
    border-radius: 60px;
    font-family: 'Raleway', sans-serif;
    font-size: 14px;
    font-weight: 500;
    text-transform: uppercase;
    letter-spacing: 0.2em;
    color: #ffffff;
    background-color: #f6a7ba;
    cursor: pointer;
    outline: none;
}

.product-price-btn button:hover {
    background-color: #f5587b;
}

.crd {
    padding-right: 14rem;
    padding-left: 14rem;
    margin-top: 7rem;
    margin-bottom: 7rem;
}

.container-fluid {
    padding-right: 0rem;
    padding-left: 0rem;
}





.w-100 {
    width: 100% !important;
    height: 54rem;
}

.ftr {

    margin-top: 5rem;
    background-color: #ee5a5a;
    height: 5rem;

}

.navbar {
    background-color: #ee5a5a;
}



section {
    background-color: #145374;
    color: #ee5a5a;
}

.carousel-inner {

    height: 42rem;
}

.imgg {
    position: absolute;
    left: 0px;
    top: 0px;
    z-index: -3;
    filter: blur(2px);



}

.bt {
    background-color: #ee5a5a;
}

.get {
    background-color: #f5e1da;
}

.reng {
    margin-top: 7rem;
}

.ctr {}

.col-sm {
    margin-bottom: 4rem;
}


.hijo {
    background-color: rgba(255, 142, 167, 0.2);
    background: rgba(255, 142, 167, 0.2);
    color: rgba(255, 142, 167, 0.2);
    align-items: center;
    color: #ee5a5a;
    font-size: 7rem;
    font-family: "La Belle Aurore";
    margin-top: 14rem;
    margin-bottom: 3rem;
}
</style>

<body>
    <!-- navbar -->

    <nav class="navbar navbar-expand-lg navbar-light ">
        <a class="navbar-brand" href="#">Soso-mecup</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>

        </div>
        </div>
    </nav>

    <!-- nav_end -->



    <!-- carousel -->

    <div class="container-fluid">

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

            <div class="carousel-inner">


                <!-- img 1 -->



                <h1 class=" tracking-in-contract-bck  hijo text-center">Soso mecup</h1>

                <img src="photo/p1.jpg" class="imgg d-block w-100" alt="photo de projet 1">
            </div>
            <div class="carousel-item">


            </div>
            <!-- carousel end -->



            <!-- cards  -->
            <section class="jumbotron get text-center">
                <div class="container">
                    <h1 class=" jumbotron-heading">Product</h1>
                </div>
            </section>
            <div class="container ">


                <div class="row">

                    <div class="col-sm">
                        <div class="card" style="width: 18rem;">
                            <img src="photo/p4.jpg" class="card-img-top" alt="photo">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up
                                    the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn bt">Go somewhere</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm">
                        <div class="card" style="width: 18rem;">
                            <img src="photo/p5.jpg" class="card-img-top" alt="photo">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up
                                    the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn bt">Go somewhere</a>
                            </div>
                        </div>

                    </div>
                    <div class="col-sm">
                        <div class="card" style="width: 18rem;">
                            <img src="photo/p3.jpg" class="card-img-top" alt="photo">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up
                                    the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn bt">Go somewhere</a>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col-sm">
                        <div class="card" style="width: 18rem;">
                            <img src="photo/p3.jpg" class="card-img-top" alt="photo">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up
                                    the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn bt">Go somewhere</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm">
                        <div class="card" style="width: 18rem;">
                            <img src="photo/p9.jpg" class="card-img-top" alt="photo">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up
                                    the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn bt">Go somewhere</a>
                            </div>
                        </div>

                    </div>
                    <div class="col-sm">
                        <div class="card" style="width: 18rem;">
                            <img src="photo/f.jpg" class="card-img-top" alt="photo">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up
                                    the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn bt">Go somewhere</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>






        <!-- contact -->








        <section class="jumbotron get text-center">
            <div class="container">
                <h1 class=" jumbotron-heading">Contact </h1>
            </div>
        </section>

        <div class="container ">
            <div class="row">
                <div class="col">
                    <div class="card">

                        <div class="card-body">
                            <form action="php.php" id="contact" method="post">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name" aria-describedby="emailHelp"
                                        placeholder="Enter name" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp"
                                        placeholder="Enter email" required>
                                    <small id="emailHelp" class="form-text text-muted">We'll never share your email
                                        with
                                        anyone else.</small>
                                </div>
                                <div class="form-group">
                                    <label for="message">Message</label>
                                    <textarea class="form-control" id="subject" rows="6" required></textarea>
                                </div>
                                <div class="mx-auto">
                                    <button type="submit" class="btn btnn text-right">Submit</button></div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- contact end -->












    <!-- Footer -->
    <div class="container-fluid">
        <footer class=" ftr page-footer font-small pt-4 ">




            <ul class=" list-unstyled list-inline text-center">
                <li class="list-inline-item">
                    <a class="  btn-floating btn-lg btn-tw mx-1">
                        <a href="https://www.facebook.com/profile.php?id=100028060860949">
                            <i class="fab fa-facebook-f"> </i>
                        </a>
                </li>
                <li class="list-inline-item">
                    <a class="btn-floating btn-tw mx-1">
                        <a href="https://twitter.com/HEnnassiry">
                            <i class="fab fa-twitter"> </i>
                        </a>
                </li>
                <li class="list-inline-item">
                    <a class="btn-floating btn-github mx-1">
                        <a href="https://github.com/hajarennassiry">
                            <i class="fab fa-github"> </i>
                        </a>
                </li>
                <li class="list-inline-item">
                    <a class="btn-floating btn-li mx-1">
                        <a href="https://www.linkedin.com/in/hajar-ennassiry-5736b6173/">
                            <i class="fab fa-linkedin-in"> </i>
                        </a>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="btn-floating btn-dribbble  mx-1 ">
                        <a href="https://dribbble.com/hajar_en">
                            <i class="fab fa-dribbble"> </i>
                        </a>
                </li>

            </ul>



    </div>


    </div>
    </footer>
    <!-- Footer -->








    <!-- bootstrap js -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
        integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
        integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous">
    </script>
    <!-- bootstrap js end -->
    </div>
</body>

</html>