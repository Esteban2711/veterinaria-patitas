<html>
@include("nav")
@php
 $errors = $errors ?? '';   

@endphp
<body>


    <div class="kt-portlet kt-portlet--mobile pt-4 " id="pagina">
        <div class="kt-portlet__body ">
            <div class="">
                <div class="row justify-content-center">
                    <div class="col-lg-4">
                        <div class="card card-custom gutter-b border-secondary mb-3">
                            <div class="card-header flex-wrap border-0 pt-6 pb-0">
                                <div class=" row text-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="150" height="150" version="1.0" viewBox="0 0 500 500"><path d="M297.2 105.8c-16.3 5.9-29 21.3-35.8 43.7-2.4 7.8-2.7 10.8-2.8 22.5-.1 10 .4 15.1 1.6 19.8 3.9 14 10.5 23.5 19.9 28.7 4.9 2.7 6.3 3 14.4 3 8.2 0 9.6-.3 15.8-3.3 29.3-14.4 43.1-63.9 26.9-95.8-8.1-15.9-25.3-23.8-40-18.6zM191.3 112.6c-2.3.9-6.3 3.4-8.9 5.7-8.9 7.8-14 18.5-16.4 34.5-3.2 21.1 4.4 47.4 17.8 61.4 21.9 23 49.6 13 58.9-21.2 2.7-10 2.4-30-.6-40.5-5.5-18.8-14.7-31.6-27.3-38-5.9-2.9-8.1-3.5-13.2-3.4-3.3 0-8 .7-10.3 1.5zM116.2 189.3c-5.4 1.7-12.6 8.9-15.6 15.6-3.8 8.5-4.9 15.9-4.3 28.6.7 13.7 2.5 20.3 8.7 33 6.5 13.2 15 22.7 25.2 28.1 6.5 3.4 8.1 3.8 14.3 3.8 11.3 0 19.2-5.4 24.6-16.7 5.5-11.7 6.3-31 2-46.2-7.7-26.7-27.8-47.7-45.5-47.4-3.3.1-7.6.6-9.4 1.2zM365.7 204.9c-12.6 5.1-22.5 15-29.7 29.8-6.4 13.1-8.3 22.1-7.8 37.2.6 14.5 2.5 21.1 8.3 27.9 18.1 21 50.4 4 63.1-33.3 3.6-10.5 4.5-29.5 2-39.4-4.7-18.5-20.6-28.3-35.9-22.2zM235.5 270.7c-8 1.1-20.4 4.6-24.5 7-2.5 1.5-8.6 6.6-13.6 11.4-8.8 8.5-17.6 14.7-41 28.9-18.7 11.4-22.6 16.2-24.3 29.9-1.9 15.7 2.6 29.1 13.2 39.5 18 17.4 42.1 24.4 95.4 27.7 24.3 1.5 63.8.7 74.3-1.5 17.3-3.7 30.3-9.6 39.8-18.2 9.9-8.9 12.7-17.7 9.8-31.2-3.2-15.3-8.6-22.8-26.1-36-14.1-10.7-19.7-16.3-27.7-27.4-3.8-5.4-9-12-11.5-14.8-9.1-10.1-27.7-16.1-49.3-15.8-6.3 0-12.8.3-14.5.5z"/></svg>

                                </div>
                                <h2 class="card-title align-items-start flex-column text-center">
                                    <span class="card-label font-weight-bolder font-size-h3 text-dark text-center"> Iniciar Sesion </span>
                                </h2>
                            </div>
                            <div class="card-body">
                                <form id="formDescargarCarnet" onSubmit="change" method="GET" ">
                                    @csrf
                                    <div class="form-group row">
                                        <label class="col-form-label text-sm-right font-weight-bold text-dark">Identificacion</label>
                                        <input type="text" class="form-control  cajasTexto" value="" placeholder="Ingrese la identificacion"  id="usuario"  name="identificacion" tabindex="-1" required>
                                    </div>
                                    <div class="form-group row pt-4">
                                        <label class="col-form-label text-sm-right font-weight-bold text-dark">Identificador de tu mascota</label>
                                        <input type="text" class="form-control  cajasTexto" placeholder="Ingrese el código" required  id="codigo" name="codigo" tabindex="-1">
                                    </div>
                                    @if($errors)
                                        @if($errors->any())
                                            <label class="text-danger">{{$errors->first()}}</label>
                                        @endif
                                    @endif
                                    <div class="form-group row pt-3">
                                        <div class="col-lg-4 col-sm-4 col-xs-4 offset-lg-4 offset-sm-5 offset-xs-4 text-center">
                                            <button   id="botonVerificar" type="submit" onclick="lsRememberMe()" class="btn btn-success boton ">consultar </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



</body>


</html>