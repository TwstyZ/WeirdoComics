@section('contenidoMenu')
@extends('plantillamenu')
@if(session()->has('confirmacion'))
{!! "<script>
Swal.fire({
  title: 'Listo!',
  text: 'Vendedor Guardado',
  imageUrl: 'https://png.pngtree.com/element_our/20190530/ourlarge/pngtree-simply-like-a-smiley-face-illustration-image_1245615.jpg',
  imageWidth: 250,
  imageHeight: 250,
  imageAlt: 'Custom image',
})
</script>"!!}
@endif
@if($errors->any())
    @foreach($errors->all() as $error)
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong> {{$error}}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert"aria-label="Close"></button>
    </div>
    @endforeach
    @endif
<br>
<figure class="text-center">
    <blockquote class="blockquote">
      <h2>Ingresar Datos del Vendedor</h2>
    </blockquote>

  </figure>
    <div class="container">
        <form method="POST" action="{{route('ProcesoVendedor')}}">
            @csrf
            <div class="row justify-content-center">
                <div class="col-6">
                    <input class="form-control" type="text" placeholder="Nombre" aria-label="default input example" name="txtNombre">
                </div>
            </div>
            <br>
            <div class="row justify-content-center">
                <div class="col-6">
                    <input class="form-control" type="text" placeholder="Direccion" aria-label="default input example" name="txtDireccion">
                </div>
            </div>
            <br>
            <div class="row justify-content-center">
                <div class="col-6">
                    <input class="form-control" type="number" placeholder="Numero Fijo" aria-label="default input example" name="noFijo">
                </div>
            </div>
            <br>
            <div class="row justify-content-center">
                <div class="col-6">
                    <input class="form-control" type="number" placeholder="Numero Celular" aria-label="default input example" name="noCelular">
                </div>
            </div>
            <br>
            <div class="row justify-content-center">
                <div class="col-6">
                    <input class="form-control" type="email" placeholder="Correo" aria-label="default input example" name="txtCorreo">
                </div>
            </div>
            <br>
            <div class="row justify-content-center"> <button class="btn btn-primary" type="submit">Guardar Vendedor</button></div>
            
        </form>
    </div>
    <hr size="2px" style="color: rgb(77, 64, 54)"/>








@stop