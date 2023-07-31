@extends('layouts.frontend')

@section('content')

    @php
        $a = \App\Models\About::find(env('SCHOOL_ID'));
    @endphp
    @if ($a->classes)
        @php
            $classes = $a->classes;
        @endphp

        <section class="about-page-content">
            <div class="container">
                <div class="abt-page-row">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6">
                            <div class="section-title">
                                <h2><span>{{ $a->name }}</span> ga <br> hush kelibsiz</h2>
                                <p class="mw-100">{{ $a->description }}


                                    vestibulum leo sagittis et.</p><a href="{{ route('classes.index') }}" title=""
                                    class="btn-default">Classes <i class="fa fa-long-arrow-alt-right"></i></a>
                            </div>
                            <!--section-title end-->
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="avt-img"><img width="500" height="500" src="{{ asset("images/$a->image") }}"
                                    alt=""></div>
                            <!--avt-img end-->
                        </div>
                    </div>

                </div>
                <!--abt-page-row end-->
            </div>
        </section>
        <!--main-banner end-->
        <!--about-us-section end-->
        <section class="classes-section">
            <div class="container">
                <div class="sec-title">
                    <h2>Bizning sinflarimiz</h2>
                    <p>Bizning kichik sinflarimiz guruhlar ichida jonli muloqot qilish imkonini beradi va shu bilan
                        o'quvchilarimizning o'rganish natijalarini optimallashtiradigan</p>
                </div>
                <!--sec-title end-->
                <div class="classes-sec">
                    <div class="row classes-carousel">
                        @foreach ($classes as $class)
                            <div class="col-lg-3">
                                <div class="classes-col wow fadeInUp" data-wow-duration="1000ms">
                                    <div class="class-thumb"><img src="{{ asset('images/' . $class->image) }}"
                                            alt="" class="w-100">

                                    </div>
                                    <div class="class-info">
                                        <h3><a href="{{ route('class.detail', $class->id) }}"
                                                title="">{{ $class->class }}-
                                                Sinf</a></h3>
                                        <span>Xar kuni</span> <span></span>
                                        <div class="d-flex flex-wrap align-items-center">
                                            <div class="posted-by"><img style="width: 30px; height: 30px"
                                                    src="{{ asset('images/' . $class->teacher->image) }}" alt="">
                                                <a href="assets/images/resources/bg4.jpg.html#"
                                                    title="">{{ $class->teacher->firstname }}
                                                    {{ $class->teacher->lastname }}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--classes-col end-->
                            </div>
                        @endforeach
                    </div>
                    <div class="lnk-dv text-center"><a href="{{ route('classes.index') }}" title=""
                            class="btn-default">Classes <i class="fa fa-long-arrow-alt-right"></i></a></div>
                </div>
                <!--classes-sec end-->
            </div>
        </section>
        <!--classes-section end-->
        <section class="teachers-section">
            <div class="container">
                <div class="section-title text-center">
                    <h2>Bizning ajoyib<br>O'qtuvchilar</h2>
                    <p>"Yaxshi o'qituvchi umidni ilhomlantirishi, tasavvurni yoqishi va o'rganishga muhabbat uyg'otishi
                        mumkin."
                    </p>
                </div>
                <!--section-title end-->
                <div class="teachers">
                    <div class="row">
                        @foreach ($teachers as $teacher)
                            <div class="col-lg-3 col-md-3 col-sm-6 col-6 full-wdth">
                                <div class="teacher">
                                    <div class="teacher-img">
                                        <img style="width: 235px; height: 425px;"
                                            src="{{ '../../images/' . $teacher->image }}" alt="teacher's image"
                                            class="w-100">


                                    </div>
                                    <div class="teacher-info">
                                        <h3><a href="teacher-single.html" title="">{{ $teacher->firstname }}
                                                {{ $teacher->lastname }}</a></h3>
                                        <span>{{ $teacher->category }} O`qituvchisi</span>
                                        <span>
                                            @if ($teacher->degree)
                                                @dd($teacher->degree)
                                            @endif O`qituvchi
                                        </span>
                                    </div>
                                </div>
                                <!--teacher end-->
                            </div>
                        @endforeach
                    </div>
                </div>
                <!--teachers end-->
            </div>
        </section>
        <section class="course-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="find-course">
                            <div class="sec-title">
                                <h2>Kursingizni toping</h2>
                                <p>Qaysi fan, kurs turi yoki universitet yoki kollej sizga mos kelishini hal
                                    qilmayapsizmi?
                                    Ushbu muhim qarorni hal qilish bo'yicha maslahatlarimiz va maslahatlarimizni
                                    o'qing</p>
                                <h3><img src="assets/img/icon11.png" alt="">Bog'lanish uchun: <strong>+998
                                        {{ $a->phone_number }}
                                    </strong></h3>
                            </div>
                            <!--sec-title end-->
                            <div class="course-img"><img src="assets/img/course-img.png" alt=""></div>
                            <!--course-img end-->
                        </div>
                        <a href="{{ route('course.index') }}" title=""
                            style="color: #044e7c
                                 "
                            class="read-more text-bg-primary">Ko`proq
                            <i class="fa fa-long-arrow-alt-right"></i></a>
                        <!--find-course end-->
                    </div>
                    {{-- Ma'lumot yo' --}}
                    <div class="col-lg-6">
                        <div class="courses-list">
                            <!--course-card end-->
                            @foreach ($courses as $course)
                                <div class="course-card wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="400ms">
                                    <div class="d-flex flex-wrap align-items-center">
                                        <ul class="course-meta">
                                            <li><img src="assets/img/icon12.png" alt="">
                                                {{-- {{ $course->created_at->format('d/m/Y') }}</li> --}}
                                            <li>{{ $course->start_time }} - {{ $course->end_time }}</li>
                                        </ul>
                                        <span>{{ $course->price }} UZS </span>
                                    </div>
                                    <h3><a href="{{ route('course.detail', $course->id) }}"
                                            title="">{{ $course->name }}</a></h3>
                                    <div class="d-flex flex-wrap">
                                        <div class="posted-by"><img style="width: 25px ;height: 25px"
                                                src="{{ asset('images/' . $course->teacher->image) }}" alt="Class image">
                                            <a href="{{ asset('images/' . $course->teacher->image) }}"
                                                title="">{{ $course->teacher->firstname }}
                                                {{ $course->teacher->firstname }}</a>
                                        </div>
                                        <span class="locat"><img src="assets/img/loct.png"
                                                alt="">{{ $a->name }}
                                        </span>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                    <!--course-section end-->
                    <section class="blog-section">
                        <div class="container">
                            <div class="section-title text-center">
                                <h2>So'nggi yangiliklar</h2>
                                <p>Biz haqimizdagi eng sara so'nggi yangiliklar haqida bilib oling</p>
                            </div>
                            <!--section-title end-->
                            <div class="blog-posts">
                                <div class="row">
                                    @foreach ($blogs as $blog)
                                        <div class="col-lg-4 col-md-6 col-sm-6">
                                            <div class="blog-post">


                                                <div class="blog-thumbnail"><img style="width: 369px; height: 246px"
                                                        src="{{ asset('images/' . $blog->image) }}" alt=""
                                                        class="w-100">

                                                    <span class="category">{{ $blog->title }}</span>
                                                </div>
                                                <div class="blog-info">
                                                    <ul class="meta">
                                                        <li><a href="assets/images/resources/bg4.jpg.html#"
                                                                title=""></a>
                                                        </li>
                                                        <li><a href="assets/images/resources/bg4.jpg.html#"
                                                                title="">by
                                                                Admin</a></li>
                                                        <li><img src="assets/img/icon13.png" alt=""><a
                                                                href="assets/images/resources/bg4.jpg.html#"
                                                                title="">{{ $blog->category->name }},</a><a
                                                                href="assets/images/resources/bg4.jpg.html#"
                                                                title="">
                                                                School</a></li>
                                                    </ul>
                                                    <h3><a href="{{ route('blog.show', $blog->id) }}"
                                                            title="">{{ $blog->title }}</a></h3>
                                                    <p>{{ substr($blog->description, 0, 25) }}...
                                                    </p><a href="{{ route('blog.show', $blog->id) }}" title=""
                                                        class="read-more">Read <i
                                                            class="fa fa-long-arrow-alt-right"></i></a>
                                                </div>
                                            </div>
                                            <!--blog-post end-->
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <!--blog-posts end-->
                        </div>
                    </section>
                    <!--blog-section end-->
                    <!--newsletter-sec end-->
    @endif
@endsection
