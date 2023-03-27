<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oliver Olesen - Portfolie</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
</head>

<body>

    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>

    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href="#">Portfo<span>lio.</span></a></div>
            <ul class="menu">
                <li><a href="#home" class="menu-btn">Home</a></li>
                <li><a href="#about" class="menu-btn">About</a></li>
                <li><a href="#skills" class="menu-btn">Skills</a></li>
                <li><a href="#work" class="menu-btn">Work</a></li>
                <li><a href="#contact" class="menu-btn">Contact</a></li>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>

    <!-- home section start -->
    <section class="home" id="home">
        <div class="max-width">
            <div class="home-content">
                <div class="text-1">Hi there, i'm</div>
                <div class="text-2">Oliver Olesen</div>
                <div class="text-3">And I am a <span class="typing"></span></div>
                <a href="#contact">Contact me</a>
            </div>
        </div>
    </section>

    <!-- about section start -->
    <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">About me</h2>
            <div class="about-content">
                <div class="column left">
                    <img src="images/profile-1.jpg" alt="photo of me(Oliver<<me>>)">
                </div>
                <div class="column right">
                    <div class="text">I'm Oliver and I'm a <span class="typing-2"></span></div>
                    <p>I started programming back in 2019, and have been at it ever since. i've worked on several projects all from booking systems, to shopping systems used to ordering food. This portfolie here will give a little insight to projects i have worked on in my spare time, since i can't show what i've made for customers. I would say im generally very open and welcoming to new people, as for work enthusiasm, i tend to go very deep with what im working on, since i like to get and understanding of how everything works.</p>
                    <a href="OliverOlesenCV.pdf" target="_blank" download="OliverOlesenCV">Download CV</a>
                </div>
            </div>
        </div>
    </section>

    <!-- skills section start -->
    <section class="skills" id="skills">
        <div class="max-width">
            <h2 class="title">My skills</h2>
            <div class="skills-content">
                <div class="column left">
                    <div class="text">My creative skills & experiences.</div>
                    <p>As of now i've not worked with as many different things as i would have liked too, but my understanding with the things i have worked with feels sufficient, so there will most likely be added more languages in the future.<br>Haven't quite worked with a lot of framworks yet, since it isn't allowed at my school internship. I've previously worked with laravel, but as of now, my knowledge is limitied on it.</I></p>
                    <!-- <a href="#">Read more</a> -->
                </div>
                <div class="column right">
                <div class="bars">
                        <div class="info">
                            <span>HTML</span>
                            <span>80%</span>
                        </div>
                        <div class="line html"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>JavaScript</span>
                            <span>60%</span>
                        </div>
                        <div class="line js"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>C#</span>
                            <span>80%</span>
                        </div>
                        <div class="line cSharp"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>PHP</span>
                            <span>80%</span>
                        </div>
                        <div class="line php"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>MySQL</span>
                            <span>70%</span>
                        </div>
                        <div class="line mysql"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Work section start -->
    <section class="work" id="work">
        <div style="work-container">
            <h2 class="title" >My work</h2>
            <div class="allWork-container">
                <div class="owl-carousel caro" id="worktable">                   
                   
                </div>
            </div>
        </div>
    </section>
    <!-- contact section start -->
    <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title">Contact me</h2>
            <div class="contact-content">
                <div class="column left">
                    <div class="text">Get in touch</div>
                    <p>Shouldn't be to hard to get a hold of me, i do check my email fairly often, so if you have any questions just ask, you can use the template to the right, or just send me a mail on the mail bellow.</p>
                    <div class="icons">
                        <div class="row">
                            <i class="fas fa-user" style="width: 20px;"></i>
                            <div class="info">
                                <div class="head">Name</div>
                                <div class="sub-title">Oliver Ian Olesen</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-map-marker-alt" style="width: 20px;"></i>
                            <div class="info">
                                <div class="head">Address</div>
                                <div class="sub-title">Denmark, Lemvig/Viborg</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-envelope" style="width: 20px;"></i>
                            <div class="info">
                                <div class="head">Email</div>
                                <div class="sub-title">OliverOlesen@outlook.com</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column right">
                    <div class="text">Message me</div>
                    <form id="Mailer">
                        <div class="field">
                            <input id="sender_name" type="text" placeholder="Your name/company">
                        </div>
                        <div class="field">
                            <input id="subject" type="text" placeholder="Subject">
                        </div>
                        <div class="field textarea">
                            <textarea id="message" cols="30" rows="10" placeholder="Message.."></textarea>
                        </div>
                        <div class="button-area">
                            <button type="submit">Open mail</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script src="script.js"></script>
</body>
</html>
