@include ('partial.Header')



<div class="container">
  <div class="row">
    <div class="col-12">
      <h1>Carrito</h1>
        <table class="table table-borderless products-in-cart">
          <thead>
            <tr>
              <th scope="col"></th>
              <th scope="col">Producto</th>
              <th scope="col">Cantidad</th>
              <th scope="col">Precio</th>
              <th scope="col">Acciones</th>
            </tr>
          </thead>
          <tbody>
            @foreach($carrito as $productInCart)
              <tr>
                <td>
                
                  <img src="/storage/{{ $productInCart->avatar }}" alt="{{ $productInCart->title }}">
                  <td>{{ $productInCart->title }}</td>
                </th>
                <td>{{ $productInCart->pivot->count }}</td>
                <td>${{ $productInCart->price * $productInCart->pivot->count }}</td>
                <td>
                  <form action="{{ route('removeProductFromCart', ['productId' => $productInCart->id]) }}" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="product_id" value="{{ $productInCart->id }}">
                    <button class="btn btn-danger" type="submit">Eliminar</button>
                  </form>
                </td>
              </tr>
            @endforeach
              <tr>
                <td colspan="3" class="text-right h2">Total</td>
                <td class="h2">${{ \Auth::user()->cartTotal() }}</td>
                <td>
                  <form action="{{ route('order') }}" method="post">
                    {{ csrf_field() }}
                    <button class="btn btn-dark btn-lg" type="submit">Comprar</button>
                  </form>
                </td>
              </tr>
            </tbody>
          </table>
    </div>
  </div>
</div>


  @include ('partial.Footer')

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>