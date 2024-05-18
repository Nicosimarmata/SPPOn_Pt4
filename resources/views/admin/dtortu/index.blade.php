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
                        <h3 class="mb-3">Data Orang Tua Siswa</h3>
                        <a href="{{route('admin.dtortu.tambah')}}" class="btn btn-primary"><i class="ik ik-plus-square"></i>Tambah Data</a>
                    </div>
                    <div class="card-body">
                        <div class="dt-responsive">
                            <table id="scr-vtr-dynamic" class="table table-striped table-bordered nowrap">
                                <thead>
                                    <tr>
                                        <th>Nama Orang Tua</th>
                                        <th>No Telepon</th>
                                        <th>Alamat</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Joko</td>
                                        <td>081212345678</td>
                                        <td>Ringroad</td>
                                        <td>
                                            <a href="#!"><i class="ik ik-eye f-16 mr-15 text-blue"></i></a>
                                            <a href="#!"><i class="ik ik-edit f-16 mr-15 text-green"></i></a>
                                            <a href="#!"><i class="ik ik-trash-2 f-16 text-red"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
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
