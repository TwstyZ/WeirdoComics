@section('contenidoMenu')
    @extends('plantillamenu')
    {{-- Container para dos elementos, checar el doc --}}
    <br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-auto">
                <img src="https://tiendapanini.com.mx/static/version1668007402/frontend/Panini/Mexico/es_MX/images/panini-logo.svg"
                    class="rounded float-start" width="300" height="300" alt="...">
            </div>
            <div class="col-4">
                <ul class="list-group">
                    <li class="list-group-item ">Tienda Panini</li>
                    <li class="list-group-item ">República De Uruguay 17 a 740 Mts. Zócalo .</li>
                    <li class="list-group-item ">México</li>
                    <li class="list-group-item ">55 5208 3550</li>
                    <li class="list-group-item ">55 5208 3550.</li>
                    <li class="list-group-item ">ventas@tiendapanini.com</li>
                    <li class="list-group-item ">https://tiendapanini.com.mx</li>
                </ul>
            </div>
            <div class="col-2">
                <div class="container">
                    <div class="row">
                        <button type="button" class="btn btn-success mt-5" style="border-radius: 10px;">Consulta</button>
                    </div>
                    <div class="row">
                        <button type="button" class="btn btn-primary mt-4" style="border-radius: 10px;">Editar</button>
                    </div>
                    <div class="row">
                        <button type="button" class="btn btn-danger mt-4" style="border-radius: 10px;">Borrar</button>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <hr size="5px" color="black" />
        <div class="row justify-content-center">
            <div class="col-auto">
                <img src="https://www.ociostock.com/cms/site_0023/ficherosPlantilla/Ociostock_logo.png"
                    class="rounded float-start" width="300" height=auto alt="..." style="margin-top: 40%;">
            </div>
            <div class="col-4">
                <ul class="list-group">
                    <li class="list-group-item ">Ocio Stock</li>
                    <li class="list-group-item ">C/ Isaac Peral, 14 28939 Arroyomolinos (Madrid).</li>
                    <li class="list-group-item ">España</li>
                    <li class="list-group-item ">(+34) 91 610 22 93 </li>
                    <li class="list-group-item ">(+34) 91 610 22 93 .</li>
                    <li class="list-group-item ">ventas@ociostock.com</li>
                    <li class="list-group-item ">https://www.ociostock.com</li>

                </ul>
            </div>
            <div class="col-2">
                <div class="container">
                    <div class="row">
                        <button type="button" class="btn btn-success mt-5" style="border-radius: 10px;">Consulta</button>
                    </div>
                    <div class="row">
                        <button type="button" class="btn btn-primary mt-4" style="border-radius: 10px;">Editar</button>
                    </div>
                    <div class="row">
                        <button type="button" class="btn btn-danger mt-4" style="border-radius: 10px;">Borrar</button>
                    </div>
                </div>
            </div>
        </div>
        <hr size="5px" color="black" />
    </div>



@stop
