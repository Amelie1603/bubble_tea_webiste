@extends('layouts.default')

@section('content')
<h1>Panneau d'administration</h1>
<br>
<form action="{{ route('product.store') }}" method="POST">
    @csrf

    <input type="text" placeholder="Nom" name="name" />
    <br />
    <input type="text" placeholder="Prix" name="price" /> €
    <br />
    <textarea name="description" placeholder="Description ..."></textarea>
    <br />
    <button class="button" type="submit">Ajouter</button>
</form>
            
    <div class="products-container">
      <ul>
        @foreach ($products as $product)
          <li>
            <h2> Nom : {{$product->name}}</h2>
            <span>Prix :{{$product->price}} €</span>
            <p> Description: {{$product->description}}</p>
            
            <form action="{{ route('product.destroy', $product) }}" method="POST">   
               
                <a href="{{ route('product.edit', $product) }}">Modifier | </a>   
                @csrf
                @method('DELETE')      
                <button onclick="return confirm('Confirmez-vous la suppression de votre produit?')" 
                    type="submit">Supprimer</button>
            </form>
            </form>
          </li>


      

        @endforeach
      </ul>     
    </div>

@endsection
