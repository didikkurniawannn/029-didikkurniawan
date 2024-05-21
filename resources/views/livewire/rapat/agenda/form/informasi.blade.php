    <div>
        @section('title')
        1. Informasi Agenda Rapat
        @stop
        @section('menu')
        Buat Rapat > <b>1. Informasi Agenda Rapat</b>
        @stop
        @section('step')
        25%
        @stop

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
                <div class="card card-flush h-xl-100">
                    
                    <div class="card-body">
                        
                    </div>
                </div>
            </div>
        </div>

        @push('css')

        <style>
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
            .progress-bar.active{
                animation: reverse progress-bar-stripes 0.40s linear infinite, animate-positive 2s;
            }
            @-webkit-keyframes animate-positive{
                0% { width: 0%; }
            }
            @keyframes animate-positive {
                0% { width: 0%; }
            }
        </style>
        @endpush