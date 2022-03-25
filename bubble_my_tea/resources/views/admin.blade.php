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
            <p>{{$product->description}}</p>
            <span>{{$product->price}} €</span>
            
            <form action="{{ route('product.destroy', $product) }}" method="POST">   
               
                <a class="button" href="{{ route('product.edit', $product) }}">Edit</a>   
                @csrf
                @method('DELETE')      
                <button class="button" type="submit">Delete</button>
            </form>
            </form>
          </li>


      

        @endforeach
      </ul>     
    </div>
   
    <style>
        .button {
            background-color: darksalmon; 
            border-radius: 8px; 
            padding: 0.2rem 0.5rem;
            margin: 1rem 0 1rem 0.5rem;
        }
        .products-container > ul {
            display:flex;
            flex-flow: row wrap;
        }

        .products-container > ul > li {
            width: 200px;
            height: 250px;
            margin: 1rem;
            padding: 1rem;
            background-color: grey;
            border-radius: 10px;
        }
    </style>
@endsection
