@extends('welcome')
@section('shop')

<div style="width: 75%;position: absolute;left: 12%;top:8%;">
    <table class="table">
        <thead>
        <tr>
            <th>id</th>
            <th>Name</th>
            <th>Type</th>
            <th>Price</th>
        </tr>
        </thead>
        <tbody>
    @for($i=0;$i<count($things_list);$i++)
        <tr>
            <th scope="row">{{$things_list[$i]->getId()}}</th>
            <td>{{$things_list[$i]->getName()}}</td>
            <td>{{$things_list[$i]->getType()}}</td>
            <td>{{$things_list[$i]->getPrice()}}</td>
            <td><a href="delete/{{$things_list[$i]->getId()}}">✖</a></td>
        </tr>
    @endfor
        </tbody>
    </table>
</div>
@endsection
