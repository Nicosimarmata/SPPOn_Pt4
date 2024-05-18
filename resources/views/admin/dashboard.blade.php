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
        
            </div>
            @include('partials.rightbar')
            @include('partials.footer')
        </div>
    </div>
    @include('partials.scripts')
</body>
  
</html>
