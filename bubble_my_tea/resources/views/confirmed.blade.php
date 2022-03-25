@extends('layouts.default')

@section('content')

<div class="confirmed">
  <h1>Commande validée</h1>
  <div class="confirmed-list">
    @foreach(session('cart') as $id => $details) 
    <div class="confirmed-item">
      <h2><span>x {{$details['quantity']}}</span> {{$details['name']}}</h2>
      <div>
        <span>{{number_format($details['price'], 2, ',', ' ')}} €</span>
      </div>
    </div>
    @endforeach
    <div class="total">
      <h4>Total : </h4>
      <span>{{number_format(session('total'), 2, ',', ' ')}} €</span>
    </div>
  </div>
  <div class="confirmed-bottom">
    <form action="/" method="GET">
      @csrf
      <button type="submit" class="home-btn">Retour à la page d'accueil</button>
    </form>
  </div>
</div>

<style>
  body {
    background-color: #fff4f4;
    font-size: 18px;
  }
  .confirmed {
    width: 50vw;
      margin: 80px auto;
      display: flex;
      flex-direction: column;
      /* border: 1px solid black; */
      gap: 20px;
      background-color: #fff;
      border-radius: 20px;
      padding: 20px;

  }
  .confirmed > h1 {
      font-weight: bold;
      font-size: 24px;
  }
  .confirmed-list {
    display: flex;
    flex-direction: column;
    gap: 10px;
  }
  .confirmed-item { 
    display: flex;
    justify-content: space-between;
  }
  .total {
    display: flex;
    justify-content: space-between;
    border-top: 1px solid black;
    padding-top: 15px;
     margin-top: 50px;
  }

  .confirmed-bottom form{
    float: right;
  }
  .home-btn {
      padding: 10px 20px;
      border-radius: 30px;
      border: 1px solid black;
      transition: .2s ease;
    }
    .home-btn:hover {
      background-color: #fff4f4;
      transition: .2s ease;
    }
  </style>
@endsection
