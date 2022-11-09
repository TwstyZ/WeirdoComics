@section('contenidoMenu')
    @extends('plantillamenu')
    {{-- Container para tres elementos, checar en el doc que se hizo --}}
    <div class="container">
        <br>
        {{-- banner para comics (verde) y articulos --}}
        <div class="row justify-content-center">
            <div class="col-auto">
                <div class="btn-group btn-group-lg" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-success ">Comic's</button>
                    <button type="button" class="btn btn-outline-primary">Articulos</button>
                </div>
            </div>

        </div>
        <br>
        {{-- Buscador tipo input (por ahora) --}}
        <div class="row justify-content-center">
            <div class="col-3">
                <label for="exampleDataList" class="form-label">Buscador</label>
                <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Type to search...">
                <datalist id="datalistOptions">
                    <option value="San Francisco">
                    <option value="New York">
                    <option value="Seattle">
                    <option value="Los Angeles">
                    <option value="Chicago">
                </datalist>
            </div>
        </div>
        <br>
        {{-- cards para poner en pantalla los comics relevantes, cambiar texto y titulo de cada card --}}
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

      </div>




@stop
