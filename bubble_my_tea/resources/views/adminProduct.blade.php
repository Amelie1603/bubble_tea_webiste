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
        <input type="submit" name="update" value="Update" style="background-color: darksalmon; 
        border-radius: 8px; padding: 0.2rem 0.5rem; margin: 1rem 0 1rem 0.5rem;"/>
    </form>
   
@endsection