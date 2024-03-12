@extends('layout.layout')
@section('content')

<form action="{{ route("product.update" , $product) }}" method="post">
    @csrf
    @method("PUT")
    <h1>You are editing {{ $product->name }}</h1>
        <input value="{{old("name" , $product->name) }}" type="text" name="name" placeholder="type product name" id="" required>
        <input value="{{ old("price" , $product->name) }}" type="number" name="price" placeholder="type product price" id="" required>
    
        <div class="">
            <label for="">Blue</label>
            <input type="radio" value="blue" name="color">
    
            <label for="">Violet</label>
            <input type="radio" value="violet" name="color">
        </div>
    
        <button>Update</button>
    
    </form>
    

@endsection