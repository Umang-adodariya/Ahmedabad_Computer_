<?php
session_start();
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Ahmedabad Computer Education</title>
    <meta name="author" content="themeholy">
    <meta name="description" content="Ahmedabad Computer Education">
    <meta name="keywords" content="python certification course, python full stack developer course, best python certification course, best python certification near me, python courses with certificate, python course for beginners, python training and certification, python coding training institute, learn python basics and advanced">
    <meta name="robots" content="INDEX,FOLLOW">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="assets/img/favicons/favicon.png">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <meta name="google-site-verification" content="5Wrx8p5sslP13-K6Uq1bjwiJ2kNnbwtSsyfPzxdsrlc" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;500;600;700;800&family=Jost:wght@300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700&display=swap"
        rel="stylesheet">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Fontawesome Icon -->
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
    <!-- Slick Slider -->
    <link rel="stylesheet" href="assets/css/slick.min.css">
    <!-- Nice Select -->
    <link rel="stylesheet" href="assets/css/nice-select.min.css">
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- responsive Custom CSS -->
    <link rel="stylesheet" href="assets/css/responsive.css">
    <style>
        .video-small-best {
            padding: 20px 30px !important
        }

        .video-small-best .th-video img {
            height: 150px;
        }

        .footer-widget.widget_nav_menu a.info-box_link.rem-bullet {
            padding-left: 0px;
        }

        .footer-widget.widget_nav_menu a.info-box_link.rem-bullet:before {
            display: none;
        }

        .map-sec.map-new-frame .map iframe {
            height: 250px;
            width: 100%;
            -webkit-filter: grayscale(100);
            filter: grayscale(100);
            border-radius: 14px;
        }

        .th-header {
            z-index: 4;
        }

        .map-sec {
            height: 250px;
        }

        .cust-page-box h2.course-title {
            font-size: 44px;
            margin-bottom: 0px;
            color: #fff;
        }

        .tab-box-fix-cont .course-curriculam,
        .tab-box-fix-cont .course-description,
        .tab-box-fix-cont .course-instructor,
        .tab-box-fix-cont .course-Reviews {
            max-height: 820px;
            overflow-y: auto;
        }

        @media (max-width:768px) {
            .th-widget-about.mob-th-widget-about {
                text-align: center;
            }

            .th-widget-about.mob-th-widget-about .info-box-wrap {
                justify-content: center;
            }

            .cust-page-box h2.course-title {
                font-size: 18px;
                margin-bottom: 0px;
                color: #fff;
            }

            .tab-box-fix-cont .course-curriculam,
            .tab-box-fix-cont .course-description,
            .tab-box-fix-cont .course-instructor,
            .tab-box-fix-cont .course-Reviews {
                max-height: 100%;
            }
        }

        @media (min-width:430px) {
            .course-title .main-title-box-d-block {
                display: block;
            }

            h2.course-main-title.main-title-box-d-block {
                display: none;
            }
        }

        @media (max-width:430px) {
            .cust-page-box h2.course-title {
                display: none;
            }

            h2.course-main-title.main-title-box-d-block {
                display: block;
                padding: 16px 16px 0 16px;
                font-size: 26px;
                text-align: center;
                margin-bottom: 0px;
            }
        }

        ::-webkit-scrollbar {
            width: 10px;
            height: 10px;
            border-radius: 20px;
        }

        ::-webkit-scrollbar-track {
            background: rgba(252, 0, 18, 0.1);
            box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
            -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
            border-radius: 20px;
        }

        ::-webkit-scrollbar-thumb {
            background-color: var(--theme-color);
            background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.3) 25%, transparent 20%, transparent 50%, rgba(255, 255, 255, 0.3) 50%, rgba(255, 255, 255, 0.3) 75%, transparent 75%, transparent);
            border-radius: 20px;
        }

        .cust-menu-box.menu-top .menu-top-left .header-link {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
        }

        .cust-menu-box .header-link .city-text {
            font-size: 20px;
        }

        .cust-menu-box a.header-link {
            font-size: 20px;
        }

        @media (min-width:1366px) and (max-width:1899px) {
            .cust-page-box h2.course-title {
                width: unset;
            }
        }

        @media (max-width:1024px) {
            .cust-page-box h2.course-title {
                max-width: 510px;
            }
        }

        @media (max-width:768px) {
            .cust-menu-box.menu-top .menu-top-left .header-link {
                position: relative;
                flex-wrap: wrap;
                text-align: center;
                justify-content: center;
                left: 0px !important;
                right: 0px;
                margin-right: 0px;
                transform: none;
            }
        }

        .tab-box-fix-cont .course-single,
        .tab-box-fix-cont li {
            text-align: justify;
        }
    </style>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5FWLQ3C');
    </script>


    <script async src="https://www.googletagmanager.com/gtag/js?id=G-SD837VB60D"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-SD837VB60D');
    </script>
    <script>
        function gtag_report_conversion(form,url) {

var callback = function () {
if (typeof(url) != 'undefined') {
  window.location = url;
}
};
gtag('event', 'conversion', {
  'send_to': 'AW-16663588657/BH8aCJCTzvgZELHe6Ik-',
  'event_callback': callback
});
return false;
}
    </script>
    </script>




    <!-- End Google Tag Manager -->
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FWLQ3C"
            height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
   
    <header class="th-header header-layout5 cust-page-box">
        <div class="top-area" data-bg-src="assets/img/update1/bg/header_bg_1.png">
            <div class="cust-menu-box menu-top">
                <div class="container">
                    <div class="row align-items-center justify-content-center justify-content-sm-between">
                        <div class="col-auto d-none d-sm-block menu-top-left">
                            <a class="header-link" href="tel:+919586877700">
                            
                                <img src="assets/img/home-course-details/badgeone.png" alt="badgeone" class="badgeone">

                                <span class="city-text">Talk to Career Consultant :</span>95-868-777-00
                            </a>
                        </div>
                        <div class="col-auto">
                            <div class="th-social  top-header-ad-flex">
                                <a target="_blank" href="https://www.facebook.com/ahmedabadcomputereducation"><i class="fab fa-facebook-f"></i></a>
                                <a target="_blank" href="https://www.linkedin.com/company/ahmedabadcomputereducation/"><i class="fab fa-linkedin"></i></a>
                                <a target="_blank" href="https://www.instagram.com/ahmedabad_computer_education/"><i class="fab fa-instagram"></i></a>
                                <a target="_blank" href="https://wa.me/+919586877700"><i class="fab fa-whatsapp" target="_blank"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sticky-wrapper">
            <div class="sticky-active">
                <div class="menu-area">
                    <div class="container">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-auto">
                                <div class="header-logo">
                                    <a href="#"><img src="assets/img/ahm-logo-new.png"
                                            alt="ahmedabad computer education" class="logo-img"></a>
                                </div>
                            </div>
                            <div class="col-auto cal-width-title">
                                <div class="row align-items-center justify-content-between">
                                    <div class="col-auto w-100">
                                        <div class="flex-auto-badge">
                                            <h2 class="course-title main-title-box-d-block">Full Stack Python Certificate Course</h2>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="logo-shape" data-bg-src=""></div>
                </div>
            </div>
        </div>
    </header>

    <!-- -------------------------------------------- New Content ------------------------------ -->
    <div class="course-none">
        <h2 class="course-main-title main-title-box-d-block">Full Stack Python Certificate Course</h2>
    </div>
    <?php if (isset($_SESSION['flash_message'])): ?>
        <!-- Success message popup -->
        <div class="popup-sent-msg">
            <div class="popup-inner-msg">
                <p><?php echo htmlspecialchars($_SESSION['flash_message']); ?></p>
            </div>
        </div>
        <?php
        // Unset the flash message so it won't show again on refresh
        unset($_SESSION['flash_message']);
        ?>
        <script>
        gtag_report_conversion(<?php echo json_encode($_SESSION['form']); ?>); 
    </script>
    <?php endif; ?>
    <?php if (isset($_SESSION['captcha_failed'])): ?>
        <!-- Success message popup -->
        <div class="popup-sent-msg-error">
            <div class="popup-inner-msg-error">
                <p><?php echo htmlspecialchars($_SESSION['captcha_failed']); ?></p>
            </div>
        </div>
        <?php
        // Unset the flash message so it won't show again on refresh
        unset($_SESSION['captcha_failed']);
        ?>
    <?php endif; ?>
    <section class="space-top space-extra2-bottom tab-box-fix-cont">
        <div class="container">
            <div class="row">
                <div class="col-xxl-9 col-lg-8">
                    <div class="course-single">

                        <div class="course-single-bottom" id="course">
                            <ul class="nav course-tab" id="courseTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="curriculam-tab" data-bs-toggle="tab" href="#curriculam" role="tab" aria-controls="curriculam" aria-selected="false"><i class="fa-regular fa-book"></i>CURRICULUM</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="description-tab" data-bs-toggle="tab" href="#Coursedescription" role="tab" aria-controls="Coursedescription" aria-selected="true"><i class="fa-regular fa-bookmark"></i>Overview</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="instructor-tab" data-bs-toggle="tab" href="#instructor" role="tab" aria-controls="instructor" aria-selected="false"><i class="fa-regular fa-user"></i>Instructor</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="reviews-tab" data-bs-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false"><i class="fa-regular fa-star-sharp"></i>Reviews</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="productTabContent">
                                <div class="tab-pane fade show active" id="curriculam" role="tabpanel" aria-labelledby="curriculam-tab">
                                    <div class="course-curriculam">
                                        <h5 class="h5">Course Content</h5>
                                        <div class="course-con-acc-sec">
                                            <div class="accordion cus-accordion" id="accordionExample">
                                                <div class="accordion-item course-acc-item">
                                                    <h2 class="accordion-header" id="headingOne">
                                                        <button class="accordion-button course-acc-button collapsed" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                            Module 1 [Python Basics ]
                                                        </button>
                                                    </h2>
                                                    <div id="collapseOne" class="accordion-collapse course-acc-collapse collapse"
                                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                        <div class="accordion-body course-acc-body">
                                                            <div class="checklist mb-1">
                                                                <ul class="course-acc-ul">
                                                                    <li class="course-acc-li">Installation</li>
                                                                    <li class="course-acc-li">Syntax</li>
                                                                    <li class="course-acc-li">Comments</li>
                                                                    <li class="course-acc-li">Variables</li>
                                                                    <li class="course-acc-li">Data Types</li>
                                                                    <li class="course-acc-li">Numbers</li>
                                                                    <li class="course-acc-li">Strings</li>
                                                                    <li class="course-acc-li">Booleans</li>
                                                                    <li class="course-acc-li">Operators</li>
                                                                    <li class="course-acc-li">Lists</li>
                                                                    <li class="course-acc-li">Tuples</li>
                                                                    <li class="course-acc-li">Sets</li>
                                                                    <li class="course-acc-li">Dictionaries</li>
                                                                    <li class="course-acc-li">If…Else Statements</li>
                                                                    <li class="course-acc-li">While Loops</li>
                                                                    <li class="course-acc-li">For Loops</li>
                                                                    <li class="course-acc-li">Functions</li>
                                                                    <li class="course-acc-li">Lambda</li>
                                                                    <li class="course-acc-li">Arrays</li>
                                                                    <li class="course-acc-li">OOPS Concepts</li>
                                                                    <li class="course-acc-li">Scope</li>
                                                                    <li class="course-acc-li">Modules</li>
                                                                    <li class="course-acc-li">Math</li>
                                                                    <li class="course-acc-li">Try…Except Method</li>
                                                                    <li class="course-acc-li">Input Function</li>
                                                                    <li class="course-acc-li">File Handling</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item course-acc-item">
                                                    <h2 class="accordion-header" id="headingTwo">
                                                        <button class="accordion-button course-acc-button collapsed" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                            Module 2 [Django]
                                                        </button>
                                                    </h2>
                                                    <div id="collapseTwo" class="accordion-collapse course-acc-collapse collapse" aria-labelledby="headingTwo"
                                                        data-bs-parent="#accordionExample">
                                                        <div class="accordion-body course-acc-body">
                                                            <div class="checklist mb-1">
                                                                <ul class="course-acc-ul">
                                                                    <li class="course-acc-li">Instructions</li>
                                                                    <li class="course-acc-li">Installation</li>
                                                                    <li class="course-acc-li">Create a project</li>
                                                                    <li class="course-acc-li">Create app</li>
                                                                    <li class="course-acc-li">Create simple project</li>
                                                                    <li class="course-acc-li">Template integration in project</li>
                                                                    <li class="course-acc-li">Create project with database(SQL LITE3)</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="Coursedescription" role="tabpanel" aria-labelledby="description-tab">
                                    <div class="course-description">
                                        <h5 class="h5">Python course highlights</h5>
                                        <p>While countless programming languages are used in the global dev community, Python has always surpassed expectations, proving itself to be the most versatile language. Opting for the Python certification course isn’t just to establish a strong and appealing career portfolio but also to brush up on your technical skills and master the language within the stipulated course duration. Whether you are a college student looking forward to learning this language from scratch or a professional wanting to improve your technical skills, our Python course has got your back.</p>
                                        <p>Python is one such programming language that is not just used to develop web applications but also in designing training layers of artificial intelligence models and curating machine learning algorithms. It has also found extensive use in IoT, data science and analytics, and many more fields in the IT sector. With such widespread usage, it’s evident that with our Python certification course, students and professionals will have excellent career opportunities.</p>
                                        <p>At Ahmedabad Computer Education, we will help you gain a strong foothold over basic concepts like library functions and printing syntaxes. Along with this, we will also assist you in mastering the advanced concepts necessary for real-life logic implementation and project development. Since all our trainers are highly skilled in Python, you can connect with them to get your queries resolved and acquire both theoretical and practical knowledge.</p>
                                        <h5 class="h5">What is Python and why is it used?</h5>
                                        <p>Python is one of the most popular computer programming languages, which was first made for public use in 1991. Based on the object-oriented concept, it resembles the English language in terms of syntax. The key features that make it suitable for versatile industry-wide applications are composability, readability, testing frameworks, and structured formats. Any code written in Python can be easily understood even by a person who only has basic conceptual knowledge. On top of this, Python is known to have a flatter learning curve, meaning anyone with potential can learn the language and start writing the codes without much difficulty.</p>
                                        <p>While Python is basically used to develop web applications, the present usage is far more versatile. Data scientists often use this programming language to develop analytical models and find hidden trends and patterns in big data. Apart from this, it can also be used to develop AI models, machine learning algorithms, and many more such computational models. Thanks to the powerful frameworks and library functions, it has become the most preferred language for designing complex applications with custom features.</p>
                                        <p>Since most employers in the IT sector look for Python developers with advanced skills, our Ahmedabad Computer Education Institute will help you with tailored Python course in Ahmedabad. Whether you want to hone any special concept for your upcoming project or learn Python from the basics, we have got your needs covered.</p>
                                        <h5 class="h5 mt-40">Why choose the Python Developer course?</h5>
                                        <p>Before you opt for our Python training in Indore, let us give you a short walkthrough of the benefits of learning this programming language for career development and technical proficiency.</p>

                                        <h5 class="h6 mt-40">Readable code syntax</h5>
                                        <p>Python has high readability despite being a high-level programming language. Owing to the sorted structure, developers can write programs using a wide number of tools, from online IDEs like Eclipse to regular text editors. Additionally, you can also go through the codes without debugging and understand the logic implementation, thanks to the easy-to-understand syntax. </p>
                                        <h5 class="h6 mt-40">Versatile solution approaches</h5>
                                        <p>One of the major benefits of learning Python is that the programming language supports multiple solution approaches. In other words, you can come up with different solutions for the same problem with a piece of code. All you have to do is find the most feasible solution that won’t increase the time complexity or iteration to ensure the code runs smoothly.</p>
                                        <h5 class="h6 mt-40">Objected-oriented programming</h5>
                                        <p>Since Python is object-oriented programming, you will have to deal with objects and attributes that resemble real-life objects. It has the same features as other object-oriented languages, like method overloading and overriding, inheritance, polymorphism, encapsulation, and abstraction. Besides, writing codes with objects as reference variables makes it easier to implement the business logic</p>
                                        <h5 class="h6 mt-40">GUI support</h5>
                                        <p>With our Python course for beginners, you will be able to learn the libraries and frameworks in the Tkinter for Graphical User Interface designing and development. It comes with numerous widgets that can be further customized to create a feature-rich and visually appealing interface for web applications, desktop applications, and mobile-based software.</p>
                                        <h5 class="h6 mt-40">Highly compatible</h5>
                                        <p>Also, Python is compatible with other object-oriented programming languages, including C++ and Java. Hence, switching between the programming languages won’t be a hassle for developers, even if they don’t have an understanding of advanced programming concepts. If you know Java or C++, learning Python will become easier for you.</p>

                                        <h5 class="h5 mt-40">Best job roles for Python developers</h5>
                                        <p>Choosing a Python course with placement opportunities will indeed help you a lot in building your career in this hypercompetitive IT industry. Once you master this programming language, you can opt for several job roles with high paying salary structures.</p>
                                        <div class="checklist dis-ul mt-40">
                                            <ul class="course-acc-ul">
                                                <li class="course-acc-li">Python developer: As a Python developer, you will be responsible for developing different systems and software applications using Python as the backend programming language. The average salary in India for this job role is approximately INR 9 lakhs to INR 11 lakhs annually.</li>
                                                <li class="course-acc-li">Software engineer: Once you have the certification in Python and master this programming language, you can opt for the job role of software engineer. From developing web applications to designing GUIs using the widget libraries, you will be able to work in versatile IT projects. The highest paid jobs in this role offer a salary of INR 15 lakhs to INR 18 lakhs annually. </li>
                                                <li class="course-acc-li">Data scientist: In data science, Python plays a crucial role by allowing developers to build analytical models that can provide valuable insights into big data, like market trends and behavioral patterns. Since data science is in high demand, you can opt for a job with a salary structure of INR 25 lakhs in India.</li>
                                                <li class="course-acc-li">Machine learning engineer: Another job role you can opt for after completing our Python course with placement options is that of a machine learning engineer. Here, you will be responsible for developing algorithms and training layers based on different ML concepts using Python language. The average salary of an ML engineer with expertise in Python language is around INR 20 lakhs. </li>
                                            </ul>
                                        </div>
                                        <h5 class="h5 mt-40" id="faqs">How can Ahmedabad Computer Education help build a prominent career profile?</h5>
                                        <p>At Ahmedabad Computer Education, we will help you learn the basic concepts of Python, including exception handling, multithreading, OOPs concepts, functions and polymorphism, and the Django framework. Additionally, our experts will also give you custom sessions on advanced concepts of this programming language through which you can work on real-life projects specific to different industries, like a complete web application development or building of an AI model with analytical abilities. </p>
                                        <p>Being the best Python institute Ahmedabad, we will help you in:</p>
                                        <div class="checklist dis-ul mt-40">
                                            <ul class="course-acc-ul">
                                                <li class="course-acc-li">Understanding the theoretical concepts of Python and application of the same in real-life projects</li>
                                                <li class="course-acc-li">Solving the complexities of a codebase using different approaches while catering to time complexities</li>
                                                <li class="course-acc-li">Gaining practical exposure through live project training sessions using Python as the main backend programming language</li>
                                                <li class="course-acc-li">Learning the major concepts that will be needed for your next job interview</li>
                                            </ul>
                                        </div>
                                        <h5 class="h5 mt-40">FAQs</h5>
                                        <h5 class="h6 mt-40">What can I learn from the Python Developer course?</h5>
                                        <p>The Python course in Ahmedabad will help you learn the basic concepts of OOPs language, polymorphism, exception handling, nested try-and-catch blocks, dynamic memory allocation, and multithreading. Apart from this, you will be able to know more about advanced concepts like GUI framework, Django, thread functions, advanced loop structures, and many more.</p>
                                        <h5 class="h6 mt-40">What is the average salary of a Python developer in India?</h5>
                                        <p>The average salary of a Python developer will depend on the job role chosen and the employment market trends. For instance, a software engineer having skills in Python can have an average annual salary of INR 11 lakhs to INR 13 lakhs. On the other hand, a data scientist or data analyst with knowledge of Python, R Programming, and statistics can apply for a job of salary package between INR 25 lakhs and INR 27 lakhs. </p>
                                        <h5 class="h6 mt-40">Is the Python Developer course suitable for freshers?</h5>
                                        <p>Our Python certification course is suitable for freshers who have recently completed their college or are in their final academic year. They can learn about the basic concepts related to this programming language, library function utilization, and GUI designing concepts. </p>
                                        <h5 class="h6 mt-40">How long will it take to learn the Python programming language?</h5>
                                        <p>It will take approximately three to four months to master the Python language with our certification program.</p>
                                        <h5 class="h6 mt-40">What is the fee for the Python Developer course?</h5>
                                        <p>For knowing more about the fee structure of our Python training in Indore, you can connect with our consultants and discuss about the same further.</p>
                                        <h5 class="h6 mt-40">Do you offer mock interview sessions for Python developers?</h5>
                                        <p>If you are looking for Python course with placement options, we do offer training sessions and mock interviews so that you can become familiar with the questions asked during technical interviews and master the programming logics.</p>
                                        <h5 class="h6 mt-40">What are the best job roles for a Python Developer?</h5>
                                        <p>Some of the best job roles you can apply for as a Python developer are software engineer, data scientist, data analyst, AI developer, GUI designer, and machine learning engineer.</p>
                                        <h5 class="h6 mt-40">Will you give practical training on Python project?</h5>
                                        <p>Yes, being the best Python institute in Ahmedabad, we ensure to train our students in both theoretical and practical concepts. Hence, we arrange practical sessions through live project training and help students understand the implementation logic of Python.</p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="instructor" role="tabpanel" aria-labelledby="instructor-tab">
                                    <div class="course-instructor">
                                        <div class="course-author-box">
                                            <div class="auhtor-img">
                                                <img src="assets/img/instructor/nilesh-goud.jpg" alt="Author Image">
                                            </div>
                                            <div class="media-body">
                                                <h3 class="author-name"><a class="text-inherit" href="python-instructor.php">Nilesh Goud</a></h3>
                                                <p class="author-text">Nilesh Goud is a skilled full-stack developer with a passion for building robust and scalable web applications using Python.</p>
                                                <div class="author-meta">
                                                    <a><i class="fal fa-file-video"></i>1 Course</a>
                                                    <span><i class="fal fa-users"></i>250+ Students</span>
                                                </div>
                                                <div class="th-social">
                                                    <a href="https://www.facebook.com/ahmedabadcomputereducation" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                                    <a href="https://www.youtube.com/channel/UC-B4hidXXVOrr644iMJrj5g" target="_blank"><i class="fab fa-youtube"></i></a>
                                                    <a href="https://www.linkedin.com/company/ahmedabadcomputereducation/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                                    <a href="https://www.instagram.com/ahmedabad_computer_education/" target="_blank"><i class="fab fa-instagram"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                                    <div class="course-Reviews">
                                        <div class="th-comments-wrap ">
                                            <ul class="comment-list">
                                                <li class="review th-comment-item">
                                                    <div class="th-post-comment">
                                                        <div class="comment-avater">
                                                            <img src="assets/img/review/uttam.png" alt="Comment Author">
                                                        </div>
                                                        <div class="comment-content">
                                                            <h4 class="name">Uttam Shingala</h4>
                                                            <span class="commented-on"><i class="fal fa-calendar-alt"></i>22 April, 2022</span>
                                                            <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                                                <span style="width:100%">Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span>
                                                            </div>
                                                            <p class="text">Getting training from Ahmedabad Computer Education was always on my mind. And finally when I got there for training, with each passing day, I could see my bright future approaching.</p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="review th-comment-item">
                                                    <div class="th-post-comment">
                                                        <div class="comment-avater">
                                                            <img src="assets/img/review/120-neha.jpg" alt="Comment Author">
                                                        </div>
                                                        <div class="comment-content">
                                                            <h4 class="name">Neha Punetha</h4>
                                                            <span class="commented-on"><i class="fal fa-calendar-alt"></i>26 May, 2023</span>
                                                            <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                                                <span style="width:100%">Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span>
                                                            </div>
                                                            <p class="text">The education that the teachers at Ahmedabad Computer education provide is the best I could find in Ahmedabad. On the other hand, the study material and courses cover all the important topics you require a skill set for in the corporate world.</p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="review th-comment-item">
                                                    <div class="th-post-comment">
                                                        <div class="comment-avater">
                                                            <img src="assets/img/review/120-kenil.jpg" alt="Comment Author">
                                                        </div>
                                                        <div class="comment-content">
                                                            <h4 class="name">Kenil Shah</h4>
                                                            <span class="commented-on"><i class="fal fa-calendar-alt"></i>25 Aug, 2024</span>
                                                            <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                                                <span style="width:100%">Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span>
                                                            </div>
                                                            <p class="text">The opportunities, honestly, are endless after completing courses in Ahmedabad computer education. ACE is a great place to study, learning from very good and well-trained professors. All the teachers are very amazing and supportive.</p>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div> <!-- Comment Form -->

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-4">
                    <aside class="sidebar-area position-relative">
                        <!-- register sidebar -->
                        <img src="assets/img/home-course-details/badgetwo.png" alt="badgetwo" class="badgetwo">

                        <div class="widget widget_info  register-sidebar">
                            <h3 class="widget_title">Inquire Now</h3>
                            <form action="mail.php" method="POST" class="contact-form ajax-contact" id="sidebar_form">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="hidden" name="form" value="course_form">
                                            <input type="text" class="form-control style-white" name="name" id="name"
                                                placeholder="Your Name*" required>
                                            <i class="fal fa-user"></i>
                                        </div>
                                        <div class="sidebar_name_error" id="sidebar_name_error" style="color: red;"></div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="email" class="form-control style-white" name="email" id="email"
                                                placeholder="Email Address*" required>
                                            <i class="fal fa-envelope"></i>
                                        </div>
                                        <div class="sidebar_email_error" id="sidebar_email_error" style="color: red;"></div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="tel" class="form-control style-white" name="number" id="number" placeholder="Contact Number*" required>
                                            <i class="fal fa-phone"></i>
                                        </div>
                                        <div class="sidebar_number_error" id="sidebar_number_error" style="color: red;"></div>
                                    </div>
                                    <div class="col-12">
                                        <div class="captcha-container">
                                            <div class="g-recaptcha" style="transform:scale(0.81);-webkit-transform:scale(0.81);transform-origin:0 0;-webkit-transform-origin:0 0;" data-sitekey="6Lc0SJ8qAAAAAIh3K9OIB4DJav-crCgzE9-VD4mK"></div>

                                        </div>
                                    </div>
                                    <div class="form-btn col-12 mt-10">
                                        <button class="th-btn" type="submit" >Submit<i
                                                class="fas fa-long-arrow-right ms-2"></i></button>
                                    </div>
                                </div>
                                <p class="form-messages mb-0 mt-3"></p>
                                
                            </form>
                        </div>

                        <div class="widget widget_info video-small-best">
                            <div class="th-video">
                                <img src="assets/img/courses/corses-main/python-thumbnail.jpg" alt="video">
                                <a class="play-btn popup-video" data-bs-toggle="modal" data-bs-target="#videoModal"><i
                                        class="fas fa-play"></i></a>
                            </div>
                            
                        </div>

                    </aside>
                </div>
            </div>
        </div>
    </section>


    <!--==============================
About Area  
==============================-->
    <div class="space-bottom about-sec bg-bottom-right" data-bg-src="assets/img/update1/bg/about_bg_1.jpg"
        id="about-us">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 mb-40 mb-xl-0">
                    <div class="img-box7 tilt-active">
                        <img class="w-100" src="assets/img/home/home01.jpg" alt="About">
                    </div>
                </div>
                <div class="col-xxl-7 col-xl-8 align-self-end">
                    <div class="about-content2">
                        <div class="title-area mb-40">
                            <span class="sub-title">More About Ahmedabad Computer Education</span>
                            <h2 class="fs-40 fw-medium mt-n2">Launch Your IT Career with the Best Training Institute in Ahmedabad & Indore
                            </h2>
                        </div>
                        <p class="mt-n2 mb-30 mb-xl-5">Looking to break into the exciting world of IT? ACE, a leading IT training institute in Ahmedabad and Indore, can help you achieve your goals. We offer a comprehensive range of IT courses designed to equip you with the skills and knowledge needed to thrive in today's dynamic tech landscape.
                        </p>
                        <div class="counter-grid-wrap">
                            <div class="counter-grid">
                                <div class="counter-grid_icon">
                                    <img src="assets/img/update1/icon/candidate_placed.svg" alt="icon">
                                </div>
                                <div class="counter-grid_content">
                                    <h3 class="counter-grid_number"><span class="counter-number">90</span>+</h3>
                                    <span class="counter-grid_text">Industry Experts</span>
                                </div>
                            </div>
                            <div class="counter-grid">
                                <div class="counter-grid_icon">
                                    <img src="assets/img/update1/icon/company.svg" alt="icon">
                                </div>
                                <div class="counter-grid_content">
                                    <h3 class="counter-grid_number"><span class="counter-number">100</span>+</h3>
                                    <span class="counter-grid_text">MoU Signed</span>
                                </div>
                            </div>
                            <div class="counter-grid">
                                <div class="counter-grid_icon">
                                    <img src="assets/img/update1/icon/candidate_trained.svg" alt="icon">
                                </div>
                                <div class="counter-grid_content">
                                    <h3 class="counter-grid_number"><span class="counter-number">5000</span>+</h3>
                                    <span class="counter-grid_text">Students Certified</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--==============================
Cta Area  
==============================-->
    <section class="space position-relative mb-5" id="placement">
        <div class="bg-img" data-bg-src="assets/img/update1/bg/off.jpg">
            <img src="assets/img/update1/bg/bg_overlay_3.png" alt="overlay">
        </div>
        <div class="container z-index-common">
            <div class="row align-items-center justify-content-center justify-lg-content-between">
                <div class="col mb-40 mb-lg-0 text-center text-lg-start">
                    <h3 class="fw-medium text-white mt-n2">Get 1 Demo Session. For First 20 Registrations.</h3>
                    <p class="text-white mb-n2">We're confident that we can help you launch a successful and rewarding career in the IT field.</p>
                </div>
                <div class="col-lg-auto text-center text-lg-start">
                    <a href="course.php" class="th-btn style8 d-xxl-inline-block openRegisterModal" data-bs-toggle="modal"
                        data-bs-target="#registerModal">Inquire Now<i class="fas fa-arrow-right ms-2"></i></a>
                </div>
            </div>
        </div>
    </section>


    <!--==============================
Servce Area  
==============================-->

    <div class="bg-smoke web-design-smoke work-com-logo-sec" data-pos-for=".footer-wrapper" data-sec-pos="bottom-half">
        <div class="container th-container3 z-index-common">
            <div class="title-area text-center">

                <h2 class="sec-title">Our Students Are Placed In Top Companies</h2>
            </div>
            <div class="row gx-10 th-carousel" data-slide-show="6" data-lg-slide-show="5" data-md-slide-show="4"
                data-sm-slide-show="3" data-xs-slide-show="2">
                <div class="col-auto">
                    <div class="insta-box">
                        <img src="assets/img/company-logo/arth-i-soft.png" alt="Instagram">
                    </div>
                </div>
                <div class="col-auto">
                    <div class="insta-box">
                        <img src="assets/img/company-logo/iTechnotion.png" alt="Instagram">
                    </div>
                </div>
                <div class="col-auto">
                    <div class="insta-box">
                        <img src="assets/img/company-logo/adit.png" alt="Instagram">
                    </div>
                </div>
                <div class="col-auto">
                    <div class="insta-box">
                        <img src="assets/img/company-logo/harmis.png" alt="Instagram">
                    </div>
                </div>
                <div class="col-auto">
                    <div class="insta-box">
                        <img src="assets/img/company-logo/ethos.png" alt="Instagram">
                    </div>
                </div>
                <div class="col-auto">
                    <div class="insta-box">
                        <img src="assets/img/company-logo/azilen.png" alt="Instagram">
                    </div>
                </div>
                <div class="col-auto">
                    <div class="insta-box">
                        <img src="assets/img/company-logo/hitech.png" alt="Instagram">
                    </div>
                </div>
                <div class="col-auto">
                    <div class="insta-box">
                        <img src="assets/img/company-logo/radix.png" alt="Instagram">
                    </div>
                </div>
                <div class="col-auto">
                    <div class="insta-box">
                        <img src="assets/img/company-logo/n4n.png" alt="Instagram">
                    </div>
                </div>
                <div class="col-auto">
                    <div class="insta-box">
                        <img src="assets/img/company-logo/moon.png" alt="Instagram">
                    </div>
                </div>
                <div class="col-auto">
                    <div class="insta-box">
                        <img src="assets/img/company-logo/ifour.png" alt="Instagram">
                    </div>
                </div>
                <div class="col-auto">
                    <div class="insta-box">
                        <img src="assets/img/company-logo/spec.png" alt="Instagram">
                    </div>
                </div>
                <div class="col-auto">
                    <div class="insta-box">
                        <img src="assets/img/company-logo/ispark.png" alt="Instagram">
                    </div>
                </div>
                <div class="col-auto">
                    <div class="insta-box">
                        <img src="assets/img/company-logo/hyperlink.png" alt="Instagram">
                    </div>
                </div>
                <div class="col-auto">
                    <div class="insta-box">
                        <img src="assets/img/company-logo/technobrain.png" alt="Instagram">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--Register Modal -->

    <div class="modal fade register-modal  load-modal" id="registerModal" tabindex="-1"
        aria-labelledby="registerModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="load-modal-wrapper position-relative">
                    <button class="closeButton sideMenuCls btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                            class="far fa-times"></i></button>
                    <div class="contact-form-wrap background-image"
                        style="background-image: url(&quot;assets/img/bg/contact_bg_1.png&quot;);">
                        
                        <h2 class="border-title">Registration now</h2>
                        <p class="mt-n1 mb-30 sec-text">Connect with our course counsellor, and discover how ACE can help you unlock your full digital potential!</p>
                        <form action="mail.php" method="POST" class="contact-form ajax-contact register-form" id="register_form">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="hidden" name="form" value="registration_form">
                                        <input type="text" class="form-control style-white" name="name" id="name"
                                            placeholder="Your Name*" required>
                                        <i class="fal fa-user"></i>
                                    </div>
                                    <div class="register_name_error" id="register_name_error" style="color: red;"></div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="email" class="form-control style-white" name="email" id="email"
                                            placeholder="Email Address*" required>
                                        <i class="fal fa-envelope"></i>
                                    </div>
                                    <div class="register_email_error" id="register_email_error" style="color: red;"></div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="number" class="form-control style-white" name="number" id="number"
                                            placeholder="Contact Number*" required>
                                        <i class="fal fa-phone"></i>
                                    </div>
                                    <div class="register_number_error" id="register_number_error" style="color: red;"></div>
                                </div>
                                <div class="col-12">
                                    <div class="captcha-container">
                                        <div class="g-recaptcha" data-sitekey="6Lc0SJ8qAAAAAIh3K9OIB4DJav-crCgzE9-VD4mK"></div>

                                    </div>
                                </div>
                                <div class="form-btn col-12 mt-10">
                                    <button class="th-btn "  type="submit">Register<i class="fas fa-long-arrow-right ms-2"></i></button>
                                </div>
                            </div>
                            <p class="form-messages mb-0 mt-3"></p>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!--video Modal -->
    <div class="modal fade video-modal load-modal course-video-modal" id="videoModal" tabindex="-1"
        aria-labelledby="videoModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="load-modal-wrapper position-relative">
                    <button class="closeButton sideMenuCls btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                            class="far fa-times"></i></button>
                    <video autoplay muted controls class="courses-video-main">
                        <source src="./assets/video/ahm_video.mp4" type="video/mp4">
                    </video>


                    </iframe>

                </div>
            </div>
        </div>
    </div>


    <div class="modal fade load-modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="load-modal-wrapper position-relative">
                    <button class="closeButton sideMenuCls btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                            class="far fa-times"></i></button>
                    <div class="modal-grid row">
                        <div class="col-12 col-md-6">
                            <div class="modal-slider-sec">
                                <div class="blog-img th-carousel" data-overlay="black" data-opacity="5"
                                    data-arrows="true" data-slide-show="1" data-fade="true">
                                    <a href="blog-details.php"><img src="assets/img/course/400x450/teachers1.jpg"
                                            alt="IT Training Institute"></a>
                                    <a href="blog-details.php"><img src="assets/img/course/400x450/teachers2.jpg"
                                            alt="Computer Training Institute"></a>
                                    <a href="blog-details.php"><img src="assets/img/course/400x450/teachers1.jpg"
                                            alt="IT Training Institute"></a>
                                    <a href="blog-details.php"><img src="assets/img/course/400x450/teachers2.jpg"
                                            alt="Computer Training Institute"></a>
                                    <a href="blog-details.php"><img src="assets/img/course/400x450/teachers1.jpg"
                                            alt="IT Training Institute"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="modal-form-sec">
                                <div class="contact-form-wrap load-modal-form" data-bg-src="assets/img/bg/contact_bg_1.png">
                                    <span class="sub-title">Contact With Us!</span>
                                    <h2 class="border-title">Get in Touch</h2>
                                    <form action="mail.php" method="POST" class="contact-form ajax-contact" id="get-in-touch-form">
                                        <div class="row get-up-contact-custom">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="hidden" name="form" value="get_in_touch">

                                                    <input type="text" class="form-control style-white" name="name"
                                                        id="name" placeholder="Your Name*" required>
                                                    <i class="fal fa-user"></i>
                                                </div>
                                                <div class="load_name_error" id="load_name_error" style="color: red;"></div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="number" class="form-control style-white" name="number"
                                                        id="number" placeholder="Contact Number*" required>
                                                    <i class="fal fa-phone"></i>
                                                </div>
                                                <div class="load_number_error" id="load_number_error" style="color: red;"></div>
                                            </div>
                                            <div class="col-12">
                                                <div class="captcha-container">
                                                    <div class="g-recaptcha" data-sitekey="6Lc0SJ8qAAAAAIh3K9OIB4DJav-crCgzE9-VD4mK"></div>

                                                </div>
                                            </div>
                                            <div class="form-btn col-12 mt-10">
                                                <button class="th-btn " type="submit" value="2">Send Message<i
                                                        class="fas fa-long-arrow-right ms-2"></i></button>
                                            </div>
                                        </div>
                                        <p class="form-messages mb-0 mt-3"></p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!--********************************
			Code End  Here 
	******************************** -->



    <a class="whatsapp-sticky" href="https://wa.me/+919327287700?text=Inquiry%20for%20Python%20Course%0AI%20am%20interested%20in%20a%20Python%20course" target="_blank">
        <div class="sticky-bottom-note-important">
            <div class="inner-sticky-contain">
                <p class="inner-job-title">
                    100% Job Assistance | Try Free Demo Class<br>
                    For More Inquiry Connect Now!
                </p>
            </div>
        </div>
    </a>

    <!-- Scroll To Top -->
    <div class="scroll-top">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
        </svg>
    </div>




    <!--==============================
         Footer Area
         ==============================-->
    <footer class="footer-wrapper footer-layout5" id="footer">
        <div class="widget-area">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-md-4">
                        <div class="widget footer-widget">
                            <div class="th-widget-about mob-th-widget-about">
                                <div class="about-logo">
                                    <a href="#"><img src="assets/img/footer-ace-2.png" alt="Edura"></a>

                                </div>
                                <p class="about-text">As the #1 IT Training Institute, We're passionate about empowering youth with the skills to thrive in the dynamic digital landscape.</p>
                                <div class="info-box-wrap mb-20">
                                    <div class="info-box_icon">
                                        <i class="fas fa-phone"></i>
                                    </div>
                                    <a href="tel:9586877700" class="info-box_link rem-bullet">9586-877-700</a>
                                </div>
                                <div class="th-social">
                                    <h6 class="title text-white">FOLLOW US ON:</h6>
                                    <a href="https://www.facebook.com/ahmedabadcomputereducation" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://www.instagram.com/ahmedabad_computer_education/" target="_blank"><i class="fab fa-instagram"></i></a>
                                    <a href="https://www.linkedin.com/company/ahmedabadcomputereducation/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="https://www.youtube.com/channel/UC-B4hidXXVOrr644iMJrj5g" target="_blank"><i class="fab fa-youtube"></i></a>
                                    <a href="https://wa.me/+919586877700"><i class="fab fa-whatsapp" target="_blank"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="widget widget_nav_menu footer-widget">
                            <h3 class="widget_title">Ahmedabad Location</h3>
                            <div class="info-box-wrap">
                                <div class="info-box_icon">
                                    <i class="fas fa-location-dot"></i>
                                </div>
                                <p class="info-box_text">
                                    655, 702/703, Iscon Emporio, Jodhpur Cross Roads, Satellite, Ahmedabad, Gujarat - 380015
                                </p>
                            </div>
                            <div class="map-sec map-new-frame">
                                <div class="map">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3671.9278387943546!2d72.52190077603652!3d23.02642161618322!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e84cdcc997db7%3A0x5e5fd6741c5ba20e!2sAhmedabad%20Computer%20Education!5e0!3m2!1sen!2sin!4v1732683961448!5m2!1sen!2sin" width="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="widget widget_nav_menu footer-widget">
                            <h3 class="widget_title">Indore Location</h3>
                            <div class="info-box-wrap">
                                <div class="info-box_icon">
                                    <i class="fas fa-location-dot"></i>
                                </div>
                                <p class="info-box_text">
                                    719, Shekhar Central, AB Rd, Manorama Ganj, Indore, Madhya Pradesh - 452018<br>
                                </p>
                            </div>
                            <div class="map-sec map-new-frame">
                                <div class="map">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14722.374927691972!2d75.86850056425075!3d22.706163021200194!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3962fda9638f76d3%3A0xf46aa7d34cc4b2a6!2sBlockchain%20%26%20Mobile%20App%20Development%20Company%20-%20Virtual%20Height%20IT%20Services%20Pvt.%20Ltd.!5e0!3m2!1sen!2sin!4v1732778982909!5m2!1sen!2sin" width="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright-wrap">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-6">
                        <p class="copyright-text">Copyright <i class="fal fa-copyright"></i> 2024 <a
                                href="https://www.virtualheight.com/">Virtual Height</a>. All Rights Reserved.
                        </p>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="shape-mockup jump d-none d-xl-block" data-top="24%" data-left="4%"><img
                src="assets/img/update1/shape/footer_shape_1.png" alt="shapes"></div>
        <div class="shape-mockup jump-reverse d-none d-xl-block" data-bottom="20%" data-right="4%"><img
                src="assets/img/update1/shape/footer_shape_2.png" alt="shapes"></div>
        <div class="shape-mockup" data-top="0" data-right="0"><img src="assets/img/update1/shape/footer_shape_3.png"
                alt="shapes"></div>
    </footer>
    <!--==============================
         All Js File
         ============================== -->
    <!-- Jquery -->
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <!-- Slick Slider -->
    <script src="assets/js/slick.min.js"></script>
    <!-- Bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Magnific Popup -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Counter Up -->
    <script src="assets/js/jquery.counterup.min.js"></script>
    <!-- Circle Progress -->
    <script src="assets/js/circle-progress.js"></script>
    <!-- Range Slider -->
    <script src="assets/js/jquery-ui.min.js"></script>
    <!-- Isotope Filter -->
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <!-- Tilt JS -->
    <script src="assets/js/tilt.jquery.min.js"></script>
    <!-- Tweenmax JS -->
    <script src="assets/js/tweenmax.min.js"></script>
    <!-- Nice Select JS -->
    <script src="assets/js/nice-select.min.js"></script>
    <!-- Main Js File -->
    <script src="assets/js/main.js"></script>
    <script>
        $(document).ready(function() {
            if (!document.cookie.includes("modalShown=true")) {
                setTimeout(() => {
                    $('#exampleModal').modal('show');
                    document.cookie = "modalShown=true; max-age=" + 24 * 60 * 60 + "; path=/";
                }, 5000);
            }
        });

        $(document).ready(function() {
            // Initially set the buttons visible
            $('#scrollButtons').show();

            // Monitor the scroll event
            $(window).scroll(function() {
                // Check if the user has scrolled more than 200px
                if ($(this).scrollTop() > 200) {
                    // Keep buttons visible (or add animations if needed)
                    $('#scrollButtons').fadeIn();

                } else {
                    // Keep buttons visible but optional fade-out behavior can be removed
                    $('#scrollButtons').fadeIn();
                }
            });
        });

        $(document).ready(function() {
            // Initially set the buttons visible
            $('#scrollButtonsinquirey').show();

            // Monitor the scroll event
            $(window).scroll(function() {
                // Check if the user has scrolled more than 200px
                if ($(this).scrollTop() > 200) {
                    // Keep buttons visible (or add animations if needed)
                    $('#scrollButtonsinquirey').fadeIn();

                } else {
                    // Keep buttons visible but optional fade-out behavior can be removed
                    $('#scrollButtonsinquirey').fadeIn();
                }
            });
        });


        if ($('.scroll-top').length > 0) {

            var scrollTopbtn = document.querySelector('.scroll-top');
            var progressPath = document.querySelector('.scroll-top path');
            var pathLength = progressPath.getTotalLength();
            progressPath.style.transition = progressPath.style.WebkitTransition = 'none';
            progressPath.style.strokeDasharray = pathLength + ' ' + pathLength;
            progressPath.style.strokeDashoffset = pathLength;
            progressPath.getBoundingClientRect();
            progressPath.style.transition = progressPath.style.WebkitTransition = 'stroke-dashoffset 10ms linear';
            var updateProgress = function() {
                var scroll = $(window).scrollTop();
                var height = $(document).height() - $(window).height();
                var progress = pathLength - (scroll * pathLength / height);
                progressPath.style.strokeDashoffset = progress;
            }
            updateProgress();
            $(window).scroll(updateProgress);
            var offset = 50;
            var duration = 750;
            jQuery(window).on('scroll', function() {
                if (jQuery(this).scrollTop() > offset) {
                    jQuery(scrollTopbtn).addClass('show');
                } else {
                    jQuery(scrollTopbtn).removeClass('show');
                }
            });
            jQuery(scrollTopbtn).on('click', function(event) {
                event.preventDefault();
                jQuery('html, body').animate({
                    scrollTop: 0
                }, duration);
                return false;
            })
        }



        $(document).ready(function() {
            // Initially, hide all sub-menus and remove active class
            $('.cus-megamenu-list ul').removeClass('active').hide();
            $('.cus-megamenu-li').removeClass('active');

            // Set the first menu item and its corresponding submenu as active
            $('.cus-megamenu-li').first().addClass('active');
            $('.cus-megamenu-list ul').first().addClass('active').slideDown();

            // When a menu item is clicked
            $('.cus-megamenu-li').on('click', function() {
                $('.cus-megamenu-li').removeClass('active');
                var index = $(this).index();
                // If the clicked item is already active, close it
                if ($(this).hasClass('active')) {
                    // Remove active class from the clicked menu item and hide its submenu
                    $(this).removeClass('active');
                    $('.cus-megamenu-list ul').eq(index).removeClass('active').slideUp();
                } else {
                    // Remove the active class from all items and hide all submenus
                    $('.cus-megamenu-li').removeClass('active');
                    $('.cus-megamenu-list ul').removeClass('active').slideUp();

                    // Add active class to the clicked menu item and show the corresponding submenu
                    $(this).addClass('active');
                    $('.cus-megamenu-list ul').eq(index).addClass('active').slideDown();
                }
            });
        });
    </script>
</body>

</html>