<!DOCTYPE html>
<html lang="en">
@php
    $a = \App\Models\About::find(1);
 @endphp
<head>
    <meta charset="UTF-8">
    <title>{{$a->name}}</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="Shelly - Website">
    <meta name="author" content="merkulove">
    <meta name="keywords" content="">
    <link rel="icon" href="{{ asset('assets/img/favicon.png') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/main.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/button.min.css') }}">
    <link rel="stylesheet" href="{{asset('st.css')}}">
    <style>

        .body {
            font-family: 'lato', sans-serif;
        }
        /*.container {*/
        /*    max-width: 1000px;*/
        /*    margin-left: auto;*/
        /*    margin-right: auto;*/
        /*    padding-left: 10px;*/
        /*    padding-right: 10px;*/
        /*}*/


        small {
            font-size: 0.5em;
        }


        .table-header {
            background-color: #ffffff;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 0.03em;
            border: 1px solid #f6986b;
            border-radius: 30px;
            padding: 25px 30px;
            display: flex;
            justify-content: space-between;
            margin-bottom: 25px;
            color: black;
        }
        .table-row {
            background-color: #ffffff;
            box-shadow: 0px 0px 9px 0px rgba(0,0,0,0.1);
            border-radius: 3px;
            padding: 25px 30px;
            display: flex;
            justify-content: space-between;
            margin-bottom: 25px;
            color: black;
        }
        .col-1 {
            flex-basis: 10%;
            color: black;
        }
        .col-2 {
            flex-basis: 40%;
            color: black;
        }
        .col-3 {
            flex-basis: 25%;
            color: black;
        }
        .col-4 {
            flex-basis: 25%;
            color: black;
        }

        /*@media all and (max-width: 766px) {*/
        /*    .table-header {*/
        /*        display: none;*/
        /*    }*/
        /*    .table-row{*/

        /*    }*/

        /*    .col {*/

        /*        flex-basis: 100%;*/

        /*    }*/
        /*    .col {*/
        /*        display: flex;*/
        /*        padding: 10px 0;*/

        /*}*/
        /*}*/
    </style>
    @livewireStyles()
</head>

<body>
<div class="wrapper">


    <div class="main-section">
        <header>
            <div class="container">
                <div class="header-content d-flex flex-wrap align-items-center">
                    <div class="logo"><a href="{{ route('home') }}" title=""><img
                                src="{{ asset('images/logo.png') }}" alt=""
                                srcset="assets/img/01_Logo_2x.png 2x"></a>
                    </div>
                    @php


                              function GreatTeachersProsent($a)
                                             {
                            $c=0;
                          $t=count($a->teachers->ToArray());
                           $p=100/$t;
                            foreach ($a->teachers as $t){
                                if($t->degrees){
                             if (count($t->degrees)!==0){
                             if($t->degrees[0]->type_id ==1){
                             if($c++ == 1)continue;
                                 }
                                   }
                             }
                                     }
                                   if($c==0){
                                       return 1;
                                   }       else{
                           return $c*$p;
                                   }

                              }
                              function GoodTeachersProsent($a)
                                             {
                            $c=0;
                          $t=count($a->teachers->ToArray());
                           $p=100/$t;
                            foreach ($a->teachers as $t){
                                if($t->degrees){
                             if (count($t->degrees)!==0){
                             if($t->degrees[0]->type_id ==2){
                             if($c++ == 1)continue;
                                 }
                                   }
                             }
                                     }
                               if($c*$p==0){
                                   return 1;
                               }else{
                          if($c==0){
                                       return 1;
                                   }       else{
                           return $c*$p;
                                   }
                               }

                              }
                              function EmptyTeachersProsent($a)
                                             {
                            $c=0;
                          $t=count($a->teachers->ToArray());
                           $p=100/$t;
                            foreach ($a->teachers as $t){
                                if($t->degrees){
                             if (count($t->degrees)==0){

                             if($c++ == 1)continue;

                                   }
                             }
                                     }
                               if($c*$p==0){
                                   return 1;
                               }else{
                           if($c==0){
                                       return 1;
                                   }       else{
                           return $c*$p;
                                   }
                               }

                              }
                              function GreatStudentsProsent($a)
                                             {
                            $c=0;
                          $t=count($a->students->ToArray());
                           $p=100/$t;
                          foreach ($a->students as $s){
            if ($s->certificate){
               if ($s->certificate->type==1 &&  (int) $s->certificate->ball >=5  ){
                   if ($c ++ ==1)continue;
               }
            }

           }
                               if($c*$p==0){
                                   return 1;
                               }else{

                            if($c==0){
                                       return 1;
                                   }       else{
                           return $c*$p;
                                   }

                               }

                              }
                              function CEFRStudentsProsent($a)
                                             {
                            $c=0;
                          $t=count($a->students->ToArray());
                           $p=100/$t;
                          foreach ($a->students as $s){
            if ($s->certificate){
               if ($s->certificate->type==2 ){
                   if ($c ++ ==1)continue;
               }
            }

           }
                               if($c*$p==0){
                                   return 1;
                               }else{

                         if($c==0){
                                       return 1;
                                   }       else{
                           return $c*$p;
                                   }
                               }

                              }
                              function ITStudentsProsent($a)
                                             {
                            $c=0;
                          $t=count($a->students->ToArray());
                           $p=100/$t;
                          foreach ($a->students as $s){
            if ($s->certificate){
               if ($s->certificate->type==3){
                   if ($c ++ ==1)continue;
               }
            }

           }
                               if($c*$p==0){
                                   return 1;
                               }else{

                           if($c==0){
                                       return 1;
                                   }       else{
                           return $c*$p;
                                   }
                               }

                              }
                              function EmptyStudentsProsent($a)
                                             {
                            $c=0;
                          $t=count($a->students->ToArray());
                           $p=100/$t;
                          foreach ($a->students as $s){
            if (!$s->certificate){
                   if ($c ++ ==1)continue;
            }else{
                if ($s->certificate->type==1 && $s->certificate->ball <5){
                      if ($c ++ ==1)continue;
                }
            }

           }
                               if($c*$p==0){
                                   return 1;
                               }else{

                           if($c==0){
                                       return 1;
                                   }       else{
                           return $c*$p;
                                   }
                               }

                              }

                    @endphp
                    @php
                        $phone_number = "+998" . $a->phone_number; // example phone number
                        $formatted_number = preg_replace('/^(\+998)(\d{2})(\d{3})(\d{4})$/', '$1 $2 $3 $4', $phone_number);
                        // echo $formatted_number; // output: +998 90 123 4567
                    @endphp
                        <!--logo end-->
                    <ul class="contact-add d-flex flex-wrap">
                        <li>
                            <div class="contact-info"><img src="assets/img/icon1.png" alt="">
                                <div class="contact-tt">
                                    <h4>Bog'lanish uchun</h4><span> {{ $formatted_number }}</span>
                                </div>
                            </div>
                            <!--contact-info end-->
                        </li>
                        <li>
                            <div class="contact-info"><img src="assets/img/icon2.png" alt="">
                                <div class="contact-tt">
                                    <h4>O`qish vaqti</h4><span>Dush - Shan {{ $a->start_time }} -
                                            {{ $a->end_time }}</span>
                                </div>
                            </div>
                            <!--contact-info end-->
                        </li>
                        <li>
                            <div class="contact-info"><img src="{{ asset('assets/img/icon3.png') }}" alt="">
                                <div class="contact-tt">
                                    <h4>Manzil</h4><span>{{ $a->viloyat }}, {{ $a->tuman }} tumani</span>
                                </div>
                            </div>
                            <!--contact-info end-->
                        </li>
                    </ul>
                    <!--contact-information end-->
                    <div class="menu-btn"><a><span class="bar1"></span> <span class="bar2"></span> <span
                                class="bar3"></span></a>
                    </div>
                    <!--menu-btn end-->
                </div>
                <!--header-content end-->
                <div class="navigation-bar d-flex align-items-center gap-0">
                    <nav>
                        <ul>
                            <li><a class="{{ request()->is('/') ? 'active' : '' }}" href="{{ route('home') }}"
                                   title="">Bosh sahifa</a>
                            </li>

                            <li><a class="{{ request()->is('classes*') ? 'active' : '' }}"
                                   href="{{ route('statistika') }}" title="">statistika</a>
                            </li>
                            <li><a class="{{ request()->is('kurslar*') ? 'active' : '' }}"
                                   href="{{ route('course.index') }}" title="">Kurslar</a>
                            </li>
                            <li><a class="{{ request()->is('teachers*') ? 'active' : '' }}"
                                   href="{{ route('teachers.index') }}" title="">O'qtuvchilar</a>
                            </li>

                            <li><a class="{{ request()->is('students*') ? 'active' : '' }}"
                                   href="{{ route('front.students') }}" title="">O'quvchilar</a>
                            </li>
                            <li>
                                <a class="{{ request()->is('blog*') ? 'active' : '' }}"
                                   href="{{ route('blog.index') }}" title="">Blog</a>
                            </li>

                            <li><a class="{{ request()->is('about*') ? 'active' : '' }}"
                                   href="{{ route('about') }}" title="">Biz haqimizda</a>
                            </li>

                        </ul>
                    </nav>
                    <!--nav end-->
                    <ul class="social-links ml-auto d-flex ml-5">
                        <li>
                            <a href="{{ $a->facebook }}"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li>
                            <a href="{{ $a->instagram }}"><i class="fab fa-instagram"></i></a>

                        </li>
                    </ul>
                </div>
                <!--navigation-bar end-->
            </div>
        </header>
        <!--header end-->
        <div class="responsive-menu">
            <ul>
                <li><a href="{{ route('home') }}" title="">Bosh sahifa</a></li>
                <li><a href="{{ route('classes.index') }}" title="">Sinflar</a></li>
                <li><a href="{{ route('teachers.index') }}" title="">O'qituvchilar</a></li>
                <li><a href="{{ route('blog.index') }}" title="">Blog</a></li>
                <li><a href="{{ route('about') }}" title="">Biz haqimizda</a></li>
            </ul>
        </div>
        <!--responsive-menu end-->

        <h2 class="main-title">web king</h2>
    </div>
    <!--main-section end-->

    @yield('content')


    <footer>
        <div class="container">
            <div class="top-footer">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="widget widget-about"><img src="{{ asset('images/logo.png') }}" alt="">
                            <p>Vivamus porta efficitur nibh nec convallis. Vestibulum egestas eleifend justo. Ut
                                tellus ipsum,
                                accumsan</p>
                        </div>
                        <!--widget-about end-->
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="widget widget-contact">
                            <ul class="contact-add">
                                <li>
                                    <div class="contact-info"><img src="assets/img/icon1.png" alt="">
                                        <div class="contact-tt">
                                                 {{-- formatting phone number start --}}
                                             @php
                                                 $phone_number = "+998" . $a->phone_number; // example phone number
                                                 $formatted_number = preg_replace('/^(\+998)(\d{2})(\d{3})(\d{4})$/', '$1 $2 $3 $4', $phone_number);
                                                 // echo $formatted_number; // output: +998 90 123 4567
                                             @endphp
                                            {{-- fromatting phone number end --}}
                                            <h4>Call</h4><span> {{ $formatted_number }}</span>kj
                                        </div>
                                    </div>
                                    <!--contact-info end-->
                                </li>
                                <li>
                                    <div class="contact-info"><img src="assets/img/icon2.png" alt="">
                                        <div class="contact-tt">
                                            <h4>O`qish vaqti</h4><span>Duy - Shan {{ $a->start_time }} -
                                                    {{ $a->end_time }}</span>
                                        </div>
                                    </div>
                                    <!--contact-info end-->
                                </li>
                                <li>
                                    <div class="contact-info"><img src="assets/img/icon3.png" alt="">
                                        <div class="contact-tt">
                                            <h4>Manzil</h4><span>{{ $a->viloyat }}, {{ $a->tuman }}
                                                    tumani</span>
                                        </div>
                                    </div>
                                    <!--contact-info end-->
                                </li>
                            </ul>
                        </div>
                        <!--widget-contact end-->
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="widget widget-links">
                            <h3 class="widget-title">Hamkorlar va malumotlar</h3>
                            <ul>
                                <li><a href="https://webking.uz" title="">Webking Uz</a></li>
                                <li><a href="https://mexnatkash.uz" title="">Mexnatkash Uz</a></li>
                                <li><a href="" title="">Dasturchilar</a></li>
                                <li><a href="" title="">Abduraxmon</a></li>
                                <li><a href="" title="">Ahmadullo</a></li>
                                <li><a href="" title="">Yaxyobek</a></li>

                            </ul>
                        </div>
                        <!--widget-links end-->
                    </div>
                </div>
            </div>
            <!--top-footer end-->
            <div class="bottom-footer">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <p>© Copyrights 2020 Shelly All rights reserved</p>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <ul class="social-links">
                            <li><a title=""><i class="fab fa-facebook-f"></i></a></li>
                            <li><a title=""><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a title=""><i class="fab fa-instagram"></i></a></li>

                            <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="https://www.instagram.com/ahmadullorahmatullayev/"><i
                                        class="fab fa-instagram"></i></a></li>

                        </ul>
                    </div>
                </div>
            </div>
            <!--bottom-footer end-->
        </div>
    </footer>
    <!--footer end-->
</div>

@livewireScripts()
<script src="{{ asset('assets/js/bundle.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script>
    var options = {
        chart: {
            type: "bar"
        },
        series: [
            {
                name: "foiz",
                data: [{{GreatTeachersProsent($a)}}, {{GoodTeachersProsent($a)}}, {{GreatStudentsProsent($a)}}, {{CEFRStudentsProsent($a)}}, {{ITStudentsProsent($a)}}, {{EmptyStudentsProsent($a)}}, {{EmptyTeachersProsent($a)}}]
            }
        ],
        xaxis: {
            categories: ['oliy toifali O`qtuvchilar', 'o`rta maxsus', 'IELTS olganlar', 'CEFR olganlar', 'IT o`quvchilar', 'Bo`sh o`quvchilar', 'yangi o`qtuvchilar']
        },
        yaxis: {
            tickAmount: 10,
        }
    };

    var chart = new ApexCharts(document.querySelector("#chart"), options);

    chart.render();

</script>
<script src="{{ asset('assets/js/button.min.js') }}"></script><!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-180910402-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());
        gtag('config', 'UA-180910402-1');
    </script>
</body>

</html>
