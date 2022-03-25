@extends('layouts.default')

@section('content')

    <form action="{{ route('product.update') }}" method="POST">
        @csrf
        @method('PUT')

        <input type="text" placeholder="name" name="name" />
        <input type="text" placeholder="price" name="price" />
        <textarea name="description">Description ...</textarea>

        <button>Modifier</button>
    </form>



    <div class="products-container">
      <ul>
          <li>
            <h2>{{$product->name}}</h2>
            <p>{{$product->description}}</p>
            <span>{{$product->price}}</span>
          </li>

      </ul>     
    </div>
   
@endsection