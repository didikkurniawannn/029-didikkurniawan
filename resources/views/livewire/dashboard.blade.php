<div>
    @section('title')
    Dashboard
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
                        <span class="fw-bold fs-2x mb-3">Statistik Rapat</span>

                        <div class="fs-4 text-white">
                            <span class="opacity-75">Data statistik mengenai Rapat di Kabupaten bandung</span>
                        </div>
                    </h3>
                    <!--end::Title-->
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
                                <div class="bg-gray-100  rounded-2 px-6 py-5">
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
                                        <span class="text-gray-400 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1">{{$jmlInstansi}}</span>
                                        <!--end::Number-->

                                        <!--begin::Desc-->
                                        <span class="text-gray-500 fw-semibold fs-6">Instansi</span>
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
                                        <span class="text-gray-400 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1">{{$jmlRapat}}</span>
                                        <!--end::Number-->

                                        <!--begin::Desc-->
                                        <span class="text-gray-500 fw-semibold fs-6">Rapat Dibuat</span>
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
                                        <span class="text-gray-400 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1">{{$jmlMendatang}}</span>
                                        <!--end::Number-->

                                        <!--begin::Desc-->
                                        <span class="text-gray-500 fw-semibold fs-6">Rapat Mendatang</span>
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
                                        <span class="text-gray-400 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1">{{$jmlSelesai}}</span>
                                        <!--end::Number-->

                                        <!--begin::Desc-->
                                        <span class="text-gray-500 fw-semibold fs-6">Rapat Selesai</span>
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

            <!--begin::Engage widget 4-->
            <div class="card border-transparent mb-xl-10" data-bs-theme="light" style="background-color: #1C325E;">
                <!--begin::Body-->
                <div class="card-body d-flex ps-xl-15">
                    <!--begin::Wrapper-->
                    <div class="m-0">
                        <!--begin::Title-->
                        <div class="position-relative fs-2x z-index-2 fw-bold text-white mb-7">
                            <span class="me-2">
                                Selamat Datang di Sistem Informasi
                                <span class="position-relative d-inline-block text-danger">
                                    <a href="#" class="text-danger opacity-75-hover">Management Rapat</a>

                                    <!--begin::Separator-->
                                    <span
                                        class="position-absolute opacity-50 bottom-0 start-0 border-4 border-danger border-bottom w-100"></span>
                                    <!--end::Separator-->
                                </span>
                            </span>
                            <br>
                            Aplikasi untuk monitoring dan digitalisasi Rapat
                        </div>
                        <!--end::Title-->

                        <!--begin::Action-->
                        <div class="mb-3">
                            <a href="{{route('contact-us')}}" target="_blank" class="btn btn-danger fw-semibold me-2">
                                Contact Us
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
            <!--begin::Row-->
            <div class="row g-5 g-xl-10">
                <!--begin::Col-->
                <div class="col-xl-12 ">
                    <!--begin::Slider Widget 1-->
                    <div id="kt_sliders_widget_1_slider"
                        class="card card-flush carousel carousel-custom carousel-stretch slide h-xl-100"
                        data-bs-ride="carousel" data-bs-interval="5000">
                        <!--begin::Header-->
                        <div class="card-header pt-5">
                            <!--begin::Title-->
                            <h4 class="card-title d-flex align-items-start flex-column">
                                <span class="card-label fw-bold text-gray-800">Rapat Hari Ini</span>
                            </h4>
                            <!--end::Title-->

                            <!--begin::Toolbar-->
                            <div class="card-toolbar">
                                <!--begin::Carousel Indicators-->
                                <ol
                                    class="p-0 m-0 carousel-indicators carousel-indicators-bullet carousel-indicators-active-primary">
                                    <li data-bs-target="#kt_sliders_widget_1_slider" data-bs-slide-to="1"
                                        class="ms-1 active" aria-current="true">
                                    </li>
                                    <li data-bs-target="#kt_sliders_widget_1_slider" data-bs-slide-to="2" class="ms-1">
                                    </li>
                                    <li data-bs-target="#kt_sliders_widget_1_slider" data-bs-slide-to="3" class="ms-1">
                                    </li>

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
                                @foreach ($nowEvents as $index => $event)
                                
                                <div class="carousel-item {{$index == 0 ? 'active' : ''}}">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center mb-5">
                                        <!--begin::Info-->
                                        <div class="m-0">
                                            <!--begin::Subtitle-->
                                            <h4 class="fw-bold text-gray-800 mb-3">{{$event->nama_rapat}}</h4>
                                            <!--end::Subtitle-->

                                            <!--begin::Items-->
                                            <div class="d-flex d-grid gap-5">
                                                <!--begin::Item-->
                                                <div class="d-flex flex-column flex-shrink-0 me-4">
                                                    <!--begin::Section-->
                                                    <span
                                                        class="d-flex align-items-center fs-7 fw-bold text-gray-500 mb-2">
                                                        <i
                                                            class="ki-outline ki-right-square fs-6 text-gray-600 me-2"></i>
                                                        {{$event->tanggal_mulai == $event->tanggal_selesai ? tglIndo($event->tanggal_mulai) : tglIndo($event->tanggal_mulai) ." - ". tglIndo($event->tanggal_selesai)}}    
                                                    </span>
                                                    <!--end::Section-->

                                                </div>
                                                <!--end::Item-->

                                                <!--begin::Item-->
                                                <div class="d-flex flex-column flex-shrink-0">
                                                    <!--begin::Section-->
                                                    <span
                                                        class="d-flex align-items-center fs-7 fw-bold text-gray-500 mb-2">
                                                        <i
                                                            class="ki-outline ki-right-square fs-6 text-gray-600 me-2"></i>
                                                        {{$event->jam_mulai == $event->jam_selesai ? waktuIndo($event->jam_mulai) .' - Selesai' : waktuIndo($event->jam_mulai) ." - ". waktuIndo($event->jam_selesai)}}
                                                    
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
                                        <a href="{{route('rapat.detail',[Crypt::encrypt($event->id)])}}" class="btn btn-sm btn-primary mb-2">Detail</a>
                                    </div>
                                    <!--end::Action-->
                                </div>
                                @endforeach
                                <!--end::Item-->

                            </div>
                            <!--end::Carousel-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Slider Widget 1-->


                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->


        </div>
        <!--end::Col-->
    </div>
    <div class="row g-5 g-xl-10">
        <!--begin::Col-->
        <div class="col-xl-12 mb-xl-10">

            <!--begin::Timeline widget 3-->
            <div class="card h-md-100">
                <!--begin::Header-->
                <div class="card-header border-0 pt-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold text-gray-900">Daftar Agenda Rapat</span>

                        {{-- <span class="text-muted mt-1 fw-semibold fs-7">Total 424,567 deliveries</span> --}}
                    </h3>

                    <!--begin::Toolbar-->
                    <div class="card-toolbar">
                        {{-- <a href="#" class="btn btn-sm btn-light">Report Cecnter</a> --}}
                    </div>
                    <!--end::Toolbar-->
                </div>
                <!--end::Header-->

                <!--begin::Body-->
                <div class="card-body">
                    <!--begin::Calendar-->
                    <div id="kt_calendar_app" class="fc fc-media-screen fc-direction-ltr fc-theme-standard">
                        <div class="fc-header-toolbar fc-toolbar fc-toolbar-ltr">
                            <div class="fc-toolbar-chunk">
                                <div class="fc-button-group">
                                    <button title="Previous month" class="fc-prev-button fc-button fc-button-primary"
                                        wire:click="goToPreviousMonth">
                                        <span class="fc-icon fc-icon-chevron-left"></span>
                                    </button>
                                    <button title="Next month" class="fc-next-button fc-button fc-button-primary"
                                        wire:click="goToNextMonth">
                                        <span class="fc-icon fc-icon-chevron-right"></span>
                                    </button>
                                </div>
                            </div>
                            <div class="fc-toolbar-chunk">
                                <h2 class="fc-toolbar-title" id="fc-dom-1">{{ $date->format('F Y') }}</h2>
                            </div>
                            <div class="fc-toolbar-chunk">
                                <div class="fc-button-group">
                                </div>
                            </div>
                        </div>
                        <div aria-labelledby="fc-dom-1" class="fc-view-harness fc-view-harness-active"
                            style="height: 888.889px;">
                            <div class="fc-daygrid fc-dayGridMonth-view fc-view table-responsive">
                                <table role="grid" class="fc-scrollgrid  fc-scrollgrid-liquid">
                                    <thead>
                                        <tr>
                                            <th role="columnheader" class="fc-col-header-cell fc-day fc-day-sun">
                                                <div class="fc-scrollgrid-sync-inner"><a aria-label="Sunday"
                                                        class="fc-col-header-cell-cushion ">Senin</a></div>
                                            </th>
                                            <th role="columnheader" class="fc-col-header-cell fc-day fc-day-sun">
                                                <div class="fc-scrollgrid-sync-inner"><a aria-label="Sunday"
                                                        class="fc-col-header-cell-cushion ">Selasa</a></div>
                                            </th>
                                            <th role="columnheader" class="fc-col-header-cell fc-day fc-day-sun">
                                                <div class="fc-scrollgrid-sync-inner"><a aria-label="Sunday"
                                                        class="fc-col-header-cell-cushion ">Rabu</a></div>
                                            </th>
                                            <th role="columnheader" class="fc-col-header-cell fc-day fc-day-sun">
                                                <div class="fc-scrollgrid-sync-inner"><a aria-label="Sunday"
                                                        class="fc-col-header-cell-cushion ">Kamis</a></div>
                                            </th>
                                            <th role="columnheader" class="fc-col-header-cell fc-day fc-day-sun">
                                                <div class="fc-scrollgrid-sync-inner"><a aria-label="Sunday"
                                                        class="fc-col-header-cell-cushion ">Jumat</a></div>
                                            </th>
                                            <th role="columnheader" class="fc-col-header-cell fc-day fc-day-sun">
                                                <div class="fc-scrollgrid-sync-inner"><a aria-label="Sunday"
                                                        class="fc-col-header-cell-cushion ">Sabtu</a></div>
                                            </th>
                                            <th role="columnheader" class="fc-col-header-cell fc-day fc-day-sun">
                                                <div class="fc-scrollgrid-sync-inner"><a aria-label="Sunday"
                                                        class="fc-col-header-cell-cushion ">Minggu</a></div>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody role="rowgroup">
                                        @php
                                        $weeks = array_chunk($days, 7);
                                        $today = now()->format('Y-m-d');
                                        @endphp

                                        @foreach ($weeks as $week)
                                        <tr role="row">
                                            @foreach ($week as $day)
                                            <td role="gridcell"
                                                class="{{ $day->month !== $date->month ? 'fc-day-other' : 'fc-day' }} {{ $day->format('Y-m-d') == $today ? 'fc-day-today' : '' }}"
                                                data-date="{{ $day->format('Y-m-d') }}">
                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                    <div class="fc-daygrid-day-top"><a id="fc-dom-8"
                                                            class="fc-daygrid-day-number" title="Go to May 1, 2024"
                                                            data-navlink="" tabindex="0">{{ $day->day }}</a></div>
                                                    @if($events->has($day->format('Y-m-d')))
                                                    <div class="fc-daygrid-day-events">
                                                        @foreach ($events[$day->format('Y-m-d')] as $event)
                                                        <div class="fc-daygrid-event-harness" style="margin-top: 0px;">
                                                            <a wire:click="$dispatch('openModal', { component: 'frontend.modal.detail-kalender', arguments: { id: {{ $event->id }} }})"
                                                                class="fc-daygrid-event fc-daygrid-block-event fc-h-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-past {{$event->status == 3 ? 'border-danger bg-danger text-inverse-danger' : 'border-success bg-success text-inverse-success'}}"
                                                                tabindex="0">
                                                                <div class="fc-event-main">
                                                                    <div class="fc-event-main-frame">
                                                                        <div class="fc-event-title-container">
                                                                            <div class="fc-event-title fc-sticky">
                                                                                {{$event->nama_rapat}}</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        @endforeach
                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;">
                                                        </div>
                                                    </div>
                                                    @endif
                                                </div>
                                                @endforeach
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end: Card Body-->
            </div>
            <!--end::Timeline widget 3-->
        </div>
        <!--end::Col-->

    </div>

    @push('css')

    <style>
        .fc-daygrid-day-frame {
            height: 100px;
            /* Tinggi yang diinginkan untuk setiap sel */
        }

        /* Gaya untuk tablet */
        @media (max-width: 768px) {
            .fc-daygrid-day-frame {
                width: 80px;
                height: 80px;
            }
        }

        .fc-day-today {
            background-color: #bcbcbca8;
            /* Warna latar belakang untuk hari ini */
            color: #000;
            /* Warna teks untuk hari ini */
        }

        /* Gaya untuk mobile */
        @media (max-width: 480px) {
            .fc-daygrid-day-frame {
                width: 60px;
                height: 60px;
                font-size: 12px;
            }
        }
    </style>
    @endpush