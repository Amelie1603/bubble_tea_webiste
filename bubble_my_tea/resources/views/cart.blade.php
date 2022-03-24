@extends('layouts.default')

@section('content')
  <div>
    <?php $total = 0 ?>
    @if(session('cart'))
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
    @endif
    
  </div>
@endsection