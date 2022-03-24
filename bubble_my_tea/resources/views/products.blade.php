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
    @if(session('cart'))
    <div>
      <h2>Shopping Cart</h2>
    <?php $total = 0 ?>
    @foreach(session('cart') as $id => $details)
    <?php $total += $details['price'] * $details['quantity'] ?>
      <h3>{{$details['name']}}</h3>
      <p>{{$details['description']}}</p>
      <span>x {{$details['quantity']}}</span>
      <span>{{$details['price']}} €</span>
    @endforeach
    <div>
      <h4>Total </h4>
      <span>{{$total}} €</span>
    </div>
    <form action="order">
      @csrf
      <button type="submit">Commander</button>
    </form>
  </div>
  @endif
@endsection