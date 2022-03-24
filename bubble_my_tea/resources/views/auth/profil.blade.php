@extends('layouts.default')

@section('content')
   <h1> Je ne comprends pas le CSS </h1>
   <h1> Profil</h1>
   <h2> Mes commandes</h2>
   <p> Voir mes commandes </p> 
   <!-- afficher en popUp -->

             @foreach(order_products as order) 
             <li>
            <h2>{{$order_products->order_id'}}</h2>
            <p> {{ $order_products->product_id }} </p>
            <p> {{ $order_products->topping_id' }} </p>
            </li>
             @endforeach
            
         


   <h2> Modifier mes informations</h2>
   <h2> </h2>

@endsection