@extends('layouts.default')

@section('content') @if(session('cart'))
  <div>
    <?php $total = 0 ?>
   
    @foreach(session('cart') as $id => $details)
    <?php $total += $details['price'] * $details['quantity'] ?>
      <h3>{{$details['name']}}</h3>
      <p>{{$details['description']}}</p>
      <span>{{$details['quantity']}}</span>
    @endforeach
    <div>
      <h4>Total </h4>
      <span>{{$total}}</span>
    </div>
    
    
  </div>@endif
@endsection