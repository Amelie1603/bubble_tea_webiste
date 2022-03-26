@extends('layouts.default')

@section('content')

<br>
<div class="add">
  <p><strong>Ajouter un produit :</strong></p>
<form action="{{ route('product.store') }}" method="POST">
    @csrf

    <input type="text" placeholder="Nom" name="name" />
    <br />
    <input type="text" placeholder="Prix (€)" name="price" />
    <br />
    <textarea name="description" placeholder="Description ..."></textarea>
    <br />
    <button class="button" type="submit">Ajouter</button>
</form>
</div>
            
    <div class="products-container">
      <ul>
        @foreach ($products as $product)
          <li>
            <h2> Nom : {{$product->name}}</h2>
            <span>Prix : {{$product->price}} €</span>
            <p> Description: <br> {{$product->description}}</p>
            <br>
            
            <form action="{{ route('product.destroy', $product) }}" method="POST">   
               
                <a class="button"  href="{{ route('product.edit', $product) }}">Modifier</a>   
                @csrf
                @method('DELETE')      
                <button onclick="return confirm('Confirmez-vous la suppression de votre produit?')" 
                    class="button" type="submit">Supprimer</button>
            </form>
          </li>
        @endforeach
      </ul>     
    </div>
    <style>
      .add {
        margin: 1rem;
      }
      .add input, .add textarea {
        margin: 0.1rem;
        border-radius: 8px;
      }
      .button {
          background-color: rgb(229 231 235); 
          border-radius: 8px; 
          border: solid 1px rgb(78, 165, 199);
          padding: 0.2rem 0.5rem;
          margin: 0.5rem 0 0 0;
      }
      .button:hover {
          background-color: rgb(78, 165, 199); 
      }
      .products-container > ul {
          display:flex;
          flex-flow: row wrap;
      }

      .products-container > ul > li {
          width: 225px;
          min-height: 200px;
          margin: 1rem;
          padding: 1rem;
          background-color: rgb(254 226 226);
          border-radius: 10px;
      }
  </style>

@endsection
