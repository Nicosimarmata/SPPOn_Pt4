@include('partials.header')

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <div class="wrapper">
        @include('partials.topbar')
        @include('sweetalert::alert')
        <div class="page-wrap">

            @include('partials.sidebar')
            <div class="main-content">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header"><h3>Tambah Data Pengguna</h3></div>
                        <div class="card-body">
     
                            <form class="forms-sample" action="{{route('pengguna.store')}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Nama Lengkap</label>
                                    <input type="text" name="nama_lengkap" class="form-control" id="exampleInputUsername1" placeholder="Nama Siswa">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Username</label>
                                    <input type="text" name="username" class="form-control" id="exampleInputUsername1" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword4">Password</label>
                                    <input type="password" name="password" class="form-control" id="exampleInputPassword4" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <label for="exampleSelectGender">Role</label>
                                        <select name="role" class="form-control" id="exampleSelectGender">
                                            <option>Pilih Kelas</option>
                                            <option value="siswa">Siswa</option>
                                            <option value="orang_tua">Orang Tua</option>
                                        </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">No Telepon</label>
                                <input type="number" name="no_tlpn" class="form-control" id="exampleInputUsername1" placeholder="No Telepon">
                            </div>
                            <div class="form-group">
                                <label for="exampleTextarea1">Alamat</label>
                                <textarea name="alamat" class="form-control" id="exampleTextarea1" rows="4"></textarea>
                            </div>
                                <div class="form-group"></div>
                                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                              </form>
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
