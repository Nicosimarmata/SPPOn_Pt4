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
                        <h3 class="mb-3">Data Siswa</h3>
                        <a href="{{route('admin.dtsiswa.tambah')}}" class="btn btn-primary"><i class="ik ik-plus-square"></i>Tambah Data</a>
                    </div>
                    <div class="card-body">
                        <div class="dt-responsive">
                            <table id="scr-vtr-dynamic" class="table table-striped table-bordered nowrap">
                                <thead>
                                    <tr>
                                        <th>Nama Siswa</th>
                                        <th>Kelas</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Status Ortu</th>
                                        <th>Alamat</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Nur Achmad Khoirudin</td>
                                        <td>9-B</td>
                                        <td>Laki-laki</td>
                                        <td>Masih Hidup</td>
                                        <td>Jl. Ringroad Utara</td>
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
