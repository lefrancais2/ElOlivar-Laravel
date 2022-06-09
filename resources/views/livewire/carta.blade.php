<section id="container-section">
    <div>
        <div class="container">
            <select wire:model="option_select" name="select-plates" id="select-plates" class="form-select"
                aria-label="Default select example">
                <option value="" selected>Selecciona una opción</option>
                <option value="Pollo">Pollo</option>
                <option value="Carne">Carne</option>
                <option value="Anticucho">Anticucho</option>
                <option value="Postres">Postres</option>
                <option value="Bebidas">Bebidas</option>
            </select>
        </div>
        <div class="container list-plate-carta">
            @foreach ($datas as $data)
                @if ($loop->index % 4 == 0)
                    <div class="row" style="margin-bottom:30px;">
                @endif
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        {{-- {{$images[$loop->index*4]->imageable_id}} --}}
                        {{-- {{$images[$data->id*4-1]->url}} --}}
                        <a href="{{route('plates.show',$data->id)}}"> <img src="{{ asset('storage/images/' . $images[$data->id * 4 - 1]->url) }}" 
                            class="card-img-top" alt="{{ $data->name }}"> </a>
                        {{-- <img src="{{ asset('storage/images/plates/0add22d2ee143fa7350488a1d4613e65.png') }}" class="card-img-top" alt="..."> --}}
                        <div class="card-body">
                            <a href="{{route('plates.show',$data->id)}}"><h5 class="card-title">{{ $data->name }}</h5></a>
                            <p class="card-text">S/. {{ $data->price }}</p>
                            {{-- <a href="" class="btn btn-primary">Más info</a> --}}
                            {{-- <button wire:click="$set('code', {{$data->id}})" class="btn btn-primary">Más info</button> --}}
                        </div>
                    </div>
                </div>

                @if ($loop->index % 4 == 3)
        </div>
        @endif
        @endforeach
    </div>
    </div>

    {{-- <section id="before-footer" style="background-image: url({{ asset('storage/recursos/lista_footer.png') }})">
        <div class="div-before-footer">
            <h2>Delivery gratis</h2>
            <p>Servicio de entrega rápido y confiable.</p>
            <a href="">Saber más</a>
        </div>
    </section> --}}



</section>
