@include("nav")

<div class="container">

<div class="row">
        <div class="col-md-8 order-md-1">
          <h3 class="mt-5 mb-5">Agendar Cita</h3>
          <h3 class=" ">Informacion del Cliente </h3>
          <form id="formAgenda " class="needs-validation" novalidate="">
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="nombres">Nombres</label>
                <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="apellidos">Apellidos</label>
                <input type="text" class="form-control" id="lastName" placeholder="" value="" required="">
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>
            </div>
             <div class="row">
              <div class="col-md-6 mb-3">
                <label for="identificacion">identificacion</label>
                <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="telefono">telefono</label>
                <input type="text" class="form-control" id="lastName" placeholder="" value="" required="">
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>
            </div>
            <div class="mb-3">
              <label for="email">Correo </label>
              <input type="email" class="form-control" id="email" placeholder="you@example.com">
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>


 <h3 class="mt-5 ">Informacion de la mascota </h3>
           <div class="row">
              <div class="col-md-6 mb-3">
                <label for="Identificador">Identificador</label>
                <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="nombre_mascota">Nombre</label>
                <input type="text" class="form-control" id="lastName" placeholder="" value="" required="">
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>
            </div>
<div class="col-md-5 mb-3">
                <label for="country">Tipo de Animal</label>
                <select class="custom-select d-block w-100" id="country" required="">
                  <option value="">elige el tipo...</option>
                  <option>perro </option>
                </select>
                <div class="invalid-feedback">
                  Please select a valid country.
                </div>
              </div>

          
           <h3 class="mt-5 ">Fecha </h3>
 <div class="row">
              <div class="col-md-6 mb-3">
                <label for="fecha">Dia</label>
                <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="hora">Hora</label>
                <input type="text" class="form-control" id="lastName" placeholder="" value="" required="">
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>
            </div>
                  <div class=" posicion btn btn-success col-lg-2" href="{{route('agenda.registro')}}">Agendar Cita</div>
          
          </form>
        </div>
      </div>
</div>