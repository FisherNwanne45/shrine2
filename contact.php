<?php include "short.php" ?>
<?php include "header.php" ?>

<!-- Contact Hero -->
<section class="contact-hero py-5 position-relative overflow-hidden">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h1 class="display-4 fw-bold mb-4">CONTACT <span class="text-red">SPIRITUAL IREKOBO</span></h1>
                <p class="lead">Feel free to reach out for spiritual guidance and solutions</p>
            </div>
        </div>
    </div>
</section>

<!-- Contact Content -->
<section class="py-5">
    <div class="container py-5">
        <div class="row g-4">
            <div class="col-lg-6">
                <div class="card border-0 bg-dark2 h-100 p-4">
                    <h2 class="text-red mb-4">GET IN TOUCH</h2>
                    <p class="mb-4">If you have a problem and want a quick solution, and you're serious about solving
                        your problem and living the life you want, feel free to contact me via email or phone.</p>
                    <div class="contact-info mb-4">
                        <div class="d-flex mb-3">
                            <div class="icon-box me-3">
                                <i class="fas fa-map-marker-alt text-red fs-4"></i>
                            </div>
                            <div>
                                <h5 class="mb-0">Address</h5>
                                <p class="mb-0"><?php echo $addr ?></p>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <div class="icon-box me-3">
                                <i class="fas fa-phone text-red fs-4"></i>
                            </div>
                            <div>
                                <h5 class="mb-0">Phone</h5>
                                <p class="mb-0"><?php echo $phone ?></p>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <div class="icon-box me-3">
                                <i class="fas fa-envelope text-red fs-4"></i>
                            </div>
                            <div>
                                <h5 class="mb-0">Email</h5>
                                <p class="mb-0"><?php echo $email ?></p>
                            </div>
                        </div>
                    </div>
                    <!--<div class="social-links">
                        <h5 class="mb-3">Follow Me</h5>
                        <a href="#" class="text-light me-3"><i class="fab fa-facebook-f fs-4"></i></a>
                        <a href="#" class="text-light me-3"><i class="fab fa-twitter fs-4"></i></a>
                        <a href="#" class="text-light me-3"><i class="fab fa-instagram fs-4"></i></a>
                        <a href="#" class="text-light"><i class="fab fa-youtube fs-4"></i></a>
                    </div>-->
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card border-0 bg-dark2 h-100 p-4">
                    <h2 class="text-red mb-4">SEND A MESSAGE</h2>
                    <form id="whatsappContactForm">
                        <div class="mb-3">
                            <label for="name" class="form-label">Your Name</label>
                            <input type="text" class="form-control bg-dark3 border-0 text-light" id="name" name="name"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" class="form-control bg-dark3 border-0 text-light" id="email"
                                name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone Number</label>
                            <input type="tel" class="form-control bg-dark3 border-0 text-light" id="phone" name="phone">
                        </div>
                        <div class="mb-3">
                            <label for="service" class="form-label">Service Needed</label>
                            <select class="form-select bg-dark3 border-0 text-light" id="service" name="service"
                                required>
                                <option value="" selected disabled>Select a service</option>
                                <option>Love Spell</option>
                                <option>Financial Spell</option>
                                <option>Pregnancy Spell</option>
                                <option>Protection Spell</option>
                                <option>Court Case</option>
                                <option>Healing</option>
                                <option>Other</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Your Message</label>
                            <textarea class="form-control bg-dark3 border-0 text-light" id="message" name="message"
                                rows="5" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-red btn-lg w-100">Send Message</button>
                    </form>
                </div>
            </div>

            <script>
            document.getElementById('whatsappContactForm').addEventListener('submit', function(e) {
                e.preventDefault();

                // Get form values
                const name = encodeURIComponent(this.name.value);
                const email = encodeURIComponent(this.email.value);
                const phone = encodeURIComponent(this.phone.value);
                const service = encodeURIComponent(this.service.value);
                const message = encodeURIComponent(this.message.value);

                // Format the WhatsApp message with proper spacing
                const whatsappMessage = `*NEW CLIENT MESSAGE*%0A%0A
*Name:* ${name}%0A
*Email:* ${email}%0A
*Phone:* ${phone || 'Not provided'}%0A%0A
*Service Needed:* ${service}%0A%0A
*Message:*%0A${message}`;

                // Open WhatsApp with properly formatted message
                window.open(`https://wa.me/<?php echo $phone; ?>?text=${whatsappMessage}`, '_blank');

                // Optional: Reset form after submission
                this.reset();
            });
            </script>
        </div>
    </div>
</section>


<?php include "footer.php" ?>