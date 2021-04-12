<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Clever Consulting</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">

    <link href="{{ asset('css/style.css?id=25') }}" rel="stylesheet">
    <link href="{{ asset('css/normalize.css') }}" rel="stylesheet">
    {{--    <link rel="stylesheet" href="public/css/normalize.css">--}}
    {{--    <link rel="stylesheet" href="public/css/style.css?id=1">--}}
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,500;0,600;0,700;1,400&display=swap"
          rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
</head>
<body>

<div id="header">
    <div class="sidebar left">
    </div>
    <div class="content positionHeader">
        <div class="logo_header"></div>
        <div id="menu_header">
            <nav class="nav-bar">
                <div class="toggle-menu">
                    <div class="line line1"></div>
                    <div class="line line2"></div>
                    <div class="line line3"></div>
                </div>
                <ul class="nav-list">
                    <li class="nav-list-item"><a href="#header" class="nav-link">Home</a></li>
                    <li class="nav-list-item"><a href="#sixthItem" class="nav-link">Services</a></li>
                    <li class="nav-list-item">
                        <a href="#team" class="nav-link">Our Team</a>
                    </li>
                    <li class="nav-list-item">
                        <a href="#contactForm" class="nav-link">Contacts Us</a>
                    </li>
                </ul>
            </nav>

            <ul id="list_header_menu" class="defaultFontColor defaultFontSize">
                <li class="active">
                    <a href="#header">
                        Home
                    </a>
                </li>
                <li>
                    <a href="#sixthItem">Services</a>
                </li>
                <li>
                    <a href="#team">
                        Our Team
                    </a>
                </li>
                <li class="greenRectangle">
                    <span id="contactUs">
                        <a href="#contactForm">Contact Us</a></span>
                </li>
            </ul>
        </div>
    </div>
    <div class="sidebar right">
    </div>
</div>

<div id="firstItem">
    <img src="{{ asset('fonts/jeremy-allouche-1920.jpg') }}" alt="Snow" style="width:100%;">
    <div class="centered textOnImage">
        <p>We are here to support you through growth, development and transformation to a
            better tomorrow
        </p>
    </div>
</div>

<div id="secondItem" style="position: relative">
    <div class="sidebar left"></div>
    <div class="content paddingSecondItem">
        <p class="serviceText ">
            Clever Consulting
        </p>
        <div>
            <p>
                Is an accounting firm focusing on financial reporting and controls advisory services for
                publicly listed and privately held companies. Our main goal is to find creative financial
                solutions for our clients using an innovative and customized approach that fits your
                company’s unique needs.
            </p>
            <p>
                Through our seamless financial support services, we can help you tackle complex
                financial problems and questions, freeing you up to focus on leading your business
                growth and development. Our team will work with you every step of the way to help your
                company reach its fullest potential.
            </p>
            <div id="meetOurTeam">
                <a href="#ourTeam">
                    Meet Our Team
                </a>
            </div>
        </div>
    </div>
    <div class="sidebar right"></div>
</div>

<div id="fourthItem" style="position:relative;">

    <img src="{{ asset('fonts/secondImage.png') }}" alt="Snow" style="width:100%;">
    <div class="centered textOnImage">
        <p style="padding-left: 20px">We want to empower you to reach your full potential</p>
    </div>
</div>

<div id="sixthItem">
    <div class="sidebar left"></div>
    <div class="content paddingSecondItem">
        <p class="serviceText">Services</p>
        <div class="serviceElementPosition">
            <div class="elementWithTextAndIcon">

                <img src="{{ asset('fonts/u_file-contract-dollar.png') }}">
                <p>Financial Reporting Assistance</p>
            </div>

            <div class="elementWithTextAndIcon">

                <img src="{{ asset('fonts/u_file-edit-alt.png') }}">
                <p>Internal Audit (Risk, Controls, SOX readiness, Flowcharts, ERM)</p>
            </div>

            <div class="elementWithTextAndIcon">
                <img src="{{ asset('fonts/u_chart-line.png') }}">
                <p>Budgeting and Forecasting</p>
            </div>

            <div class="elementWithTextAndIcon">
                <img src="{{ asset('fonts/u_chart-down.png') }}">
                <p>Governance, Processes & Controls Improvements</p>
            </div>
        </div>

        <p style="padding-top: 30px">
            Our team of professionals has extensive experience working with a variety of private and public
            companies. You can trust us to help you manage all financial aspects of your business including:
        </p>
        <ul>
            <li>
                <p>
                    Managing cash flows
                </p>
            </li>
            <li>
                <p>
                    Creating budgets and forecasts
                </p>
            </li>
            <li>
                <p>
                    Securing financing
                </p>
            </li>
            <li>
                <p>
                    Providing professional and accurate bookkeeping
                </p>
            </li>
            <li>
                <p>
                    Developing and improving internal controls
                </p>
            </li>
            <li>
                <p>
                    Ensuring external regulatory compliance (SOX, NI 52-109, GST and PST filing), and
                    more.
                </p>
            </li>
        </ul>
        <p>
            If you need more information - let’s talk. Get in touch with us today!
        </p>
    </div>
    <div class="sidebar right"></div>
</div>
<!--end sixthItem-->

<div id="teamwork" style="position: relative">
    <img width="100%" height="482px" src="{{ asset('fonts/newImage.jpg') }}">
    <div class="centered textOnImage">
        <p>Teamwork begins by building trust</p>
    </div>
</div>
<div id="team">
    <div class="sidebar left"></div>
    <div class="content paddingSecondItem">

        <p class="serviceText" id="ourTeam">
            Our Team
        </p>
        <!--        https://css-tricks.com/dynamic-page-replacing-content/-->

        <ul id="teamList">
            <li>
                <div class="teamText">
                    <div>
                        <p class="weight500 fontSize22">Natalia Asadova</p>
                        <p class="weight400 fontSize16">CA, CPA – Co-Founder</p>
                    </div>
                    <p class="fontSize16">
                        Natalia is a co-founder of Clever Consulting and has more than ten years of experience in auditing,
                        financial governance, budgeting and forecasting, and internal controls. Natalia believes that the success
                        of an organization starts with good governance and a sound financial management system. Developing
                        effective and tailored solutions for clients is her passion. Natalia also supports her local community by
                        volunteering her time through her position as a member of the Board of Directors for a large Non-for-profit organization.
                    </p>
                </div>
            </li>
            <li>
                <div class="teamText">
                    <div>
                        <p class="weight500 fontSize22">Olya Asadov</p>
                        <p class="weight400 fontSize16">CPA – Co-Founder</p>
                    </div>
                    <p class="fontSize16">
                        Olya is a co-founder of Clever Consulting and has ten years of experience working with a variety of
                        clients in different industries. During that time, she has provided foundational financial services to
                        clients including financial reporting, budgeting and forecasting, controls and processes, and more. Olya’s
                        passion for logic, analytics, and numbers led her to complete a BSc in Mathematics, and solidified her
                        belief that there is no issue that cannot be solved if you put your mind to it and persevere. She has
                        been regarded for her natural ability to build relationships and genuine interest in helping her clients to
                        improve their businesses.
                    </p>
                </div>
            </li>
            <li>
                <div></div>
            </li>
        </uL>
    </div>
    <div class="sidebar right"></div>
</div><!--end team-->
<div id="ContactUsToday">
    <img src="{{ asset('fonts/newImage2.jpg') }}" height="482px v" width="100%"/>
</div>

<div id="contactForm">
    <div class="sidebar left"></div>
    <div class="content paddingSecondItem">
        <p class="serviceText">
            Get In Touch
        </p>
        <div class="positionTextArea">
            <div class="positionInput">
                {{--                    <p class="fontSize36 " style="text-align: center">Contact form</p>--}}
                <div>
                    <label class="fontSize22 weight700" for="firstName">First Name<span class="gfield_required">*</span></label>
                    <input id="firstName" name="firstName" class="inputStyle" type="text">
                </div>
                <div>
                    <label class="fontSize22 weight700" for="lastName">Last Name<span
                                class="gfield_required">*</span></label>
                    <input id="lastName" name="lastName" class="inputStyle" type="text">
                </div>
                <div>
                    <label class="fontSize22 weight700" for="email">Email<span class="gfield_required">*</span></label>
                    <input id="email" name="email" class="inputStyle" type="text">
                </div>
            </div>
            <div class="positionInput">
                <div>
                    <label class="fontSize22 weight700" for="Company">Company</label>
                    <input id="Company" name="Company" class="inputStyleLong" type="text">
                </div>
                <div>
                    <label class="fontSize22 weight700" for="Subject">Subject</label>
                    <input id="Subject" name="Subject" class="inputStyleLong" type="text">
                </div>
            </div>
            <div style="display: block; width: 100%">
                <label class="fontSize22 weight700" for="textMessage">Message<span
                            class="gfield_required">*</span></label>
                <textarea id="textMessage" name="textMessage"></textarea>
            </div>


        </div>
        <div id="sendMessage">
            <span>
                Send Message
            </span>
        </div>
    </div>
    <div class="sidebar right"></div>
</div>

    <div id="footer">
        <div class="logo_for_footer"></div>
        <ul id="footerMenu">
            <li class="active">
                <a href="#">Home</a>
            </li>
            <li>
                <a href="#">Services</a>
            </li>
            <li>
                <a href="#">Our Team</a>
            </li>
            <li>
                <a href="#">Contact Us</a>
            </li>
        </ul>
        <div id="copyright">
            <p>
                Copyright &copy; <?php echo date("Y"); ?> Clever Consulting. All rights reserved
            </p>
        </div>
    </div>
<input type="hidden" id="token" value="{{ csrf_token() }}">
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script type="text/javascript" src="{{ asset('js/main.js?id=6') }}"></script>

</html>
