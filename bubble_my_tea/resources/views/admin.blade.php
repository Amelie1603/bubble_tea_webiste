@extends('layouts.default')

@section('content')
<h1>Admin index</h1>
<form action="{{ route('product.store') }}" method="POST">
    @csrf

    <input type="text" placeholder="name" name="name" />
    <input type="text" placeholder="price" name="price" />
    <textarea name="description" placeholder="Description ..."></textarea>

    <button type="submit">Add new</button>
</form>
            
    <div class="products-container">
      <ul>
        @foreach ($products as $product)
          <li>
            <h2>{{$product->name}}</h2>
            <p>{{$product->description}}</p>
            <span>{{$product->price}}</span>
          </li>




        @endforeach
      </ul>     
    </div>
   
@endsection
