<!DOCTYPE html>
<html lang="en">

<head>
@include('admin.include.head')
@stack('css')
</head>

<body>
    <!-- Navbar Start -->
    @include('admin.include.Navbar')
    <!-- Navbar End -->

    <!-- Carousel Start -->
    @include('admin.include.Carousel')
    <!-- Carousel End -->


    <!-- About Start -->
    @include('admin.include.About')
    <!-- About End -->


    <!-- Service Start -->
    @include('admin.include.Service')
    <!-- Service End -->


    <!-- Offer Start -->
    @include('admin.include.Offer')
    <!-- Offer End -->


    <!-- Menu Start -->
    @include('admin.include.Menu')
    <!-- Menu End -->


    <!-- Reservation Start -->
    @include('admin.include.Reservation')
    <!-- Reservation End -->


    <!-- Testimonial Start -->
    @include('admin.include.Testimonial')
    <!-- Testimonial End -->


    <!-- Footer Start -->
    @include('admin.include.Footer')
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
@include('admin.include.JavaScript')
@stack('js')
</body>

</html>