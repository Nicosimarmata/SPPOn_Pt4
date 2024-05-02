@include('partials.header')

    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    @include('partials.sidebar')  
        
        
        @include('partials.topbar')
        <div class="col-xl-4 col-md-6">
            <div class="card new-cust-card">
                <div class="card-header">
                    <h3>New Customers</h3>
                    <div class="card-header-right">
                        <ul class="list-unstyled card-option">
                            <li><i class="ik ik-chevron-left action-toggle"></i></li>
                            <li><i class="ik ik-minus minimize-card"></i></li>
                            <li><i class="ik ik-x close-card"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="card-block">
                    <div class="align-middle mb-25">
                        <img src="../img/users/1.jpg" alt="user image" class="rounded-circle img-40 align-top mr-15">
                        <div class="d-inline-block">
                            <a href="#!"><h6>Alex Thompson</h6></a>
                            <p class="text-muted mb-0">Cheers!</p>
                            <span class="status active"></span>
                        </div>
                    </div>
                    <div class="align-middle mb-25">
                        <img src="../img/users/2.jpg" alt="user image" class="rounded-circle img-40 align-top mr-15">
                        <div class="d-inline-block">
                            <a href="#!"><h6>John Doue</h6></a>
                            <p class="text-muted mb-0">stay hungry stay foolish!</p>
                            <span class="status active"></span>
                        </div>
                    </div>
                    <div class="align-middle mb-25">
                        <img src="../img/users/3.jpg" alt="user image" class="rounded-circle img-40 align-top mr-15">
                        <div class="d-inline-block">
                            <a href="#!"><h6>Alex Thompson</h6></a>
                            <p class="text-muted mb-0">Cheers!</p>
                            <span class="status deactive text-mute"><i class="far fa-clock mr-10"></i>30 min ago</span>
                        </div>
                    </div>
                    <div class="align-middle mb-25">
                        <img src="../img/users/4.jpg" alt="user image" class="rounded-circle img-40 align-top mr-15">
                        <div class="d-inline-block">
                            <a href="#!"><h6>John Doue</h6></a>
                            <p class="text-muted mb-0">Cheers!</p>
                            <span class="status deactive text-mute"><i class="far fa-clock mr-10"></i>10 min ago</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

        
        
       @include('partials.scripts')
       @include('partials.footer')
    </body>
</html>
