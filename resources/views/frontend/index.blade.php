<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('spa/css/style.css')}}">{{asset('spa')}}
    <link rel="stylesheet" href="{{asset('spa/css/about.css')}}">
    <!--iconscout Cnd-->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css">
    <!--Boostrap Cdn-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css" integrity="sha384-eoTu3+HydHRBIjnCVwsFyCpUDZHZSFKEJD0mc3ZqSBSb6YhZzRHeiomAUWCstIWo" crossorigin="anonymous">
    <!--google fonts montserrat-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

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

    <section class="about__achievements">
        <div class="container about__achievements-container">
            <div class="about__achievements-left">
                <img src="{{asset('spa/images/about achievements.svg')}}" alt="">
            </div>
            <div class="about__achievements-right">
                <h1>Achievements </h1>
                <p>
Over the past ten years the Smart Packing System has endeavor to create an avenue where people using commercial vehicles can pack effectively and efficiently spending little amount of money to manage the infrastructure.
During the period of ten years we are please to present our achievements.</p>
                <div class="achievement__cards">
                    <article class="achievement__card">
                        <span class="achievement__icon"><i class="uil uil-car"></i></span>
                        <h3>4500+</h3>
                        <p>Register Vehicles</p>
                    </article>
                    <article class="achievement__card">
                        <span class="achievement__icon"><i class="uil uil-user"></i></span>
                        <h3>4500+</h3>
                        <p>Active Cards</p>
                    </article>
                    <article class="achievement__card">
                        <span class="achievement__icon"><i class="uil uil-map"></i></span>
                        <h3>26+</h3>
                        <p>Regions</p>
                    </article>
                </div>
            </div>

        </div>
    </section>

    <!-----End of Achievement Section----->
    <!-----Team Section Starts----->
    <section class="team">
        <h2>Meet our Team</h2>
        <div class="container team__container">
            <article class="team__member">
                <div class="team__member-image">
                    <img src="{{asset('spa/images/tm1.jpg')}}" alt="">
                </div>
                <div class="team__member-info">

                    <h4>Daniel Davis</h4>
                    <p>IOT Lecturer/Supervisor</p>

                </div>
                <div class="team__member-socials">
                    <a href="#" target="_blank"><i class="uil uil-instagram"></i></a>
                    <a href="#" target="_blank"><i class="uil uil-twitter-alt"></i></a>
                    <a href="#" target="_blank"><i class="uil uil-linkedin-alt"></i></a>
                </div>

            </article>

            <article class="team__member">
                <div class="team__member-image">
                    <img src="{{asset('spa/images/adul.jpeg')}}" alt="">
                </div>
                <div class="team__member-info">

                    <h4>Abdurahmane Sow</h4>
                    <p>Team Member</p>

                </div>
                <div class="team__member-socials">
                    <a href="#" target="_blank"><i class="uil uil-instagram"></i></a>
                    <a href="#" target="_blank"><i class="uil uil-twitter-alt"></i></a>
                    <a href="#" target="_blank"><i class="uil uil-linkedin-alt"></i></a>
                </div>

            </article>

            <article class="team__member">
                <div class="team__member-image">
                    <img src="{{asset('spa/images/julius.jpeg')}}" alt="">
                </div>
                <div class="team__member-info">

                    <h4>Julius Aries Kanneh Jr.</h4>
                    <p>Team Member</p>

                </div>
                <div class="team__member-socials">
                    <a href="#" target="_blank"><i class="uil uil-instagram"></i></a>
                    <a href="#" target="_blank"><i class="uil uil-twitter-alt"></i></a>
                    <a href="#" target="_blank"><i class="uil uil-linkedin-alt"></i></a>
                </div>

            </article>

            <article class="team__member">
                <div class="team__member-image">
                    <img src="{{asset('spa/images/tim.jpg')}}" alt="">
                </div>
                <div class="team__member-info">

                    <h4>Timothy Belekollie</h4>
                    <p>Team Member</p>

                </div>
                <div class="team__member-socials">
                    <a href="#" target="_blank"><i class="uil uil-instagram"></i></a>
                    <a href="#" target="_blank"><i class="uil uil-twitter-alt"></i></a>
                    <a href="#" target="_blank"><i class="uil uil-linkedin-alt"></i></a>
                </div>

            </article>

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


    <script type="text/javascript" src="{{asset('spa/js/main.js')}}">
    </script>


</body>

</html>
