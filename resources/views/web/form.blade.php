@extends('web.base')

@section('content')

<div class="container">
    <div class="col-lg-6 offset-lg-3">
        <h4><u>Presupuesto Online</u></h4>
        <form action="{{route('presupuesto_online')}}" method="POST" id="presupuesto" >
          @csrf
          <br>
          <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" class="form-control" id="name" name="name" required>
            @error('name')
            <p class=".text-danger"><strong>Error: Campo requerido!</strong></p>
            @enderror
          </div>
            <div class="form-group">
              <label for="email">Correo Electronico</label>
              <input type="email" class="form-control" id="email" name="email">
              @error('email')
              <p class=".text-danger"><strong>Error: Campo requerido!</strong></p>
              @enderror
            </div>
            <div class="form-group">
              <label for="phone">Telefono</label>
              <input type="number" class="form-control" id="phone" name="phone" required>
              @error('phone')
              <p class=".text-danger"><strong>Error: Campo requerido!</strong></p>
              @enderror
            </div>
            <div class="form-group">
              <label for="plaga">Plaga / Problema</label>
              <input type="text" class="form-control" id="plaga" name="plaga" placeholder="Ejemplo: Cucarachas, hormigas, etc.." required>
              @error('plaga')
              <p class=".text-danger"><strong>Error: Campo requerido!</strong></p>
              @enderror
            </div>
            <div class="form-group">
                <label for="dir">Zona / Barrio </label>
                <input type="text" class="form-control" id="dir" name="dir" required>
                @error('dir')
                <p class=".text-danger"><strong>Error: Campo requerido!</strong></p>
                @enderror
            </div>
            <label>Tipo de espacio a tratar:</label><br>
            <div class="form-group">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" id="radio1" name="space" value="casa" checked>
                  <label class="form-check-label" for="radio1">Casa</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" id="radio2" name="space" value="departamento">
                  <label class="form-check-label" for="radio2">Departamento</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" id="radio3" name="space" value="comercio">
                  <label class="form-check-label" for="radio3">Comercio</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" id="radio4" name="space" value="4">
                  <label class="form-check-label" for="radio4">Otro</label>
                </div>
            </div>
                @error('space')
                <p class=".text-danger"><strong>Error: Campo requerido!</strong></p>
                @enderror
            <div class="form-group" id="input_radio4" hidden>
              <input type="text" class="form-control" id="radio_input" name="space_input" placeholder="Ejemplo: Oficina, Deposito, etc...">
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Consulta / Comentario:</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="comment"></textarea>
            </div>

            <button class="btn btn-success btn-block"  id="send">Enviar</button>
            <button class="btn btn-success  btn-block" type="button" id="sending" disabled hidden>
              <span class="pull-left spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
              Enviado...
            </button>
          </form>
    </div>
</div>
<br><br>



@endsection

@section('content_script')
<script>

  $(".form-check").change(function(){
    if($('#radio4').prop("checked")){
      $("#input_radio4").removeAttr("hidden");
    }else {
      $("#input_radio4").prop("hidden",true);
    }
  });

  $("#presupuesto").submit(function() {
    $("#send").prop("hidden",true);
    $("#sending").removeAttr("hidden");
  });
</script>
@endsection