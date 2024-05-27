<div class="tab-pane fade" id="kt_stats_widget_1_tab_2" role="tabpanel">
    <!--begin::Table container-->
    <!--begin::Table container-->
    <div class="d-flex flex-column flex-lg-row">
        <!--begin::Sidebar-->
        <div class="flex-lg-row-fluid me-lg-15 order-2 order-lg-1 mb-10 mb-lg-0">
            <!--begin::Contacts-->
            <div class="card card-flush">
                <!--begin::Card header-->
                <div class="card-header pt-7" id="kt_chat_contacts_header">
                    <!--begin::Form-->
                    <h3>Waktu dan Lokasi</h3>
                    <!--end::Form-->
                </div>
                <!--end::Card header-->

                <!--begin::Card body-->
                <div class="card-body pt-5" id="kt_chat_contacts_body">
                    <div class="row mb-7">
                        <!--begin::Label-->
                        <label class="col-lg-4 fw-semibold text-muted">Tanggal</label>
                        <!--end::Label-->

                        <!--begin::Col-->
                        <div class="col-lg-8">
                            <span
                                class="fw-bold fs-6 text-gray-800">{{$informasi->tanggal_mulai == $informasi->tanggal_selesai ? TglIndoHari($informasi->tanggal_mulai) : TglIndoHari($informasi->tanggal_mulai) ." - ". TglIndoHari($informasi->tanggal_selesai)}}</span>
                        </div>
                        <!--end::Col-->
                    </div>
                    <div class="row mb-7">
                        <!--begin::Label-->
                        <label class="col-lg-4 fw-semibold text-muted">Waktu</label>
                        <!--end::Label-->

                        <!--begin::Col-->
                        <div class="col-lg-8">
                            <span
                                class="fw-bold fs-6 text-gray-800">{{ $informasi->jam_mulai == $informasi->jam_selesai ? waktuIndo($informasi->jam_mulai) .' - Selesai' : waktuIndo($informasi->jam_mulai) ." - ". waktuIndo($informasi->jam_selesai) }}</span>
                        </div>
                        <!--end::Col-->
                    </div>
                    <div class="row mb-7">
                        <!--begin::Label-->
                        <label class="col-lg-4 fw-semibold text-muted">Tempat</label>
                        <!--end::Label-->

                        <!--begin::Col-->
                        <div class="col-lg-8">
                            <span class="fw-bold fs-6 text-gray-800">{{ $informasi->tempat }}</span>
                        </div>
                        <!--end::Col-->
                    </div>
                    <div class="row mb-7">
                        <!--begin::Label-->
                        <label class="col-lg-4 fw-semibold text-muted">Alamat</label>
                        <!--end::Label-->

                        <!--begin::Col-->
                        <div class="col-lg-8">
                            <span class="fw-bold fs-6 text-gray-800">{{ $alamat }}</span>
                        </div>
                        <!--end::Col-->
                    </div>
                    <div class="row mb-7">
                        <div class="col-md-12">
                            <div wire:ignore>
                                <div id="mapCanvas" style="width: 100%; height: 500px"></div>
                            </div>
                        </div>
                    </div>
                    <!--end::Table container-->
                </div>
            </div>
        </div>
    </div>
</div>

@push('js')
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDKNBdoFt5N7b8OxFwo8QFvRQIY45Kkxm8&libraries=places&callback=initialize">
</script>

<script>

   
    window.addEventListener('keydown', function (e) {
        if (e.keyIdentifier == 'U+000A' || e.keyIdentifier == 'Enter' || e.keyCode == 13) {
            if (e.target.nodeName == 'INPUT' && e.target.type == 'text') {
                e.preventDefault();
                return false;
            }
        }
        }, true);

        <?php if($lat==NULL){ ?>
    // var position = [-6.8392563, 107.5101425];
    // var position = [-7.110000, 107.620616];
    var position = [-7.022276810042003, 107.52724896352171];
    <?php }else{ ?>
        // var position = [position.coords.latitude, position.coords.longitude];
    var position = [<?php echo $lat; ?>, <?php echo $lng; ?>];
    <?php } ?>

    function initialize() {
    initAutocomplete();
    initMap();
    }

    function initAutocomplete() {
    $('input[name="lat"]').val(position[0]);
    $('input[name="lng"]').val(position[1]);
    // alert(position[0],position[1]);
    var latlng = new google.maps.LatLng(position[0], position[1]);
    var map = new google.maps.Map(document.getElementById('mapCanvas'), {
        zoom: 22,
        center: latlng,
        mapTypeId: google.maps.MapTypeId.SATELLITE,
        attributionControl: false,
    });

    // Change the map type based on user selection
    function changeMapType() {
        var selectedMapType = document.getElementById('mapTypeSelector').value;
        map.setMapTypeId(google.maps.MapTypeId[selectedMapType]);
    }


    // Create the search box and link it to the UI element.
    var input = document.getElementById('pac-input');
    var searchBox = new google.maps.places.SearchBox(input);
    map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

    // Bias the SearchBox results towards current map's viewport.
    map.addListener('bounds_changed', function () {
        searchBox.setBounds(map.getBounds());
    });

    var markers = [];
    // Listen for the event fired when the user selects a prediction and retrieve
    // more details for that place.

    marker2 = new google.maps.Marker({
        position: latlng,
        map: map,
        zoom: 16,
        title: "Latitude:" + position[0] + " | Longitude:" + position[1]
    });
    
    marker2.addListener('click', function() {
    // Membuka Google Maps pada tab baru dengan koordinat marker
        var url = `https://www.google.com/maps/?q=${position[0]},${position[1]}`;
        window.open(url, '_blank');
    });
    }

    var numDeltas = 100;
    var delay = 0; //milliseconds
    var i = 0;
    var deltaLat;
    var deltaLng;

    function transition(result) {
    i = 0;
    deltaLat = (result[0] - position[0]) / numDeltas;
    deltaLng = (result[1] - position[1]) / numDeltas;
    moveMarker();
    }

    function moveMarker() {
    position[0] += deltaLat;
    position[1] += deltaLng;
    var latlng = new google.maps.LatLng(position[0], position[1]);
    marker2.setTitle("Latitude:" + position[0] + " | Longitude:" + position[1]);
    marker2.setPosition(latlng);
    if (i != numDeltas) {
        i++;
        setTimeout(moveMarker, delay);
    }
    $('input[name="lat"]').val(position[0]);
    $('input[name="lng"]').val(position[1]);
    @this.set('lat', position[0], false);
    @this.set('lng', position[1], false);
    }

</script>
@endpush