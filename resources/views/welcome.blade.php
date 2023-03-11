<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include("nav")
    <body>
        <div class="justify-content-center posicion mx-5 d-flex align-items-center contener pt-5 pb-4">
            <div class="display-1 text-justify col-lg-8 pt-lg-5 text-center">Cuidemos de los mas juguetones del hogar</div>
        </div>
        <div class="col-12 d-flex   justify-content-center">
            <a class=" posicion  btn btn-outline-success" href="{{route('consultar')}}">Consultar Cita</a>
            <a class=" posicion ml-1 btn btn-success " href="{{route('agenda.registro')}}">Agendar Cita</a>
        </div>
    </body>
</html>
