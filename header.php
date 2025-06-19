<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $name ?> - <?php echo basename($_SERVER['PHP_SELF'], '.php') ?></title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
        <!-- Favicon Meta Tags -->
        <link rel="icon" type="image/png" href="assets/images/favicon.png">
        <link rel="apple-touch-icon" href="assets/images/favicon.png">
        <meta name="msapplication-TileImage" content="assets/images/favicon.png">

        <!-- Open Graph Meta Tags (for social media sharing) -->
        <meta property="og:image" content="assets/images/favicon.png">
        <meta property="og:image:width" content="1200">
        <meta property="og:image:height" content="630">
        <meta property="og:image:alt" content="<?php echo $name ?> - Spiritual Solutions">
        <meta property="og:type" content="website">
        <link
            href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Poppins:wght@300;400;600&display=swap"
            rel="stylesheet">
        <link href="assets/css/style.css" rel="stylesheet">

    </head>

    <body class="bg-dark text-light">
        <nav class="navbar navbar-expand-lg navbar-dark bg-black py-3">
            <div class="container">
                <a class="navbar-brand fs-3 fw-bold" href="index.php"><?php echo $logoname ?></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="services.php">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="testimonial.php">Testimonials</a></li>
                        <li class="nav-item"><a class="nav-link" href="faq.php">FAQ</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                        <li class="nav-item ms-2">
                            <div class="language-selector">
                                <select id="customLanguageSelect" class="form-select">
                                    <option value="en">English</option>
                                    <option value="fr">Français</option>
                                    <option value="es">Español</option>
                                    <option value="de">Deutsch</option>
                                    <!-- Add more languages as needed -->
                                </select>
                            </div>
                            <div id="google_translate_element" style="display:none"></div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>