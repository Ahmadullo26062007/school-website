@extends('layouts.frontend')

@section('content')
    <div class="error-page">
        <h2 class="page-title">Shelly</h2>
        <div class="container">
            <div class="error-text">
                <h2>Oops!</h2>
                <h3>The page does not exist</h3><a href="index.html" title="" class="btn-default">Home Page <i
                        class="fa fa-long-arrow-alt-right"></i></a>
                <ul class="social-icons">
                    <li><a href="error.html#" title=""><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="error.html#" title=""><i class="fab fa-twitter"></i></a></li>
                    <li><a href="error.html#" title=""><i class="fab fa-linkedin-in"></i></a></li>
                </ul>
                <!--social-icons end-->
            </div>
            <!--error-text end-->
        </div>
    </div>
    <!--error-page end-->
@endsection
