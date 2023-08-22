@extends('front.master')
@section('content')
    <div style="margin-bottom: 11vh;"></div>
    <!-- start about header  -->
    <section id="about-header">
        <!-- <div class="container"> -->
        <div class="row m-0 align-items-center h-100">
            <div class="col-md-6 shape1 text-start d-flex wow bounceInLeft">
                <h1 class="fs-2">WHAT STARTED AS A STRATEGIC VISION IN RYADH</h1>
            </div>
            <div class="box2 col-md-6 p-0 d-flex flex-column gap-5">
                <div class="shape2 text-end wow bounceInRight" data-wow-delay=".1s">
                    <h1 class="fs-3">HAS GROWN TO JEDDAH,</h1>
                </div>
                <div class="shape3 text-end wow bounceInRight" data-wow-delay=".2s">
                    <h1 class="fs-3">AND AL KHOBAR COVERING ALL SAUDI ARABIA</h1>
                </div>
            </div>
        </div>
        <!-- </div> -->
    </section>
    <!-- end about header  -->
    <!-- start about links -->
    <section id="about-links">
        <div class="container">
            <div class="row align-items-center justify-content-between gap-1">
                <div class="left-link col-md-9 d-flex flex-wrap gap-1">
                    <a href="#" class="text-uppercase btn rounded-0 hvr-fade wow fadeInUp" data-wow-delay=".1s">DATA CENTER & POWER</a>
                    <a href="#" class="text-uppercase btn rounded-0 hvr-fade wow fadeInUp" data-wow-delay=".2s">FIRE $ SECURITY</a>
                    <a href="#" class="text-uppercase btn rounded-0 hvr-fade wow fadeInUp" data-wow-delay=".3s">LOW CURRENT</a>
                    <a href="#" class="text-uppercase btn rounded-0 hvr-fade wow fadeInUp" data-wow-delay=".4s">AUTOMATION</a>
                    <a href="#" class="text-uppercase btn rounded-0 hvr-fade wow fadeInUp" data-wow-delay=".5s">MAINTENANCE</a>
                    <a href="#" class="text-uppercase btn rounded-0 hvr-fade wow fadeInUp" data-wow-delay=".6s">CABLES & CONNECTIVITY</a>
                </div>
                <div class="right-link col-md-2">
                    <a href="#" class="text-uppercase btn rounded-0 borderbtn btn-outline-light rounded-0 wow fadeInUp" data-wow-delay=".7s">DIGITAL
                        BROCHURE</a>
                </div>
            </div>
        </div>
    </section>
    <!-- end about links -->
    <!-- start JOURNEY section  -->
    <section id="journey">
        <div class="container">
            <div class="row gap-3 justify-content-center">
                <div class="img col-lg-6 p-lg-4 wow fadeInLeft">
                    <img src="{{ asset('front_assets/images/About3.jpeg')}}" class="w-100" alt="">
                </div>
                <div class="text col-lg-5 wow fadeInRight">
                    <!-- title  -->
                    <div class="title mb-3 wow fadeInDown">
                        <h3 class=" text-uppercase text-gray">OUR JOURNEY</h3>
                        <p class="bottom text-uppercase text-gray">COMMITTED TO DELIVERING THE HIGHEST IN QUALITY</p>
                        <div class="title-icon d-flex">
                            <div class="div pt-0 bg-beige"></div>
                            <div class="div bottom bg-beige"></div>
                        </div>
                    </div>
                    <!-- pars  -->
                    <p class="text-secondary lh-base mb-4" style="font-size: 14px;">Our journey began in 1994, we
                        evolved from pioneers in computer site
                        preparation to become expert system integrators, providing end-to-end turn-key solutions in Data
                        Centers & Power, Fire & Security, Command & Control centers, Low Current systems, Automation,
                        Maintenance and Networking.
                    </p>
                    <p class="text-secondary lh-base mb-4" style="font-size: 14px;">
                        In addition to customized solutions, we provide the Saudi market with stocks of cables,
                        batteries, cabinets, raised floors and other specialized products required in the development of
                        the Kingdom’s IT infrastructure.
                    </p>
                    <p class="text-secondary lh-base mb-4" style="font-size: 14px;">
                        Our highly qualified, experienced, and dedicated teams are the driving force behind the
                        transformation from a strategic vision in Riyadh, into a company with more than 400 employees,
                        with branches in Jeddah and Al Khobar, and a portfolio of clients across the length and breadth
                        of the Kingdom of Saudi Arabia. We are committed to the continued pursuit of excellence in the
                        industry; leveraging decades of experience, and constantly enhancing our solutions.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- end JOURNEY section  -->
    <!-- start JOURNEY section  -->
    <section id="journey">
        <div class="container">
            <div class="row gap-3 justify-content-center">
                <div class="img col-lg-6 p-lg-4 wow fadeInLeft">
                    <img src="{{ asset('front_assets/images/About5.jpeg')}}" class="w-100" alt="">
                </div>
                <div class="text col-lg-5 wow fadeInRight">
                    <!-- title  -->
                    <div class="title mb-3 wow fadeInDown">
                        <h3 class=" text-uppercase text-gray">OUR STRENGTH</h3>
                        <p class="bottom text-uppercase text-gray">WE BELIEVE THERE IS NO SUBSTITUTE FOR EXPERIENCE.</p>
                        <div class="title-icon d-flex">
                            <div class="div pt-0 bg-beige"></div>
                            <div class="div bottom bg-beige"></div>
                        </div>
                    </div>
                    <!-- pars  -->
                    <p class="text-secondary lh-base mb-4" style="font-size: 14px;">
                        Our three decades in the market, gave us in-depth and multi-discipline expertise, and strong
                        partnerships with tier-one vendors.
                    </p>
                    <p class="text-secondary lh-base mb-4 fst-italic" style="font-size: 14px; font-family: bold;">
                        We are proud to be a complete, end-to-end solution provider and system integrator, our services
                        rangi
                    </p>
                    <p class="text-secondary lh-base mb-4" style="font-size: 14px;">Our proficiency and expertise extend
                        to:</p>
                    <ul class="p-0 d-flex flex-column gap-2">
                        <li class="d-flex gap-2 text-secondary" style="font-size: 14px;">
                            <i class="fa fa-check text-beige mt-1"></i>
                            Data Center preparation, with all its related activities, including networking and
                            structured cabling
                        </li>
                        <li class="d-flex gap-2 text-secondary" style="font-size: 14px;">
                            <i class="fa fa-check text-beige mt-1"></i>
                            AC and DC power systems including standby Power Systems, Chargers, Batteries, Frequency
                            Converters, and Generators
                        </li>
                        <li class="d-flex gap-2 text-secondary" style="font-size: 14px;">
                            <i class="fa fa-check text-beige mt-1"></i>
                            Precision cooling systems and industrial HVAC systems
                        </li>
                        <li class="d-flex gap-2 text-secondary" style="font-size: 14px;">
                            <i class="fa fa-check text-beige mt-1"></i>
                            Fire resistant and instrumentation cables
                        </li>
                        <li class="d-flex gap-2 text-secondary" style="font-size: 14px;">
                            <i class="fa fa-check text-beige mt-1"></i>
                            Low current systems, including Fire Alarms, CCTVs, Access Control, Public Address Systems,
                            and MATV
                        </li>
                        <li class="d-flex gap-2 text-secondary" style="font-size: 14px;">
                            <i class="fa fa-check text-beige mt-1"></i>
                            Automation systems for both Industrial (SCADA), and residential (BMS)
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- end JOURNEY section  -->

    <!-- start VISION, MISSION  -->
    <section id="mission">
        <div class="container">
            <div class="row gap-5 justify-content-center">
                <!-- title  -->
                <div class="title text-center wow fadeInDown col-lg-5">
                    <h3 class=" text-uppercase text-gray">OUR VISION</h3>
                    <div class="title-icon d-flex my-4">
                        <div class="div pt-0 bg-beige"></div>
                        <div class="div bottom bg-beige"></div>
                    </div>
                    <p class="bottom text-uppercase text-secondary" style="font-size: 14px;">
                        WE ASPIRE TO BE ONE OF THE BEST TECHNOLOGY SUPPLIERS AND INTEGRATED SOLUTIONS PROVIDERS TO
                        ENABLE CLIENTS, END USERS & SUPPLIERS SUCCESS THROUGH OUR INSPIRING LEADERSHIP AND EMPOWERED
                        PEOPLE.
                    </p>

                </div>
                <div class="title text-center wow fadeInDown col-lg-5">
                    <h3 class=" text-uppercase text-gray">OUR MISSION</h3>
                    <div class="title-icon d-flex my-4">
                        <div class="div pt-0 bg-beige"></div>
                        <div class="div bottom bg-beige"></div>
                    </div>
                    <p class="bottom text-uppercase text-secondary" style="font-size: 14px;">
                        OUR MISSION IS TO ENABLE THE SUCCESS, SUSTAINABILITY, DIGITIZATION, CONNECTIVITY, SAFETY,
                        SECURITY & AUTOMATION NEEDS OF ORGANIZATIONS & FACILITIES ACROSS THE KINGDOM.
                    </p>

                </div>
            </div>
        </div>
    </section>
    <!-- end VISION, MISSION  -->
    <!-- start CHOOSE  -->
    <section id="choose">
        <div class="container">
            <!-- title  -->
            <div class="title text-center wow fadeInDown mx-auto mb-5" style="width: 95%;">
                <h3 class=" text-uppercase text-gray">WHY CHOOSE SETRA</h3>
                <div class="title-icon d-flex my-4">
                    <div class="div pt-0 bg-beige"></div>
                    <div class="div bottom bg-beige"></div>
                </div>
                <p class="bottom text-uppercase text-secondary">
                    OUR HIGHLY CAPABLE, TRUSTWORTHY, AND CERTIFIED TEAMS ARE COMMITTED TO DELIVERING OUR SOLUTIONS WITH
                    STRICT ADHERENCE TO THE HIGHEST STANDARDS IN QUALITY; AS PROMISED AND CONSISTENTLY ON SCHEDULE.
                </p>

            </div>
            <div class="row gap-3 justify-content-center">
                <div class="col-md-5 d-flex gap-2 text-secondary wow fadeInUp" data-wow-delay=".2s" style="font-size: 14px;">
                    <i class="fa fa-check text-beige mt-1"></i>
                    We offer certified, fully system-integrated, custom-designed and curated solutions
                </div>
                <div class="col-md-5 d-flex gap-2 text-secondary wow fadeInUp" data-wow-delay=".3s" style="font-size: 14px;">
                    <i class="fa fa-check text-beige mt-1"></i>
                    Our expertise across Healthcare, Banking, Telecommunications, Education, Hospitality, F&B, the
                    Public Sector, and more.
                </div>
                <div class="col-md-5 d-flex gap-2 text-secondary wow fadeInUp" data-wow-delay=".4s" style="font-size: 14px;">
                    <i class="fa fa-check text-beige mt-1"></i>

                    Our superior customer relationships, as well as high-end maintenance and field support services,
                    which are powered digitally, across all installed systems
                </div>
                <div class="col-md-5 d-flex gap-2 text-secondary wow fadeInUp" data-wow-delay=".5s" style="font-size: 14px;">
                    <i class="fa fa-check text-beige mt-1"></i>
                    Our qualified and internationally-certified teams.
                </div>
            </div>
        </div>
    </section>
    <!-- end CHOOSE  -->

    <!-- start partner second sliders  -->
    @include('front.parts.partner')

    <!-- end partner second sliders  -->
    <!-- start excellence  -->
    <section id="excellence">
        <div class="container text-center">
            <!-- title  -->
            <div class="title text-center mb-4 wow fadeInDown">
                <h3 class=" text-uppercase text-gray">A WORLD OF EXCELLENCE</h3>
                <p class="bottom text-uppercase text-gray">WE ARE ALWAYS HERE TO PROVIDE SOLUTIONS</p>
                <div class="title-icon d-flex">
                    <div class="div pt-0 bg-beige"></div>
                    <div class="div bottom bg-beige"></div>
                </div>
            </div>
            <p class="text-secondary fs-5 text-center mx-auto ex-p mb-4 wow fadeIn" data-wow-delay=".2s" style="line-height: 2; font-family: light;">
                Our certified professionals are more than glad to help and guide you through the design, installation,
                setup and working processes. Just drop a line and we will get back to you in no time.
            </p>
            <a href="{{ route('contact') }}" class="btn btn-block btn-outline-light rounded-0 wow fadeInUp" data-wow-dela=".2s" style="font-size: 14px;padding: 10px 15px;">CONTACT US</a>
        </div>
    </section>
    <!-- end excellence  -->
    <!-- start about download  -->
    <section id="about-down" class="bg-beige text-center py-5">
        <a href="#" class="btn btn-outline-danger border-2 rounded-0 wow fadeIn" data-wow-delay=".2s" style="padding: 10px 18px;">DOWNLOAD OUR CORPORATE BROCHURE</a>
    </section>
    <!-- end about download  -->
    <!-- start main contact  -->
@stop
