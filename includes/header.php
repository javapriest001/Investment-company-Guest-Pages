<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Main Css -->
    <link rel="stylesheet" href="../Assets/css/project.css">
    <link rel="stylesheet" href="Assets/css/project.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <!-- Material Icon Link -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" />
    <title>Eazy Chain - Home</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light  d-none d-md-block">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">EAZY<span>CHAIN</span></a>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav ms-5 me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./about.php">About Us </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="./investment.php">Investment Plans</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  " href="./contact.php" >Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="./faqs.php">FAQs</a>
                    </li>
                </ul>
                <form class="d-flex align-items-center ">
                    <button class="btn btn-outline-success me-2 align-item-center" type="submit"><span class="material-icons-sharp me-2"> people </span> Login</button>
                    <button class="btn btn-primary" type="submit">Create An Account</button>
                </form>
            </div>
        </div>
    </nav>


    <!-- ========== Start Mobile Nav ========== -->

    <nav class="navbar navbar-expand-lg d-block d-md-none shadow-sm sticky-top py-3">
        <div class="container-fluid nav-cont">
            <a class="btn btn-primary menu_icon"><span class="material-icons-sharp" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                    dashboard
                </span></a>
            <a class="navbar-brand navbar-brand_mobile" href="#">EAZY<span>CHAIN</span></a>
        </div>
    </nav>



    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <a class="navbar-brand" href="#">EAZY<span>CHAIN</span></a>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <a class="offcanvas_login " href="">Login</a>
            <a class="offcanvas_register" href="">Join</a>
            <div class=" " id="navbarSupportedContent">
                <ul class="navbar-nav  me-auto mb-2 offcanvas_navlink">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./about.php">About Us </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="./investment.php">Investment Plans</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="./contact.php">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="./faqs.php">FAQs</a>
                    </li>
                </ul> 
            </div>

        </div>
    </div>



    <!-- ========== End Mobile Nav ========== -->