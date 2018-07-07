@extends('welcome')
@section('shop')

{{$error}}
<form method="GET"  action="http://localhost/blog/public/admin/actionInsert" style="position: absolute;left:30%;top:15%;">
    <input class="form-control form-control-lg" type="text" placeholder="name" name="name" value="{{$_GET['name']}}"><br>
    <input class="form-control form-control-lg" type="text" placeholder="type" name="type" value="{{$_GET['type']}}"><br>
    <input class="form-control form-control-lg" type="text" placeholder="brand" name="brand" value="{{$_GET['brand']}}"><br>
    <input class="form-control form-control-lg " id="price" type="text" placeholder="price" name="price" value="{{$_GET['price']}}"><br>
    <input class="form-control form-control-lg" type="text" placeholder="color" name="color" value="{{$_GET['color']}}"><br>
    <input class="form-control form-control-lg" type="text" placeholder="size" name="size" value="{{$_GET['size']}}"><br>
    <input class="form-control form-control-lg" type="text" placeholder="description" name="description" value="{{$_GET['description']}}"><br>
    <button type="submit" class="btn btn-primary">Добавить</button>
</form>
<script src="{{URL::asset('jquery.js')}}"></script>
<script>
    /*$('#price').change(function() {
        if(!$('#price').val().match( /^[1-9]{0,100}$/i )){
            alert('неправильно');
        }else{
            alert('правильно');
        }
    });*/
</script>
@endsection