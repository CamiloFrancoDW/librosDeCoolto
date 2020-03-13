<?php echo $__env->make('partial.Header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



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
            <?php $__currentLoopData = $carrito; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $productInCart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                <td>
                
                  <img src="/storage/<?php echo e($productInCart->avatar); ?>" alt="<?php echo e($productInCart->title); ?>">
                  <td><?php echo e($productInCart->title); ?></td>
                </th>
                <td><?php echo e($productInCart->pivot->count); ?></td>
                <td>$<?php echo e($productInCart->price * $productInCart->pivot->count); ?></td>
                <td>
                  <form action="<?php echo e(route('removeProductFromCart', ['productId' => $productInCart->id])); ?>" method="post">
                    <?php echo e(csrf_field()); ?>

                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="product_id" value="<?php echo e($productInCart->id); ?>">
                    <button class="btn btn-danger" type="submit">Eliminar</button>
                  </form>
                </td>
              </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <tr>
                <td colspan="3" class="text-right h2">Total</td>
                <td class="h2">$<?php echo e(\Auth::user()->cartTotal()); ?></td>
                <td>
                  <form action="<?php echo e(route('order')); ?>" method="post">
                    <?php echo e(csrf_field()); ?>

                    <button class="btn btn-dark btn-lg" type="submit">Comprar</button>
                  </form>
                </td>
              </tr>
            </tbody>
          </table>
    </div>
  </div>
</div>


  <?php echo $__env->make('partial.Footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script><?php /**PATH /Users/camilo/librosDECoolto/librosDeCoolto/libros_de_coolto/resources/views/cart.blade.php ENDPATH**/ ?>