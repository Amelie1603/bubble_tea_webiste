@extends('layouts.default')

@section('content')
    <div class="products-container">
      <ul>
        @foreach ($products as $product)
          <li>
            <h2>{{$product->name}}</h2>
            <p>{{$product->description}}</p>
            <span>{{$product->price}}</span>
            <p><a href={{ url('addToCart/'.$product->id) }}>+</a></p>
          </li>
        @endforeach
      </ul>
      
    </div>
@endsection