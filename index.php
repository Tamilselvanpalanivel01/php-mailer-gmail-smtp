<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Two Trees</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel="stylesheet" href="icofont.css">
</head>

<body>
    <header>
        <div class="modal" id="myModal">
            <div class="modal-content">
                <span class="close" id="closeBtn">&times;</span>
                <h2>Book a free tour with us!</h2>
                <p>Drop us your details and we’ll get in touch with you</p>
                <form id="tourForm" method="POST" action="send_email.php">
                    <label for="name">Name <span class="required">*</span></label>
                    <input type="text" id="name" name="name" required>

                    <label for="email">Email <span class="required">*</span></label>
                    <input type="email" id="email" name="email" required>

                    <label for="mobile">Mobile Number <span class="required">*</span></label>
                    <input type="tel" id="mobile" name="mobile" required>

                    <label for="seats">No. of Seats Required <span class="required">*</span></label>
                    <input type="number" id="seats" name="seats" required min="1" value="1">

                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
        <div class="top-bar">
            <span>Compliance to Safety Measures</span>
            <span>
                <i class="fas fa-envelope"></i> <a href="mailto:info@twotrees.co.in">info@twotrees.co.in</a> |
                <i class="fas fa-phone-alt"></i> <a href="tel:7338717333">7338717333</a> |
                Connect with us:
                <a href="https://www.facebook.com"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a>
                <a href="https://www.linkedin.com"><i class="fab fa-linkedin-in"></i></a>
            </span>
        </div>
        <div class="navbar">
            <div class="logo">
                <img src="TT_logo-dark.png" height="100%" width="auto" alt="Two Trees Logo">
            </div>
            <nav>
                <ul class="nav-links" id="myDropdown">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Locations</a></li>
                    <li><a href="#">Gallery</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">News</a></li>

                    <li><a href="#" class="enquire">Enquire Now</a></li>
                    <li><a href="#"><i class="fas fa-search" id="searchIcon"></i></a></li>
                </ul>
                <div class="menu-toggle" onclick="toggleDropdown()"><i class="fa-solid fa-bars"></i>
                </div>

            </nav>
            <div class="search-modal" id="searchModal">
                <div class="search-modal-content" id="searchModalContent">
                    <span class="close" id="closeSearch">&times;</span>
                    <input type="text" placeholder="Type Your Search..." id="searchInput">
                    <button type="submit" id="searchButton"><i class="fas fa-search"></i></button>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="slider">
            <div class="slides">
                <div class="slide fade">
                    <img src="slide1.jpg" alt="Slide 1">
                    <div class="text-overlay"><span>Workspace</span> <br> that work <br> for you</div>
                </div>
                <div class="slide fade">
                    <img src="slide2.jpg" alt="Slide 2">
                    <div class="text-overlay"><span>Private meeting</span> <br> rooms for focused <br>collobaration
                    </div>
                </div>
                <div class="slide fade">
                    <img src="slide3.jpg" alt="Slide 3">
                    <div class="text-overlay2">Nurtured <br> with <span>Natural</span> <br> surroundings</div>
                </div>
            </div>
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <div class="dots">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>
        <div class="full-width-row">
            <div class="column">
                <div class="inner-column">
                    <div class="wrapper">
                        <div class="section-title">
                            <h2 class="title-text">Claim Your Free Trial With Us</h2>
                        </div>
                        <div class="empty-space" style="height: 15px"></div>
                        <div class="text-column">
                            <div class="text-wrapper">
                                <div style="text-align: center;">
                                    <a class="phone-link" href="tel:+917338717333" target="_self" rel="noopener">
                                        <i class="fa fa-phone"></i>
                                        <span class="phone-number">7338717333</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="empty-space" style="height: 15px"></div>
                        <div class="button-container">
                            <div class="button-wrapper">
                                <p class="enquire-button">Enquire Now</p>
                            </div>
                        </div>
                        <div class="empty-space" style="height: 10px"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="spaces-section">
            <h2 class="spaces-title">SPACES</h2>
            <div class="spaces-content">
                <div class="space">
                    <div class="space-inner">
                        <h3 class="space-type simple">PRIVATE</h3>
                        <h4 class="space-title">Private Office Space for your team</h4>
                        <p class="space-description">Looking for some privacy without giving up your chance to network?
                            Our private workspaces offer the best of both worlds!</p>
                    </div>
                </div>
                <div class="space">
                    <div class="space-inner">
                        <h3 class="space-type">COWORK</h3>
                        <h4 class="space-title">Dedicated and Hot Desks</h4>
                        <p class="space-description">Get your own permanent spot to return to as often as you’d like.
                            Perfect for when you have a fluid schedule but still need a space to work at.</p>
                    </div>
                </div>
                <div class="space">
                    <div class="space-inner">
                        <h3 class="space-type">COLLABORATE</h3>
                        <h4 class="space-title">Conferences and Workshops</h4>
                        <p class="space-description">Brainstorm and collaborate without disturbance from the outside
                            world in our state-of-the-art conference rooms.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="coworking-section">
            <div class="coworking-text">
                <h3 class="coworking-type">ABOUT US</h3>
                <h2 class="coworking-title">Coworking Space in the heart of Chennai</h2>
                <p class="coworking-description">
                    Aesthetically designed coworking space in Chennai with shared and private office spaces, TwoTrees
                    offers state of the art amenities including 24 / 7 access, high-speed internet, meeting rooms,
                    break-out spaces, in-house cafe, ample parking space, and affordable pricing!
                </p>
                <p class="coworking-description">
                    Located in Alwarpet, Chennai, TwoTrees offers one-of-a-kind private and coworking office spaces.
                    Aesthetically designed with state of the art amenities, great community, and in house cafe.
                    Surrounded by greenery, our spaces give you the much-needed break from the bustle of the city!
                </p>
            </div>
            <div class="sslider">
                <div class="sslides">
                    <img src="slide1.jpg" alt="Image 1">
                    <img src="slide2.jpg" alt="Image 2">
                    <img src="slide3.jpg" alt="Image 3">
                </div>
                <button class="prev" onclick="moveSlide(-1)">❮</button>
                <button class="next" onclick="moveSlide(1)">❯</button>
            </div>
        </div>
        <section>
            <h2 class="title-text">Co-Working Insights</h2>
            <div class="spaces-content">
                <div class="space">
                    <div class="space-inner">
                        <img src="2-2.png" alt="Insight 1" height="auto" width="100%">
                        <h2 style="font-weight: 999;">6 Key Aspects Of Coworking Success</h2>
                        <p>READ MORE <i class="icofont-long-arrow-right"></i></p>
                    </div>
                </div>
                <div class="space">
                    <div class="space-inner">
                        <img src="3-1.png" alt="Insight 2" height="auto" width="100%">
                        <h2>6 Best Coworking Software To Manage Your Office Space</h2>
                        <p>READ MORE <i class="icofont-long-arrow-right"></i></p>
                    </div>
                </div>
                <div class="space">
                    <div class="space-inner">
                        <img src="1-2-1.png" alt="Insight 3" height="auto" width="100%">
                        <h2>5 Ways Coworking Fosters Community Work</h2>
                        <p>READ MORE <i class="icofont-long-arrow-right"></i></p>
                    </div>
                </div>
            </div>
            <ol class="horizontal-list">
                <li>1</li>
                <li>2</li>
                <li>3</li>
                <li>4</li>
                <li>5</li>
                <li>6</li>
                <li>7</li>
                <li>8</li>
                <li>9</li>
                <li>10</li>
                <li><i class="icofont-rounded-right"></i></li>
            </ol>
        </section>

        <section class="cont">
            <div class="cev">
                <a href="https://www.youtube.com/embed/a42cXerM1lw?si=V6J_4CyM4Vjw39-w">
                    <img src="slide1.jpg" alt="Video Thumbnail">
                </a>
                <iframe src="https://www.youtube.com/embed/9GVlqerouUs?si=lfhgklz7D3FCYBEF&amp;controls=0"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                <iframe src="https://www.youtube.com/embed/G4ZBM_L2B2s?si=AbRFoGh21fo8N6Fl&amp;controls=0"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                <iframe src="https://www.youtube.com/embed/MKfV_nP6d3U?si=3lwMprFlRPLHB-nR&amp;controls=0"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                <iframe src="https://www.youtube.com/embed/mEShDlelpsg?si=RDd3vijF9uOVlYmz&amp;controls=0"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </section>
    </main>
    <footer>
        <div class="footer-content">
            <div class="footer-logo">
                <img src="TT_logo.png" alt="Two Trees Logo">
            </div>
            <div class="footer-description">
                <p>We are one of the best co-working spaces in Chennai, located in the heart of the city. Visit us
                    today!</p>
            </div>
            <div class="footer-links">
                <div class="footer-section latest-updates">
                    <h3>Latest Update</h3>
                    <ul>
                        <li><a href="#">6 Key Aspects Of Coworking Success</a></li>
                        <li><a href="#">6 Best Coworking Software To Manage Your Office Space</a></li>
                        <li><a href="#">5 Ways Coworking Fosters Community Work</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h3>Links</h3>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Locations</a></li>
                        <li><a href="#">Gallery</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">News</a></li>
                    </ul>
                </div>
                <div class="footer-contact">
                    <h3>Contact Us</h3>
                    <p>Phone: 73387 17333</p>
                    <p>Email: <a href="mailto:info@twotrees.co.in">info@twotrees.co.in</a></p>
                    <p>Address: 5b, Ramachandra Avenue, Seethammal Colony</p>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <ul class="footer-privacy">
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Terms and Conditions</a></li>
            </ul>
            <p>&copy; Copyright Two Trees 2024 | Built by Tamilselvan</p>
            <div class="footer-social">
                <span>Follow us:</span>
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
    </footer>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var modal = document.getElementById("myModal");
            var closeBtn = document.getElementById("closeBtn");

            // Show the modal on page load
            modal.style.display = "flex";

            // Close the modal when the user clicks on the close button
            closeBtn.onclick = function () {
                modal.style.display = "none";
            };

            // Close the modal when the user clicks anywhere outside of the modal content
            window.onclick = function (event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            };
        });

        var searchModal = document.getElementById("searchModal");
        var searchIcon = document.getElementById("searchIcon");
        var searchModalContent = document.getElementById("searchModalContent");

        searchModal.style.display = "none";
        // Open the modal when the search icon is clicked
        searchIcon.onclick = function () {
            searchModal.style.display = "flex";
        };

        // Close the modal when the user clicks outside of the modal content
        window.onclick = function (event) {
            if (event.target == searchModal) {
                searchModal.style.display = "none";
            }
        };

        // Close the modal when the user clicks the close button
        document.getElementById("closeSearch").onclick = function () {
            searchModal.style.display = "none";
        };


        // Toggle Dropdown Functionality
        function toggleDropdown() {
            const dropdown = document.getElementById("myDropdown");
            dropdown.classList.toggle("show");
        }

        // Close the dropdown if the user clicks outside of it
        window.onclick = function (event) {
            if (!event.target.matches('.menu-toggle') && !event.target.matches('.menu-toggle *')) {
                const dropdown = document.getElementById("myDropdown");
                if (dropdown.classList.contains('show')) {
                    dropdown.classList.remove('show');
                }
            }
        };

        // Slider Functionality
        let slideIndex = 0;
        function showSlides() {
            const slides = document.getElementsByClassName("slide");
            const dots = document.getElementsByClassName("dot");
            for (let i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) { slideIndex = 1; }
            for (let i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
            setTimeout(showSlides, 3000); // Change image every 3 seconds
        }
        showSlides();

        function plusSlides(n) {
            slideIndex += n - 1;
            showSlides();
        }

        function currentSlide(n) {
            slideIndex = n - 1;
            showSlides();
        }

        // Slider Functionality for coworking section
        let currentSlideIndex = 0;
        const coworkingSlides = document.querySelector('.sslides');
        const totalSlides = coworkingSlides.children.length;

        function moveSlide(direction) {
            currentSlideIndex = (currentSlideIndex + direction + totalSlides) % totalSlides;
            coworkingSlides.style.transform = `translateX(-${currentSlideIndex * 100}%)`;
        }

        function autoSlide() {
            moveSlide(1);
        }

        let autoSlideInterval = setInterval(autoSlide, 3000);

        document.querySelector('.sslider').addEventListener('mouseover', () => {
            clearInterval(autoSlideInterval);
        });

        document.querySelector('.sslider').addEventListener('mouseout', () => {
            autoSlideInterval = setInterval(autoSlide, 3000);
        });
    </script>
</body>

</html>