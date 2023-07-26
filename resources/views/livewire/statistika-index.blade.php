




<div class="container ">
    @php
        $a = \App\Models\About::find(env('SCHOOL_ID'));

           function GreatTeachers($a2)
              {
                  $c=0;

                  foreach ($a2->teachers as $t){
                      if($t->degrees){


                   if (count($t->degrees)!==0){
                  if($t->degrees[0]->type_id ==1){
                       if($c++ == 1)continue;
                  }
                   }
                    }
                  }

                  return $c;

              }
              function GreatStudents($a2)
              {
                  $c=0;

                  foreach ($a2->students as $s){
                   if ($s->certificate){
                      if ($s->certificate->type==1 &&  (int) $s->certificate->ball >=5 || $s->certificate->type==2  ){
                          if ($c ++ ==1)continue;
                      }
                   }

                  }

                  return $c;

              }
        function ItStudents($a2)
              {
                  $c=0;

                  foreach ($a2->students as $s){
                   if ($s->certificate){
                      if ( $s->certificate->type==3 ){
                          if ($c ++ ==1)continue;
                      }
                   }

                  }


                  return $c;

              }

                  $r=[];
                  foreach(\App\Models\About::all() as $c=>$a3){
                      $r[$a3->id]=((int) GreatTeachers($a3))+((int)GreatTeachers($a3))+((int)GreatTeachers($a3));
                  }
                 arsort($r);
                $count=0;
    @endphp


    <div class="row d-flex flex-wrap">
        <div class="col-12">
            <div>
                <canvas id="myChart"></canvas>
            </div>
        </div>

    </div>


    <div class="row py-5"   >
        <div class="col-12 ">

            <ul class="responsive-table">
                <li class="table-header li1 d-none d-md-flex">
                    <div class="col col-1">N#</div>
                    <div class="col col-2">Maktab</div>
                    <div class="col col-3">oliy malumotli o`qituvchilar</div>
                    <div class="col col-3">Sertifikatga ega o`quvchilar</div>
                    <div class="col col-4">IT o`quvchilar</div>
                </li>
                <li class="table-header li1 d-md-none">
                    <div class="col col-1">N#</div>
                    <div class="col col-2">Maktab</div>
                    <div class="col col-3"><img width="30" height="30" src="{{asset('images/teacher.png')}}"></div>
                    <div class="col col-3"><img width="30" height="30" src="{{asset('images/student.png')}}"></div>
                    <div class="col col-4"><img width="30" height="30" src="{{asset('images/it.png')}}"></div>
                </li>

                @foreach($r as $c=>$b)
                    @php

                        $a1=\App\Models\About::find($c);
                    @endphp
                <li class="table-row li1">
                    <div class="col col-1" data-label="Job Id">{{$c}}</div>
                    <div class="col col-2" data-label="Customer Name">    {{$a1->name}}</div>
                    <div class="col col-3" data-label="Amount">{{GreatTeachers($a1)}}</div>
                    <div class="col col-4" data-label="Payment Status">{{GreatStudents($a1)}}</div>
                    <div class="col col-4" data-label="Payment Status">{{ItStudents($a1)}}</div>
                </li>
                @endforeach
            </ul>
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
