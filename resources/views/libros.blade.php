@include ('partial.Header')
<div class="container ">
@foreach ($products as $product)

    <div>
        <img class="img-fluid d-block mx-auto" src="storage/{{$product->avatar}}" alt="{{ $product->name }}">
          <h5 class="text-center"><b>{{ $product->title }}<br>${{ $product->price }}</b></h5>
          <p class="">{{ $product->description}}</p>
    </div>
    
    <div>
        @auth
          
        
          <form action="{{ route('addProductToCart', ['productId' => $product->id]) }}" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="product_id" value="{{ $product->id }}">
            <label for="count">Cantidad</label>
            <select id="count" name="count">
                @for ($i = 1; $i <= 10; $i++)
                  <option value="{{$i}}">{{$i}}</option>
                @endfor
            </select>
            <br />
            <button type="submit" class="btn btn-light btn-lg">Agregar al carrito</button>
          </form>
          @else
          <a href="{{ route('login') }}" class="btn btn-light btn-lg">Agregar al carrito</button>
        @endauth
      </div>
    
  
  @endforeach
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  @include ('partial.Footer')