<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow">
    <div class="container">

        <!-- Logo -->
        <a class="navbar-brand fw-bold fs-3" href="#">
            🍽️ Restaurant
        </a>

        <!-- Toggle Button -->
        <button class="navbar-toggler" 
                type="button" 
                data-bs-toggle="collapse" 
                data-bs-target="#navbarNav">

            <span class="navbar-toggler-icon"></span>

        </button>

        <!-- Links -->
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">

            <ul class="navbar-nav gap-lg-3">

                <li class="nav-item">
                    <a href="#" class="nav-link active fw-semibold">
                        Home
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link fw-semibold">
                        Menu
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link fw-semibold">
                        About
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="btn btn-warning px-4 ms-lg-2">
                        Sign Up
                    </a>
                </li>

            </ul>

        </div>

    </div>
</nav>

<div class="container">
 <section class="py-4">

    <div id="carouselExample" class="carousel slide carousel-fade container">

        <div class="carousel-inner rounded-4 overflow-hidden">

            <!-- Slide 1 -->
            <div class="carousel-item active position-relative">

                <div class="ratio ratio-21x9">
                    <img 
                        src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?auto=format&fit=crop&w=1200&q=80"
                        class="w-100 h-100 object-fit-cover"
                        alt="Restaurant">
                </div>

                <div class="carousel-caption d-flex flex-column justify-content-center h-100">
                    <h1 class="fw-bold display-4">
                        Delicious Food
                    </h1>

                    <p class="fs-5">
                        Enjoy fresh and delicious meals prepared with the finest ingredients.
                    </p>

                    <div>
                        <a href="#" class="btn btn-warning px-4 py-2">
                            Explore Menu
                        </a>
                    </div>
                </div>

            </div>

            <!-- Slide 2 -->
            <div class="carousel-item">

                <div class="ratio ratio-21x9">
                    <img 
                        src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?auto=format&fit=crop&w=1200&q=80"
                        class="w-100 h-100 object-fit-cover"
                        alt="Food">
                </div>

                <div class="carousel-caption d-flex flex-column justify-content-center h-100">
                    <h1 class="fw-bold display-4">
                        Taste The Difference
                    </h1>

                    <p class="fs-5">
                        Discover amazing flavors and enjoy a wonderful dining experience.
                    </p>

                    <div>
                        <a href="#" class="btn btn-warning px-4 py-2">
                            Order Now
                        </a>
                    </div>
                </div>

            </div>

            <!-- Slide 3 -->
            <div class="carousel-item">

                <div class="ratio ratio-21x9">
                    <img 
                        src="https://images.unsplash.com/photo-1552566626-52f8b828add9?auto=format&fit=crop&w=1200&q=80"
                        class="w-100 h-100 object-fit-cover"
                        alt="Restaurant">
                </div>

                <div class="carousel-caption d-flex flex-column justify-content-center h-100">
                    <h1 class="fw-bold display-4">
                        Your Perfect Meal
                    </h1>

                    <p class="fs-5">
                        Great food, beautiful atmosphere, and unforgettable moments.
                    </p>

                    <div>
                        <a href="#" class="btn btn-warning px-4 py-2">
                            Visit Us
                        </a>
                    </div>
                </div>

            </div>

        </div>

        <!-- Previous -->
        <button class="carousel-control-prev"
                type="button"
                data-bs-target="#carouselExample"
                data-bs-slide="prev">

            <span class="carousel-control-prev-icon bg-dark"></span>

        </button>

        <!-- Next -->
        <button class="carousel-control-next"
                type="button"
                data-bs-target="#carouselExample"
                data-bs-slide="next">

            <span class="carousel-control-next-icon bg-dark"></span>

        </button>

    </div>

</section>
</div>
<section class="py-5 bg-light">

    <div class="container">

        <!-- Section Title -->
        <div class="text-center mb-5">
            <h2 class="fw-bold display-6">Our Menu</h2>
            <p class="text-muted fs-5">
                Discover our delicious selection of food and refreshing drinks.
            </p>
        </div>

        <div class="row g-4 justify-content-center">

            <!-- Eastern Food -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow rounded-4 overflow-hidden">

                    <img 
                        src="https://images.unsplash.com/photo-1547592180-85f173990554?auto=format&fit=crop&w=800&q=80"
                        class="card-img-top object-fit-cover"
                        style="height: 230px;"
                        alt="Eastern Food">

                    <div class="card-body text-center p-4">

                        <h4 class="card-title fw-bold">
                            Eastern Food
                        </h4>

                        <p class="card-text text-muted">
                            Enjoy delicious oriental dishes prepared with
                            traditional flavors and fresh ingredients.
                        </p>


                    </div>

                </div>
            </div>


            <!-- Western Food -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow rounded-4 overflow-hidden">

                    <img 
                        src="https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?auto=format&fit=crop&w=800&q=80"
                        class="card-img-top object-fit-cover"
                        style="height: 230px;"
                        alt="Western Food">

                    <div class="card-body text-center p-4">

                        <h4 class="card-title fw-bold">
                            Western Food
                        </h4>

                        <p class="card-text text-muted">
                            Taste our delicious burgers, pizza and other
                            classic western dishes made with love.
                        </p>


                    </div>

                </div>
            </div>


            <!-- Drinks -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow rounded-4 overflow-hidden">

                    <img 
                        src="https://images.unsplash.com/photo-1544145945-f90425340c7e?auto=format&fit=crop&w=800&q=80"
                        class="card-img-top object-fit-cover"
                        style="height: 230px;"
                        alt="Drinks">

                    <div class="card-body text-center p-4">

                        <h4 class="card-title fw-bold">
                            Fresh Drinks
                        </h4>

                        <p class="card-text text-muted">
                            Refresh yourself with our fresh juices,
                            cold drinks and delicious beverages.
                        </p>

                    </div>

                </div>
            </div>

        </div>

    </div>

</section>

<!-- section about -->

<!-- section about -->
<section class="py-5 bg-light">

    <div class="container">

        <div class="row align-items-center">

            <!-- Text -->
            <div class="col-md-7">

                <h2 class="fw-bold mb-3 text-dark">
                    About Our Restaurant
                </h2>

                <br>

                <p class="text-secondary">
                    Welcome to our restaurant. We offer delicious food
                    prepared with fresh ingredients and great care.
                </p>

                <p class="text-secondary">
                    Our menu includes a variety of Eastern and Western
                    dishes, as well as fresh and refreshing drinks.
                    We always try to provide good food and a comfortable
                    atmosphere for our guests.
                </p>

                <p class="text-secondary">
                    Come and enjoy a delicious meal with your family
                    and friends. We are happy to have you with us.
                </p>

                <br>

                <button class="btn btn-warning px-4">
                    Read More
                </button>

            </div>

            <!-- Why choose us -->
            <div class="col-md-5 mb-4 mb-md-0 bg-dark text-white rounded-4 p-4">

                <h1 class="text-white">
                    Why choose us?
                </h1>

                <br>

                <h5 class="fw-bold text-white">
                    Delicious Food
                </h5>

                <p class="text-light mb-0">
                    Fresh meals prepared with quality ingredients.
                </p>

                <br>

                <h5 class="fw-bold text-white">
                    Professional Chefs
                </h5>

                <p class="text-light mb-0">
                    Our chefs create every dish with passion.
                </p>

                <br>

                <h5 class="fw-bold text-white">
                    Great Experience
                </h5>

                <p class="text-light mb-0">
                    A comfortable place for family and friends.
                </p>

            </div>

        </div>

    </div>

</section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>