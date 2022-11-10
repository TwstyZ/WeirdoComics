<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weirdo Comics</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body>

    <ul class="nav nav-tabs justify-content-center">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/"><img src="https://www.aprendemas.com/mx/blog/images/2022/01/comic-1.jpg" alt="" width="30" height="24"></a>
        </li>
        <li class="nav-item">
            <a class="nav-link "style="color:#FF0000;" href="{{route('c')}}">Consulta</a>
          </li>
          <li class="nav-item">
            <a class="nav-link"style="color:#FF0000;" href="{{route("p")}}">Proveedores</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="color:#FF0000;" href="{{route('pe')}}">Pedidos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " style="color:#FF0000;" href="{{route('m')}}" >Mostrador</a>
          <li class="nav-item">
            <div class="row align-items-center">
              <div class="dropdown">
                <a class="btn btn-danger " href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                  Alta
                </a>
              
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                  <li><a class="dropdown-item" href="{{route('ac')}}">Comic</a></li>
                  <li><a class="dropdown-item" href="{{route('aa')}}">Articulo</a></li>
                  <li><a class="dropdown-item" href="{{route('av')}}">Vendedor</a></li>
                  <li><a class="dropdown-item" href="{{route('ap')}}">Proveedor</a></li>
                </ul>
              </div>
            </div>
          </li>
      </ul>

    <!--Contenido de la página-->
    @yield('contenidoMenu')

    <!--Pie de página -->
    <div class="alert alert-danger pb-1  pt-2 text-center" role="alert">
        Weirdo Comics 2022 Copyrigth ©
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
{{-- {{request()->routeIs('casa')?'text-danger w-25':''}} --}}