<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>URL SHORTENER</title>
    <!-- Bootstrap icons-->
    <link href="./assets/bootstrapIcon/bootstrap-icons.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="./assets/fontawesome-free/css/all.min.css">

    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="./assets/css/custom.css" rel="stylesheet" />
    <link href="./assets/css/styles.css" rel="stylesheet" />
</head>

<body>
    <main>
        <!-- Navigation-->
        <nav class="navbar navbar-light bg-light static-top">
            <div class="container">
                <a class="navbar-brand" href="./index.html">URL Shortener</a>
                <a class="navbar-brand" href="./domainchecker.php"><Strong>Domain Name Checker</Strong></a>
                <a class="btn btn-primary" href="./admin.php">Admin Login</a>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container position-relative">
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <div class="text-center text-white">
                            <!-- Page heading-->
                            <h1 class="mb-5">Check Domain Name Availability</h1>
                            <!-- Signup form-->
                                <div class="container">
                                    <form action="" method="GET">
                                    <div class="input-group input-group-lg">
                                        <input id="searchBar" class="form-control" type="text" name="domain" placeholder="Search domain name..." value="<?php if (isset($_GET['domain'])) {echo $_GET['domain'];}?>">
                                        <button class="btn btn-primary" type="submit" id="btnSearch" class="btn-search"><i class="fa fa-search"></i></button>
                                    </div>
                                    </form>
                                </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="row justify-content-center mt-2">
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-body">
                                    <?php
error_reporting(0);
if (isset($_GET['domain'])) {
    $domain = $_GET['domain'];
    if (gethostbyname($domain) != $domain) {
        echo "<h3 class='fail'>Domain Already Registered!</h3>";
    } else {
        echo "<h3 class='success'>Hurry, your domain is available!, you can register it.</h3>";
    }
}
?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Icons Grid-->
        <section class="features-icons bg-light text-center">
            <div class="container">
                <center>
                    <h3>How to use</h3>
                </center>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                            <div class="features-icons-icon d-flex"><i class="bi-window m-auto text-primary"></i></div>
                            <h3>Step 1</h3>
                            <p class="lead mb-0">Copy the site URL you want to shorten.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                            <div class="features-icons-icon d-flex"><i class="bi-clipboard-check m-auto text-primary"></i></div>
                            <h3>Step 2</h3>
                            <p class="lead mb-0">Paste the URL in the provided input field then "click" the "Go" button.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="features-icons-item mx-auto mb-0 mb-lg-3">
                            <div class="features-icons-icon d-flex"><i class="bi-clipboard m-auto text-primary"></i></div>
                            <h3>Step 3</h3>
                            <p class="lead mb-0">"Click" the "Copy to Clipboard" button to copy the generated shortened url.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 h-100 text-center text-lg-start my-auto">

                        <p class="text-muted small mb-4 mb-lg-0">&copy; URL SHORTENER 2023. All Rights Reserved. Developed by <a href="mailto:hassanrobert500@gmail.com" target="_blank">Hassan Robert</a></p>
                    </div>
                    <div class="col-lg-6 h-100 text-center text-lg-end my-auto">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item me-4">
                                <a href="#!"><i class="bi-facebook fs-3"></i></a>
                            </li>
                            <li class="list-inline-item me-4">
                                <a href="#!"><i class="bi-twitter fs-3"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#!"><i class="bi-instagram fs-3"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="./assets/js/jquery-3.6.0.min.js"></script>
        <script src="./assets/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="./assets/js/script.js"></script>
    </main>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"/>
        <style type="text/css">
            body, h2, h3 {
                font-weight: normal;
                font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
                color: #333;

            }
            h3 {font-size: 24px; }
            h3.success {
                color: #008000;
                text-align: center;
            }
            h3.fail {
                color: #ff0000;
                text-align: center;

            }
        </style>
</body>

</html>