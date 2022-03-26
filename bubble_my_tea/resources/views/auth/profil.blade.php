<!-- @extends('layouts.default')

@section('content')
   <h1> Mon Profil</h1>
   <br>
   <h2> Mes commandes</h2>
   <p> Voir mes commandes </p> 
   

             @foreach(order_products as order) 
             <li>
            <h2>{{$order_products->order_id'}}</h2>
            <p> {{ $order_products->product_id }} </p>
            <p> {{ $order_products->topping_id' }} </p>
            </li>
             @endforeach
            
         

   <br>
   <h2> Modifier mes informations</h2>
   

@endsection
 -->
