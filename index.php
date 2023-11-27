<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">    <title>Home - Huisplanner</title>
    <style>
        /* Aanvullende CSS-stijl voor zwarte pijlen in de carousel */
        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            background-color: black;
        }

        .carousel-control-prev,
        .carousel-control-next {
            color: black;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="#">
        <img class="navbar-brand" src="https://seeklogo.com/images/B/booking-logo-937C69F36E-seeklogo.com.png" width="70" height="60" alt="logo">        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item px-5">
                    <a class="nav-link" href="booking.html">Booking</a>
                </li>
                <li class="nav-item px-5">
                    <a class="nav-link" href="#">Link 1</a>
                </li>
                <li class="nav-item px-5">
                    <a class="nav-link" href="#">Link 2</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item px-5">
                    <a class="nav-link btn btn-secondary" href="sign-in.php">Login</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="pt-5">Welcome to Huisplanner</h1>
                <p class="lead">Your go-to platform for managing your house plans and schedules.</p>
            </div>
        </div>
        <!-- Carousel Section -->
        <div id="houseCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active pb-3 pt-3">
                    <img src="fotos/1.jpg" class="d-block w-100 rounded" alt="House 1" style="max-height: 500px;">
                </div>
                <div class="carousel-item pb-3 pt-3">
                    <img src="fotos/2.jpg" class="d-block w-100 rounded" alt="House 2" style="max-height: 500px;">
                </div>
                <div class="carousel-item pb-3 pt-3">
                    <img src="fotos/3.jpg" class="d-block w-100 rounded" alt="House 3" style="max-height: 500px;">
                </div>
            </div>
            <a class="carousel-control-prev" href="#houseCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#houseCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!-- End Carousel Section -->
    </div>
    <footer class="fixed-bottom bg-dark text-white text-center py-2">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p>E-mail: info@huisplanner.com</p>
                    <p>Phone number: 06-123456789</p>
                </div>
                <div class="col-md-6">
                    <form>
                        <div class="form-row align-items-center">
                            <div class="col-auto">
                                <label class="sr-only" for="questionInput">Ask a question</label>
                                <input type="text" class="form-control mb-2" id="questionInput" placeholder="Ask a question">
                            </div>
                            <div class="col-auto">
                                <button type="submit" class="btn btn-secondary mb-2">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        &copy; 2023 Huisplanner. All rights reserved.
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
