<?php
// Simple landing page with dynamic content
$page_title = "Welcome to Our Awesome Website";
$current_year = date("Y");

// Optional: Show success message from contact form
$message = "";
if (isset($_GET['status']) && $_GET['status'] == 'success') {
    $message = '<div class="alert success">Thank you for contacting us! We will get back to you soon.</div>';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="container">
                <div class="logo">
                    <h2>Your Brand</h2>
                </div>
                <ul class="nav-links">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#features">Features</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <main>
        <!-- Hero Section -->
        <section id="home" class="hero">
            <div class="container">
                <div class="hero-content">
                    <h1>Welcome to Our Platform</h1>
                    <p>Build amazing things with us. Simple, fast, and reliable solutions for your business needs.</p>
                    <div class="hero-buttons">
                        <a href="#contact" class="btn btn-primary">Get Started</a>
                        <a href="#features" class="btn btn-secondary">Learn More</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Features Section -->
        <section id="features" class="features">
            <div class="container">
                <h2 class="section-title">Key Features</h2>
                <div class="features-grid">
                    <div class="feature-card">
                        <div class="feature-icon">🚀</div>
                        <h3>Fast Performance</h3>
                        <p>Lightning fast loading times optimized for the best user experience.</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">🔒</div>
                        <h3>Secure Platform</h3>
                        <p>Your data is safe with our enterprise-grade security measures.</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">💡</div>
                        <h3>Easy to Use T</h3>
                        <p>Intuitive interface designed for everyone, from beginners to experts.</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">🌍</div>
                        <h3>Global Reach</h3>
                        <p>Connect with users worldwide with our global infrastructure.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Section -->
        <section id="about" class="about">
            <div class="container">
                <div class="about-content">
                    <div class="about-text">
                        <h2>About Us</h2>
                        <p>We are a team of passionate developers and designers dedicated to creating exceptional digital experiences. Since 2020, we've helped hundreds of businesses grow online.</p>
                        <p>Our mission is to provide powerful, yet simple solutions that help our clients achieve their goals. We believe in innovation, quality, and customer satisfaction.</p>
                        <div class="stats">
                            <div class="stat">
                                <span class="stat-number">500+</span>
                                <span class="stat-label">Projects Completed</span>
                            </div>
                            <div class="stat">
                                <span class="stat-number">100+</span>
                                <span class="stat-label">Happy Clients</span>
                            </div>
                            <div class="stat">
                                <span class="stat-number">24/7</span>
                                <span class="stat-label">Support</span>
                            </div>
                        </div>
                    </div>
                    <div class="about-image">
                        <img src="https://via.placeholder.com/500x400/007bff/white?text=About+Us" alt="About Us">
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="contact">
            <div class="container">
                <h2 class="section-title">Get In Touch</h2>
                
                <?php echo $message; ?>
                
                <div class="contact-content">
                    <div class="contact-info">
                        <h3>Contact Information</h3>
                        <p>Have questions? We'd love to hear from you. Send us a message and we'll respond as soon as possible.</p>
                        <div class="info-item">
                            <span class="info-icon">📧</span>
                            <span>hello@yourwebsite.com</span>
                        </div>
                        <div class="info-item">
                            <span class="info-icon">📞</span>
                            <span>+1 (555) 123-4567</span>
                        </div>
                        <div class="info-item">
                            <span class="info-icon">📍</span>
                            <span>123 Main Street, New York, NY 10001</span>
                        </div>
                    </div>
                    
                    <form action="contact.php" method="POST" class="contact-form">
                        <div class="form-group">
                            <input type="text" name="name" placeholder="Your Name" required>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" placeholder="Your Email" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="subject" placeholder="Subject" required>
                        </div>
                        <div class="form-group">
                            <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Send Message</button>
                    </form>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>Your Brand</h3>
                    <p>Creating amazing digital experiences since 2020.</p>
                </div>
                <div class="footer-section">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#features">Features</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Follow Us</h4>
                    <div class="social-links">
                        <a href="#">Facebook</a>
                        <a href="#">Twitter</a>
                        <a href="#">LinkedIn</a>
                        <a href="#">Instagram</a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; <?php echo $current_year; ?> Your Brand. All rights reserved Ashraf.</p>
            </div>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>