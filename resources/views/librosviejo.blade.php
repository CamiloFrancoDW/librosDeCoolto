@include ('partial.Header')



@foreach ($products as $product) 
<div class="py-5 col-md-12" style="	background-attachment: fixed;">
    <div class="container">
      <div class="row">
        
        <div class="ml-auto p-3 col-md-2 bg-white" style=""> 
        <img class="img-fluid d-block mx-auto" src="/storage/{{$product->avatar}}" alt="{{ $product->name }}">
          <h5 class="text-center"><b>{{ $product->name }}<br>${{ $product->price }}</b></h5>
        </div>
        
          <div class="blockquote mb-0">
            <p class="">{{ $product->desc }}</p>
          </div>
      
        @guest
          <a href="{{ route('login') }}" class="btn btn-dark btn-lg">Agregar al carrito</button>
        @else
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
            <button type="submit" class="btn btn-dark btn-lg">Agregar al carrito</button>
          </form>
        @endguest
      </div>
  </div>
 @endforeach



  @include ('partial.Footer')
