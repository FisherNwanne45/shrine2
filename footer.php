<footer class="bg-black text-white py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-4">
                <h3 class="text-red mb-4"><?php echo $name ?></h3>
                <p>Providing spiritual solutions for over 27 years. Your miracle could be right around the corner.</p>
            </div>
            <div class="col-md-4 mb-4">
                <h4 class="text-red mb-4">Quick Links</h4>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="index.php" class="text-light">Home</a></li>
                    <li class="mb-2"><a href="about.php" class="text-light">About</a></li>
                    <li class="mb-2"><a href="services.php" class="text-light">Services</a></li>
                    <li class="mb-2"><a href="testimonial.php" class="text-light">Testimonials</a></li>
                    <li class="mb-2"><a href="contact.php" class="text-light">Contact</a></li>
                </ul>
            </div>
            <div class="col-md-4 mb-4">
                <h4 class="text-red mb-4">Contact Info</h4>
                <!--<p><i class="fas fa-map-marker-alt text-red me-2"></i> <?php echo $addr ?></p>-->
                <p><i class="fab fa-whatsapp text-success me-2"></i> +<?php echo $phone ?></p>
                <p><i class="fas fa-envelope text-red me-2"></i> <?php echo $email ?></p>
            </div>
        </div>
        <hr class="my-4 bg-red">
        <div class="text-center">
            <p>&copy; <?php echo date('Y') ?> <?php echo $name ?>. All Rights Reserved.</p>
        </div>
    </div>
    <!-- Scroll to Top Button -->
    <button id="scrollToTopBtn" class="scroll-to-top" title="Go to top">
        <i class="fas fa-arrow-up"></i>
    </button>
</footer>
<?php echo $tawk ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/script.js"></script>
</body>

</html>