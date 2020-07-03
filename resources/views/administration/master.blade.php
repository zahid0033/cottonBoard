<!DOCTYPE html>
<html lang="en">
@include('administration.includes.header_link')
<body>

<section id="container" >
    <!-- **********************************************************************************************************************************************************
    TOP BAR CONTENT & NOTIFICATIONS
    *********************************************************************************************************************************************************** -->
    <!--header start-->
@include('administration.includes.header')
<!--header end-->

    <!-- **********************************************************************************************************************************************************
    MAIN SIDEBAR MENU
    *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
{{--@if(Auth::user()->role === 'Admin')
    @include('vendor.includes.admin_sidebar')
@endif
@if(Auth::user()->role === 'vendor')--}}
    @include('administration.includes.vendor_sidebar')
{{--@endif--}}

<!--sidebar end-->

    <!-- **********************************************************************************************************************************************************
    MAIN CONTENT
    *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <div class="col-md-12 text-center  ">
                <!-- validation -->
                @if(count($errors) > 0)
                    <div class="alert alert-danger alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <p align="center" ><marquee direction="up" behavior = "slide" width="350px"><strong >
                                @foreach($errors->all() as $err)
                                    ⚠️{{$err}} <br>
                                    @endforeach</strong></marquee></p>
                    </div>
                @endif
            <!-- /validation -->
                <!-- message -->
                @if(session('msg'))
                    <div class="alert alert-success alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <p align="center" ><marquee direction="up" behavior = "slide" height="20px" width="350px"><strong >{{session('msg')}}!</strong></marquee></p>
                    </div>
            @endif
            <!-- /message -->
               {{--modal here if any --}}

            </div>
            @yield('content')
        </section>
    </section>

    <!--main content end-->
    <!--footer start-->
@include('administration.includes.footer')
<!--footer end-->
</section>

<!-- js placed at the end of the document so the pages load faster -->
@include('administration.includes.footer_link')


</body>
</html>
