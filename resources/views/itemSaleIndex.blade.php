@extends('template')
@section('content')
    @php($total = 0)
    {{-- {{ $select[0]->Name_provider }}
    {{ print_r($select) }} --}}
    <section style="background-color: #eee;">
        <div class="py-5">
            <div class="d-flex justify-content-center align-items-center">
                <div class="col-xl-6">
                    <div class="card border-top border-bottom border-3" style="border-color: #033E8C !important;">
                        <div class="card-body p-5">

                            <h1 class="mb-5" style="color: #033E8C;">Sale Order</h1>


                            <div class="row">

                                <div class="row">
                                    <div class="col mb-1">
                                        <p class="small text-muted mb-1">Date</p>
                                        <p>{{ $select[0]->created_at }}</p>
                                    </div>
                                    <div class="col mb-1">
                                        <p class="small text-muted mb-1">Sale No.</p>
                                        <p>{{ $select[0]->Id_sale }}</p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col mb-1">
                                        <p class="small text-muted mb-1">Seller</p>
                                        <p>{{ $select[0]->Name_seller}}</p>
                                    </div>
                                </div>


                                <div class="mx-n5 px-5 py-4" style="background-color: #f2f2f2;">

                                    @foreach ($select as $consulta)

                                        @php($total = $total + $consulta->Total)

                                        <div class="row">
                                            <div class="col-md-8 col-lg-9">
                                                <p>{{ $consulta->Name_item }} ({{ $consulta->Amount}})<br>
                                                {{ $consulta->Type}} | {{ $consulta->Brand}}</p>
                                            </div>
                                            <div class="col-md-4 col-lg-3">
                                                <p>${{ number_format((float) $consulta->Total, 2, '.', '')}}</p>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>

                                <div class="row my-4">
                                    <div class="">
                                        <p class="lead fw-bold mb-0" style="color: #033E8C;">Total:
                                            ${{ number_format((float) $total, 2, '.', '') }}</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
    </section>

@stop
