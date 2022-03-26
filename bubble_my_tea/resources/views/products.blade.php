@extends('layouts.default')

@section('content')
  <div class="products-page">
      <div class="product-list">
        @foreach ($products as $product)
          <div class="product-tile">
            <h3>{{$product->name}}</h3>
            <p>{{$product->description}}</p>
            <span>{{number_format($product->price, 2, ',', ' ')}} €</span>
            <div class="add"><a href={{ url('addToCart/'.$product->id) }}>Ajouter</a></div>
          </div>
        @endforeach    
      </div>
      @if(session('cart'))
      <div class="cart-container">
        <h2>Panier</h2>
      <?php $total = 0 ?>
      @foreach(session('cart') as $id => $details)
      <?php $total += $details['price'] * $details['quantity'] ?>
        <h3><span>x {{$details['quantity']}}</span>  {{$details['name']}}</h3>
        <div class="cart-detail">
          <div class="quantity">
            <div><a href={{ url('removeOne/'.$id) }}>-</a></div>
            <div><a href={{ url('addToCart/'.$id) }}>+</a></div>
          </div>
          <span>{{number_format($details['price'], 2, ',', ' ')}} €</span>
        </div>
        
      @endforeach
      <div class="total">
        <h4>Total : </h4>
        <span>{{number_format($total, 2, ',', ' ')}} €</span>
      </div>
      <form action="confirmOrder" method="GET">
        @csrf
        <button type="submit">Commander</button>
      </form>
    </div>
  </div>
  
  @endif
  <style>
    body {
      background-color: #FFF4F4;
    }
    .products-page {
      display: flex;
      width: 1244px;
      /* border: 1px solid black; */
      margin: 80px auto;
      justify-content: space-between;
    }
    .product-list {
      /* border: 1px solid pink; */
      width: 75%;
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      background-color: #fff;
      padding: 20px;
      border-radius: 10px;
    }
    .product-tile {
      /* border: 1px solid green; */
      height: 260px;
      width: 200px;
      background-color: #FFF4F4;
      border-radius: 10px;
      padding: 10px;
      position: relative;
      
    }
    .product-tile>h3 {
      font-weight: 600;
      text-transform: capitalize;
    }
    .product-tile>p {
      font-size: 14px;
      margin: 10px 0;
    }
    .add {
      padding: 0 10px;
      border-radius: 20px;
      border: 1px solid black;
      width: fit-content;
      position: absolute;
      right: 10px;
      bottom: 10px;
      background-color: #fff4f4;
      transition: .2s ease;
    }
    .add:hover {
      background: #fff;
      transition: .2s ease;
    }
    .cart-container {
      padding: 20px;
      width: 22%;
      display: flex;
      flex-direction: column;
      border-radius: 10px;

    }
    .cart-container h2 {
      font-weight: bold;
      margin: 10px 0;

    }
    .total {
      display: flex;
      justify-content: space-between;
      padding-top: 15px;
      margin-top: 50px;
      border-top: 1px solid black;
    }
    .cart-container {
      background-color: #fff;

    }
    .cart-detail {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-top: 10px;
      margin-bottom: 20px;
    }
    .cart-container button {
      border: 1px solid black;
      border-radius: 20px;
      padding: 10px;
      margin-top: 20px;
      float: right;
      transition: .2s ease;
    }
    .cart-container button:hover {
      background-color: #fff4f4;
      transition: .2s ease;
    }
    .quantity {
      display: flex;
      gap: 10px;
      align-items: center;
    }
    .quantity div {
      padding: 0 5px 2px 5px;
      cursor: pointer;
      border: 1px solid #acacac;
      border-radius: 2px;
      height: 20px;
      display: flex;
      align-items: center;
      font-size: 24px;
    }
  </style>
@endsection