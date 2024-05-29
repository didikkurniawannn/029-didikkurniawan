<div class="app-navbar-item ms-1 ms-md-4">
    <div class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-35px h-35px"
        data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
        data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end"
        id="kt_menu_item_{{ strtolower($type) }}">
        <span class="badge py-3 px-4 fs-7 badge-light-{{ $type === 'Terdaftar' ? 'warning' : 'success' }}">{{ jmlDropdown($item->id, $type) }} Orang</span>
    </div>
    <div class="menu menu-sub menu-sub-dropdown menu-column w-350px w-lg-375px"
        data-kt-menu="true" id="kt_menu_notifications" style="">
        <div class="d-flex flex-column bgi-no-repeat rounded-top"
            style="background-image:url('{{ asset('backend/themes/assets/media/misc/menu-header-bg.jpg') }}')">
            <h3 class="text-white fw-semibold px-9 mt-10 mb-6">
                Peserta {{ $type }}
            </h3>
        </div>
        <div class="tab-content">
            <div class="tab-pane fade active show"
                id="kt_topbar_notifications_1" role="tabpanel">
                <div class="scroll-y mh-325px my-5 px-8">
                    @foreach(getDropdown($item->id, $type) as $dropdown)
                    <div class="d-flex flex-stack py-4">
                        <div class="d-flex align-items-center">
                            <div class="mb-0 me-2">
                                <a href="#"
                                    class="fs-6 text-gray-800 text-hover-primary fw-bold">{{ $dropdown->nama }}</a>
                                <div class="text-gray-500 fs-7">{{ $dropdown->instansi == NULL ? '-' : $dropdown->instansi }}</div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>