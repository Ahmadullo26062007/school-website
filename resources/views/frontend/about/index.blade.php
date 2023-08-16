@extends('layouts.frontend')

@section('content')
    @php
        $a= \App\Models\About::find(env("SCHOOL_ID"));
    @endphp
    <section class="pager-section">
        <div class="container">
            <div class="pager-content text-center">
                <h2>Biz haqimizda</h2>
                <ul>
                    <li><a href="{{route('home')}}" title="">Bosh sahifa</a></li>
                    <li><span>Bog'lanish</span></li>
                </ul>
            </div>
            <!--pager-content end-->
{{--            <h2 class="page-titlee">{{$a->name}}</h2>--}}
        </div>
    </section>
    <section class="about-page-content">
        <div class="container">
            <div class="abt-page-row">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="section-title">
                            <h2><span>{{$a->name}}</span> ga <br> hush kelibsiz</h2>
                            <p class="mw-100">{{$a->description}}


                                vestibulum leo sagittis et.</p><a href="{{ route('classes.index') }}" title=""
                                                                  class="btn-default">Classes <i class="fa fa-long-arrow-alt-right"></i></a>
                        </div>
                        <!--section-title end-->
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="avt-img" ><img width="500" height="500" src="{{$a->image}}" alt=""></div>
                        <!--avt-img end-->
                    </div>
                </div>

            </div>
            <!--abt-page-row end-->
        </div>
    </section>

    @php
        function director()
           {
               $d=false;
               $a=\App\Models\About::find(env('SCHOOL_ID'));
               foreach ($a->menegers as $m){
                  if ($m->role_id==1){
                      $d=$m;
                  }
               }

               return $d;
           }

           function zamdirector()
           {
               $d=false;
               $a=\App\Models\About::find(env('SCHOOL_ID'));
               foreach ($a->menegers as $m){
                  if ($m->role_id==2){
                      $d=$m;
                  }
               }

               return $d;
           }

           function zauch()
           {
               $d=false;
               $a=\App\Models\About::find(env('SCHOOL_ID'));
               foreach ($a->menegers as $m){
                  if ($m->role_id==3){
                      $d=$m;
                  }
               }

               return $d;
           }

 @endphp
    <section class="classes-section">
        <div class="section-title text-center">
            <h2>Bizning ajoyib<br>O'qtuvchilar</h2>
            <p>"Yaxshi o'qituvchi umidni ilhomlantirishi, tasavvurni yoqishi va o'rganishga muhabbat uyg'otishi
                mumkin."
            </p>
        </div>
        <div class="container">
            <!--classes-banner end-->
            <div class="classes-section">
                <div class="classes-sec">
                    <div class="row d-flex justify-content-center gap-5">

                                @if(director())
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="classes-col">
                                <div class="class-thumb"><img src="{{director()->image}}"
                                                              alt="Student's class image"
                                                              style="width: 100%; height: 100px;">
                                </div>
                                <div class="class-info">

                                        <p>
                                            rdgtertete fghdrt
                                        </p>
                                        <h3>
                                            {{director()->fullname}}
                                        </h3>
                                        <span>sfsefdfgdr sedffse</span>
                                        <h5>

                                                            <span class="text-dark">
                                                          {{$a->name}} direktori
                                                        </span>

                                        </h5>

                                </div>
                            </div>
                            <!--classes-col end-->
                        </div>

                                    @else
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="classes-col">
                                        <div class="class-thumb"><img src="gsgsegseg"
                                                                      alt="Student's class image"
                                                                      style="width: 100%; height: 100px;">
                                        </div>
                                        <div class="class-info">

                                            <p></p>
                                            <h3>Direktor</h3>
                                            <span></span>
                                            <h3 class="text-danger">hali bu haqida malumot yo`q</h3>
                                        </div>
                                    </div>
                                    <!--classes-col end-->
                                </div>
                                @endif



                                @if(zamdirector())
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="classes-col">
                                <div class="class-thumb"><img src="{{zamdirector()->image}}"
                                                              alt="Student's class image"
                                                              style="width: 100%; height: 100px;">
                                </div>
                                <div class="class-info">

                                        <p>
                                            rdgtertete fghdrt
                                        </p>
                                        <h3>
                                            {{zamdirector()->fullname}}
                                        </h3>
                                        <span>sfsefdfgdr sedffse</span>
                                        <h5>

                                                            <span class="text-dark">
                                                          {{$a->name}} direktor O`rinbosari
                                                        </span>

                                        </h5>

                                </div>
                            </div>
                            <!--classes-col end-->
                        </div>

                                    @else
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="classes-col">
                                        <div class="class-thumb"><img src="gsgsegseg"
                                                                      alt="Student's class image"
                                                                      style="width: 100%; height: 100px;">
                                        </div>
                                        <div class="class-info">

                                            <p></p>
                                            <h3>Direktor</h3>
                                            <span></span>
                                            <h3 class="text-danger">hali bu haqida malumot yo`q</h3>
                                        </div>
                                    </div>
                                    <!--classes-col end-->
                                </div>
                                @endif


                                @if(zauch())
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="classes-col">
                                <div class="class-thumb"><img src="{{zauch()->image}}"
                                                              alt="Student's class image"
                                                              style="width: 100%; height: 100px;">
                                </div>
                                <div class="class-info">

                                        <p>
                                            rdgtertete fghdrt
                                        </p>
                                        <h3>
                                            {{zauch()->fullname}}
                                        </h3>
                                        <span>sfsefdfgdr sedffse</span>
                                        <h5>

                                                            <span class="text-dark">
                                                          {{$a->name}} zauchi
                                                        </span>

                                        </h5>

                                </div>
                            </div>
                            <!--classes-col end-->
                        </div>

                                    @else
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="classes-col">
                                        <div class="class-thumb"><img src="gsgsegseg"
                                                                      alt="Student's class image"
                                                                      style="width: 100%; height: 100px;">
                                        </div>
                                        <div class="class-info">

                                            <p></p>
                                            <h3>Direktor</h3>
                                            <span></span>
                                            <h3 class="text-danger">hali bu haqida malumot yo`q</h3>
                                        </div>
                                    </div>
                                    <!--classes-col end-->
                                </div>
                                @endif


                    </div>
                </div>
                <!--classes-sec end-->
            </div>

        </div>
    </section>

    <!--pager-section end-->
    <section class="page-content">
        <div class="container">
            <div class="mdp-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d477.9651760676301!2d71.97734725308199!3d40.8765122093165!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38bca0b64ef43357%3A0x8d7798d2806477f0!2zQ2hpbm9ib2QsINCj0LfQsdC10LrQuNGB0YLQsNC9!5e1!3m2!1sru!2s!4v1687605922962!5m2!1sru!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <!--mdp-map end-->
            <div class="mdp-contact">
                <div class="row">
                    <div class="col-lg-8 col-md-7">
                        <div class="comment-area">
                            <h3>Kamentariya Qo'shish</h3>
                            <form id="contact-form" method="post" >
                                <div class="response"></div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group"><input type="text" name="name" class="name"
                                                                       placeholder="Ism" required>
                                        </div>
                                        <!--form-group end-->
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group"><input type="number" name="number" class="number"
                                                                       placeholder="Telefon raqam" required></div>
                                        <!--form-group end-->
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <textarea name="message" placeholder="Xabar"></textarea>
                                        </div>
                                        <!--form-group end-->
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-submit"><button type="button" id="submit"
                                                                         class="btn-default">Yuborish <i
                                                    class="fa fa-long-arrow-alt-right"></i></button></div>
                                        <!--form-submit end-->
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!--comment-area end-->
                    </div>
                    <div class="col-lg-4 col-md-5">
                        <div class="mdp-our-contacts">
                            <h3>Bizning kantaktlar</h3>
                            <ul>
                                <li>
                                    <div class="d-flex flex-wrap">
                                        <div class="icon-v"><img src="{{asset('assets/img/icon15.png')}}" alt=""></div>
                                        <div class="dd-cont">
                                            <h4>Tel: </h4><span>+998 {{$a->phone_number}}</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex flex-wrap">
                                        <div class="icon-v"><img src="{{asset('assets/img/icon16.png')}}" alt=""></div>
                                        <div class="dd-cont">
                                            <h4>Ish vaqti</h4><span>Du - Shan {{$a->start_time}} - {{$a->end_time}} </span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex flex-wrap">
                                        <div class="icon-v"><img src="{{asset('assets/img/icon17.png')}}" alt=""></div>
                                        <div class="dd-cont">
                                            <span>{{$a->viloyat}} viloyati, {{$a->tuman}} tumani </span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!--mdp-our-contacts end-->
                    </div>
                </div>
            </div>
            <!--mdp-contact end-->
        </div>
    </section>
@endsection
