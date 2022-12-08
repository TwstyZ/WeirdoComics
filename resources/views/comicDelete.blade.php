 
  <!-- Modal -->
  @foreach ($query as $consulta)
  
  <div class="modal fade" id="comicDelete{{$consulta->Id_item}}" tabindex="-1" aria-labelledby="comicDelete{{$consulta->Id_item}}" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Eliminar</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="mb-3">
                <label class="form-label">Nombre:</label>
                <h6 class="text-left">{{$consulta->Name}}</h6>
                {{$errors->first('Name')}}
            </div>
        </div>
        <div class="modal-footer">
            <form method="POST" action="{{route('comic.destroy',$consulta->Id_item)}}">
                @csrf
                @method('delete')
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerras</button>
          <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>
        </div>
      </div>
    </div>
  </div>
  @endforeach