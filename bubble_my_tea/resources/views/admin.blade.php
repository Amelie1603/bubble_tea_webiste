@extends('layouts.default')

@section('content')
<h1>Admin index</h1>
<form action="{{ route('product.store') }}" method="POST">
    @csrf

    <input type="text" placeholder="name" name="name" />
    <br />
    <input type="text" placeholder="price" name="price" /> €
    <br />
    <textarea name="description" placeholder="Description ..."></textarea>
    <br />
    <button class="button" type="submit">Add new</button>
</form>
            
    <div class="products-container">
      <ul>
        @foreach ($products as $product)
          <li>
            <h2>{{$product->name}}</h2>
            <span>{{$product->price}} €</span>
            <p>{{$product->description}}</p>
            
            <form action="{{ route('product.destroy', $product) }}" method="POST">   
               
                <a href="{{ route('product.edit', $product) }}">Edit</a>   
                @csrf
                @method('DELETE')      
                <button onclick="return confirm('Your product will be deleted. Do you wish to continue ?')" 
                    type="submit">Delete</button>
            </form>
            </form>
          </li>


      

        @endforeach
      </ul>     
    </div>

@endsection
