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
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header"><h3>Tambah Data Siswa</h3></div>
                        <div class="card-body">
                            <form class="forms-sample">
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Nama Lengkap</label>
                                    <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Nama Siswa">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Username</label>
                                    <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword4">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword4" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <label for="exampleSelectGender">Kelas</label>
                                        <select class="form-control" id="exampleSelectGender">
                                            <option>Pilih Kelas</option>
                                            <option>7A</option>
                                            <option>7B</option>
                                            <option>8A</option>
                                        </select>
                            </div>
                                <div class="form-group">
                                        <label for="exampleSelectGender">Jenis Kelamin</label>
                                            <select class="form-control" id="exampleSelectGender">
                                                <option>Pilih Jenis Kelamin</option>
                                                <option>Laki-laki</option>
                                                <option>Perempuan</option>
                                            </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleSelectGender">Status Orang Tua</label>
                                        <select class="form-control" id="exampleSelectGender">
                                            <option>Pilih Status</option>
                                            <option>Masih Hidup</option>
                                            <option>Yatim</option>
                                            <option>Piatu</option>
                                        </select>
                                <div class="form-group">
                                    <label for="exampleTextarea1">Alamat</label>
                                    <textarea class="form-control" id="exampleTextarea1" rows="4"></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input">
                                        <span class="custom-control-label">&nbsp;Remember me</span>
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                <button class="btn btn-light">Cancel</button>
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
