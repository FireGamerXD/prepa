@extends('layout.layout')
@section('content')

<h1>Product List</h1>

<form action="{{ route("product.store") }}" method="post">
@csrf
    <input type="text" name="name" placeholder="type product name" id="" required>
    <input type="number" name="price" placeholder="type product price" id="" required>

    <div class="">
        <label for="">Blue</label>
        <input type="radio" value="blue" name="color">

        <label for="">Violet</label>
        <input type="radio" value="violet" name="color">
    </div>

    <button>Add</button>

</form>

@foreach ($products as $product)
<h1>Product Name : {{ $product->name }}</h1>
<h1>Product Price : {{ $product->price }}</h1>
<a href="{{ route("product.show" , $product) }}">Custom Product</a>

<form action="{{ route(" " , $product) }}" method="post">

    @csrf
    @method("DELETE")
    <button>Delete</button>

</form>

@endforeach

@endsection
