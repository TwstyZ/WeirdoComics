@section('contenidoMenu')
@extends('plantillamenu')
@if(session()->has('confirmacion'))
{!! "<script>
Swal.fire({
  title: 'Listo!',
  text: 'Comic Guardado',
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
      <h2>Ingresar Datos del Comic</h2>
    </blockquote>

  </figure>
    <div class="container">
        <form method="POST" action="{{route('ProcesoComic')}}">
            @csrf
            <div class="row justify-content-center">
                <div class="col-6">
                    <input class="form-control" type="text" placeholder="Tipo" aria-label="default input example" name="txtTipo">
                </div>
            </div>
            <br>
            <div class="row justify-content-center">
                <div class="col-6">
                    <input class="form-control" type="text" placeholder="Marca" aria-label="default input example" name="txtMarca">
                </div>
            </div>
            <br>
            <div class="row justify-content-center">
                <div class="col-6">
                    <input class="form-control" type="text" placeholder="Descripcion" aria-label="default input example" name="txtDescripcion">
                </div>
            </div>
            <br>
            <div class="row justify-content-center">
                <div class="col-6">
                    <input class="form-control" type="text" placeholder="Cantidad" aria-label="default input example" name="txtCantidad">
                </div>
            </div>
            <br>
            <div class="row justify-content-center">
                <div class="col-6">
                    <input class="form-control" type="number" placeholder="Precio Compra" aria-label="default input example" name="txtPrecioC">
                </div>
            </div>
            <br>
            <div class="row justify-content-center">
                <div class="col-6">
                    <input class="form-control" type="number" placeholder="Precio Venta" aria-label="default input example" name="txtPrecioV">
                </div>
            </div>
            <br>
            <div class="row justify-content-center">
                <div class="col-6">
                    <input class="form-control" type="date" placeholder="Fecha" aria-label="default input example" name="txtFecha">
                </div>
            </div>
            <br>
            <div class="row justify-content-center"> <button class="btn btn-primary" type="submit">Guardar Comic</button></div>
            
        </form>
    </div>
    <hr size="2px" style="color: rgb(77, 64, 54)"/>








@stop