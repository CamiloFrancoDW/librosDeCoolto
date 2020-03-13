<!DOCTYPE html>

  <!-- ACA VIENE EL NAV -->
  
  
<?php echo $__env->make("partial.Header", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  

<!-- ACA VIENE EL VIDEO DEL HOME -->
  <div>
    <div class="container">
      <div class="row"></div>
    </div><video src="Video/Video%20Banner.mp4" autoplay=""width="100%" muted="" loop=""></video>
  </div>
  <!-- <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 p-md-5 p-3 d-flex flex-column justify-content-center" style="">
          <h1 class=""><b>Biblioteca virtual</b></h1>
          <p class="mb-0">Elije tus libros favoritos</p><img class="img-fluid d-block mx-auto" src="img/Botón de carrito.png">
        </div>
        <div class="col-lg-4 p-3" >
          <div id="carousel2" class="carousel slide" data-ride="carousel" data-interval="5000">
            <div class="carousel-inner">
              <div class="carousel-item active"> <img class="d-block w-75 mx-auto" src="img/01.png"> </div>
              <div class="carousel-item"> <img class="d-block w-75 mx-auto" src="img/02.png"> </div>
              <div class="carousel-item"> <img class="d-block w-75 mx-auto" src="img/03.png"> </div>
              <div class="carousel-item"> <img class="d-block w-75 mx-auto" src="img/04.png"> </div>
              <div class="carousel-item"> <img class="d-block w-75 mx-auto" src="img/05.png"> </div>
              <div class="carousel-item"> <img class="d-block w-75 mx-auto" src="img/06.png"> </div>
            </div>
            <a class="carousel-control-prev" href="#carousel2" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span></a>
            <a class="carousel-control-next" role="button" data-slide="next" href="#carousel2">
              <span class="carousel-control-next-icon" aria-hidden="true"></span></a>
            
          </div><a class="btn btn-outline-secondary btn-lg text-center w-100" href="#" ><b>Comprar</b></a>
        </div>
      </div>
    </div>
  </div> -->
  
  <?php echo $__env->make('partial.Footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html><?php /**PATH /Users/camilo/librosDECoolto/librosDeCoolto/libros_de_coolto/resources/views/homeLC.blade.php ENDPATH**/ ?>