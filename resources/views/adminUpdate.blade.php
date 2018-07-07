@extends('welcome')
@section('shop')


    <form method="GET"  action="http://localhost/blog/public/admin/actionUpdate" style="position: absolute;left:30%;top:15%;">
        <input class="form-control form-control-lg" type="text" placeholder="id" name="id"><br>
        <input class="form-control form-control-lg" type="text" placeholder="name" name="name"><br>
        <input class="form-control form-control-lg" type="text" placeholder="type" name="type" ><br>
        <input class="form-control form-control-lg" type="text" placeholder="brand" name="brand"><br>
        <input class="form-control form-control-lg " id="price" type="text" placeholder="price" name="price"><br>
        <input class="form-control form-control-lg" type="text" placeholder="color" name="color"><br>
        <input class="form-control form-control-lg" type="text" placeholder="size" name="size"><br>
        <input class="form-control form-control-lg" type="text" placeholder="description" name="description"><br>
        <button type="submit" class="btn btn-primary">Изменить</button>
    </form>
    <script src="{{URL::asset('jquery.js')}}"></script>

@endsection
