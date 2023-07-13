




<div class="container ">
    @php
        $a = \App\Models\About::find(env('SCHOOL_ID'));

           function GreatTeachers($a)
              {
                  $c=0;

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
                  }else{
                  return $c;
                  }
              }
              function GreatStudents($a)
              {
                  $c=0;

                  foreach ($a->students as $s){
                   if ($s->certificate){
                      if ($s->certificate->type==1 &&  (int) $s->certificate->ball >=5 || $s->certificate->type==2  ){
                          if ($c ++ ==1)continue;
                      }
                   }

                  }
       if($c==0){
                      return 1;
                  }else{
                  return $c;
                  }
              }
        function ItStudents($a)
              {
                  $c=0;

                  foreach ($a->students as $s){
                   if ($s->certificate){
                      if ( $s->certificate->type==3 ){
                          if ($c ++ ==1)continue;
                      }
                   }

                  }

                    if($c==0){
                      return 1;
                  }else{
                  return $c;
                  }
              }

                  $r=[];
                  foreach(\App\Models\About::all() as $c=>$a){
                      $r[$a->id]=((int) GreatTeachers($a))+((int)GreatTeachers($a))+((int)GreatTeachers($a));
                  }
                 arsort($r);
                $count=0;
    @endphp
        <div class="row">
            <div class="col-9">
                <div id="chart">
                </div>
            </div>

            <div class="col-3">
                <div class="sidebar">

                    <div class="widget widget-categories">
                        <h3 class="widget-title">Eng yaxshi maktab</h3>
                        <ul>
                            @foreach($r as $c=>$b)
                                @if($count<4)
                                @php
                                    $a=\App\Models\About::find($c);
                                if($count++ == 1) continue;
                                @endphp
                                <li><a href="blog.html#" title=""> {{$a->name}}</a> <span>N {{$count}}</span></li>
                                @endif
                            @endforeach


                        </ul>
                    </div>

                </div>
            </div>

        </div>


    <div class="row">
        <div class="col-12 ">

            <ul class="responsive-table">
                <li class="table-header li1">
                    <div class="col col-1">N#</div>
                    <div class="col col-2">Maktab</div>
                    <div class="col col-3">oliy malumotli o`qituvchilar</div>
                    <div class="col col-3">Sertifikatga ega o`quvchilar</div>
                    <div class="col col-4">IT o`quvchila</div>
                </li>
                @foreach($r as $c=>$b)
                    @php
                        $a=\App\Models\About::find($c);
                    @endphp
                <li class="table-row li1">
                    <div class="col col-1" data-label="Job Id">{{$c}}</div>
                    <div class="col col-2" data-label="Customer Name">    {{$a->name}}</div>
                    <div class="col col-3" data-label="Amount">{{GreatTeachers($a)}}</div>
                    <div class="col col-4" data-label="Payment Status">{{GreatStudents($a)}}</div>
                    <div class="col col-4" data-label="Payment Status">{{ItStudents($a)}}</div>
                </li>
                @endforeach
            </ul>
        </div>

{{--        <div class="col-9">--}}
{{--            <table>--}}
{{--                <thead>--}}
{{--                <tr>--}}
{{--                    <th>--}}
{{--                        N--}}
{{--                    </th>--}}
{{--                    <th>--}}
{{--                        Maktab--}}
{{--                    </th>--}}
{{--                    <th>--}}
{{--                        <span>oliy malumotli o`qituvchilar</span>--}}
{{--                    </th>--}}
{{--                    <th>--}}
{{--                        <span>Sertifikatga ega o`quvchilar</span>--}}
{{--                    </th>--}}
{{--                    <th>--}}
{{--                        <span>IT o`quvchilar</span>--}}
{{--                    </th>--}}
{{--                </tr>--}}
{{--                </thead>--}}
{{--                <tbody>--}}

{{--                @foreach($r as $c=>$b)--}}
{{--                    @php--}}
{{--                    $a=\App\Models\About::find($c);--}}
{{--                    @endphp--}}
{{--                    <tr class="text-dark">--}}
{{--                        <td>{{$c}}</td>--}}
{{--                        <td>--}}
{{--                            {{$a->name}}--}}
{{--                        </td>--}}
{{--                        <td>--}}
{{--                            <span>{{GreatTeachers($a)}}</span>--}}
{{--                        </td>--}}
{{--                        <td>--}}
{{--                            <span>{{GreatStudents($a)}}</span>--}}
{{--                        </td>--}}
{{--                        <td>--}}
{{--                            <span>{{ItStudents($a)}}</span>--}}
{{--                        </td>--}}
{{--                    </tr>--}}
{{--                @endforeach--}}



{{--                </tbody>--}}
{{--            </table>--}}
{{--        </div>--}}

     </div>
</div>
