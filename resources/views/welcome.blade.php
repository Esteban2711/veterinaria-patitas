<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include("nav")
<body >

<div  class=" posicion mx-5 d-flex align-items-center contener pt-5 pb-4">
    <div class="display-1 col-lg-6 pt-lg-5">Cuidemos de los   mas juguetones del hogar</div>
</div>

    <div class=" posicion mx-5 btn btn-outline-success col-2">Planes</div>
    <div class=" posicion btn btn-success col-lg-2" href="{{route('agenda.registro')}}">Agendar Cita</div>


</body>
</html>