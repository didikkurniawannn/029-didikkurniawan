<div>
@section('title')
Modul Aplikasi
@stop
@section('menu')
<b>Dashboard</b>
@stop
<div class="row gx-5 gx-xl-10">
    <!--begin::Col-->
    <div class="col-xl-4 mb-10">

        <!--begin::Lists Widget 19-->
        <div class="card card-flush h-xl-100">
            <!--begin::Heading-->
            <div class="card-header rounded bgi-no-repeat bgi-size-cover bgi-position-y-top bgi-position-x-center align-items-start h-250px"
                style="background-image:url('{{ asset('backend/themes/assets/media/svg/shapes/top-green.png') }}')"
                data-bs-theme="light">
                <!--begin::Title-->
                <h3 class="card-title align-items-start flex-column text-white pt-15">
                    <span class="fw-bold fs-2x mb-3">My Tasks</span>

                    <div class="fs-4 text-white">
                        <span class="opacity-75">You have</span>

                        <span class="position-relative d-inline-block">
                            <a href="/metronic8/demo63/pages/user-profile/projects.html"
                                class="link-white opacity-75-hover fw-bold d-block mb-1">4 tasks</a>

                            <!--begin::Separator-->
                            <span
                                class="position-absolute opacity-50 bottom-0 start-0 border-2 border-body border-bottom w-100"></span>
                            <!--end::Separator-->
                        </span>

                        <span class="opacity-75">to comlete</span>
                    </div>
                </h3>
                <!--end::Title-->

                <!--begin::Toolbar-->
                <div class="card-toolbar pt-5">
                    <!--begin::Menu-->
                    <button
                        class="btn btn-sm btn-icon btn-active-color-primary btn-color-white bg-white bg-opacity-25 bg-hover-opacity-100 bg-hover-white bg-active-opacity-25 w-20px h-20px"
                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">

                        <i class="ki-outline ki-dots-square fs-4"></i>
                    </button>


                    <!--begin::Menu 2-->
                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                        data-kt-menu="true">
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">Quick Actions</div>
                        </div>
                        <!--end::Menu item-->

                        <!--begin::Menu separator-->
                        <div class="separator mb-3 opacity-75"></div>
                        <!--end::Menu separator-->

                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link px-3">
                                New Ticket
                            </a>
                        </div>
                        <!--end::Menu item-->

                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link px-3">
                                New Customer
                            </a>
                        </div>
                        <!--end::Menu item-->

                        <!--begin::Menu item-->
                        <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                            <!--begin::Menu item-->
                            <a href="#" class="menu-link px-3">
                                <span class="menu-title">New Group</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <!--end::Menu item-->

                            <!--begin::Menu sub-->
                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">
                                        Admin Group
                                    </a>
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">
                                        Staff Group
                                    </a>
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">
                                        Member Group
                                    </a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu sub-->
                        </div>
                        <!--end::Menu item-->

                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link px-3">
                                New Contact
                            </a>
                        </div>
                        <!--end::Menu item-->

                        <!--begin::Menu separator-->
                        <div class="separator mt-3 opacity-75"></div>
                        <!--end::Menu separator-->

                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <div class="menu-content px-3 py-3">
                                <a class="btn btn-primary  btn-sm px-4" href="#">
                                    Generate Reports
                                </a>
                            </div>
                        </div>
                        <!--end::Menu item-->
                    </div>
                    <!--end::Menu 2-->

                    <!--end::Menu-->
                </div>
                <!--end::Toolbar-->
            </div>
            <!--end::Heading-->

            <!--begin::Body-->
            <div class="card-body mt-n20">
                <!--begin::Stats-->
                <div class="mt-n20 position-relative">
                    <!--begin::Row-->
                    <div class="row g-3 g-lg-6">
                        <!--begin::Col-->
                        <div class="col-6">
                            <!--begin::Items-->
                            <div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-30px me-5 mb-8">
                                    <span class="symbol-label">
                                        <i class="ki-outline ki-flask fs-1 text-primary"></i>
                                    </span>
                                </div>
                                <!--end::Symbol-->

                                <!--begin::Stats-->
                                <div class="m-0">
                                    <!--begin::Number-->
                                    <span class="text-gray-700 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1">37</span>
                                    <!--end::Number-->

                                    <!--begin::Desc-->
                                    <span class="text-gray-500 fw-semibold fs-6">Courses</span>
                                    <!--end::Desc-->
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::Items-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-6">
                            <!--begin::Items-->
                            <div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-30px me-5 mb-8">
                                    <span class="symbol-label">
                                        <i class="ki-outline ki-bank fs-1 text-primary"></i>
                                    </span>
                                </div>
                                <!--end::Symbol-->

                                <!--begin::Stats-->
                                <div class="m-0">
                                    <!--begin::Number-->
                                    <span class="text-gray-700 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1">6</span>
                                    <!--end::Number-->

                                    <!--begin::Desc-->
                                    <span class="text-gray-500 fw-semibold fs-6">Certificates</span>
                                    <!--end::Desc-->
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::Items-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-6">
                            <!--begin::Items-->
                            <div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-30px me-5 mb-8">
                                    <span class="symbol-label">
                                        <i class="ki-outline ki-award fs-1 text-primary"></i>
                                    </span>
                                </div>
                                <!--end::Symbol-->

                                <!--begin::Stats-->
                                <div class="m-0">
                                    <!--begin::Number-->
                                    <span class="text-gray-700 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1">4,7</span>
                                    <!--end::Number-->

                                    <!--begin::Desc-->
                                    <span class="text-gray-500 fw-semibold fs-6">Avg. Score</span>
                                    <!--end::Desc-->
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::Items-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-6">
                            <!--begin::Items-->
                            <div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-30px me-5 mb-8">
                                    <span class="symbol-label">
                                        <i class="ki-outline ki-timer fs-1 text-primary"></i>
                                    </span>
                                </div>
                                <!--end::Symbol-->

                                <!--begin::Stats-->
                                <div class="m-0">
                                    <!--begin::Number-->
                                    <span class="text-gray-700 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1">822</span>
                                    <!--end::Number-->

                                    <!--begin::Desc-->
                                    <span class="text-gray-500 fw-semibold fs-6">Hours Learned</span>
                                    <!--end::Desc-->
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::Items-->
                        </div>
                        <!--end::Col-->

                    </div>
                    <!--end::Row-->
                </div>
                <!--end::Stats-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::Lists Widget 19-->
    </div>
    <!--end::Col-->

    <!--begin::Col-->
    <div class="col-xl-8 mb-10">
        <!--begin::Row-->
        <div class="row g-5 g-xl-10">
            <!--begin::Col-->
            <div class="col-xl-6 mb-xl-10">


                <!--begin::Slider Widget 1-->
                <div id="kt_sliders_widget_1_slider"
                    class="card card-flush carousel carousel-custom carousel-stretch slide h-xl-100"
                    data-bs-ride="carousel" data-bs-interval="5000">
                    <!--begin::Header-->
                    <div class="card-header pt-5">
                        <!--begin::Title-->
                        <h4 class="card-title d-flex align-items-start flex-column">
                            <span class="card-label fw-bold text-gray-800">Today’s Course</span>
                            <span class="text-gray-500 mt-1 fw-bold fs-7">4 lessons, 3 hours 45 minutes</span>
                        </h4>
                        <!--end::Title-->

                        <!--begin::Toolbar-->
                        <div class="card-toolbar">
                            <!--begin::Carousel Indicators-->
                            <ol
                                class="p-0 m-0 carousel-indicators carousel-indicators-bullet carousel-indicators-active-primary">
                                <li data-bs-target="#kt_sliders_widget_1_slider" data-bs-slide-to="0" class="ms-1"></li>
                                <li data-bs-target="#kt_sliders_widget_1_slider" data-bs-slide-to="1" class="ms-1"></li>
                                <li data-bs-target="#kt_sliders_widget_1_slider" data-bs-slide-to="2"
                                    class="ms-1 active" aria-current="true"></li>

                            </ol>
                            <!--end::Carousel Indicators-->
                        </div>
                        <!--end::Toolbar-->
                    </div>
                    <!--end::Header-->

                    <!--begin::Body-->
                    <div class="card-body py-6">
                        <!--begin::Carousel-->
                        <div class="carousel-inner mt-n5">
                            <!--begin::Item-->
                            <div class="carousel-item show">
                                <!--begin::Wrapper-->
                                <div class="d-flex align-items-center mb-5">
                                    <!--begin::Chart-->
                                    <div class="w-80px flex-shrink-0 me-2">
                                        <div class="min-h-auto ms-n3 initialized" id="kt_slider_widget_1_chart_1"
                                            style="height: 100px; min-height: 100px;">
                                            <div id="apexcharts8bzsjtnz" class="apexcharts-canvas apexcharts8bzsjtnz"
                                                style="width: 0px; height: 100px;"><svg id="SvgjsSvg1351" width="0"
                                                    height="100" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg"
                                                    xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                    style="background: transparent;">
                                                    <foreignObject x="0" y="0" width="0" height="100">
                                                        <div class="apexcharts-legend"
                                                            xmlns="http://www.w3.org/1999/xhtml"></div>
                                                    </foreignObject>
                                                    <g id="SvgjsG1353" class="apexcharts-inner apexcharts-graphical">
                                                        <defs id="SvgjsDefs1352"></defs>
                                                    </g>
                                                </svg></div>
                                        </div>
                                    </div>
                                    <!--end::Chart-->

                                    <!--begin::Info-->
                                    <div class="m-0">
                                        <!--begin::Subtitle-->
                                        <h4 class="fw-bold text-gray-800 mb-3">Ruby on Rails</h4>
                                        <!--end::Subtitle-->

                                        <!--begin::Items-->
                                        <div class="d-flex d-grid gap-5">
                                            <!--begin::Item-->
                                            <div class="d-flex flex-column flex-shrink-0 me-4">
                                                <!--begin::Section-->
                                                <span class="d-flex align-items-center fs-7 fw-bold text-gray-500 mb-2">
                                                    <i class="ki-outline ki-right-square fs-6 text-gray-600 me-2"></i> 3
                                                    Topics
                                                </span>
                                                <!--end::Section-->

                                                <!--begin::Section-->
                                                <span class="d-flex align-items-center text-gray-500 fw-bold fs-7">
                                                    <i class="ki-outline ki-right-square fs-6 text-gray-600 me-2"></i> 1
                                                    Speakers
                                                </span>
                                                <!--end::Section-->
                                            </div>
                                            <!--end::Item-->

                                            <!--begin::Item-->
                                            <div class="d-flex flex-column flex-shrink-0">
                                                <!--begin::Section-->
                                                <span class="d-flex align-items-center fs-7 fw-bold text-gray-500 mb-2">
                                                    <i class="ki-outline ki-right-square fs-6 text-gray-600 me-2"></i>
                                                    50 Min
                                                </span>
                                                <!--end::Section-->

                                                <!--begin::Section-->
                                                <span class="d-flex align-items-center text-gray-500 fw-bold fs-7">
                                                    <i class="ki-outline ki-right-square fs-6 text-gray-600 me-2"></i>
                                                    72 students
                                                </span>
                                                <!--end::Section-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Items-->
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::Wrapper-->

                                <!--begin::Action-->
                                <div class="m-0">
                                    <a href="#" class="btn btn-sm btn-light me-2 mb-2">Skip This</a>

                                    <a href="#" class="btn btn-sm btn-primary mb-2" data-bs-toggle="modal"
                                        data-bs-target="#kt_modal_create_app">Continue</a>
                                </div>
                                <!--end::Action-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="carousel-item">
                                <!--begin::Wrapper-->
                                <div class="d-flex align-items-center mb-5">
                                    <!--begin::Chart-->
                                    <div class="w-80px flex-shrink-0 me-2">
                                        <div class="min-h-auto ms-n3 initialized" id="kt_slider_widget_1_chart_2"
                                            style="height: 100px; min-height: 100px;">
                                            <div id="apexchartsfh6olrwnj" class="apexcharts-canvas apexchartsfh6olrwnj"
                                                style="width: 0px; height: 100px;"><svg id="SvgjsSvg1371" width="0"
                                                    height="100" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg"
                                                    xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                    style="background: transparent;">
                                                    <foreignObject x="0" y="0" width="0" height="100">
                                                        <div class="apexcharts-legend"
                                                            xmlns="http://www.w3.org/1999/xhtml"></div>
                                                    </foreignObject>
                                                    <g id="SvgjsG1373" class="apexcharts-inner apexcharts-graphical">
                                                        <defs id="SvgjsDefs1372"></defs>
                                                    </g>
                                                </svg></div>
                                        </div>
                                    </div>
                                    <!--end::Chart-->

                                    <!--begin::Info-->
                                    <div class="m-0">
                                        <!--begin::Subtitle-->
                                        <h4 class="fw-bold text-gray-800 mb-3">Ruby on Rails</h4>
                                        <!--end::Subtitle-->

                                        <!--begin::Items-->
                                        <div class="d-flex d-grid gap-5">
                                            <!--begin::Item-->
                                            <div class="d-flex flex-column flex-shrink-0 me-4">
                                                <!--begin::Section-->
                                                <span class="d-flex align-items-center fs-7 fw-bold text-gray-500 mb-2">
                                                    <i class="ki-outline ki-right-square fs-6 text-gray-600 me-2"></i> 3
                                                    Topics
                                                </span>
                                                <!--end::Section-->

                                                <!--begin::Section-->
                                                <span class="d-flex align-items-center text-gray-500 fw-bold fs-7">
                                                    <i class="ki-outline ki-right-square fs-6 text-gray-600 me-2"></i> 1
                                                    Speakers
                                                </span>
                                                <!--end::Section-->
                                            </div>
                                            <!--end::Item-->

                                            <!--begin::Item-->
                                            <div class="d-flex flex-column flex-shrink-0">
                                                <!--begin::Section-->
                                                <span class="d-flex align-items-center fs-7 fw-bold text-gray-500 mb-2">
                                                    <i class="ki-outline ki-right-square fs-6 text-gray-600 me-2"></i>
                                                    50 Min
                                                </span>
                                                <!--end::Section-->

                                                <!--begin::Section-->
                                                <span class="d-flex align-items-center text-gray-500 fw-bold fs-7">
                                                    <i class="ki-outline ki-right-square fs-6 text-gray-600 me-2"></i>
                                                    72 students
                                                </span>
                                                <!--end::Section-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Items-->
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::Wrapper-->

                                <!--begin::Action-->
                                <div class="m-0">
                                    <a href="#" class="btn btn-sm btn-light me-2 mb-2">Skip This</a>

                                    <a href="#" class="btn btn-sm btn-primary mb-2" data-bs-toggle="modal"
                                        data-bs-target="#kt_modal_create_app">Continue</a>
                                </div>
                                <!--end::Action-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="carousel-item active">
                                <!--begin::Wrapper-->
                                <div class="d-flex align-items-center mb-5">
                                    <!--begin::Chart-->
                                    <div class="w-80px flex-shrink-0 me-2">
                                        <div class="min-h-auto ms-n3 initialized" id="kt_slider_widget_1_chart_3"
                                            style="height: 100px; min-height: 101px;">
                                            <div id="apexchartsli0uwlhf"
                                                class="apexcharts-canvas apexchartsli0uwlhf apexcharts-theme-light"
                                                style="width: 90px; height: 101px;"><svg id="SvgjsSvg1354" width="90"
                                                    height="101" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg"
                                                    xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                    style="background: transparent;">
                                                    <foreignObject x="0" y="0" width="90" height="101">
                                                        <div class="apexcharts-legend"
                                                            xmlns="http://www.w3.org/1999/xhtml"></div>
                                                    </foreignObject>
                                                    <g id="SvgjsG1356" class="apexcharts-inner apexcharts-graphical"
                                                        transform="translate(-5, 1)">
                                                        <defs id="SvgjsDefs1355">
                                                            <clipPath id="gridRectMaskli0uwlhf">
                                                                <rect id="SvgjsRect1357" width="106" height="104" x="-3"
                                                                    y="-3" rx="0" ry="0" opacity="1" stroke-width="0"
                                                                    stroke="none" stroke-dasharray="0" fill="#fff">
                                                                </rect>
                                                            </clipPath>
                                                            <clipPath id="forecastMaskli0uwlhf"></clipPath>
                                                            <clipPath id="nonForecastMaskli0uwlhf"></clipPath>
                                                            <clipPath id="gridRectMarkerMaskli0uwlhf">
                                                                <rect id="SvgjsRect1358" width="104" height="102" x="-2"
                                                                    y="-2" rx="0" ry="0" opacity="1" stroke-width="0"
                                                                    stroke="none" stroke-dasharray="0" fill="#fff">
                                                                </rect>
                                                            </clipPath>
                                                        </defs>
                                                        <g id="SvgjsG1359" class="apexcharts-radialbar">
                                                            <g id="SvgjsG1360">
                                                                <g id="SvgjsG1361" class="apexcharts-tracks">
                                                                    <g id="SvgjsG1362"
                                                                        class="apexcharts-radialbar-track apexcharts-track"
                                                                        rel="1">
                                                                        <path id="apexcharts-radialbarTrack-0"
                                                                            d="M 50 18.414634146341463 A 30.585365853658537 30.585365853658537 0 1 1 49.99466184665636 18.41463461218322 "
                                                                            fill="none" fill-opacity="1"
                                                                            stroke="rgba(233,243,255,0.85)"
                                                                            stroke-opacity="1" stroke-linecap="round"
                                                                            stroke-width="8.146341463414636"
                                                                            stroke-dasharray="0"
                                                                            class="apexcharts-radialbar-area"
                                                                            data:pathOrig="M 50 18.414634146341463 A 30.585365853658537 30.585365853658537 0 1 1 49.99466184665636 18.41463461218322 ">
                                                                        </path>
                                                                    </g>
                                                                </g>
                                                                <g id="SvgjsG1364">
                                                                    <g id="SvgjsG1367"
                                                                        class="apexcharts-series apexcharts-radial-series"
                                                                        seriesName="Progress" rel="1"
                                                                        data:realIndex="0">
                                                                        <path id="SvgjsPath1368"
                                                                            d="M 50 18.414634146341463 A 30.585365853658537 30.585365853658537 0 0 1 80.58536585365854 49 "
                                                                            fill="none" fill-opacity="0.85"
                                                                            stroke="rgba(27,132,255,0.85)"
                                                                            stroke-opacity="1" stroke-linecap="round"
                                                                            stroke-width="8.146341463414636"
                                                                            stroke-dasharray="0"
                                                                            class="apexcharts-radialbar-area apexcharts-radialbar-slice-0"
                                                                            data:angle="90" data:value="25" index="0"
                                                                            j="0"
                                                                            data:pathOrig="M 50 18.414634146341463 A 30.585365853658537 30.585365853658537 0 0 1 80.58536585365854 49 ">
                                                                        </path>
                                                                    </g>
                                                                    <circle id="SvgjsCircle1365" r="26.51219512195122"
                                                                        cx="50" cy="49"
                                                                        class="apexcharts-radialbar-hollow"
                                                                        fill="transparent"></circle>
                                                                    <g id="SvgjsG1366"
                                                                        class="apexcharts-datalabels-group"
                                                                        transform="translate(0, 0) scale(1)"
                                                                        style="opacity: 1;"></g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                        <line id="SvgjsLine1369" x1="0" y1="0" x2="100" y2="0"
                                                            stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                                            stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                                        <line id="SvgjsLine1370" x1="0" y1="0" x2="100" y2="0"
                                                            stroke-dasharray="0" stroke-width="0" stroke-linecap="butt"
                                                            class="apexcharts-ycrosshairs-hidden"></line>
                                                    </g>
                                                </svg></div>
                                        </div>
                                    </div>
                                    <!--end::Chart-->

                                    <!--begin::Info-->
                                    <div class="m-0">
                                        <!--begin::Subtitle-->
                                        <h4 class="fw-bold text-gray-800 mb-3">Ruby on Rails</h4>
                                        <!--end::Subtitle-->

                                        <!--begin::Items-->
                                        <div class="d-flex d-grid gap-5">
                                            <!--begin::Item-->
                                            <div class="d-flex flex-column flex-shrink-0 me-4">
                                                <!--begin::Section-->
                                                <span class="d-flex align-items-center fs-7 fw-bold text-gray-500 mb-2">
                                                    <i class="ki-outline ki-right-square fs-6 text-gray-600 me-2"></i> 3
                                                    Topics
                                                </span>
                                                <!--end::Section-->

                                                <!--begin::Section-->
                                                <span class="d-flex align-items-center text-gray-500 fw-bold fs-7">
                                                    <i class="ki-outline ki-right-square fs-6 text-gray-600 me-2"></i> 1
                                                    Speakers
                                                </span>
                                                <!--end::Section-->
                                            </div>
                                            <!--end::Item-->

                                            <!--begin::Item-->
                                            <div class="d-flex flex-column flex-shrink-0">
                                                <!--begin::Section-->
                                                <span class="d-flex align-items-center fs-7 fw-bold text-gray-500 mb-2">
                                                    <i class="ki-outline ki-right-square fs-6 text-gray-600 me-2"></i>
                                                    50 Min
                                                </span>
                                                <!--end::Section-->

                                                <!--begin::Section-->
                                                <span class="d-flex align-items-center text-gray-500 fw-bold fs-7">
                                                    <i class="ki-outline ki-right-square fs-6 text-gray-600 me-2"></i>
                                                    72 students
                                                </span>
                                                <!--end::Section-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Items-->
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::Wrapper-->

                                <!--begin::Action-->
                                <div class="m-0">
                                    <a href="#" class="btn btn-sm btn-light me-2 mb-2">Skip This</a>

                                    <a href="#" class="btn btn-sm btn-primary mb-2" data-bs-toggle="modal"
                                        data-bs-target="#kt_modal_create_app">Continue</a>
                                </div>
                                <!--end::Action-->
                            </div>
                            <!--end::Item-->

                        </div>
                        <!--end::Carousel-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Slider Widget 1-->


            </div>
            <!--end::Col-->

            <!--begin::Col-->
            <div class="col-xl-6 mb-5 mb-xl-10">


                <!--begin::Slider Widget 2-->
                <div id="kt_sliders_widget_2_slider"
                    class="card card-flush carousel carousel-custom carousel-stretch slide h-xl-100"
                    data-bs-ride="carousel" data-bs-interval="5500">
                    <!--begin::Header-->
                    <div class="card-header pt-5">
                        <!--begin::Title-->
                        <h4 class="card-title d-flex align-items-start flex-column">
                            <span class="card-label fw-bold text-gray-800">Today’s Events</span>
                            <span class="text-gray-500 mt-1 fw-bold fs-7">24 events on all activities</span>
                        </h4>
                        <!--end::Title-->

                        <!--begin::Toolbar-->
                        <div class="card-toolbar">
                            <!--begin::Carousel Indicators-->
                            <ol
                                class="p-0 m-0 carousel-indicators carousel-indicators-bullet carousel-indicators-active-success">
                                <li data-bs-target="#kt_sliders_widget_2_slider" data-bs-slide-to="0" class="ms-1"></li>
                                <li data-bs-target="#kt_sliders_widget_2_slider" data-bs-slide-to="1" class="ms-1"></li>
                                <li data-bs-target="#kt_sliders_widget_2_slider" data-bs-slide-to="2"
                                    class="ms-1 active" aria-current="true"></li>

                            </ol>
                            <!--end::Carousel Indicators-->
                        </div>
                        <!--end::Toolbar-->
                    </div>
                    <!--end::Header-->

                    <!--begin::Body-->
                    <div class="card-body py-6">
                        <!--begin::Carousel-->
                        <div class="carousel-inner">
                            <!--begin::Item-->
                            <div class="carousel-item show">
                                <!--begin::Wrapper-->
                                <div class="d-flex align-items-center mb-9">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-70px symbol-circle me-5">
                                        <span class="symbol-label bg-light-success">
                                            <i class="ki-outline ki-abstract-24 fs-3x text-success"></i>
                                        </span>
                                    </div>
                                    <!--end::Symbol-->

                                    <!--begin::Info-->
                                    <div class="m-0">
                                        <!--begin::Subtitle-->
                                        <h4 class="fw-bold text-gray-800 mb-3">Ruby on Rails</h4>
                                        <!--end::Subtitle-->

                                        <!--begin::Items-->
                                        <div class="d-flex d-grid gap-5">
                                            <!--begin::Item-->
                                            <div class="d-flex flex-column flex-shrink-0 me-4">
                                                <!--begin::Section-->
                                                <span class="d-flex align-items-center fs-7 fw-bold text-gray-500 mb-2">
                                                    <i class="ki-outline ki-right-square fs-6 text-gray-600 me-2"></i> 5
                                                    Topics
                                                </span>
                                                <!--end::Section-->

                                                <!--begin::Section-->
                                                <span class="d-flex align-items-center text-gray-500 fw-bold fs-7">
                                                    <i class="ki-outline ki-right-square fs-6 text-gray-600 me-2"></i> 1
                                                    Speakers
                                                </span>
                                                <!--end::Section-->
                                            </div>
                                            <!--end::Item-->

                                            <!--begin::Item-->
                                            <div class="d-flex flex-column flex-shrink-0">
                                                <!--begin::Section-->
                                                <span class="d-flex align-items-center fs-7 fw-bold text-gray-500 mb-2">
                                                    <i class="ki-outline ki-right-square fs-6 text-gray-600 me-2"></i>
                                                    60 Min
                                                </span>
                                                <!--end::Section-->

                                                <!--begin::Section-->
                                                <span class="d-flex align-items-center text-gray-500 fw-bold fs-7">
                                                    <i class="ki-outline ki-right-square fs-6 text-gray-600 me-2"></i>
                                                    137 students
                                                </span>
                                                <!--end::Section-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Items-->
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::Wrapper-->

                                <!--begin::Action-->
                                <div class="m-0">
                                    <a href="#" class="btn btn-sm btn-light me-2 mb-2">Details</a>

                                    <a href="#" class="btn btn-sm btn-success mb-2" data-bs-toggle="modal"
                                        data-bs-target="#kt_modal_create_campaign">Join Event</a>
                                </div>
                                <!--end::Action-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="carousel-item active carousel-item-start">
                                <!--begin::Wrapper-->
                                <div class="d-flex align-items-center mb-9">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-70px symbol-circle me-5">
                                        <span class="symbol-label bg-light-danger">
                                            <i class="ki-outline ki-abstract-25 fs-3x text-danger"></i>
                                        </span>
                                    </div>
                                    <!--end::Symbol-->

                                    <!--begin::Info-->
                                    <div class="m-0">
                                        <!--begin::Subtitle-->
                                        <h4 class="fw-bold text-gray-800 mb-3">Ruby on Rails</h4>
                                        <!--end::Subtitle-->

                                        <!--begin::Items-->
                                        <div class="d-flex d-grid gap-5">
                                            <!--begin::Item-->
                                            <div class="d-flex flex-column flex-shrink-0 me-4">
                                                <!--begin::Section-->
                                                <span class="d-flex align-items-center fs-7 fw-bold text-gray-500 mb-2">
                                                    <i class="ki-outline ki-right-square fs-6 text-gray-600 me-2"></i>
                                                    12 Topics
                                                </span>
                                                <!--end::Section-->

                                                <!--begin::Section-->
                                                <span class="d-flex align-items-center text-gray-500 fw-bold fs-7">
                                                    <i class="ki-outline ki-right-square fs-6 text-gray-600 me-2"></i> 1
                                                    Speakers
                                                </span>
                                                <!--end::Section-->
                                            </div>
                                            <!--end::Item-->

                                            <!--begin::Item-->
                                            <div class="d-flex flex-column flex-shrink-0">
                                                <!--begin::Section-->
                                                <span class="d-flex align-items-center fs-7 fw-bold text-gray-500 mb-2">
                                                    <i class="ki-outline ki-right-square fs-6 text-gray-600 me-2"></i>
                                                    50 Min
                                                </span>
                                                <!--end::Section-->

                                                <!--begin::Section-->
                                                <span class="d-flex align-items-center text-gray-500 fw-bold fs-7">
                                                    <i class="ki-outline ki-right-square fs-6 text-gray-600 me-2"></i>
                                                    72 students
                                                </span>
                                                <!--end::Section-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Items-->
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::Wrapper-->

                                <!--begin::Action-->
                                <div class="m-0">
                                    <a href="#" class="btn btn-sm btn-light me-2 mb-2">Details</a>

                                    <a href="#" class="btn btn-sm btn-success mb-2" data-bs-toggle="modal"
                                        data-bs-target="#kt_modal_create_campaign">Join Event</a>
                                </div>
                                <!--end::Action-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="carousel-item carousel-item-next carousel-item-start">
                                <!--begin::Wrapper-->
                                <div class="d-flex align-items-center mb-9">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-70px symbol-circle me-5">
                                        <span class="symbol-label bg-light-primary">
                                            <i class="ki-outline ki-abstract-36 fs-3x text-primary"></i>
                                        </span>
                                    </div>
                                    <!--end::Symbol-->

                                    <!--begin::Info-->
                                    <div class="m-0">
                                        <!--begin::Subtitle-->
                                        <h4 class="fw-bold text-gray-800 mb-3">Ruby on Rails</h4>
                                        <!--end::Subtitle-->

                                        <!--begin::Items-->
                                        <div class="d-flex d-grid gap-5">
                                            <!--begin::Item-->
                                            <div class="d-flex flex-column flex-shrink-0 me-4">
                                                <!--begin::Section-->
                                                <span class="d-flex align-items-center fs-7 fw-bold text-gray-500 mb-2">
                                                    <i class="ki-outline ki-right-square fs-6 text-gray-600 me-2"></i> 3
                                                    Topics
                                                </span>
                                                <!--end::Section-->

                                                <!--begin::Section-->
                                                <span class="d-flex align-items-center text-gray-500 fw-bold fs-7">
                                                    <i class="ki-outline ki-right-square fs-6 text-gray-600 me-2"></i> 1
                                                    Speakers
                                                </span>
                                                <!--end::Section-->
                                            </div>
                                            <!--end::Item-->

                                            <!--begin::Item-->
                                            <div class="d-flex flex-column flex-shrink-0">
                                                <!--begin::Section-->
                                                <span class="d-flex align-items-center fs-7 fw-bold text-gray-500 mb-2">
                                                    <i class="ki-outline ki-right-square fs-6 text-gray-600 me-2"></i>
                                                    50 Min
                                                </span>
                                                <!--end::Section-->

                                                <!--begin::Section-->
                                                <span class="d-flex align-items-center text-gray-500 fw-bold fs-7">
                                                    <i class="ki-outline ki-right-square fs-6 text-gray-600 me-2"></i>
                                                    72 students
                                                </span>
                                                <!--end::Section-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Items-->
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::Wrapper-->

                                <!--begin::Action-->
                                <div class="m-0">
                                    <a href="#" class="btn btn-sm btn-light me-2 mb-2">Details</a>

                                    <a href="#" class="btn btn-sm btn-success mb-2" data-bs-toggle="modal"
                                        data-bs-target="#kt_modal_create_campaign">Join Event</a>
                                </div>
                                <!--end::Action-->
                            </div>
                            <!--end::Item-->

                        </div>
                        <!--end::Carousel-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Slider Widget 2-->
            </div>
            <!--end::Col-->
        </div>
        <!--end::Row-->

        <!--begin::Engage widget 4-->
        <div class="card border-transparent " data-bs-theme="light" style="background-color: #1C325E;">
            <!--begin::Body-->
            <div class="card-body d-flex ps-xl-15">
                <!--begin::Wrapper-->
                <div class="m-0">
                    <!--begin::Title-->
                    <div class="position-relative fs-2x z-index-2 fw-bold text-white mb-7">
                        <span class="me-2">
                            You have got
                            <span class="position-relative d-inline-block text-danger">
                                <a href="/metronic8/demo63/pages/user-profile/overview.html"
                                    class="text-danger opacity-75-hover">2300 bonus</a>

                                <!--begin::Separator-->
                                <span
                                    class="position-absolute opacity-50 bottom-0 start-0 border-4 border-danger border-bottom w-100"></span>
                                <!--end::Separator-->
                            </span>
                        </span>
                        points.<br>
                        Feel free to use them in your lessons
                    </div>
                    <!--end::Title-->

                    <!--begin::Action-->
                    <div class="mb-3">
                        <a href="#" class="btn btn-danger fw-semibold me-2" data-bs-toggle="modal"
                            data-bs-target="#kt_modal_upgrade_plan">
                            Get Reward
                        </a>

                        <a href="#"
                            class="btn btn-color-white bg-white bg-opacity-15 bg-hover-opacity-25 fw-semibold">
                            How to
                        </a>
                    </div>
                    <!--begin::Action-->
                </div>
                <!--begin::Wrapper-->

                <!--begin::Illustration-->
                <img src="{{ asset('backend/themes/assets/media/illustrations/sigma-1/17-dark.png') }}"
                    class="position-absolute me-3 bottom-0 end-0 h-200px" alt="">
                <!--end::Illustration-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::Engage widget 4-->


    </div>
    <!--end::Col-->
</div>
<div class="row g-5 g-xl-10">
    <!--begin::Col-->
    <div class="col-xl-4 mb-xl-10">

        <!--begin::List widget 20-->
        <div class="card h-xl-100">
            <!--begin::Header-->
            <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bold text-gray-900">Recommended for you</span>

                    <span class="text-muted mt-1 fw-semibold fs-7">8k social visitors</span>
                </h3>

                <!--begin::Toolbar-->
                <div class="card-toolbar">
                    <a href="#" class="btn btn-sm btn-light">All Courses</a>
                </div>
                <!--end::Toolbar-->
            </div>
            <!--end::Header-->

            <!--begin::Body-->
            <div class="card-body pt-6">

                <!--begin::Item-->
                <div class="d-flex flex-stack">
                    <!--begin::Symbol-->
                    <div class="symbol symbol-40px me-4">
                        <div class="symbol-label fs-2 fw-semibold bg-danger text-inverse-danger">M</div>
                    </div>
                    <!--end::Symbol-->

                    <!--begin::Section-->
                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                        <!--begin:Author-->
                        <div class="flex-grow-1 me-2">
                            <a href="/metronic8/demo63/pages/user-profile/overview.html"
                                class="text-gray-800 text-hover-primary fs-6 fw-bold">UI/UX Design</a>

                            <span class="text-muted fw-semibold d-block fs-7">40+ Courses</span>
                        </div>
                        <!--end:Author-->

                        <!--begin::Actions-->
                        <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                            <i class="ki-outline ki-arrow-right fs-2"></i> </a>
                        <!--begin::Actions-->
                    </div>
                    <!--end::Section-->
                </div>
                <!--end::Item-->

                <!--begin::Separator-->
                <div class="separator separator-dashed my-4"></div>
                <!--end::Separator-->


                <!--begin::Item-->
                <div class="d-flex flex-stack">
                    <!--begin::Symbol-->
                    <div class="symbol symbol-40px me-4">
                        <div class="symbol-label fs-2 fw-semibold bg-success text-inverse-success">Q</div>
                    </div>
                    <!--end::Symbol-->

                    <!--begin::Section-->
                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                        <!--begin:Author-->
                        <div class="flex-grow-1 me-2">
                            <a href="/metronic8/demo63/pages/user-profile/overview.html"
                                class="text-gray-800 text-hover-primary fs-6 fw-bold">QA Analysis</a>

                            <span class="text-muted fw-semibold d-block fs-7">18 Courses</span>
                        </div>
                        <!--end:Author-->

                        <!--begin::Actions-->
                        <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                            <i class="ki-outline ki-arrow-right fs-2"></i> </a>
                        <!--begin::Actions-->
                    </div>
                    <!--end::Section-->
                </div>
                <!--end::Item-->

                <!--begin::Separator-->
                <div class="separator separator-dashed my-4"></div>
                <!--end::Separator-->


                <!--begin::Item-->
                <div class="d-flex flex-stack">
                    <!--begin::Symbol-->
                    <div class="symbol symbol-40px me-4">
                        <div class="symbol-label fs-2 fw-semibold bg-info text-inverse-info">W</div>
                    </div>
                    <!--end::Symbol-->

                    <!--begin::Section-->
                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                        <!--begin:Author-->
                        <div class="flex-grow-1 me-2">
                            <a href="/metronic8/demo63/pages/user-profile/overview.html"
                                class="text-gray-800 text-hover-primary fs-6 fw-bold">Web Development</a>

                            <span class="text-muted fw-semibold d-block fs-7">120+ Courses</span>
                        </div>
                        <!--end:Author-->

                        <!--begin::Actions-->
                        <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                            <i class="ki-outline ki-arrow-right fs-2"></i> </a>
                        <!--begin::Actions-->
                    </div>
                    <!--end::Section-->
                </div>
                <!--end::Item-->

                <!--begin::Separator-->
                <div class="separator separator-dashed my-4"></div>
                <!--end::Separator-->


                <!--begin::Item-->
                <div class="d-flex flex-stack">
                    <!--begin::Symbol-->
                    <div class="symbol symbol-40px me-4">
                        <div class="symbol-label fs-2 fw-semibold bg-primary text-inverse-primary">M</div>
                    </div>
                    <!--end::Symbol-->

                    <!--begin::Section-->
                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                        <!--begin:Author-->
                        <div class="flex-grow-1 me-2">
                            <a href="/metronic8/demo63/pages/user-profile/overview.html"
                                class="text-gray-800 text-hover-primary fs-6 fw-bold">Marketing</a>

                            <span class="text-muted fw-semibold d-block fs-7">50+ Courses.</span>
                        </div>
                        <!--end:Author-->

                        <!--begin::Actions-->
                        <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                            <i class="ki-outline ki-arrow-right fs-2"></i> </a>
                        <!--begin::Actions-->
                    </div>
                    <!--end::Section-->
                </div>
                <!--end::Item-->

                <!--begin::Separator-->
                <div class="separator separator-dashed my-4"></div>
                <!--end::Separator-->


                <!--begin::Item-->
                <div class="d-flex flex-stack">
                    <!--begin::Symbol-->
                    <div class="symbol symbol-40px me-4">
                        <div class="symbol-label fs-2 fw-semibold bg-warning text-inverse-warning">P</div>
                    </div>
                    <!--end::Symbol-->

                    <!--begin::Section-->
                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                        <!--begin:Author-->
                        <div class="flex-grow-1 me-2">
                            <a href="/metronic8/demo63/pages/user-profile/overview.html"
                                class="text-gray-800 text-hover-primary fs-6 fw-bold">Philosophy</a>

                            <span class="text-muted fw-semibold d-block fs-7">24+ Courses</span>
                        </div>
                        <!--end:Author-->

                        <!--begin::Actions-->
                        <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                            <i class="ki-outline ki-arrow-right fs-2"></i> </a>
                        <!--begin::Actions-->
                    </div>
                    <!--end::Section-->
                </div>
                <!--end::Item-->

                <!--begin::Separator-->
                <div class="separator separator-dashed my-4"></div>
                <!--end::Separator-->


                <!--begin::Item-->
                <div class="d-flex flex-stack">
                    <!--begin::Symbol-->
                    <div class="symbol symbol-40px me-4">
                        <div class="symbol-label fs-2 fw-semibold bg-dark text-inverse-dark">M</div>
                    </div>
                    <!--end::Symbol-->

                    <!--begin::Section-->
                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                        <!--begin:Author-->
                        <div class="flex-grow-1 me-2">
                            <a href="/metronic8/demo63/pages/user-profile/overview.html"
                                class="text-gray-800 text-hover-primary fs-6 fw-bold">Mathematics</a>

                            <span class="text-muted fw-semibold d-block fs-7">24+ Courses</span>
                        </div>
                        <!--end:Author-->

                        <!--begin::Actions-->
                        <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                            <i class="ki-outline ki-arrow-right fs-2"></i> </a>
                        <!--begin::Actions-->
                    </div>
                    <!--end::Section-->
                </div>
                <!--end::Item-->



            </div>
            <!--end::Body-->
        </div>
        <!--end::List widget 20-->
    </div>
    <!--end::Col-->

    <!--begin::Col-->
    <div class="col-xl-8 mb-5 mb-xl-10">
        <!--begin::Timeline Widget 1-->
        <div class="card card-flush h-xl-100">
            <!--begin::Card header-->
            <div class="card-header pt-5">
                <!--begin::Card title-->
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bold text-gray-900">Team Schedule</span>

                    <span class="text-gray-500 pt-2 fw-semibold fs-6">49 Acual Tasks</span>
                </h3>
                <!--end::Card title-->

                <!--begin::Card toolbar-->
                <div class="card-toolbar">
                    <!--begin::Tabs-->
                    <ul class="nav" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light fw-bold px-4 me-1 active"
                                data-kt-timeline-widget-1="tab" data-bs-toggle="tab"
                                href="#kt_timeline_widget_1_tab_day" aria-selected="true" role="tab">Day</a>
                        </li>

                        <li class="nav-item" role="presentation">
                            <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light fw-bold px-4 me-1"
                                data-kt-timeline-widget-1="tab" data-bs-toggle="tab"
                                href="#kt_timeline_widget_1_tab_week" aria-selected="false" tabindex="-1"
                                role="tab">Week</a>
                        </li>

                        <li class="nav-item" role="presentation">
                            <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light fw-bold px-4 me-1"
                                data-kt-timeline-widget-1="tab" data-bs-toggle="tab"
                                href="#kt_timeline_widget_1_tab_month" aria-selected="false" tabindex="-1"
                                role="tab">Month</a>
                        </li>
                    </ul>
                    <!--end::Tabs-->
                </div>
                <!--end::Card toolbar-->
            </div>
            <!--end::Card header-->

            <!--begin::Card body-->
            <div class="card-body pb-0">
                <!--begin::Tab content-->
                <div class="tab-content">
                    <!--begin::Tab pane-->
                    <div class="tab-pane active blockui" id="kt_timeline_widget_1_tab_day" role="tabpanel"
                        aria-labelledby="day-tab" data-kt-timeline-widget-1-blockui="true" style="">
                        <div class="table-responsive pb-10">
                            <!--begin::Timeline-->
                            <div id="kt_timeline_widget_1_1" class="vis-timeline-custom h-350px min-w-700px"
                                data-kt-timeline-widget-1-image-root="/metronic8/demo63/assets/media/"
                                style="position: relative;">
                                <div class="vis-timeline vis-bottom vis-ltr"
                                    style="touch-action: pan-y; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); visibility: visible; height: 354px;">
                                    <div class="vis-panel vis-background"
                                        style="height: 354px; width: 700px; left: 0px; top: 0px;"></div>
                                    <div class="vis-panel vis-background vis-vertical"
                                        style="height: 354px; width: 574px; left: 128px; top: 0px;">
                                        <div class="vis-axis" style="top: 304px; left: 0px;">
                                            <div class="vis-group"></div>
                                            <div class="vis-group"></div>
                                            <div class="vis-group"></div>
                                            <div class="vis-group"></div>
                                        </div>
                                        <div class="vis-time-axis vis-background">
                                            <div class="vis-grid vis-vertical vis-minor vis-h14  vis-today  vis-even"
                                                style="width: 184.667px; height: 330px; transform: translate(-108.778px, -1px);">
                                            </div>
                                            <div class="vis-grid vis-vertical vis-minor vis-h15  vis-today  vis-odd"
                                                style="width: 184.667px; height: 330px; transform: translate(75.8883px, -1px);">
                                            </div>
                                            <div class="vis-grid vis-vertical vis-minor vis-h16  vis-today  vis-even"
                                                style="width: 184.667px; height: 330px; transform: translate(260.555px, -1px);">
                                            </div>
                                            <div class="vis-grid vis-vertical vis-minor vis-h17  vis-today  vis-odd"
                                                style="width: 184.667px; height: 330px; transform: translate(445.222px, -1px);">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vis-panel vis-background vis-horizontal"
                                        style="height: 305px; width: 700px; left: 0px; top: -1px;"></div>
                                    <div class="vis-panel vis-center"
                                        style="touch-action: pan-y; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); height: 305px; width: 574px; left: 127px; top: -1px;">
                                        <div class="vis-content" style="left: 0px; transform: translateY(0px);">
                                            <div class="vis-itemset" style="height: 303px;">
                                                <div class="vis-background">
                                                    <div class="vis-group" style="height: 0px;">
                                                        <div style="visibility: hidden; position: absolute;"></div>
                                                    </div>
                                                    <div class="vis-group" style="height: 75px;">
                                                        <div style="visibility: hidden; position: absolute;"></div>
                                                    </div>
                                                    <div class="vis-group" style="height: 75px;">
                                                        <div style="visibility: hidden; position: absolute;"></div>
                                                    </div>
                                                    <div class="vis-group" style="height: 75px;">
                                                        <div style="visibility: hidden; position: absolute;"></div>
                                                    </div>
                                                    <div class="vis-group" style="height: 78px;">
                                                        <div style="visibility: hidden; position: absolute;"></div>
                                                    </div>
                                                </div>
                                                <div class="vis-foreground">
                                                    <div class="vis-group" style="height: 75px;">
                                                        <div class="vis-item vis-range vis-readonly"
                                                            style="transform: translateX(10px); width: 277px; top: 17.5px;">
                                                            <div class="vis-item-overflow">
                                                                <div class="vis-item-content"
                                                                    style="transform: translateX(0px);">
                                                                    <div
                                                                        class="rounded-pill bg-light-primary d-flex align-items-center position-relative h-40px w-100 p-2 overflow-hidden">
                                                                        <div class="position-absolute rounded-pill d-block bg-primary start-0 top-0 h-100 z-index-1"
                                                                            style="width:60%;"></div>

                                                                        <div
                                                                            class="d-flex align-items-center position-relative z-index-2">
                                                                            <div
                                                                                class="symbol-group symbol-hover flex-nowrap me-3">
                                                                                <div
                                                                                    class="symbol symbol-circle symbol-25px">
                                                                                    <img alt=""
                                                                                        src="{{ asset('backend/themes/assets/media/avatars/300-6.jpg') }}">
                                                                                </div>
                                                                                <div
                                                                                    class="symbol symbol-circle symbol-25px">
                                                                                    <img alt=""
                                                                                        src="{{ asset('backend/themes/assets/media/avatars/300-1.jpg') }}">
                                                                                </div>
                                                                            </div>

                                                                            <a href="#"
                                                                                class="fw-bold text-white text-hover-dark">Meeting</a>
                                                                        </div>

                                                                        <div
                                                                            class="d-flex flex-center bg-body rounded-pill fs-7 fw-bolder ms-auto h-100 px-3 position-relative z-index-2">
                                                                            60%
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="vis-item-visible-frame"></div>
                                                        </div>
                                                    </div>
                                                    <div class="vis-group" style="height: 75px;">
                                                        <div class="vis-item vis-range vis-readonly"
                                                            style="transform: translateX(194.667px); width: 184.667px; top: 17.5px;">
                                                            <div class="vis-item-overflow">
                                                                <div class="vis-item-content"
                                                                    style="transform: translateX(0px);">
                                                                    <div
                                                                        class="rounded-pill bg-light-success d-flex align-items-center position-relative h-40px w-100 p-2 overflow-hidden">
                                                                        <div class="position-absolute rounded-pill d-block bg-success start-0 top-0 h-100 z-index-1"
                                                                            style="width:47%;"></div>

                                                                        <div
                                                                            class="d-flex align-items-center position-relative z-index-2">
                                                                            <div
                                                                                class="symbol-group symbol-hover flex-nowrap me-3">
                                                                                <div
                                                                                    class="symbol symbol-circle symbol-25px">
                                                                                    <img alt=""
                                                                                        src="{{ asset('backend/themes/assets/media/avatars/300-2.jpg') }}">
                                                                                </div>
                                                                            </div>

                                                                            <a href="#"
                                                                                class="fw-bold text-white text-hover-dark">Testing</a>
                                                                        </div>

                                                                        <div
                                                                            class="d-flex flex-center bg-body rounded-pill fs-7 fw-bolder ms-auto h-100 px-3 position-relative z-index-2">
                                                                            47%
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="vis-item-visible-frame"></div>
                                                        </div>
                                                    </div>
                                                    <div class="vis-group" style="height: 75px;">
                                                        <div class="vis-item vis-range vis-readonly"
                                                            style="transform: translateX(102.333px); width: 369.333px; top: 17.5px;">
                                                            <div class="vis-item-overflow">
                                                                <div class="vis-item-content"
                                                                    style="transform: translateX(0px);">
                                                                    <div
                                                                        class="rounded-pill bg-light-danger d-flex align-items-center position-relative h-40px w-100 p-2 overflow-hidden">
                                                                        <div class="position-absolute rounded-pill d-block bg-danger start-0 top-0 h-100 z-index-1"
                                                                            style="width:55%;"></div>

                                                                        <div
                                                                            class="d-flex align-items-center position-relative z-index-2">
                                                                            <div
                                                                                class="symbol-group symbol-hover flex-nowrap me-3">
                                                                                <div
                                                                                    class="symbol symbol-circle symbol-25px">
                                                                                    <img alt=""
                                                                                        src="{{ asset('backend/themes/assets/media/avatars/300-5.jpg') }}">
                                                                                </div>
                                                                                <div
                                                                                    class="symbol symbol-circle symbol-25px">
                                                                                    <img alt=""
                                                                                        src="{{ asset('backend/themes/assets/media/avatars/300-20.jpg') }}">
                                                                                </div>
                                                                            </div>

                                                                            <a href="#"
                                                                                class="fw-bold text-white text-hover-dark">Landing
                                                                                page</a>
                                                                        </div>

                                                                        <div
                                                                            class="d-flex flex-center bg-body rounded-pill fs-7 fw-bolder ms-auto h-100 px-3 position-relative z-index-2">
                                                                            55%
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="vis-item-visible-frame"></div>
                                                        </div>
                                                    </div>
                                                    <div class="vis-group" style="height: 78px;">
                                                        <div class="vis-item vis-range vis-readonly"
                                                            style="transform: translateX(287px); width: 277px; top: 18px;">
                                                            <div class="vis-item-overflow">
                                                                <div class="vis-item-content"
                                                                    style="transform: translateX(0px);">
                                                                    <div
                                                                        class="rounded-pill bg-light-info d-flex align-items-center position-relative h-40px w-100 p-2 overflow-hidden">
                                                                        <div class="position-absolute rounded-pill d-block bg-info start-0 top-0 h-100 z-index-1"
                                                                            style="width:75%;"></div>

                                                                        <div
                                                                            class="d-flex align-items-center position-relative z-index-2">
                                                                            <div
                                                                                class="symbol-group symbol-hover flex-nowrap me-3">
                                                                                <div
                                                                                    class="symbol symbol-circle symbol-25px">
                                                                                    <img alt=""
                                                                                        src="{{ asset('backend/themes/assets/media/avatars/300-23.jpg') }}">
                                                                                </div>
                                                                                <div
                                                                                    class="symbol symbol-circle symbol-25px">
                                                                                    <img alt=""
                                                                                        src="{{ asset('backend/themes/assets/media/avatars/300-12.jpg') }}">
                                                                                </div>
                                                                                <div
                                                                                    class="symbol symbol-circle symbol-25px">
                                                                                    <img alt=""
                                                                                        src="{{ asset('backend/themes/assets/media/avatars/300-9.jpg') }}">
                                                                                </div>
                                                                            </div>

                                                                            <a href="#"
                                                                                class="fw-bold text-white text-hover-dark">Products
                                                                                module</a>
                                                                        </div>

                                                                        <div
                                                                            class="d-flex flex-center bg-body rounded-pill fs-7 fw-bolder ms-auto h-100 px-3 position-relative z-index-2">
                                                                            75%
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="vis-item-visible-frame"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vis-shadow vis-top" style="visibility: hidden;"></div>
                                        <div class="vis-shadow vis-bottom" style="visibility: hidden;"></div>
                                    </div>
                                    <div class="vis-panel vis-left"
                                        style="touch-action: none; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); height: 305px; left: 0px; top: -1px;">
                                        <div class="vis-content" style="left: 0px; top: 0px;">
                                            <div class="vis-labelset">
                                                <div class="vis-label vis-group-level-0" title="" style="height: 75px;">
                                                    <div class="vis-inner">Research</div>
                                                </div>
                                                <div class="vis-label vis-group-level-0" title="" style="height: 75px;">
                                                    <div class="vis-inner">Phase 2.6 QA</div>
                                                </div>
                                                <div class="vis-label vis-group-level-0" title="" style="height: 75px;">
                                                    <div class="vis-inner">UI Design</div>
                                                </div>
                                                <div class="vis-label vis-group-level-0" title="" style="height: 78px;">
                                                    <div class="vis-inner">Development</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vis-shadow vis-top" style="visibility: hidden;"></div>
                                        <div class="vis-shadow vis-bottom" style="visibility: hidden;"></div>
                                    </div>
                                    <div class="vis-panel vis-right" style="height: 305px; left: 701px; top: -1px;">
                                        <div class="vis-content" style="left: 0px; top: 0px;"></div>
                                        <div class="vis-shadow vis-top" style="visibility: hidden;"></div>
                                        <div class="vis-shadow vis-bottom" style="visibility: hidden;"></div>
                                    </div>
                                    <div class="vis-panel vis-top" style="width: 574px; left: 127px; top: 0px;"></div>
                                    <div class="vis-panel vis-bottom" style="width: 574px; left: 127px; top: 304px;">
                                        <div class="vis-time-axis vis-foreground" style="height: 50px;">
                                            <div class="vis-text vis-minor vis-measure" style="position: absolute;">0
                                            </div>
                                            <div class="vis-text vis-major vis-measure" style="position: absolute;">0
                                            </div>
                                            <div class="vis-text vis-minor vis-h14  vis-today  vis-even"
                                                style="transform: translate(-108.278px, 0px); width: 184.667px;">14:00
                                            </div>
                                            <div class="vis-text vis-minor vis-h15  vis-today  vis-odd"
                                                style="transform: translate(76.3883px, 0px); width: 184.667px;">15:00
                                            </div>
                                            <div class="vis-text vis-minor vis-h16  vis-today  vis-even"
                                                style="transform: translate(261.055px, 0px); width: 184.667px;">16:00
                                            </div>
                                            <div class="vis-text vis-minor vis-h17  vis-today  vis-odd"
                                                style="transform: translate(445.722px, 0px); width: 184.667px;">17:00
                                            </div>
                                            <div class="vis-text vis-major vis-h17  vis-today  vis-odd"
                                                style="transform: translate(0px, 25px);">
                                                <div>Mon 13 May</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vis-rolling-mode-btn" style="visibility: hidden;"></div>
                                </div>
                            </div>
                            <!--end::Timeline-->
                        </div>
                    </div>
                    <!--end::Tab pane-->

                    <!--begin::Tab pane-->
                    <div class="tab-pane blockui" id="kt_timeline_widget_1_tab_week" role="tabpanel"
                        aria-labelledby="week-tab" data-kt-timeline-widget-1-blockui="true" style="overflow: hidden;">
                        <div class="table-responsive pb-10">
                            <!--begin::Timeline-->
                            <div id="kt_timeline_widget_1_2" class="vis-timeline-custom h-350px min-w-700px"
                                data-kt-timeline-widget-1-image-root="/metronic8/demo63/assets/media/"></div>
                            <!--end::Timeline-->
                        </div>
                        <div class="blockui-overlay bg-body" style="z-index: 1;"><span
                                class="spinner-border text-primary"></span></div>
                    </div>
                    <!--end::Tab pane-->

                    <!--begin::Tab pane-->
                    <div class="tab-pane blockui" id="kt_timeline_widget_1_tab_month" role="tabpanel"
                        aria-labelledby="month-tab" data-kt-timeline-widget-1-blockui="true" style="overflow: hidden;">
                        <div class="table-responsive pb-10">
                            <!--begin::Timeline-->
                            <div id="kt_timeline_widget_1_3" class="vis-timeline-custom h-350px min-w-700px"
                                data-kt-timeline-widget-1-image-root="/metronic8/demo63/assets/media/"></div>
                            <!--end::Timeline-->
                        </div>
                        <div class="blockui-overlay bg-body" style="z-index: 1;"><span
                                class="spinner-border text-primary"></span></div>
                    </div>
                    <!--end::Tab pane-->
                </div>
                <!--end::Tab content-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Timeline Widget 1-->
    </div>
    <!--end::Col-->
</div>
