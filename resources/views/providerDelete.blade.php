<!-- Modal -->
@foreach ($query as $consulta)
    <div class="modal fade" id="ProviderDelete{{ $consulta->Id_provider }}" data-bs-backdrop="static"
        data-bs-keyboard="false" tabindex="-1" aria-labelledby="ProviderDelete{{ $consulta->Id_provider }}"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Delete Provider</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h6 class="text-danger">Name: <span class="text-dark">{{ $consulta->Name }}</span></h6>
                    <h6 class="text-danger">Address: <span class="text-dark">{{ $consulta->Address }}</span></h6>
                    <h6 class="text-danger">Country: <span class="text-dark">{{ $consulta->Country }}</span></h6>
                    <h6 class="text-danger">Contact: <span class="text-dark">{{ $consulta->Contact }}</span></h6>
                    <h6 class="text-danger">Cellphone: <span class="text-dark">{{ $consulta->Cellphone }}</span></h6>
                    <h6 class="text-danger">Telephone: <span class="text-dark">{{ $consulta->Telephone }}</span></h6>
                    <h6 class="text-danger">Email: <span class="text-dark">{{ $consulta->Email }}</span></h6>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <form action="{{route('provider.destroy',$consulta->Id_provider)}}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit"
                            class="btn "style="background-color:#D90404;color:white">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endforeach
