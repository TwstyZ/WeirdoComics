 
  <!-- Modal -->
  @foreach ($query as $consulta)
  
  <div class="modal fade" id="itemDelete{{$consulta->Id_item}}" tabindex="-1" aria-labelledby="itemDelete{{$consulta->Id_item}}" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="mb-3">
              <h6 class="text-danger">Name: <span class="text-dark">{{ $consulta->Name }}</span></h6>
              <h6 class="text-danger">type: <span class="text-dark">{{ $consulta->Type }}</span></h6>
              <h6 class="text-danger">Brand: <span class="text-dark">{{ $consulta->Brand }}</span></h6>
              <h6 class="text-danger">Description: <span class="text-dark">{{ $consulta->Description }}</span></h6>
              <h6 class="text-danger">Amount: <span class="text-dark">{{ $consulta->Amount }}</span></h6>
              <h6 class="text-danger">Price_buy: <span class="text-dark">{{ $consulta->Price_buy }}</span></h6>
              <h6 class="text-danger">Admission_date: <span class="text-dark">{{ $consulta->Admission_date}}</span></h6>
            </div>
        </div>
        <div class="modal-footer">
            <form method="POST" action="{{route('item.destroy',$consulta->Id_item)}}">
                @csrf
                @method('delete')
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
      </div>
    </div>
  </div>
  @endforeach