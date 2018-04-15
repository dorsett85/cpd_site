<?php ?>

<header id="headerDiv" class="d-flex justify-content-center align-items-center">
    <div>
        <div id="headerCpd" class="d-block p-3 font-weight-bold" data-aos="fade-down" data-aos-duration="1200">
            <span>Clayton Phillips-Dorsett</span>
        </div>
        <div id="headerText" class="d-block text-center">
            <div data-aos="zoom-out-right" data-aos-delay="1000" data-aos-duration="1500">
                <span id="visScroll" class="d-block p-1 headTxtHvr"><i
                            class="fas fa-chart-bar"></i> Visualization</span>
            </div>
            <div data-aos="zoom-out-left" data-aos-delay="1200" data-aos-duration="1500">
                <span id="webDevScroll" class="d-block p-1 headTxtHvr"><i class="fab fa-connectdevelop"></i> Web Development</span>
            </div>
            <div data-aos="zoom-out-right" data-aos-delay="1400" data-aos-duration="1500">
                <span id="dataScroll" class="d-block p-1 headTxtHvr"><i
                            class="far fa-file-code"></i> Data Programming</span>
            </div>
        </div>
    </div>
</header>


<div id="visDiv">

    <div class="pt-5 text-center sectionHead" data-aos="zoom-in-down">
        <span>Visualization</span>
    </div>

    <div class="p-3 text-center" data-aos="zoom-in">
        Extensive application providing insight to stakeholders through technical visualizations
    </div>

    <div id="stockChart" class="mx-auto w-75 p-4"></div>

    <div class="d-flex justify-content-center pb-4">
        <div class="w-25" data-aos="fade-down-right">
            <div class="p-3">Visualization output/reporting</div>
            <ul class="fa-ul pl-4">
                <li class="p-1">
                    <span class="fa-li"><i class="fas fa-cube"></i></span>Web application embedding
                </li>
                <li class="p-1">
                    <span class="fa-li"><i class="fas fa-cube"></i></span>R Markdown, ReportLab (Python)
                </li>
                <li class="p-1">
                    <span class="fa-li"><i class="fas fa-cube"></i></span>PDF, image type, MS Word, R Shiny
                </li>
            </ul>
        </div>
        <div class="w-25 pl-5" data-aos="fade-down-left">
            <div class="p-3">Plotting libraries</div>
            <ul class="fa-ul pl-4">
                <li class="p-1"><span class="fa-li"><i class="fas fa-cube"></i></span>highcharts.js (above)</li>
                <li class="p-1"><span class="fa-li"><i class="fas fa-cube"></i></span>R's ggplot2 (below)</li>
                <li class="p-1"><span class="fa-li"><i class="fas fa-cube"></i></span>plotly.js</li>
                <li class="p-1"><span class="fa-li"><i class="fas fa-cube"></i></span>Python's Matplotlib</li>
            </ul>
        </div>
    </div>

    <div class="d-flex justify-content-center pb-5">
        <img src="img/approval-plot.png" class="visImg mr-5" data-aos="fade-up-right" alt="approval-plot">
        <img src="img/submission-plot.png" class="visImg" data-aos="fade-up-left" alt="submission-plot">
    </div>

</div>


<div id="webDevDiv" class="text-white">

    <div class="pt-5 text-center sectionHead" data-aos="zoom-in-down">
        <span>Web Application</span>
    </div>

    <div class="mx-auto w-50 p-3 text-center" data-aos="zoom-in">
        Empower users to explore and model data with clean and simple UI/UX
    </div>

    <div class="d-flex justify-content-center pb-4">
        <div class="p-3" data-aos="flip-left" data-aos-duration="500">
            <a class="webDevAnchor text-center" href="http://stocktracker.cphillipsdorsett.com" target="_blank">
                <span class="d-block pb-2 contentText">Stock Tracker</span>
                <img src="img/stocktracker.png" class="webDevImg" alt="stock-tracker">
            </a>
        </div>
        <div class="p-3" data-aos="flip-left" data-aos-duration="500" data-aos-delay="200">
            <a class="webDevAnchor text-center" href="http://www.laughingdogsvt.com" target="_blank">
                <span class="d-block pb-2 contentText">Laughing Dogs VT</span>
                <img src="img/laughingdogs.png" class="webDevImg" alt="laughing-dogs">
            </a>
        </div>
        <div class="p-3" data-aos="flip-left" data-aos-duration="500" data-aos-delay="400">
            <a class="webDevAnchor text-center" href="http://pymodel.cphillipsdorsett.com" target="_blank">
                <span class="d-block pb-2 contentText">QuickModel</span>
                <img src="img/quickmodel.png" class="webDevImg" alt="quickmodel">
            </a>
        </div>
    </div>

    <div class="mx-auto w-50 p-3 pb-5" data-aos="zoom-out-down">
        <ul class="fa-ul">
            <li class="d-flex justify-content-between align-items-center">
                <div>
                    <span class="fa-li"><i class="fas fa-wrench"></i></span>Built with Laravel and Django
                </div>
                <div>
                    <img src="img/laravel-logo-9B01588B1F-seeklogo.com.png" class="techLogo pr-1" alt="laravel-logo">
                    <img src="img/django-logo-negative.svg" class="techLogo" alt="django-logo">
                </div>
            </li>
            <li>
                <span class="fa-li"><i class="fas fa-wrench"></i></span>Database ORM interaction
            </li>
            <li class="d-flex justify-content-between align-items-center">
                <div>
                    <span class="fa-li"><i class="fas fa-wrench"></i></span>Boostrap and jQuery front-end
                </div>
                <div>
                    <img src="img/bootstrap-solid.png" class="techLogo pr-1" alt="bootstrap-logo">
                    <img src="img/jQuery.png" class="techLogo" alt="jquery-logo">
                </div>
            </li>
        </ul>
    </div>

</div>


<div id="dataDiv">

    <div class="pt-5 text-center sectionHead" data-aos="zoom-in-down">
        <span>Data Programming</span>
    </div>

    <div class="mx-auto w-50 p-3 text-center" data-aos="zoom-in">
        Expertise in automated processing, data manipulation, analysis and reporting
    </div>

    <div class="d-flex justify-content-center p-3 pb-5">
        <video class="dataVid mr-3" width="500" autoplay loop data-aos="zoom-in-right">
            <source src="img/rstudio.mp4" type="video/mp4">
        </video>
        <video class="dataVid ml-3" width="500" autoplay loop data-aos="zoom-in-left">
            <source src="img/quickmodel-vid.mp4" type="video/mp4">
        </video>
    </div>

    <div class="mx-auto w-50 p-3 pb-5" data-aos="zoom-out-down">
        <ul class="fa-ul">
            <li class="d-flex justify-content-between align-items-center pb-1">
                <div>
                    <span class="fa-li"><i class="fas fa-check-square"></i></span>
                    Leverage your organization's time with optimized custom scripts
                </div>
                <div>
                    <img src="img/Rlogo.png" class="techLogo" alt="r-logo">
                </div>
            </li>
            <li class="d-flex justify-content-between align-items-center">
                <div>
                    <span class="fa-li"><i class="fas fa-check-square"></i></span>
                    Fetch, clean, analyze, and report your data with the click of a button
                </div>
                <div>
                    <img src="img/python-powered-w-200x80.png" class="techLogo" alt="python-logo">
                </div>
            </li>
        </ul>
    </div>

</div>


<div id="contactDiv" class="d-flex justify-content-center align-items-center">

    <div data-aos="zoom-in">
        <div class="text-center sectionHead" data-aos="zoom-in-down">
            <span>Clayton Phillips-Dorsett, 2018</span>
        </div>
        <div class="d-flex justify-content-between align-items-center pt-3">
            <div class="pl-5">claytonphillipsdorsett@gmail.com</div>
            <div class="pr-5">
                <a id="gitAnchor" href="http://www.github.com/dorsett85" target="_blank"><i class="fab fa-github"></i></a>
            </div>
        </div>
        <div class="pl-5">Cambridge, MA</div>
    </div>

</div>


