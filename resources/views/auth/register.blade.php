@include ("partial.Header")

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label id='name' for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span id='errorName' class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label id="email" for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                            <span id="emailOk"></span>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
                            
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <br>
                        <select name="provincia" id="provincias">
                                Provincia de Origen
                                </select>    
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
document.getElementById('email').addEventListener('input', function() {
    campo = event.target;
    valido = document.getElementById('emailOK');
        
    emailRegex = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
    
    if (emailRegex.test(campo.value)) {
      valido.innerText = "válido";
    } else {
      valido.innerText = "El formato no es válido";
    }
});

function validarNombre(){
            console.log("valido");
            var nombre = document.querySelector("input#name");
            if(nombre.value == ""){
                var spanNombre = document.querySelector("span#errorName");
                spanNombre.innerHTML = "El nombre es obligatorio.";
            }else{
                var spanNombre = document.querySelector("span#errorNombre");
                spanNombre.innerHTML = "";
            }
        }
        var enviar = document.querySelector("button");
        enviar.addEventListener("click",function(){
            validarNombre();
        });

        fetch("https://apis.datos.gob.ar/georef/api/provincias")
.then(function(respuesta){
    return respuesta.json();
})
.then(function(datosJSON){
    var select = document.querySelector("select#provincias");
    console.log(select.innerHTML);
    for(var i = 0; i < datosJSON.provincias.length; i++){
        //console.log(datosJSON.provincias[i].nombre);
        select.innerHTML = 
        select.innerHTML + "<option value='"+datosJSON.provincias[i].nombre+"'>"+datosJSON.provincias[i].nombre+"</option>";
    }
    console.log(select.innerHTML);
})
.catch(function(error){
    console.log(error);
});
</script>
@include ('partial.Footer')
