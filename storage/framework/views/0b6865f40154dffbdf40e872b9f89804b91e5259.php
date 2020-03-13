<?php echo $__env->make('partial.Header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="container ">
<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

    <div>
        <img class="img-fluid d-block mx-auto" src="storage/<?php echo e($product->avatar); ?>" alt="<?php echo e($product->name); ?>">
          <h5 class="text-center"><b><?php echo e($product->title); ?><br>$<?php echo e($product->price); ?></b></h5>
          <p class=""><?php echo e($product->description); ?></p>
    </div>
    
    <div>
        <?php if(auth()->guard()->check()): ?>
          
        
          <form action="<?php echo e(route('addProductToCart', ['productId' => $product->id])); ?>" method="post">
            <?php echo e(csrf_field()); ?>

            <input type="hidden" name="product_id" value="<?php echo e($product->id); ?>">
            <label for="count">Cantidad</label>
            <select id="count" name="count">
                <?php for($i = 1; $i <= 10; $i++): ?>
                  <option value="<?php echo e($i); ?>"><?php echo e($i); ?></option>
                <?php endfor; ?>
            </select>
            <br />
            <button type="submit" class="btn btn-light btn-lg">Agregar al carrito</button>
          </form>
          <?php else: ?>
          <a href="<?php echo e(route('login')); ?>" class="btn btn-light btn-lg">Agregar al carrito</button>
        <?php endif; ?>
      </div>
    
  
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <?php echo $__env->make('partial.Footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/camilo/librosDECoolto/librosDeCoolto/libros_de_coolto/resources/views/libros.blade.php ENDPATH**/ ?>