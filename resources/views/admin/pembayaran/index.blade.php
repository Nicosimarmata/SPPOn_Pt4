@include('partials.header')

    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div class="wrapper">
            @include('partials.topbar')
            <div class="page-wrap">
    
                @include('partials.sidebar')
                <div class="main-content">
                    <div class="card">
                        <div class="card-header flex-column align-items-start">
                            <h3 class="mb-3">Form Pembayaran SPP</h3>
                            {{-- <button class="btn btn-primary"><i class="ik ik-plus-square"></i>Tambah Data</button> --}}
                        </div>
                    </div>
                </div>
                @include('partials.rightbar')
                @include('partials.footer')
            </div>
        </div>
        @include('partials.scripts')
    </body>
    
    </html>
