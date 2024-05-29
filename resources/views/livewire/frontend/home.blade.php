<div>
    @section('title')
    Home
    @stop
    @section('mainMenu')
    Home
    @stop
    @section('subMenu')
    Home
    @stop
    <div id="kt_app_toolbar" class="app-toolbar  py-6 ">
        <!--begin::Toolbar container-->
        <div id="kt_app_toolbar_container" class="app-container  container-xxl d-flex align-items-start ">
            <!--begin::Toolbar container-->
            <div class="d-flex flex-column flex-row-fluid">
                <!--begin::Toolbar wrapper-->
                <div class="d-flex align-items-center pt-1">

                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold">

                        <!--begin::Item-->
                        <li class="breadcrumb-item text-white fw-bold lh-1">
                            <a href="#" class="text-white text-hover-primary">
                                <i class="ki-outline ki-home text-white fs-3"></i>
                            </a>
                        </li>
                        <!--end::Item-->

                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <i class="ki-outline ki-right fs-4 text-white mx-n1"></i> </li>
                        <!--end::Item-->


                        <!--begin::Item-->
                        <li class="breadcrumb-item text-white fw-bold lh-1">
                            Beranda </li>
                        <!--end::Item-->


                    </ul>
                    <!--end::Breadcrumb-->

                </div>
                <!--end::Toolbar wrapper--->

                <!--begin::Toolbar wrapper--->
                <div class="d-flex flex-stack flex-wrap flex-lg-nowrap gap-4 gap-lg-10 pt-6 pb-18 py-lg-13">

                    <!--begin::Page title-->
                    <div class="page-title d-flex align-items-center me-3">
                        <img alt="Logo" src="{{ asset('frontend/assets/media/svg/misc/layer.svg') }}"
                            class="h-60px me-5" />

                        <!--begin::Title-->
                        <h1
                            class="page-heading d-flex text-white fw-bolder fs-2 flex-column justify-content-center my-0">
                            Beranda
                            <!--begin::Description-->
                            <span class="page-desc text-white opacity-50 fs-6 fw-bold pt-4">
                                Page Beranda </span>
                            <!--end::Description-->
                        </h1>
                        <!--end::Title-->
                    </div>
                    <!--end::Page title-->
                </div>
                <!--end::Toolbar wrapper--->
            </div>
            <!--end::Toolbar container--->
        </div>
        <!--end::Toolbar container-->
    </div>
    <!--end::Toolbar-->
    <!--begin::Wrapper container-->
    <div class="app-container ">
        <!--begin::Main-->
        <div class="app-main flex-column flex-row-fluid " id="kt_app_main">
            <!--begin::Content wrapper-->
            <div class="d-flex flex-column flex-column-fluid">
                <!--begin::Content-->
                <div id="kt_app_content" class="app-content ">
                    <div class="position-relative mb-17">
                        <!--begin::Overlay-->
                        <div class="overlay overlay-show">
                            <!--begin::Image-->
                            <div class="bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-250px"
                                style="background-image:url('{{ asset('frontend/assets/media/stock/1600x800/img-1.jpg') }}')">
                            </div>
                            <!--end::Image-->

                            <!--begin::layer-->
                            <div class="overlay-layer rounded bg-black" style="opacity: 0.4">
                            </div>
                            <!--end::layer-->
                        </div>
                        <!--end::Overlay-->

                        <!--begin::Heading-->
                        <div class="position-absolute text-white mb-8 ms-10 bottom-0">
                            <!--begin::Title-->
                            <h3 class="text-white fs-2qx fw-bold mb-3 m">Selamat Datang Management Rapat</h3>
                            <!--end::Title-->

                            <!--begin::Text-->
                            <div class="fs-5 fw-semibold">
                                Aplikasi dibuat berkaitan dengan Management Rapat yang akan digunakan untuk
                                Pemerintah
                                Kabupaten Bandung. dengan aplikasi ini diharapkan event yang dibuat dapat mudah
                                dipublikasi sehingga peserta rapat dapat mempelajari apa yang akan di akan dibahas
                                pada
                                rapat tersebut.
                            </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Heading-->
                    </div>
                    <!--begin::Inbox App - View & Reply -->
                    <div class="d-flex flex-column flex-lg-row">

                        <div class="col-lg-12 col-xl-12 mb-10">

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
                                    <div id="kt_calendar_app"
                                        class="fc fc-media-screen fc-direction-ltr fc-theme-standard">
                                        <div class="fc-header-toolbar fc-toolbar fc-toolbar-ltr">
                                            <div class="fc-toolbar-chunk">
                                                <div class="fc-button-group">
                                                    <button title="Previous month" class="fc-prev-button fc-button fc-button-primary" wire:click="goToPreviousMonth">
                                                        <span class="fc-icon fc-icon-chevron-left"></span>
                                                    </button>
                                                    <button title="Next month" class="fc-next-button fc-button fc-button-primary" wire:click="goToNextMonth">
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
                                                            <th role="columnheader"
                                                                class="fc-col-header-cell fc-day fc-day-sun">
                                                                <div class="fc-scrollgrid-sync-inner"><a aria-label="Sunday"
                                                                class="fc-col-header-cell-cushion ">Senin</a></div></th>
                                                            <th role="columnheader"
                                                                class="fc-col-header-cell fc-day fc-day-sun">
                                                                <div class="fc-scrollgrid-sync-inner"><a aria-label="Sunday"
                                                                class="fc-col-header-cell-cushion ">Selasa</a></div></th>
                                                            <th role="columnheader"
                                                                class="fc-col-header-cell fc-day fc-day-sun">
                                                                <div class="fc-scrollgrid-sync-inner"><a aria-label="Sunday"
                                                                class="fc-col-header-cell-cushion ">Rabu</a></div></th>
                                                            <th role="columnheader"
                                                                class="fc-col-header-cell fc-day fc-day-sun">
                                                                <div class="fc-scrollgrid-sync-inner"><a aria-label="Sunday"
                                                                class="fc-col-header-cell-cushion ">Kamis</a></div></th>
                                                            <th role="columnheader"
                                                                class="fc-col-header-cell fc-day fc-day-sun">
                                                                <div class="fc-scrollgrid-sync-inner"><a aria-label="Sunday"
                                                                class="fc-col-header-cell-cushion ">Jumat</a></div></th>
                                                            <th role="columnheader"
                                                                class="fc-col-header-cell fc-day fc-day-sun">
                                                                <div class="fc-scrollgrid-sync-inner"><a aria-label="Sunday"
                                                                class="fc-col-header-cell-cushion ">Sabtu</a></div></th>
                                                            <th role="columnheader"
                                                                class="fc-col-header-cell fc-day fc-day-sun">
                                                                <div class="fc-scrollgrid-sync-inner"><a aria-label="Sunday"
                                                                class="fc-col-header-cell-cushion ">Minggu</a></div></th>
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
                                                            <td role="gridcell" class="{{ $day->month !== $date->month ? 'fc-day-other' : 'fc-day' }} {{ $day->format('Y-m-d') == $today ? 'fc-day-today' : '' }}" 
                                                            data-date="{{ $day->format('Y-m-d') }}">
                                                            <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                <div class="fc-daygrid-day-top"><a id="fc-dom-8" class="fc-daygrid-day-number" title="Go to May 1, 2024"
                                                                        data-navlink="" tabindex="0">{{ $day->day }}</a></div>
                                                                @if($events->has($day->format('Y-m-d')))
                                                                <div class="fc-daygrid-day-events">
                                                                    @foreach ($events[$day->format('Y-m-d')] as $event)
                                                                    <div class="fc-daygrid-event-harness" style="margin-top: 0px;">
                                                                        <a wire:click="$dispatch('openModal', { component: 'frontend.modal.detail-kalender', arguments: { id: {{ $event->id }} }})"
                                                                        class="fc-daygrid-event fc-daygrid-block-event fc-h-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-past border-success bg-success text-inverse-success"
                                                                            tabindex="0">
                                                                            <div class="fc-event-main">
                                                                                <div class="fc-event-main-frame">
                                                                                    <div class="fc-event-title-container">
                                                                                        <div class="fc-event-title fc-sticky">{{$event->nama_rapat}}</div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                    @endforeach
                                                                    <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
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
                                    <!--end::Calendar-->
                                </div>
                                <!--end: Card Body-->
                            </div>
                            <!--end::Timeline widget 3-->

                        </div>
                    </div>
                    <!--end::Inbox App - View & Reply -->
                </div>
                <!--end::Content-->

            </div>
            <!--end::Content wrapper-->
            <!--begin::Footer-->
            <div id="kt_app_footer"
                class="app-footer  d-flex flex-column flex-md-row align-items-center flex-center flex-md-stack py-2 py-lg-4 ">
                <!--begin::Copyright-->
                <div class="text-gray-900 order-2 order-md-1">
                    {{ getApp()->description }}
                </div>
                <!--end::Copyright-->
            </div>
            <!--end::Footer-->
        </div>
        <!--end:::Main-->
    </div>
    <!--end::Wrapper container-->
</div>
@push('css')
<style>
    .fc-daygrid-day-frame {
        height: 100px; /* Tinggi yang diinginkan untuk setiap sel */
    }
    /* Gaya untuk tablet */
    @media (max-width: 768px) {
        .fc-daygrid-day-frame {
            width: 80px;
            height: 80px;
        }
    }
    .fc-day-today {
        background-color: #1e686b; /* Warna latar belakang untuk hari ini */
        color: #000; /* Warna teks untuk hari ini */
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