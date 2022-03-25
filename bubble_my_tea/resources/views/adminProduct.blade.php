@extends('layouts.default')

@section('content')

    <form action="{{ route('product.update', $product) }}" method="POST">
        @csrf
        @method('PUT')

        <input type="text" placeholder="name" name="name" 
            value="{{ isset($product->name) ? $product->name : old('name') }}" />
        <br />
        <input type="text" placeholder="price" name="price" 
            value="{{ isset($product->price) ? $product->price : old('price') }}" /> €
        <br />
        <textarea name="description" placeholder="Description ...">{{ isset($product->description) ? $product->description : old('description') }}</textarea>
        <br />
        <input type="submit" name="update" value="Update" />
    </form>
   
@endsection