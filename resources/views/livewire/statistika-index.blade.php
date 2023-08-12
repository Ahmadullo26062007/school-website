<div class="container ">
    @php
        $a = \App\Models\About::find(env('SCHOOL_ID'));

           function GreatTeachers($a2)
        {
            $c = 0;

            foreach ($a2->teachers as $t) {
                if ($t->degrees) {
                    if (count($t->degrees) !== 0) {
                        if ($t->degrees[0]->type_id == 1) {
                            if ($c++ == 1) {
                                continue;
                            }
                        }
                    }
                }
            }

            return $c;
        }
        function GoodTeachers($a)
                                       {
                      $c=0;
                      foreach ($a->teachers as $t){
                          if($t->degrees){
                       if (count($t->degrees)!==0){
                       if($t->degrees[0]->type_id ==2){
                       if($c++ == 1)continue;
                           }
                             }
                       }
                               }
                          $n=$c;
                     return floor($n);


                        }
        function WellTeachers($a)
                                       {
                      $c=0;
                      foreach ($a->teachers as $t){
                          if($t->degrees){
                       if (count($t->degrees)!==0){
                       if($t->degrees[0]->type_id ==3){
                       if($c++ == 1)continue;
                           }
                             }
                       }
                               }
                          $n=$c;
                     return floor($n);


                        }
                        function EmptyTeachers($a)
                                       {
                       if (!count($a->teachers->ToArray())==0){
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
                             return 0;
                         }else{
                     if($c==0){
                                 return 0;
                             }       else{
                           $n=$c;
                     return floor($n);
                             }
                         }
                           }else{
                           return 0;
                           }
                        }
                        function GreatStudents($a)
                                       {

                      $c=0;
                    foreach ($a->students as $s){
      if ($s->certificate){
         if ($s->certificate->type==1 &&  (int) $s->certificate->ball >=5  ){
             if ($c ++ ==1)continue;
         }
      }

     }
                         if($c==0){
                             return 0;
                         }else{


                           $n=$c;
                     return floor($n);

                        }
                        }
                        function CEFRStudents($a)
                                       {
                         if (!count($a->students->ToArray())==0){
                      $c=0;

                    foreach ($a->students as $s){
      if ($s->certificate){
         if ($s->certificate->type==2 ){
             if ($c ++ ==1)continue;
         }
      }

     }

                          $n=$c;
                     return $n;

                          }else{
                             return 0;
                          }
                        }
                        function ITStudents($a)
                                       {
                        if (!count($a->students->ToArray())==0){
                      $c=0;
                    foreach ($a->students as $s){
      if ($s->certificate){
         if ($s->certificate->type==3){
             if ($c ++ ==1)continue;
         }
      }

     }

                          $n=$c;
                     return $n;

                      }else{
                            return 0;
                      }
                        }
                        function EmptyStudents($a)
                                       {
                      if (!count($a->students->ToArray())==0){
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
                             return 0;
                         }else{

                     if($c==0){
                                 return 0;
                             }       else{
                          $n=$c;
                     return floor($n);
                             }
                         }
                       }else{
                          return 0;
                       }
                        }
                         function GreatStudentsadd($a)
                                       {

                      $c=0;
                    foreach ($a->students as $s){
      if ($s->certificate){
         if ($s->certificate->type==1 &&  (int) $s->certificate->ball >=5 || $s->certificate->type==2 ||$s->certificate->type==3){
             if ($c ++ ==1)continue;
         }
      }

     }
                         if($c==0){
                             return 0;
                         }else{


                           $n=$c;
                     return floor($n);

                        }
                        }

                  $r=[];
                  foreach(\App\Models\About::all() as $c=>$a3){
                      $r[$a3->id]=((int) GreatTeachers($a3))+((int)GreatTeachers($a3))+((int)GreatTeachers($a3));
                  }
                 arsort($r);
                $count=0;
    @endphp


    <div class="row d-flex flex-wrap mt-5" style="color: black">

        <div class="col-6 d-flex justify-content-start " style="gap: 10px; height: 40px;">
            <div style=" width: 35px; height: 20px; background-color: green; margin-left: 30px"></div>
            <h4>oliy toifali O`qtuvchilar</h4>
        </div>
        <div class="col-6 d-flex justify-content-start " style="gap: 10px; height: 40px;">
            <div style=" width: 35px; height: 20px; background-color: red; margin-left: 30px"></div>
            <h4>1-toifali o`qtuvchilar</h4>
        </div>
        <div class="col-6 d-flex justify-content-start " style="gap: 10px; height: 40px;">
            <div style=" width: 35px; height: 20px; background-color: #ff8016; margin-left: 30px"></div>
            <h4>2-toifali o`qtuvchilar</h4>
        </div>
        <div class="col-6 d-flex justify-content-start " style="gap: 10px; height: 40px;">
            <div style=" width: 35px; height: 20px; background-color: yellow; margin-left: 30px"></div>
            <h4>Mutaxasis</h4>
        </div>
        <div class="col-6 d-flex justify-content-start " style="gap: 10px; height: 40px;">
            <div style=" width: 35px; height: 20px; background-color: blue; margin-left: 30px"></div>
            <h4>IELTS olganlar</h4>
        </div>
        <div class="col-6 d-flex justify-content-start " style="gap: 10px; height: 40px;">
            <div style=" width: 35px; height: 20px; background-color: #1cffca; margin-left: 30px"></div>
            <h4>CEFR olganlar</h4>
        </div>
        <div class="col-6 d-flex justify-content-start " style="gap: 10px; height: 40px;">
            <div style=" width: 35px; height: 20px; background-color: #2dff00; margin-left: 30px"></div>
            <h4>IT o`quvchilar</h4>
        </div>




    </div>

    <div class="row d-flex flex-wrap">
        <div class="col-12">
            <div>
                <canvas id="myChart"></canvas>
            </div>
        </div>

    </div>


    <div class="row py-5">
        <div class="col-12 ">

{{--            <ul class="responsive-table"  style=" overflow-x: auto">--}}
{{--                <li class="table-header li1 d-none d-md-flex">--}}
{{--                    <div class="col col-1">N#</div>--}}
{{--                    <div class="col col-2">Maktab</div>--}}
{{--                    <div class="col col-3">oliy malumotli o`qituvchilar</div>--}}
{{--                    <div class="col col-3">Sertifikatga ega o`quvchilar</div>--}}
{{--                    <div class="col col-4">IT o`quvchilar</div>--}}
{{--                </li>--}}
{{--                <li class="table-header li1 d-md-none">--}}
{{--                    <div class="col col-1">N#</div>--}}
{{--                    <div class="col col-2">Maktab</div>--}}
{{--                    <div class="col col-3"><img width="30" height="30" src="{{asset('images/teacher.png')}}"></div>--}}
{{--                    <div class="col col-3"><img width="30" height="30" src="{{asset('images/student.png')}}"></div>--}}
{{--                    <div class="col col-4"><img width="30" height="30" src="{{asset('images/it.png')}}"></div>--}}
{{--                </li>--}}

{{--                @foreach($r as $c=>$b)--}}
{{--                    @php--}}

{{--                        $a1=\App\Models\About::find($c);--}}
{{--                    @endphp--}}
{{--                    @if(empty($a1->id==1))--}}
{{--                        <li class="table-row li1">--}}
{{--                            <div class="col col-1" data-label="Job Id">{{$c}}</div>--}}
{{--                            <div class="col col-2" data-label="Customer Name">    {{$a1->name}}</div>--}}
{{--                            <div class="col col-3" data-label="Amount">{{GreatTeachers($a1)}}</div>--}}
{{--                            <div class="col col-4" data-label="Payment Status">{{GreatStudents($a1)}}</div>--}}
{{--                            <div class="col col-4" data-label="Payment Status">{{ItStudents($a1)}}</div>--}}
{{--                        </li>--}}
{{--                    @endif--}}
{{--                @endforeach--}}
{{--            </ul>--}}
        </div>

    </div>

    {{--    <table class="table">--}}
    {{--        <thead>--}}
    {{--        <tr>--}}

    {{--            <th scope="col">First</th>--}}
    {{--            <th scope="col">Last</th>--}}
    {{--            <th scope="col">Handle</th>--}}
    {{--        </tr>--}}
    {{--        </thead>--}}
    {{--        <tbody>--}}
    {{--        <tr>--}}

    {{--            <td>Mark</td>--}}
    {{--            <td>Otto</td>--}}
    {{--            <td>@mdo</td>--}}
    {{--        </tr>--}}
    {{--        <tr>--}}
    {{--            <th scope="row">2</th>--}}
    {{--            <td>Jacob</td>--}}
    {{--            <td>Thornton</td>--}}
    {{--            <td>@fat</td>--}}
    {{--        </tr>--}}
    {{--        <tr>--}}
    {{--            <th scope="row">3</th>--}}
    {{--            <td colspan="2">Larry the Bird</td>--}}
    {{--            <td>@twitter</td>--}}
    {{--        </tr>--}}
    {{--        </tbody>--}}
    {{--    </table> --}}


</div>
