<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('spa/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('spa/css/contact.css')}}">

    <!--iconscout Cnd-->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css">
    <!--Boostrap Cdn-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css" integrity="sha384-eoTu3+HydHRBIjnCVwsFyCpUDZHZSFKEJD0mc3ZqSBSb6YhZzRHeiomAUWCstIWo" crossorigin="anonymous">
    <!--google fonts montserrat-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!--SwiperJs Cdn-->
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <style>
        body {
            background-image: url('spa/images/bg-texture.png');

        }
    </style>
    <title>Smart Packing System</title>
</head>
<html>


<body>
    <nav>
        <div class="container nav__container">
            <a class="logo" href="index.html">
                <h4>Smart Packing System</h4>
            </a>
            <ul class="nav__menu">
                <li>
                    <a href="{{route('sps.index')}}">Home</a>
                </li>

                <li>
                    <a href="{{route('sps.contact')}}">Contact</a>
                </li>

            </ul>
            <button id="open-menu-btn"><i class="bi bi-list"></i></button>
            <button id="close-menu-btn"><i class="bi bi-x-square"></i></button>
        </div>
    </nav>
    <section class="conatact">
        <div class="container contact__container">
            <aside class="contact__aside">
                <div class="aside__image">
                    <img src="{{asset('spa/images/contact.svg')}}" alt=""> </div>
                <h2>Contact Us</h2>
                <p>Are you facing issues with any of cards please feel free to use and of the the medium communication. We are here because of you.</p>
                <ul class="contact__details">
                    <li><i class="uil uil-phone-times"></i>
                        <h5>+250783472153</h5>
                    </li>
                    <li><i class="uil uil-envelope"></i>
                        <h5>customersupportsps@gmail.com</h5>
                    </li>
                    <li><i class="uil uil-location-point"></i>
                        <h5>World Wide</h5>
                    </li>
                </ul>
                <ul class="contact__socials">
                    <li>
                        <a href="#"><i class="uil uil-facebook-f"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="uil uil-instagram"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="uil uil-linkedin-alt"></i></a>
                    </li>
                </ul>

            </aside>
            <form action="https://formspree.io/f/myyovzqr" method="POST" class="contact__form">
                <div class="form__name">
                    <input type="text" name="First Name" placeholder="First Name" required>
                    <input type="text" name="Last Name" placeholder="Last Name" required>

                </div>
                <input type="email" name="Email Address" placeholder=" Your Email Address" required>
                <textarea name="Message" rows="7" required placeholder="Message"></textarea>
                <button type="submit" class="btn btn-primary">Send Message</button>
            </form>
        </div>
    </section>






    <!-----Footer Section starts----->
    <footer>
        <div class="container footer__container">
            <div class="footer__1">
                <a href="index.html" class="footer__logo">
                    <h4>Smart Packing System</h4>
                </a>
                <p>We are the future of cashless transportation system. And the future is now.</p>
            </div>


            <div class="footer__2">
                <h4>Permanlinks</h4>
                <ul class="permalinks">
                    <li>
                        <a href="{{route('sps.index')}}">Home</a>
                    </li>

                    <li>
                        <a href="{{route('sps.contact')}}">Contact</a>
                    </li>
                    <li>
                        <a href="{{route('admin.login')}}">Login</a>
                    </li>
                </ul>

            </div>
            <div class="footer__3">
                <h4>Primary</h4>
                <ul class="privacy">
                    <li>
                        <a href="#">Privacy Policy</a>
                    </li>
                    <li>
                        <a href="#">Terms and Conditions</a>
                    </li>
                    <li>
                        <a href="#">Refund Policy</a>
                    </li>
                </ul>
            </div>
            <div class="footer__4">

                <h4>Contact us</h4>
                <div>
                    <p>+250783472153</p>
                    <p>smartpackingsystem@gmail.com</p>
                </div>
                <ul class="footer__socials">
                    <li>
                        <a href="#"><i class="uil uil-facebook-f"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="uil uil-instagram-alt"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="uil uil-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="uil uil-linkedin-alt"></i></a>
                    </li>
                </ul>
            </div>

        </div>
        <div class="footer__copyright">
            <small>Copyright &copy; Smart Packing System 2022</small>
        </div>
    </footer>

    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="{{asset('spa/js/main.js')}}">
    </script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            spaceBetween: 30,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            // when window width is >= 600px
            breakpoints: {
                600: {
                    slidesPerView: 2,
                }


            }
        });
    </script>

</body>

</html>
