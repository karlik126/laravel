@extends('welcome')
@section('shop')





    @for($i=0;$i<count($things_list);$i++)
        @if($i%3==0)
            <div class="row-fluid">
                @endif
                <div class="span4" style="margin-top:3%;"><a href="/sale/{{$type}}/{{$things_list[$i]->getId()}}" style=" text-decoration: none">
                    <img src="{{URL::asset('/img/thingsIMG/full.png')}}"  style="height: 350px;margin-left: 10%;">
                    <div style="position:relative;left:10%;margin-top: 5%;"> {{$things_list[$i]->getPrice()}} </div>
                     <div style="position:relative;left:10%;margin-top: 5%;"> {{$things_list[$i]->getDescription()}} </div>
                    </a></div>
                @if($i%3==2/3 || $i==count($things_list)-1)
            </div>
        @endif
    @endfor







@endsection
