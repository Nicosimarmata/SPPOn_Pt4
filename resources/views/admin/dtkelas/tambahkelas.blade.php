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
                        <div class="card-header"><h3>Tambah Data Kelas</h3></div>
                        <div class="card-body">
     
                            <form class="forms-sample" action="{{route('admin.dtkelas.store')}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Tingkatan Kelas</label>
                                    <input type="text" class="form-control" name="tingkatan_kelas" id="exampleInputUsername1" placeholder="Tingkatan Kelas">
                                </div>
                                <div class="form-group"></div>
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
