@extends('layouts.default')

@section('content')
   <h1> Profil</h1>
   <h2> Mes commandes</h2>
   <p> Voir mes commandes </p>

            <p> {{$user}} </p>
            
 
   @foreach($orders as $order)    

            <p> {{$order->id}} </p>

            @foreach ($order->orderProducts as $op)
               {{ $op->product->name}}
            @endforeach

   @endforeach

@endsection


