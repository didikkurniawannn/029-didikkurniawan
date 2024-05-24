@section('title')
2. Lokasi Agenda Rapat
@stop
@section('menu')
Buat Rapat > <b>2. Lokasi Agenda Rapat</b>
@stop
@section('step')
50%
@stop
<div>
    @if(View::hasSection('step'))
    <div class="col-md-12">
        <div class="progress-outer">
            <div class="progress">
                <div class="progress-bar progress-bar-success progress-bar-striped active"
                    style="width:@yield('step'); box-shadow:-1px 10px 10px rgba(116, 195, 116,0.7);"></div>
                <div class="progress-value">@yield('step')</div>
            </div>
        </div>
    </div>
    @endif
    <div class="row gx-5 gx-xl-10">
        <!--begin::Col-->
        <div class="col-xl-12 mb-10">
            <!--begin::Lists Widget 19-->
            <div class="card h-xl-100">
                <form wire:submit='update'>
                    <div class="card-body">
                        <div class="form-group mb-3 fv-row fv-plugins-icon-container">
                            <div class="row">
                                <div class="col-md-2">
                                    <label class="form-label">Tempat<span class="text-danger">*</span></label>
                                </div>
                                <div class="col-md-10">
                                    <input type="text" class="form-control @error('tempat') is-invalid @enderror"
                                        name="tempat" wire:model="tempat" id="tempat">
                                    @error('tempat') <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-group mb-3 fv-row fv-plugins-icon-container">
                            <div class="row">
                                <div class="col-md-2">
                                    <label class="form-label">Alamat<span class="text-danger">*</span></label>
                                </div>
                                <div class="col-md-10">
                                    <input type="text" class="form-control @error('alamat') is-invalid @enderror"
                                        name="alamat" wire:model="alamat" id="alamat">
                                    @error('alamat') <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>


                        <div class="form-group mb-3 fv-row fv-plugins-icon-container">
                            <div class="row">
                                <div class="col-md-2">
                                    <label class="form-label">Provinsi<span class="text-danger">*</span></label>
                                </div>
                                <div class="col-md-4">
                                    <div wire:ignore>
                                        <div class="input-group mb-2">
                                            <select x-init="$($el).select2({ placeholder: '-- Pilih Provinsi --', });
                                                $($el).on('change', function() {
                                                    $wire.set('provinsi_id', $($el).val());
                                                })" wire:model.live="provinsi_id" name="provinsi_id" id="provinsi_id"
                                                class="form-control form-control-lg form-select-solid @error('provinsi_id') is-invalid @enderror">
                                                <option value="">-- Pilih Provinsi --</option>
                                                @foreach($provinsiList as $provinsi)
                                                <option value="{{$provinsi->id}}">{{$provinsi->id}} -
                                                    {{strtoupper($provinsi->name)}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group mb-3 fv-row fv-plugins-icon-container">
                            <div class="row">
                                <div class="col-md-2">
                                    <label class="form-label">Kota / Kabupaten<span class="text-danger">*</span></label>
                                </div>
                                <div class="col-md-4">
                                    <div wire:ignore.self>
                                        <div class="input-group mb-2">
                                            <select x-init="$($el).select2({ placeholder: '-- Pilih Kabupaten --', });
                                                $($el).on('change', function() {
                                                    $wire.set('kabupaten_id', $($el).val());
                                                })" wire:model.live="kabupaten_id" name="kabupaten_id" id="kabupaten_id"
                                                class="form-control form-control-lg form-select-solid @error('kabupaten_id') is-invalid @enderror">
                                                <option value="">-- Pilih Kabupaten --</option>
                                                @foreach($kabupatenList as $kabupaten)
                                                <option value="{{$kabupaten->id}}">{{$kabupaten->id}} -
                                                    {{strtoupper($kabupaten->name)}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group mb-3 fv-row fv-plugins-icon-container">
                            <div class="row">
                                <div class="col-md-2">
                                    <label class="form-label">Kecamatan<span class="text-danger">*</span></label>
                                </div>
                                <div class="col-md-4">
                                    <div wire:ignore.self>
                                        <div class="input-group mb-2">
                                            <select x-init="$($el).select2({ placeholder: '-- Pilih Kecamatan --', });
                                                $($el).on('change', function() {
                                                    $wire.set('kecamatan_id', $($el).val());
                                                })" wire:model.live="kecamatan_id" name="kecamatan_id" id="kecamatan_id"
                                                class="form-control form-control-lg form-select-solid @error('kecamatan_id') is-invalid @enderror">
                                                <option value="">-- Pilih Kecamatan --</option>
                                                @foreach($kecamatanList as $kecamatan)
                                                <option value="{{$kecamatan->id}}">{{$kecamatan->id}} -
                                                    {{strtoupper($kecamatan->name)}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group mb-3 fv-row fv-plugins-icon-container">
                            <div class="row">
                                <div class="col-md-2">
                                    <label class="form-label">Kelurahan / Desa<span class="text-danger">*</span></label>
                                </div>
                                <div class="col-md-4">
                                    <div wire:ignore.self>
                                        <div class="input-group mb-2">
                                            <select x-init="$($el).select2({ placeholder: '-- Pilih Desa --', });
                                                $($el).on('change', function() {
                                                    $wire.set('desa_id', $($el).val());
                                                })" wire:model.live="desa_id" name="desa_id" id="desa_id"
                                                class="form-control form-control-lg form-select-solid @error('desa_id') is-invalid @enderror">
                                                <option value="">-- Pilih Desa --</option>
                                                @foreach($kelurahanList as $kelurahan)
                                                <option value="{{$kelurahan->id}}">{{$kelurahan->id}} -
                                                    {{strtoupper($kelurahan->name)}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-3 fv-row fv-plugins-icon-container" wire:ignore>
                            <div class="row">
                                <div class="col-md-2">
                                    <label class="form-label">Titik Lokasi Maps</label>
                                </div>
                                <div class="col-md-10">
                                    <input type="text" style="width:50%;margin-top:0.7em;margin-left:2em;" class="form-control"
                                        id="pac-input" name="pac-input" placeholder="Masukkan Nama Lokasi">
                                    <div class="row">
                                        <div class="col-md-12">


                                            <div wire:ignore>
                                                <div id="mapCanvas" style="width: 100%; height: 500px"></div>
                                            </div>
                                            

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                </div>
                                <div class="col-md-6">
                                    <label>Petunjuk Ubah Koordinat</label>
                                    <div class="alert alert-danger">Silahkan Cari & Geser Kursor untuk Merubah Koordinat Sesuai
                                        Lokasi Pertemuan Rapat</div>
                                </div>
                                <div class="col-md-2">
                                    <label>Latitude</label>
                                    <input type="text" wire:model="lat" name="lat" class="form-control" placeholder="Latitude" readonly>
                                </div>
                                <div class="col-md-2">

                                    <label>Longitude</label>
                                    <input type="text" wire:model="lng" name="lng" class="form-control" placeholder="Longitude" readonly>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer py-6 px-9">
                        <div class="btn-list ">
                            <a wire:click="backForm" class="btn btn-warning float-start mb-5">
                            <i class="fa fa-arrow-left"></i> Kembali
                            </a>
                            <button type="submit" class="btn btn-info float-end mb-5" wire:loading.class.remove="bg-info" id="next">
                                Selanjutnya <i class="fa fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    @push('css')
        <style>
            body{
                cursor: default;
            }
            .progress-outer{
                background: #fff;
                border-radius: 50px;
                padding: 25px;
                margin: 10px 0;
                box-shadow: 0 0  10px rgba(209, 219, 231,0.7);
            }
            .progress{
                height: 27px;
                margin: 0;
                overflow: visible;
                border-radius: 50px;
                background: #eaedf3;
                box-shadow: inset 0 10px  10px rgba(244, 245, 250,0.9);
            }
            .progress .progress-bar{
                border-radius: 50px;
            }
            .progress .progress-value{
                position: relative;
                left: -45px;
                top: 4px;
                font-size: 14px;
                font-weight: bold;
                color: #fff;
                letter-spacing: 2px;
            }
            /* .progress-bar.active{
                animation: reverse progress-bar-stripes 0.40s linear infinite;
            } */
            @-webkit-keyframes animate-positive{
                0% { width: 0%; }
            }
            @keyframes animate-positive {
                0% { width: 0%; }
            }
        </style>
    @endpush
    
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

    google.maps.event.addListener(map, 'click', function (event) {
        var result = [event.latLng.lat(), event.latLng.lng()];
        transition(result);
    });

    searchBox.addListener('places_changed', function () {
        var places = searchBox.getPlaces();

        if (places.length == 0) {
            return;
        }

        // Clear out the old markers.
        markers.forEach(function (marker) {
            marker.setMap(null);
        });
        markers = [];

        // For each place, get the icon, name and location.
        var bounds = new google.maps.LatLngBounds();
        places.forEach(function (place) {
            if (!place.geometry) {
                console.log("Returned place contains no geometry");
                return;
            }
            var icon = {
                url: place.icon,
                size: new google.maps.Size(71, 71),
                origin: new google.maps.Point(0, 0),
                anchor: new google.maps.Point(17, 34),
                scaledSize: new google.maps.Size(25, 25)
            };

            // Create a marker for each place.
            markers.push(new google.maps.Marker({
                map: map,
                icon: icon,
                title: place.name,
                position: place.geometry.location
            }));

            if (place.geometry.viewport) {
                // Only geocodes have viewport.
                bounds.union(place.geometry.viewport);
            } else {
                bounds.extend(place.geometry.location);
            }
        });
        map.fitBounds(bounds);
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