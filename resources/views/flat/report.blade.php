@extends('back.adminp')
@section('title')
    Есептеме
@endsection
@section('content')
    <div class="pagetitle">
        <h1>Есептеме</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin') }}">Басты бет</a></li>
                <li class="breadcrumb-item active">Есептеме</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body mt-4">
                        @if(Session::has('info'))
                            <div class="alert alert-primary" role="alert">
                                {{ Session::get('info') }}
                            </div>
                    @endif
                    <!-- Table with stripped rows -->
                        <table class="table table-bordered">
                            <thead>
                            <tr class="text-center">
                                <th rowspan="2">№</th>
                                <th rowspan="2">Тұрғын үй</th>
                                <th colspan="3">Пайдаланушылар</th>
                                <th rowspan="2">Бағасы (ш.м)</th>
                                <th colspan="3">Жалпы ауданы</th>
                                <th rowspan="2">Жиынтық</th>
                            </tr>
                            <tr class="text-center">
                                <th>1 б.</th>
                                <th>2 б.</th>
                                <th>3 б.</th>
                                <th>1 б.</th>
                                <th>2 б.</th>
                                <th>3 б.</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php
                                $dname=10000;
                                $rname=100000;
                                $counter=1;
                                $sum_room1=0;
                                $sum_room2=0;
                                $sum_room3=0;
                                $room1_area=0;
                                $room2_area=0;
                                $room3_area=0;
                                $reprice=0;
                                $area=0;
                                $all_summ_room1=0;
                                $all_summ_room2=0;
                                $all_summ_room3=0;
                                $all_room1_area=0;
                                $all_room2_area=0;
                                $all_room3_area=0;
                                $all_price=0;
                                $all_row=0;
                                $all=0;
                                @endphp
                            @foreach($user_flats as $k=>$user_flat)
                                @if($dname<>$user_flat->disname)


                                    <tr class="text-center">
{{--                                    <td scope="row">{{ $k+1 }}</td>--}}
                                    <td colspan="10" class="table-primary">{{ $user_flat->disname }}</td>

                                </tr>
                                @endif
                                @php
                                    if(!empty($user_flat->disname)){
                                        $dname=$user_flat->disname;
                                    }
                                @endphp

                                @if($rname<>$user_flat->rename)

                                <tr class="text-center">
                                    <td scope="row">{{ $k+1 }}</td>
                                    <td>{{ $user_flat->rename }}</td>
                                    @foreach($user_flats as $user_flat1)
                                        @if($user_flat->rename==$user_flat1->rename)
                                            @if($user_flat1->rname==='1 бөлмелі')
                                                @php $sum_room1=$user_flat1->raw_count;@endphp
                                            @elseif($user_flat1->rname==='2 бөлмелі')
                                                @php $sum_room2=$user_flat1->raw_count; @endphp
                                            @elseif($user_flat1->rname==='3 бөлмелі')
                                                @php $sum_room3=$user_flat1->raw_count; @endphp
                                            @else
                                                @php $sum_room1=0; $sum_room2=0; $sum_room3=0; @endphp
                                            @endif
                                        @endif
                                    @endforeach

                                    @foreach($recomplexes_flat as $recomplex_flat)
                                        @if($user_flat->rename==$recomplex_flat->name)
                                            @php $reprice=$recomplex_flat->price;
                                            @endphp
                                            @if($recomplex_flat->room_id==1)
                                                @php $room1_area=$recomplex_flat->totalarea @endphp
                                            @endif
                                            @if($recomplex_flat->room_id==2)
                                                @php $room2_area=$recomplex_flat->totalarea @endphp
                                            @endif
                                            @if($recomplex_flat->room_id==3)
                                                @php $room3_area=$recomplex_flat->totalarea @endphp
                                            @endif
                                        @endif
                                    @endforeach
                                    @php $all_row=$sum_room1*$reprice*$room1_area+$sum_room2*$reprice*$room2_area+$sum_room3*$reprice*$room3_area; @endphp

                                    <td>{{ $sum_room1 }}</td>
                                    <td>{{ $sum_room2 }}</td>
                                    <td>{{ $sum_room3 }}</td>
                                    <td>{{ $reprice }} т.</td>
                                    <td>{{ $room1_area }} (ш.м)</td>
                                    <td>{{ $room2_area }} (ш.м)</td>
                                    <td>{{ $room3_area }} (ш.м)</td>
                                    <td class="fw-bold">{{ $all_row }} т.</td>
                                </tr>

                                @php

                                        $all_summ_room1=$all_summ_room1+$sum_room1;
                                        $all_summ_room2=$all_summ_room2+$sum_room2;
                                        $all_summ_room3=$all_summ_room3+$sum_room3;

                                            $sum_room1=0;
                                            $sum_room2=0;
                                            $sum_room3=0;
                                        $all_room1_area=$all_room1_area+$room1_area;
                                        $all_room2_area=$all_room2_area+$room2_area;
                                        $all_room3_area=$all_room3_area+$room3_area;
                                            $room1_area=0;
                                            $room2_area=0;
                                            $room3_area=0;
                                            $all_price=$all_price+$reprice;
                                            $all=$all+$all_row;
                                            $all_row=0;
                                @endphp
                                @endif
                                @php
                                    if(!empty($user_flat->rename)){
                                        $rname=$user_flat->rename;
                                    }
                                @endphp

                            @endforeach


                            <tr class="text-center fw-bold table-warning">
                                <td colspan="2" class="bold text-center">Барлығы</td>
                                <td>{{$all_summ_room1}}</td>
                                <td>{{$all_summ_room2}}</td>
                                <td>{{$all_summ_room3}}</td>
                                <td>{{ $all_price }} т.</td>
                                <td>{{$all_room1_area}} (ш.м)</td>
                                <td>{{$all_room2_area}} (ш.м)</td>
                                <td>{{$all_room3_area}} (ш.м)</td>
                                <td>{{$all}} т.</td>
                            </tr>

                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->

                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
