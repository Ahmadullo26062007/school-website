@extends('layouts.frontend')

@section('content')
    @php
        $a = \App\Models\About::find(env('SCHOOL_ID'));


$s = explode(':', $course->start_time)[0];
$e = explode(':', $course->end_time)[0];
$d = ((int) $e) - ((int) $s);
    @endphp
    <section class="page-content style2">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8">
                    <div class="class-single-content">
                        <h2>{{ $class->number }}-{{ $class->name }}</h2>
                        <ul class="meta-box">
                            <li><a href="{{ route('home') }}" title="">Bosh sahifa</a></li>
                            <li><span>Sinf</span></li>
                        </ul>
                        <p>{{ $class->description }}</p>

                        <div class="class-gallery">
                            <div class="class-gallery-img"><a href="assets/img/class-gallery1.jpg" title=""
                                    class="html5lightbox" data-group="set1"><img src="assets/img/class-gallery1.jpg"
                                        alt=""></a></div>
                            <!--class-gallery-img end-->
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                                    <div class="class-gallery-img"><a href="assets/img/class-gal2.jpg" title=""
                                            class="html5lightbox" data-group="set1"><img src="assets/img/class-gallery2.jpg"
                                                alt=""></a></div>
                                    <!--class-gallery-img end-->
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                                    <div class="class-gallery-img"><a href="assets/img/class-gal3.jpg" title=""
                                            class="html5lightbox" data-group="set1"><img src="assets/img/class-gallery3.jpg"
                                                alt=""></a></div>
                                    <!--class-gallery-img end-->
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                                    <div class="class-gallery-img"><a href="assets/img/class-gal4.jpg" title=""
                                            class="html5lightbox" data-group="set1"><img src="assets/img/class-gallery4.jpg"
                                                alt=""></a></div>
                                    <!--class-gallery-img end-->
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                                    <div class="class-gallery-img"><a href="assets/img/class-gal5.jpg" title=""
                                            class="html5lightbox" data-group="set1"><img src="assets/img/class-gallery5.jpg"
                                                alt=""></a></div>
                                    <!--class-gallery-img end-->
                                </div>
                            </div>
                        </div>
                        <!--class-gallery end-->

                        <h3>Bizning maqsadimiz</h3>

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <ul class="ordrd">
                                    <li>O'quvchiga bilim berish</li>
                                    <li>O'quvchig vatini mazmunli o'tkizish</li>

                                </ul>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <ul class="ordrd">
                                    <li>O'quvchig kelajakda ish bilan ta'minlash</li>
                                    <li>O'quvchig sifatli bilim berish</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--class-single-content end-->
                </div>
                <div class="col-xl-4 col-lg-4">
                    <div class="sidebar class-sidebar"><br><br><br><br><br><br>
                        <div class="widget widget-information">
                            <img style="width: 100%"
                                src="{{ asset('images/64986286d5e42beach-sunset-evening-y6-1366x768.jpg') }}"
                                alt="">
                            <div class="tech-info">
                                <div class="tech-tble"><img src="assets/img/thumb1.png" alt="">
                                    <div class="tch-info">
                                        <h3>{{ $class->teacher->firstname }} {{ $class->teacher->lastname }} </h3>
                                        <span>{{ $class->number }}-{{ $class->name }} </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--widget-information end-->
                        <!--widget-contact-dp end-->
                    </div>
                    <!--sidebar end-->
                </div>
            </div>
        </div>
    </section>
    <!--page-content end-->
@endsection
