<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="assets/2.0Logo - W.png" type="image/x-icon">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <!-- ========== BoxIcon CDN Link ========== -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css"
    />
    <!-- or -->
    <link
      rel="stylesheet"
      href="https://unpkg.com/boxicons@latest/css/boxicons.min.css"
    />

    <!-- ========== Style Link ========== -->
    <link rel="stylesheet" href="css/app.css">

    <!-- ========== Scroll Animation CDN Link ========== -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- ========== Bootstrap Icon CDN Link ========== -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

    <!-- ========== jquery Link ========== -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>
    <div id="app">
        <div id="main-content">
            @include('components.app-header')
            <div class="section-one">
                <div class="seco-wrap row">
                    <div class="seco-l col">
                        <p class="text-light fw-bold lh-sm text-uppercase" Style="font-size: 70px" data-aos="fade-right" data-aos-duration="1000">Welcome to my digital <span Style="color: #4b0fc2;">space</span></p>
                        <p class="text-light" data-aos="fade-up-left" data-aos-duration="1000">Hi, I’m <span style="font-weight: 700">Wilzen Carl</span>, a passionate <span style="font-weight: 700">web developer</span> and <span style="font-weight: 700">graphic designer</span> dedicated to creating impactful and innovative solutions. With a keen eye for detail and a commitment to excellence, I blend creativity and technical expertise to deliver projects that resonate and inspire.</p>
                        <div class="secl-slinks">
                            <a data-aos="fade-up" data-aos-duration="1200" href="http://" target="_blank"><i class='bx bxl-github'></i></a>
                            <a data-aos="fade-up" data-aos-duration="1400" href="http://" target="_blank"><i class='bx bxl-linkedin' ></i></a>
                            <a data-aos="fade-up" data-aos-duration="1600" href="http://" target="_blank"><i class='bx bxl-facebook' ></i></a>
                            <a data-aos="fade-up" data-aos-duration="1800" href="http://" target="_blank"><i class='bx bxl-twitter' ></i></a>
                        </div>
                        <div data-aos="zoom-in-up" data-aos-duration="1300" style="display: flex; gap: 13px;">
                            <a style="background-color: #4b0fc2; color: #fff; text-decoration: none; padding: 12px 18px; border-radius: 8px;" href="http://">Download CV</a>
                            <a style="border-radius: 8px; padding: 12px 18px; background-color: #2c3039da; color: #fff; text-decoration: none;" href="http://">Learn more about me</a>
                        </div>
                    </div>
                    <div class="seco-r col">
                        @include('components.Editor-illustration')
                    </div>
                </div>
            </div>
            <div class="section-two position-relative" style="padding: 0 10%;">
                <center><h1 data-aos="fade-up" data-aos-duration="1000" class="title-sec services">My Specialty</h1></center>
                <div class="row" style="position: relative; z-index: 2">
                    <div class="col">
                        <div class="card servcard" data-aos="fade-up" data-aos-duration="1000">
                            <div class="servcard-icon" style="display: flex; align-items: center; justify-content: center;"><i class='bx bx-devices' style="color: rgb(221, 221, 221); font-size: 35px"></i></div>
                            <div class="card-body" style="display: flex; flex-direction: column; gap: 6px;">
                                <h5 class="card-title fw-bold fs-2" style="color: rgb(221, 221, 221);">Web Development</h5>
                                <p class="card-text" style="color: rgb(180, 180, 180);">I specialize in developing dynamic websites using Laravel, Bootstrap, HTML, CSS, JavaScript, PHP, MySQL, and jQuery, ensuring consistent performance, responsive design, and scalable solutions for specific business requirements.</p>
                                <a href="http://" target="_blank" class="linkbtn-serv">View sample</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card servcard" data-aos="fade-up" data-aos-duration="2000">
                            <div class="servcard-icon" style="display: flex; align-items: center; justify-content: center;"><i class="bi bi-motherboard" style="color: rgb(221, 221, 221); font-size: 35px"></i></div>
                            <div class="card-body" style="display: flex; flex-direction: column; gap: 6px;">
                                <h5 class="card-title fw-bold fs-2" style="color: rgb(221, 221, 221);">Prototype</h5>
                                <p class="card-text" style="color: rgb(180, 180, 180);">I provide detailed models using Figma and Adobe Illustrator, enabling efficient visualization and improvement of design concepts, promoting a user-centered design strategy, and seamless project development.</p>
                                <a href="http://" target="_blank" class="linkbtn-serv">View sample</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card servcard" data-aos="fade-up" data-aos-duration="3000">
                            <div class="servcard-icon" style="display: flex; align-items: center; justify-content: center;" ><i class="bi bi-layout-wtf" style="color: rgb(221, 221, 221); font-size: 35px"></i></div>
                            <div class="card-body" style="display: flex; flex-direction: column; gap: 6px;">
                                <h5 class="card-title fw-bold fs-2" style="color: rgb(221, 221, 221);">Graphic Design</h5>
                                <p class="card-text" style="color: rgb(180, 180, 180);">I provide professional graphic design services for jerseys, polo shirts, and t-shirts, enhancing brand identity and appeal with unique, eye-catching designs that make your apparel stand out.</p>
                                <a href="http://" target="_blank" class="linkbtn-serv">View sample</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="about" class="section-three position-relative" style="padding: 150px 10%;">
                <!-- <center><h1 data-aos="fade-up" data-aos-duration="1000" class="title-sec aboutme">About me</h1></center> -->
                <div class="secth col">
                    <div class="row">

                    </div>
                    <div class="row">

                    </div>
                </div>
            </div>
        </div>
        <div class="chat-con">
            <button type="button" class="pop-messanger-btn" onclick="popMessage()">
                <img src="assets/svg/messenger.svg" alt="messanger icon">
            </button>
            <div id="popbox" class="pop-chat-box">
                <div class="pcb-header">
                    <img src="assets/2.0Logo - W.png" alt="logo">
                    <div class="pcbh-text">
                        <h3>Onea.ph.dev</h3>
                        <p>Usually responds within an hour.</p>
                        <!-- https://www.messenger.com/t/100008121065841 -->
                    </div>
                </div>
                <div class="pcb-body">
                    <div class="chat-text">
                        <div class="img-con">
                            <img src="assets/2.0Logo - W.png" alt="Logo">
                        </div>
                        <div class="pcb-wrap">
                            <p>Hello! 👋<br>This is your friend Carl. How can I help you?</p>
                        </div>
                    </div>
                    <button type="button" onclick="messangerLink()">Start chat now</button>
                </div>
            </div>
        </div>
        <div id="morphi"></div>
        <div id="design">
            <div class="d1" data-aos="fade-up-right" data-aos-duration="2000"></div>
            <div class="d2" data-aos="fade-up-left" data-aos-duration="2200"></div>
            <div class="d3" data-aos="fade-up-right" data-aos-duration="2000"></div>
        </div>
    </div>
    <script src="{{asset('js/app.js')}}"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
        var bodyHeight = document.body.scrollHeight;
        var morphi = document.getElementById("morphi");
        var design = document.getElementById("design");
        morphi.style.height = bodyHeight + "px";
        design.style.height = bodyHeight + "px";
        function popMessage(){
            var popbox = document.getElementById("popbox");
            if(popbox.classList.contains('pop-chat-box-active')){
                popbox.classList.remove('pop-chat-box-active');
            }else{
                popbox.classList.add('pop-chat-box-active');
            }
        }
        function messangerLink(){
            var url = 'https://www.messenger.com/t/100008121065841';
            window.open(url, '_blank');
        }
    </script>
</body>
</html>
