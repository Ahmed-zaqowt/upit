@extends('front.master')
   @section('content')
    <section id="maintenance-header" style="background: url({{ asset('front_assets/images/maintenenace.jpg') }}) no-repeat center center;">
        <div class="container d-flex align-items-center justify-content-center h-100">
            <h1 class="text-white text-center wow fadeIn" data-wow-delay=".2s">MAINTENANCE & FIELD SERVICES </h1>
        </div>
    </section>
    <!-- end maintenance header  -->
    <!-- start maintenance logo  -->
    <section id="maintenance-logo">
        <div class="container">
            <img src="{{asset('front_assets/images/maintenance-div-logo-2.png')}}" class="d-block m-auto wow fadeIn" data-wow-delay=".2s" width="211" height="69"
                alt="Maintenance Logo">
            <!-- title  -->
            <div class="title text-center wow fadeInDown">
                <h3 class=" text-uppercase text-gray mx-auto">OUR MAINTENANCE AND FIELD SERVICE UNIT PROVIDES
                    HIGH-QUALITY SERVICES TO MISSION CRITICAL FACILITIES ACROSS THE KINGDOM OF SAUDI ARABIA.
                </h3>
                <p class="bottom text-uppercase text-secondary">
                    WE MAINTAIN YOUR PEACE OF MIND
                </p>
                <div class="title-icon d-flex">
                    <div class="div pt-0 bg-beige"></div>
                    <div class="div bottom bg-beige"></div>
                </div>
            </div>
            <a href="#"
                class=" d-block text-uppercase btn rounded-0 border-2 btn btn-outline-light rounded-0 wow fadeInUp px-4 py-3 mx-auto my-3"
                style="font-size: 12px;width: fit-content;" data-wow-delay=".2s">DOWNLOAD BROCHURE
            </a>
            <ul class="p-0 d-flex flex-column gap-2 mx-auto my-4 wow fadeInLeft" style="width: fit-content;">
                <li class="d-flex gap-2 text-secondary" style="font-size: 14px;">
                    <i class="fa fa-check text-danger mt-1"></i>
                    Uptime Institute Accredited Data Center Specialists
                </li>
                <li class="d-flex gap-2 text-secondary" style="font-size: 14px;">
                    <i class="fa fa-check text-danger mt-1"></i>
                    Over 80 Trained Engineers & Technicians
                </li>
                <li class="d-flex gap-2 text-secondary" style="font-size: 14px;">
                    <i class="fa fa-check text-danger mt-1"></i>
                    Experts in Preventive and Corrective Maintenance for Mission Critical Systems
                </li>
                <li class="d-flex gap-2 text-secondary" style="font-size: 14px;">
                    <i class="fa fa-check text-danger mt-1"></i>
                    Vendor-Certified After-Sale Services
                </li>
                <li class="d-flex gap-2 text-secondary" style="font-size: 14px;">
                    <i class="fa fa-check text-danger mt-1"></i>
                    Saudi Civil Defense Certified for Fire Alarm System Services
                </li>
                <li class="d-flex gap-2 text-secondary" style="font-size: 14px;">
                    <i class="fa fa-check text-danger mt-1"></i>
                    Proven Record in various industries: banking, healthcare, hospitality, food and beverage, education,
                    telecommunication and public sector
                </li>
                <li class="d-flex gap-2 text-secondary" style="font-size: 14px;">
                    <i class="fa fa-check text-danger mt-1"></i>
                    Digital Platform for Service Delivery (Salesforce Field Service Software)
                </li>
            </ul>
            <a href="{{ route('contact') }}"
                class=" d-block text-uppercase btn rounded-0 border-2 btn btn-outline-light rounded-0 wow fadeInUp px-4 py-3 mx-auto my-3"
                style="font-size: 12px;width: fit-content;" data-wow-delay=".2s">CONTACT US
            </a>
        </div>
    </section>
    <!-- end maintenance logo  -->
    <!-- start POWER SYSTEMS MAINTENANCE section  -->
    <section id="journey">
        <div class="container">
            <div class="row gap-3 justify-content-center">
                <div class="img col-lg-6 p-lg-4 wow fadeInLeft">
                    <img src="{{ asset('front_assets/images/Batteries-Arbsat-4.jpg') }}" class="w-100 object-fit-cover" alt="">
                </div>
                <div class="text col-lg-5 wow fadeInRight">
                    <!-- title  -->
                    <div class="title mb-3 wow fadeInDown">
                        <h3 class=" text-uppercase fs-4 text-gray">POWER SYSTEMS MAINTENANCE</h3>
                        <div class="title-icon d-flex">
                            <div class="div pt-0 bg-beige"></div>
                            <div class="div bottom bg-beige"></div>
                        </div>
                    </div>
                    <!-- pars  -->
                    <p class="text-secondary lh-base mb-4" style="font-size: 14px;">
                        Planned and routine maintenance is essential to prolonging the life of your power systems and to
                        ensure you have power when you need it most. Our services include:
                    </p>
                    <ul class="p-0 d-flex flex-column gap-3">
                        <li class="d-flex gap-2 text-secondary" style="font-size: 14px;">
                            <i class="fa fa-check text-beige mt-1"></i>
                            UPS & UPS Battery Preventive Maintenance
                        </li>
                        <li class="d-flex gap-2 text-secondary" style="font-size: 14px;">
                            <i class="fa fa-check text-beige mt-1"></i>
                            Full Generator Service
                        </li>
                        <li class="d-flex gap-2 text-secondary" style="font-size: 14px;">
                            <i class="fa fa-check text-beige mt-1"></i>
                            Oil and Fuel filters change
                        </li>
                        <li class="d-flex gap-2 text-secondary" style="font-size: 14px;">
                            <i class="fa fa-check text-beige mt-1"></i>
                            Electrical systems testing
                        </li>
                        <li class="d-flex gap-2 text-secondary" style="font-size: 14px;">
                            <i class="fa fa-check text-beige mt-1"></i>
                            Coolant testing and treatment
                        </li>
                        <li class="d-flex gap-2 text-secondary" style="font-size: 14px;">
                            <i class="fa fa-check text-beige mt-1"></i>
                            Fuel/Oil analysis and fuel tank care
                        </li>
                        <li class="d-flex gap-2 text-secondary" style="font-size: 14px;">
                            <i class="fa fa-check text-beige mt-1"></i>
                            Fuel/Oil analysis and fuel tank care
                        </li>
                        <li class="d-flex gap-2 text-secondary" style="font-size: 14px;">
                            <i class="fa fa-check text-beige mt-1"></i>
                            Fuel/Oil analysis and fuel tank care
                        </li>
                        <li class="d-flex gap-2 text-secondary" style="font-size: 14px;">
                            <i class="fa fa-check text-beige mt-1"></i>
                            Fuel/Oil analysis and fuel tank care
                        </li>
                        <li class="d-flex gap-2 text-secondary" style="font-size: 14px;">
                            <i class="fa fa-check text-beige mt-1"></i>
                            Fuel/Oil analysis and fuel tank care
                        </li>
                        <li class="d-flex gap-2 text-secondary" style="font-size: 14px;">
                            <i class="fa fa-check text-beige mt-1"></i>
                            Fuel/Oil analysis and fuel tank care
                        </li>
                    </ul>
                    <p class="text-secondary lh-base mb-4" style="font-size: 14px;">
                        Following each preventive maintenance inspection, SETRA will provide a detailed Field Service
                        Report that includes the status of your power supply and batteries in accordance with
                        manufacturer specifications.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- end POWER SYSTEMS MAINTENANCE section  -->
    <!-- start BATTERY REPLACEMENT & SERVICE section  -->
    <section id="journey">
        <div class="container">
            <div class="row gap-3 justify-content-center">
                <div class="img col-lg-6 p-lg-4 wow fadeInLeft">
                    <img src="{{ asset('front_assets/images/pic5-maintenance-scaled-1000x210.jpg') }}" height="160" class="w-100 object-fit-cover"
                        alt="">
                    <ul class="p-0 d-flex flex-column gap-2 mt-4">
                        <li class="d-flex gap-2 text-secondary" style="font-size: 14px;">
                            <i class="fa fa-check text-beige mt-1"></i>
                            Testing carried out using proven industry leading equipment
                        </li>
                        <li class="d-flex gap-2 text-secondary" style="font-size: 14px;">
                            <i class="fa fa-check text-beige mt-1"></i>
                            Data collection for detailed analysis and report generation
                        </li>
                        <li class="d-flex gap-2 text-secondary" style="font-size: 14px;">
                            <i class="fa fa-check text-beige mt-1"></i>
                            Early identification of battery deterioration
                        </li>
                        <li class="d-flex gap-2 text-secondary" style="font-size: 14px;">
                            <i class="fa fa-check text-beige mt-1"></i>
                            Detailed reporting of cell float voltage, internal cell resistance and inter-cell connection
                            resistance
                        </li>
                    </ul>
                </div>
                <div class="text col-lg-5 wow fadeInRight">
                    <!-- title  -->
                    <div class="title mb-3 wow fadeInDown">
                        <h3 class=" text-uppercase fs-4 text-gray">BATTERY REPLACEMENT & SERVICE</h3>
                        <div class="title-icon d-flex">
                            <div class="div pt-0 bg-beige"></div>
                            <div class="div bottom bg-beige"></div>
                        </div>
                    </div>
                    <!-- pars  -->
                    <p class="text-secondary lh-base mb-4" style="font-size: 14px;">
                        With readily available stocks from such reputed brands as Exide, C&D, Leoch and others our
                        battery maintenance scheme includes diagnostics such as:
                    </p>

                    <ul class="p-0 d-flex flex-column gap-2">
                        <li class="d-flex gap-2 text-secondary" style="font-size: 14px;">
                            <i class="fa fa-check text-beige mt-1"></i>
                            Visual inspection of all batteries, terminals, and connectors for visible signs of damage
                            and corrosion
                        </li>
                        <li class="d-flex gap-2 text-secondary" style="font-size: 14px;">
                            <i class="fa fa-check text-beige mt-1"></i>
                            Thermal imaging of the battery installation to identify hotspots and faulty connections.
                        </li>
                        <li class="d-flex gap-2 text-secondary" style="font-size: 14px;">
                            <i class="fa fa-check text-beige mt-1"></i>
                            Recording of float and open circuit cell and string voltages
                        </li>
                        <li class="d-flex gap-2 text-secondary" style="font-size: 14px;">
                            <i class="fa fa-check text-beige mt-1"></i>
                            Recording of ambient battery room temperatures
                        </li>
                        <li class="d-flex gap-2 text-secondary" style="font-size: 14px;">
                            <i class="fa fa-check text-beige mt-1"></i>
                            Checks of all battery connector torque settings.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- end BATTERY REPLACEMENT & SERVICE section  -->
    <!-- start HVAC AND CRAC MAINTENANCE section  -->
    <section id="journey">
        <div class="container">
            <div class="row gap-3 justify-content-center">
                <div class="img col-lg-6 p-lg-4 wow fadeInLeft">
                    <img src="{{ asset('front_assets/images/pic7-maintenance-2048x1259.jpg') }}" height="400" class="w-100 object-fit-cover" alt="">
                </div>
                <div class="text col-lg-5 wow fadeInRight">
                    <!-- title  -->
                    <div class="title mb-3 wow fadeInDown">
                        <h3 class=" text-uppercase fs-4 text-gray">HVAC AND CRAC MAINTENANCE</h3>
                        <div class="title-icon d-flex">
                            <div class="div pt-0 bg-beige"></div>
                            <div class="div bottom bg-beige"></div>
                        </div>
                    </div>
                    <!-- pars  -->
                    <p class="text-secondary lh-base mb-4" style="font-size: 14px;">
                        Computer room air conditioning (CRAC) systems are an essential component of a functional data
                        center or server room. Maintenance of CRAC Units cannot be disregarded when it comes to keeping
                        your business-critical systems operational uninterruptedly. Our services include:
                    </p>
                    <ul class="p-0 d-flex flex-column gap-3">
                        <li class="d-flex gap-2 text-secondary" style="font-size: 14px;">
                            <i class="fa fa-check text-beige mt-1"></i>
                            Air Filters
                        </li>
                        <li class="d-flex gap-2 text-secondary" style="font-size: 14px;">
                            <i class="fa fa-check text-beige mt-1"></i>
                            Mechanical components
                        </li>
                        <li class="d-flex gap-2 text-secondary" style="font-size: 14px;">
                            <i class="fa fa-check text-beige mt-1"></i>
                            Refrigerant levels
                        </li>
                        <li class="d-flex gap-2 text-secondary" style="font-size: 14px;">
                            <i class="fa fa-check text-beige mt-1"></i>
                            Electrical systems testing
                        </li>
                        <li class="d-flex gap-2 text-secondary" style="font-size: 14px;">
                            <i class="fa fa-check text-beige mt-1"></i>
                            Compressors
                        </li>
                        <li class="d-flex gap-2 text-secondary" style="font-size: 14px;">
                            <i class="fa fa-check text-beige mt-1"></i>
                            Coils
                        </li>
                        <li class="d-flex gap-2 text-secondary" style="font-size: 14px;">
                            <i class="fa fa-check text-beige mt-1"></i>
                            lectrical Testing
                        </li>
                    </ul>
                    <p class="text-secondary lh-base mb-4" style="font-size: 14px;">
                        SETRA is the sole distributor of UK made Airedale precision cooling solutions in Saudi Arabia
                        and our engineers are trained and certified by Airedale to carry out preventive and corrective
                        maintenance for Airedale equipment.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- end HVAC AND CRAC MAINTENANCE section  -->
    <!-- start LOW CURRENT SYSTEMS MAINTENANCE section  -->
    <section id="journey">
        <div class="container">
            <div class="row gap-3 justify-content-center">
                <div class="img col-lg-6 p-lg-4 wow fadeInLeft">
                    <img src="{{asset('front_assets/images/Fire-system-2-2048x1521.jpg')}}" height="450" class="w-100 object-fit-cover mb-4"
                        alt="">
                    <img src="{{asset('front_assets/images/pic6-maintenance-scaled.jpg')}}" height="450" class="w-100 object-fit-cover" alt="">
                </div>
                <div class="text col-lg-5 wow fadeInRight">
                    <!-- title  -->
                    <div class="title mb-3 wow fadeInDown">
                        <h3 class=" text-uppercase fs-4 text-gray">LOW CURRENT SYSTEMS MAINTENANCE</h3>
                        <div class="title-icon d-flex">
                            <div class="div pt-0 bg-beige"></div>
                            <div class="div bottom bg-beige"></div>
                        </div>
                    </div>
                    <!-- pars  -->
                    <p class="text-secondary lh-base mb-4" style="font-size: 14px;">
                        Routine testing and diagnostics of Low Current systems aim to prevent system failures and
                        maintain continuous and faultless functioning over the lifetime of the system.
                    </p>
                    <p class="text-secondary lh-base mb-2 mt-4" style="font-size: 14px; font-family: bold;">
                        Systems we maintain:
                    </p>
                    <ul class="p-0 d-flex flex-column gap-3">
                        <li class="d-flex gap-2 text-secondary" style="font-size: 14px;">
                            <i class="fa fa-check text-beige mt-1"></i>
                            Fire Alarm and Suppression Systems
                        </li>
                        <li class="d-flex gap-2 text-secondary" style="font-size: 14px;">
                            <i class="fa fa-check text-beige mt-1"></i>
                            Environmental Monitoring Systems
                        </li>
                        <li class="d-flex gap-2 text-secondary" style="font-size: 14px;">
                            <i class="fa fa-check text-beige mt-1"></i>
                            Access Control Systems
                        </li>
                        <li class="d-flex gap-2 text-secondary" style="font-size: 14px;">
                            <i class="fa fa-check text-beige mt-1"></i>
                            Video Surveillance Systems
                        </li>
                        <li class="d-flex gap-2 text-secondary" style="font-size: 14px;">
                            <i class="fa fa-check text-beige mt-1"></i>
                            Water Leak Detection Systems
                        </li>
                        <li class="d-flex gap-2 text-secondary" style="font-size: 14px;">
                            <i class="fa fa-check text-beige mt-1"></i>
                            Smoke Detection Systems
                        </li>
                        <li class="d-flex gap-2 text-secondary" style="font-size: 14px;">
                            <i class="fa fa-check text-beige mt-1"></i>
                            Chart Recorders (Temperature, Humidity and Pressure)
                        </li>
                        <li class="d-flex gap-2 text-secondary" style="font-size: 14px;">
                            <i class="fa fa-check text-beige mt-1"></i>
                            Emergency Light System
                        </li>
                        <li class="d-flex gap-2 text-secondary" style="font-size: 14px;">
                            <i class="fa fa-check text-beige mt-1"></i>
                            Building Management Systems
                        </li>
                    </ul>
                    <p class="text-secondary lh-base mb-2 mt-4" style="font-size: 14px; font-family: bold;">
                        The services we provide are:
                    </p>
                    <ul class="p-0 d-flex flex-column gap-3">
                        <li class="d-flex gap-2 text-secondary" style="font-size: 14px;">
                            <i class="fa fa-check text-beige mt-1"></i>
                            Fire Alarm and Suppression Systems
                        </li>
                        <li class="d-flex gap-2 text-secondary" style="font-size: 14px;">
                            <i class="fa fa-check text-beige mt-1"></i>
                            Environmental Monitoring Systems
                        </li>
                        <li class="d-flex gap-2 text-secondary" style="font-size: 14px;">
                            <i class="fa fa-check text-beige mt-1"></i>
                            Access Control Systems
                        </li>
                        <li class="d-flex gap-2 text-secondary" style="font-size: 14px;">
                            <i class="fa fa-check text-beige mt-1"></i>
                            Video Surveillance Systems
                        </li>
                        <li class="d-flex gap-2 text-secondary" style="font-size: 14px;">
                            <i class="fa fa-check text-beige mt-1"></i>
                            Water Leak Detection Systems
                        </li>
                        <li class="d-flex gap-2 text-secondary" style="font-size: 14px;">
                            <i class="fa fa-check text-beige mt-1"></i>
                            Smoke Detection Systems
                        </li>
                        <li class="d-flex gap-2 text-secondary" style="font-size: 14px;">
                            <i class="fa fa-check text-beige mt-1"></i>
                            Chart Recorders (Temperature, Humidity and Pressure)
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </section>
    <!-- end LOW CURRENT SYSTEMS MAINTENANCE section  -->
    <!-- start DATA CENTER CLEANING SERVICES section  -->
    <section id="journey">
        <div class="container">
            <div class="row gap-3 justify-content-center">
                <div class="img col-lg-6 p-lg-4 wow fadeInLeft">
                    <img src="{{asset('front_assets/images/data-center-pic-2-2048x967.jpg')}}" height="300" class="w-100 object-fit-cover" alt="">
                </div>
                <div class="text col-lg-5 wow fadeInRight">
                    <!-- title  -->
                    <div class="title mb-3 wow fadeInDown">
                        <h3 class=" text-uppercase fs-4 text-gray">DATA CENTER CLEANING SERVICES</h3>
                        <div class="title-icon d-flex">
                            <div class="div pt-0 bg-beige"></div>
                            <div class="div bottom bg-beige"></div>
                        </div>
                    </div>
                    <!-- pars  -->
                    <p class="text-secondary lh-base mb-4" style="font-size: 14px;">
                        Data center dust and contamination can cause equipment overheating, corrosion damage, electrical
                        and mechanical failure. By keeping your data center clean and removing contaminants regularly,
                        server room operators can protect their spaces from equipment damage and loss of up time. Our
                        services include:
                    </p>
                    <ul class="p-0 d-flex flex-column gap-2">
                        <li class="d-flex gap-2 text-secondary" style="font-size: 14px;">
                            <i class="fa fa-check text-beige mt-1"></i>
                            Air Filters
                        </li>
                        <li class="d-flex gap-2 text-secondary" style="font-size: 14px;">
                            <i class="fa fa-check text-beige mt-1"></i>
                            Mechanical components
                        </li>
                        <li class="d-flex gap-2 text-secondary" style="font-size: 14px;">
                            <i class="fa fa-check text-beige mt-1"></i>
                            Refrigerant levels
                        </li>
                        <li class="d-flex gap-2 text-secondary" style="font-size: 14px;">
                            <i class="fa fa-check text-beige mt-1"></i>
                            Electrical systems testing
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </section>
    <!-- end DATA CENTER CLEANING SERVICES section  -->

    <!-- start excellence  -->
    <section id="excellence">
        <div class="container text-center">
            <!-- title  -->
            <div class="title text-center mb-5 wow fadeInDown">
                <h3 class=" text-uppercase text-gray mb-3">WE MAINTAIN YOUR PEACE OF MIND</h3>
                <div class="title-icon d-flex">
                    <div class="div pt-0 bg-beige"></div>
                    <div class="div bottom bg-beige"></div>
                </div>
            </div>
            <p class="text-secondary fs-5 text-center mx-auto ex-p mb-4 wow fadeIn" data-wow-delay=".2s"
                style="line-height: 2; font-family: light;">
                Our Maintenance Contracts are tailor-made for your budget and technical requirements. Our service sales
                teams are professional and extremely knowledgeable in your needs. Get the required maintenance your
                mission-critical system needs so that it will perform as planned with maximum efficiency and
                performance. We provide full operation services for your whole data center infrastructure.
            </p>
            <a href="{{ route('contact') }}"
                class=" d-block text-uppercase btn rounded-0 border-2 btn btn-outline-light rounded-0 wow fadeInUp px-4 py-3 mx-auto my-5"
                style="font-size: 12px;width: fit-content;" data-wow-delay=".2s">CONTACT US
            </a>
        </div>
    </section>
    <!-- end excellence  -->
    <!-- start about download  -->
    <section id="about-down" class="bg-beige text-center py-5">
        <a href="#" class="btn btn-outline-danger border-2 rounded-0 wow fadeIn" data-wow-delay=".2s"
            style="padding: 10px 18px;">DOWNLOAD OUR CORPORATE BROCHURE</a>
    </section>
    <!-- end about download  -->
    <!-- start main contact  -->
    @stop
