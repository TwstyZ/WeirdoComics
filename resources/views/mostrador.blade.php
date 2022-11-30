@section('contenidoMenu')
    @extends('plantillamenu')
    {{-- Container para dos elementos, checar el doc --}}
    <div class="container">
        <div class="row justify-content-center">
            {{-- Buscador tipo input (por ahora) --}}
            <div class="row justify-content-center mt-3">
                <div class="col-5">
                    <label for="exampleDataList" class="form-label">Buscador</label>
                    <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Type to search...">
                    <datalist id="datalistOptions">
                        <option value="San Francisco">
                        <option value="New York">
                        <option value="Seattle">
                        <option value="Los Angeles">
                        <option value="Chicago">
                </div>
            </div>
        </div>
        {{-- cards para desplegar los productos que se van a vender al cliente en mostrador --}}
        {{-- Por el momento son 4 cards para demostrar como se veria, solo es --}}
        <div class="row justify-content-center mt-5">
            <div class="col-2">
                <div class="card" style="width: 12rem;">
                    <img src="https://tiendapanini.com.mx/media/catalog/product/q/c/qcoec011_1200.jpg?optimize=medium&bg-color=255,255,255&fit=bounds&height=300&width=240&canvas=240:300" class="card-img-top"
                        alt="...">
                    <div class="card-body">
                        <h5 class="card-title">LOS CLÁSICOS DE LA ESPADA SALVAJE DE CONAN VOL.11</h5>
                        <p class="card-text">$199.00</p>
                        <a href="#" class="btn btn-primary">Agregar Producto</a>
                    </div>
                </div>
            </div>
            <div class="col-1"></div>

            <div class="col-2">
                <div class="card" style="width: 12rem;">
                    <img src="https://tiendapanini.com.mx/media/catalog/product/f/o/fortnitezeromphc_cov.jpg?optimize=medium&bg-color=255,255,255&fit=bounds&height=300&width=240&canvas=240:300" class="card-img-top"
                        alt="...">
                    <div class="card-body">
                        <h5 class="card-title">FORTNITE X MARVEL: CONFLICTO CERO (TPB)</h5>
                        <p class="card-text">$199.00</p>
                        <a href="#" class="btn btn-primary">Agregar Producto</a>
                    </div>
                </div>
            </div>
            <div class="col-1"></div>

            <div class="col-2">
                <div class="card" style="width: 12rem;">
                    <img src="https://tiendapanini.com.mx/media/catalog/product/q/m/qmaor002.jpg?optimize=medium&bg-color=255,255,255&fit=bounds&height=300&width=240&canvas=240:300" class="card-img-top"
                        alt="...">
                    <div class="card-body">
                        <h5 class="card-title">THE MAGIC ORDER (HC) N.2</h5> <br><br>
                        <p class="card-text">$199.00</p>
                        <a href="#" class="btn btn-primary">Agregar Producto</a>
                    </div>
                </div>
            </div>
            <div class="col-1"></div>

            <div class="col-2">
                <div class="card" style="width: 12rem;">
                    <img src="https://tiendapanini.com.mx/media/catalog/product/1/2/1200.jpg?optimize=medium&bg-color=255,255,255&fit=bounds&height=300&width=240&canvas=240:300" class="card-img-top"
                        alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Conan Rey</h5><br><br><br>
                        <p class="card-text">$199.00</p>
                        <a href="#" class="btn btn-primary">Agregar Producto</a>
                    </div>
                </div>
            </div>
            <div class="col-1"></div>
        </div>
        <div class="row justify-content-center mt-3 mb-5">
            <div class="col-2">
                <div class="card" style="width: 12rem;">
                    <img src="https://tiendapanini.com.mx/media/catalog/product/Q/C/QCHSM001.jpg?optimize=medium&bg-color=255,255,255&fit=bounds&height=300&width=240&canvas=240:300&dpr=1" class="card-img-top"
                        alt="...">
                    <div class="card-body">
                        <h5 class="card-title">CHAINSAW MAN N.1</h5>
                        <p class="card-text">$199.00</p>
                        <a href="#" class="btn btn-primary">Agregar Producto</a>
                    </div>
                </div>
            </div>
            <div class="col-1"></div>

            <div class="col-2">
                <div class="card" style="width: 12rem;">
                    <img src="https://tiendapanini.com.mx/media/catalog/product/b/e/beastars_19.jpg?optimize=medium&bg-color=255,255,255&fit=bounds&height=300&width=240&canvas=240:300" class="card-img-top"
                        alt="...">
                    <div class="card-body">
                        <h5 class="card-title">BEASTARS N.19</h5>
                        <p class="card-text">$199.00</p>
                        <a href="#" class="btn btn-primary">Agregar Producto</a>
                    </div>
                </div>
            </div>
            <div class="col-1"></div>

            <div class="col-2">
                <div class="card" style="width: 12rem;">
                    <img src="https://tiendapanini.com.mx/media/catalog/product/q/k/qkano017_1200.jpg?optimize=medium&bg-color=255,255,255&fit=bounds&height=300&width=240&canvas=240:300" class="card-img-top"
                        alt="...">
                    <div class="card-body">
                        <h5 class="card-title">RENT-A-GIRLFRIEND N.17</h5>
                        <p class="card-text">$199.00</p>
                        <a href="#" class="btn btn-primary">Agregar Producto</a>
                    </div>
                </div>
            </div>
            <div class="col-1"></div>

        </div>
        <div class="row justify-content-center">
            <a type="button" class="btn btn-success" style="border-radius: 10px; " href="{{ route('v') }}">Registrar
                pedido</a>
        </div>
    </div>



@stop
