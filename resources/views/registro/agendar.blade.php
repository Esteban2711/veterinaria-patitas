@include("nav")

<div class="container">
    @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    <hr class="my-3">
    @endif
    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="{{ route('cita.crear') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-md-8 order-md-1">
                <h3 class="mt-5 mb-5">Agendar Cita</h3>
                <h3 class=" ">Informacion del Cliente </h3>
                <form id="formAgenda " class="needs-validation" novalidate="">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="nombres">Nombres</label>
                            <input type="text" class="form-control" placeholder="" name="nombre_completo" value=""
                                required="">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="apellidos">Apellidos</label>
                            <input type="text" class="form-control" placeholder="" name="apellido_completo" value=""
                                required="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="identificacion">identificacion</label>
                            <input type="text" class="form-control" placeholder="" name="identificacion" value=""
                                required="">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="telefono">telefono</label>
                            <input type="text" class="form-control" placeholder="" name="telefono" value="" required="">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="email">Correo </label>
                        <input type="email" class="form-control" placeholder="" name="email">
                    </div>
                    <h3 class="mt-5 ">Informacion de la mascota </h3>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="Identificador">Identificador</label>
                            <input type="text" class="form-control" placeholder="" name="identificador" value=""
                                required="">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="nombre_mascota">Nombre</label>
                            <input type="text" class="form-control" placeholder="" name="nombre" value="" required="">
                        </div>
                    </div>
                    <div class="col-md-5 mb-3">
                        <label for="tipo">Tipo de Animal</label>
                        <select class="form-select" name="tipo" aria-label="Seleciona el tipo de animal">
                            <option selected>Seleciona el tipo de animal</option>
                            <option value="1">Perro</option>
                            <option value="2">Gato</option>
                            <option value="4">Conejo</option>
                            <option value="5">Caballo</option>
                        </select>
                    </div>
                    <h3 class="mt-5 ">Fecha </h3>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-md-6 mb-6">
                                <label for="Identificador">Identificador</label>
                                <input type='datetime-fecha' class="form-control" placeholder="Seleccione la fecha"
                                    name="start" />
                            </div>
                            <div class="col-md-6 mb-6">
                                <label for="nombre_mascota">Nombre</label>
                                <input type='datetime-hora' class="form-control" placeholder="Seleccione la hora"
                                    name="start" />
                            </div>
                        </div>
                    </div>
                    <button type="submit" class=" posicion btn btn-success ">Agendar Cita</button>
                </form>
            </div>
        </div>
    </form>
</div>

<script>
    configFecha = {
        dateFormat: "Y-m-d"
    }

    configHora = {
        enableTime: true,
        noCalendar: true,
        dateFormat: "H:i",
    }
    flatpickr("input[type=datetime-fecha]", configFecha)
    flatpickr("input[type=datetime-hora]", configHora)
</script>
