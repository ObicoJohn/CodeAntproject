<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>IT Project Project</title>
</head>

<body>
    <div class="header">
        <div class="header-box">
            <div class="logo">
                <p><a href="index.html">Code<span>ANT</span></a></p>
            </div>
            <div class="nav-bar">
                <nav> .
                    <li><a class="action" href="">Home</a></li>
                    <li><a href="#about">About Us</a></li>
                    <li><a href="#service">Services</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="course.html">Course</a></li>
                    <li><a href="logout.php">Log Out</a></li>
                </nav>
            </div>

            <!-- mobile menu -->
            <div class="mobile-menu">
                <div class="mobile-menu-toggle">
                    <!-- <i class='bx bx-x'></i> -->
                    <i class="fa-solid fa-xmark cancel"></i>
                    <!-- <i class="fa-solid fa-bars fa-2x"></i> -->
                    <i class='fas fa-bars hambuger'></i>
                </div>
                <div class="mobile-menu-items">
                    <ul class="mobile-menu-list">
                        <li><a href="">Home</a></li>
                        <li><a href="#about">About Us</a></li>
                        <li><a href="#service">Services</a></li>
                        <li><a href="#contact">Contact</a></li>
                        <li><a href="course.html">Course</a></li>
                    </ul>

                </div>
            </div>
            <!-- </div> -->
        </div>
    </div>

    <section class="main">
        <div class="main-text">
            <h2>Welcome to our</h2>
            <h1>Coding Tech Program</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel diam at velit placerat consectetur
                vel in est. Donec euismod, diam et dignissim tristique, velit velit consectetur velit, at tincidunt
                velit nunc et velit.</p>
            <a href="#" class="btn">Learn More</a>
        </div>
    </section>

    <!-- About -->
    <section class="about" id="about">
        <div class="about-container">
            <h2 class="about-title">About Us</h2>
            <div class="about-flex1">
                <div class="about-item">
                    <img src="images/about us.jpg" alt="code pic">
                </div>
                <div class="about-item">
                    <div class="about-text">
                        <p><span>Code</span><b>ANT</b> is a tech-coding program camp & institution. We offer the
                            best
                            quality training to enable and improve your knowledge in your choice of aspect in any of the
                            tech-coding service you which to learn and foster a career in.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="about-container">
            <div class="about-flex">
                <div class="about-box">
                    <div class="about-box-text">
                        <img src="./images/mission.jpg" alt="">
                        <h2>Mission</h2>
                        <p><span>Code</span><b>ANT</b> mission is to provide a comprehensive, flexible, and inclusive
                            coding program that
                            equips students with the skills and knowledge needed to excel in their careers. Our mission
                            is to foster a positive, supportive, and inclusive learning environment where everyone feels
                            welcome and encouraged to succeed.
                        </p>
                    </div>
                </div>
                <div class="about-box">
                    <div class="about-box-text">
                        <img src="./images/vision.jpg" alt="">
                        <h2>Vision</h2>
                        <p><span>Code</span><b>ANT</b> vision is to create a world where every student has the
                            opportunity to excel in their
                            chosen field, and to make that opportunity a reality. We believe that the best coding
                            program should be accessible, affordable, and accessible to all.
                        </p>
                    </div>
                </div>
                <div class="about-box">
                    <div class="about-box-text">
                        <img src="./images/value.jpg">
                        <h2>Values</h2>
                        <p><span>Code</span><b>ANT</b> values are: inclusivity, equality, accessibility, and
                            empowerment. We strive to
                            create a supportive and inclusive environment where everyone feels heard, respected, and
                            valued.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <!-- Service -->
    <section class="service" id="service">
        <div class="service-container">
            <h2>Our Services</h2>
            <div class="service-flex">
                <!-- service item -->
                <div class="service-item">
                    <h3>Web Development</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime deserunt laborum ea quas ex
                        at iure assumenda animi quibusdam eum?
                    </p>
                </div>
                <!-- service item -->
                <div class="service-item">
                    <h3>Database Management</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo reiciendis officia aspernatur
                        harum laudantium ea esse explicabo nam voluptatem sequi!
                    </p>
                </div>
                <!-- service item -->
                <div class="service-item">
                    <h3>UI/UX Design</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo reiciendis officia aspernatur
                        harum laudantium ea esse explicabo nam voluptatem sequi!
                    </p>
                </div>
                <!-- service item -->
                <div class="service-item">
                    <h3>Cyber Security</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo reiciendis officia aspernatur
                        harum laudantium ea esse explicabo nam voluptatem sequi!
                    </p>
                </div>
                <!-- service item -->
                <div class="service-item">
                    <h3>Graphic Design</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo reiciendis officia aspernatur
                        harum laudantium ea esse explicabo nam voluptatem sequi!
                    </p>
                </div>
                <!-- service item -->
                <div class="service-item">
                    <h3>Software Programmer</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo reiciendis officia aspernatur
                        harum laudantium ea esse explicabo nam voluptatem sequi!
                    </p>
                </div>
            </div>
        </div>
        <!-- Staff Section -->
        <div class="staff-container">
            <h2>Our Staff</h2>
            <div class="staff-flex">
                <div class="staff-item">
                    <img src="images/ceo.jpg" alt="">
                    <h4>Manager</h4>
                    <h6>Mrs. Chisom Ayodele</h6>
                </div>
                <div class="staff-item">
                    <img src="images/teacher 3.jpg" alt="">
                    <h4>Senior Dev.</h4>
                    <h6>Mr. Charles Epoch</h6>
                </div>
                <div class="staff-item">
                    <img src="images/teacher 4.jpg" alt="">
                    <h4>Senior Dev.</h4>
                    <h6>Miss. Faustina Chukwu</h6>
                </div>
                <div class="staff-item">
                    <img src="images/teacher 2.jpg" alt="">
                    <h4>Junior Dev.</h4>
                    <h6>Mr. Emeka Olamide</h6>
                </div>
                <div class="staff-item">
                    <img src="images/teacher.jpg" alt="">
                    <h4>Junior Dev.</h4>
                    <h6>Miss. Geneieve Somto</h6>
                </div>
                <div class="staff-item">
                    <img src="images/data manger.jpg" alt="">
                    <h4>Data Analysist</h4>
                    <h6>Miss. Chizoba Nwosu</h6>
                </div>
            </div>
        </div>
        <!-- Gallery Section -->
        <div class="gallery-container">
            <h2>Our Gallery</h2>
            <div class="gallery-flex">
                <div class="gallery-item">
                    <img src="images/gallery 5.jpg" alt="">
                </div>
                <div class="gallery-item">
                    <img src="images/gallery8.jpg" alt="">
                </div>
                <div class="gallery-item">
                    <img src="images/gallery11.jpg" alt="">
                </div>
                <div class="gallery-item">
                    <img src="images/gallery6.jpg" alt="">
                </div>
                <div class="gallery-item">
                    <img src="images/gallery7.jpg" alt="">
                </div>
                <div class="gallery-item">
                    <img src="images/gallery1.jpg" alt="">
                </div>
                <div class="gallery-item">
                    <img src="images/gallery4.jpg" alt="">
                </div>
                <div class="gallery-item">
                    <img src="images/gallery10.jpg" alt="">
                </div>
            </div>
        </div>

        <!-- Testimony Section -->
        <div class="testimony-container">
            <h2>Testimonials</h2>
            <div class="testimony-flex">
                <div class="testimony-item">
                    <img src="/images/testimony.jpg" alt="">
                    <div class="testimony-quote">
                        <i class="fa-solid fa-quote-left"></i>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum similique nam qui possimus
                            voluptates quod explicabo repudiandae quas nobis placeat?</p>
                    </div>
                    <div class="testimony-details">
                        <p>Steve Ohagwu</p>
                        <p class="occupation">Web Developer</p>
                    </div>
                </div>
                <div class="testimony-item">
                    <img src="/images/testimony (2).jpg" alt="">
                    <div class="testimony-quote">
                        <i class="fa-solid fa-quote-left"></i>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error possimus ad, eos, modi qui,
                            atque deleniti tempore illum distinctio provident explicabo autem maxime veniam!</p>
                    </div>
                    <div class="testimony-details">
                        <p>Amarachi Udodi</p>
                        <p class="occupation">UI/UX Designer</p>
                    </div>
                </div>
                <div class="testimony-item">
                    <img src="/images/testimony 3.jpg" alt="">
                    <div class="testimony-quote">
                        <i class="fa-solid fa-quote-left"></i>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores aliquid, nemo deleniti
                            molestias saepe est molestiae ab. Adipisci, quam aperiam.</p>
                    </div>
                    <div class="testimony-details">
                        <p>Chimezie Otugo</p>
                        <p class="occupation">Software Engineer</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact" id="contact">
        <div class="contact-container">
            <h2>Contact Us</h2>
            <p>Have a question? Leave your information below and we will get back to you as soon as possible.</p>
            <form action="">
                <div class="form-box">
                    <label for="first-name" class="visually-hidden">First Name:</label>
                    <input type="text" id="first-name" name="first-name" placeholder="First Name" required>
                </div>
                <div class="form-box">
                    <label for="last-name" class="visually-hidden">Last Name:</label>
                    <input type="text" id="last-name" name="last-name" placeholder="Last Name">
                </div>
                <div class="form-box">
                    <label for="Email" class="visually-hidden">Email Address:</label>
                    <input type="email" id="email" name="email" placeholder="Email Address">
                </div>
                <div class="form-box">
                    <label for="message" class="visually-hidden">Message:</label>
                    <textarea id="message" name="message" placeholder="Message here"></textarea>
                </div>
                <div class="form-box">
                    <button type="submit" class="btn-submit">Send Message</button>
                </div>
            </form>
        </div>
    </section>
    <footer class="footer">
        <div class="footer-container">
            <div class="scroll-to-top">
                <a href="#"><i class="fas fa-angle-up"></i></a>
            </div>
            <div class="footer-flex">
                <div class="footer-item">
                    <h4>Contact Us</h4>
                    <ul>
                        <li><i class="fa-solid fa-phone fa-1x"></i>: (+234) 705 9432 608</li>
                        <li><i class="fa-solid fa-envelope"></i>: Chinwukoobielue@gmail.com</li>
                        <li><i class="fa-solid fa-location-dot location"></i>: No 5 Ideani Street
                            Omagba,Onitsha
                        </li>
                    </ul>
                </div>
                <div class="footer-item">
                    <h4>Follow Us</h4>
                    <a href="#"><i class="fab fa-instagram fa-2x"></i></a>
                    <a href="#"><i class="fa-brands fa-square-github fa-2x"></i></a>
                    <a href="#"><i class="fa-brands fa-linkedin fa-2x"></i></a>
                    <a href="#"><i class="fa-brands fa-discord fa-2x"></i></a>
                    <a href="#"><i class="fa-brands fa-square-x-twitter fa-2x"></i></a>
                </div>
                <div class="footer-item">
                    <h4>Newsletter</h4>
                    <input type="email" placeholder="Email Address">
                    <button type="submit" class="btn-submit">Subscribe</button>
                </div>
            </div>
            <div class="copyright">
                <p>&copy; 2022 My Website. All rights reserved.</p>
            </div>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="script.js"></script>
</body>

</html>