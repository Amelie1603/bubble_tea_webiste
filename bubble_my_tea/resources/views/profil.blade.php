@extends('layouts.default')

@section('content')
   <h2> Mes commandes</h2>
   <br>

   @foreach($orders as $order)    

            <p> Numéro de la commande : {{$order->id}} </p>

            @foreach ($order->orderProducts as $op)
               {{ $op->quantity}} 
               {{ $op->product->name}}
               
               ( {{ $op->product->price}}  euros à l'unité)  <br>
               
            @endforeach
            
            prix de la commande = {{ $order->price }} euros <br>
            <br>

   @endforeach

@endsection


