

@include ('partial.Header')

<form method="post" action="/admin" enctype="multipart/form-data" class="row col-12">
                        @csrf

                        <!-- Foto de libro -->
                        <div class="col-12">
                          <input class="w-100" type="file" name="avatar">
                          <span>{{$errors->first("avatar")}}</span>
                          
                        </div>
                        
                         <br>  
                       

                        <!-- titulo -->
                        <div class="input-container col-12">
                            <label for="name">Titulo</label>
                            <input type="text" name="title" value="">
                            <span>{{$errors->first('title')}}</span>
                             
                        </div>
                       
                           <br> 
                      

                        <!-- Descripcion -->
                        <div class="input-container col-12">
                            <label for="description">Descripción</label>
                            <input type="text" name="description" value="">
                            <span>{{$errors->first('description')}}</span>
                             
                        </div>
                        
                            <br>
                        
                        <!-- Precio  -->
                        <div class="input-container col-12">
                            <label for="price">Precio</label>
                            <input type="number" name="price" value="">
                            <span>{{$errors->first('price')}}</span>
                        </div>
                        
                        <br>
                        <button type="submit">Cargar producto</button>    

                    </form>


<!-- Bootstrap -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>




@include ('partial.Footer')


