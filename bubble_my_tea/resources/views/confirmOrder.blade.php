@extends('layouts.default')

@section('content')
  <div class="cart-confirm">
    <h2>Panier</h2>
    <div class="cart-content">
      @foreach(session('cart') as $id => $details)
      <div class="cart-item">
        <h3><span>x {{$details['quantity']}}</span>  {{$details['name']}}</h3>
        <div class="cart-detail">
          <span>{{number_format($details['price'], 2, ',', ' ')}} €</span>
        </div>
      </div>
      @endforeach
    </div>
    <div class="total">
      <h4>Total : </h4>
      <span>{{number_format(session('total'), 2, ',', ' ')}} €</span>
    </div>
    <form action="newOrder" method="GET">
      @csrf
      <button type="submit" class="confirm-btn">Commander</button>
    </form>
  </div>
  <style>
    body { 
      background-color: #fff4f4;
      font-size: 18px;
    }
    .cart-confirm {
      width: 50vw;
      margin: 80px auto;
      display: flex;
      flex-direction: column;
      gap: 20px;
      background-color: #fff;
      border-radius: 20px;
      padding: 20px;
     
    }
    .cart-content {
      display: flex;
      flex-direction: column;
      gap: 10px;
    }
    .cart-item { 
      display: flex;
      justify-content: space-between;
    }
    .cart-item h3> span { 
      margin-right: 20px;
    }
    .cart-confirm > h2 {
      font-weight: bold;
      font-size: 24px;
    }
    .confirm-btn {
      padding: 10px 20px;
      border-radius: 30px;
      border: 1px solid black;
      float: right;
      transition: .2s ease;
    }
    .confirm-btn:hover {
      background-color: #fff4f4;
      transition: .2s ease;
    }
    .total {
      display: flex;
      justify-content: space-between;
      border-top: 1px solid black;
      padding-top: 15px;
      margin-top: 50px;
    }
    
  </style>
@endsection
