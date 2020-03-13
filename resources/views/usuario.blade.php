
@include ('partial.Header')

<div class="card-body">
<form class="form-groupos" method="post" enctype="multipart/form-data">
@csrf
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="name">Nombre</label>
          <input type="text" value="{{$usuario -> name}}" name="name" class="form-control" id="inputNombre">
        </div>
        
        <div class="form-group col-md-6">
          <label for="email">Email</label>
          <input type="email" value="{{$usuario -> email}}" name="email" class="form-control" id="inputEmail">
        </div>

        <div class="form-group col-md-6">
          <label for="password">Contraseña</label>
          <input type="password" name="password" class="form-control" id="pass">
        </div>
        <div class="form-group col-md-6">
          <label for="password">Confirmar Contraseña</label>
          <input type="password" name="password" class="form-control">
        </div>

        
      </div>

      <button type="submit" class="formbutton" name="editar">Actualizar Datos</button>

    </form>
</div>



<!-- Bootstrap FAQ - END -->


  @include ('partial.Footer')

  

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>