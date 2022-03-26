@extends('layouts.default')

@section('content')
   <h2> Mes commandes</h2>
   <br>
   <div class="order-container">
   @foreach($orders as $order)    
      <div class="cmd">
            <p> Numéro de la commande : {{$order->id}} </p>

            @foreach ($order->orderProducts as $op)
               {{ $op->quantity}} 
               {{ $op->product->name}}
               
               ( {{ $op->product->price}}  euros à l'unité)  <br>
               
            @endforeach
            
            prix de la commande = {{ $order->price }} euros <br>
            <br>
      </div>
   @endforeach
   </div>

   <style>
      h2 {
         text-align: center;
         font-weight: bold;
         margin-top: 2rem;
      }
      .cmd {
         margin: 1rem;
         border-radius: 8px;
         background-color: rgb(254 226 226);
         padding: 1rem;
      }
      .order-container {
         display:flex;
          flex-flow: row wrap;
      }
   </style>

@endsection


