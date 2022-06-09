<section class="container show-plate-section">
    <div class="row">
        <div class="col-12 col-lg-5 image-plate">
            <figure>
                <img src="{{asset('storage/images/'.$image[0]->url)}}" alt="">
            </figure>
        </div>
        <div class="col-12 col-lg-7">
            <div id="description-image">
                <div>
                    <h2 id="title-plate-description">{{$plate->name}}</h2>
                </div>
                <div>
                    <p>{{$plate->description}}</p>
                </div>
                <div>
                    <span class="price-description">S/. {{$plate->price}}</span>
                </div>
                <div>
                    <span> Cantidad: </span><input wire:model="quantity" type="number" name="quantity" min="1" value="1">
                </div>
                <div>
                    <button type="submit" wire:click="addItem" class="btn btn-add-cart">Agregar <i class="fas fa-cart-arrow-down color-cart"></i></button>
                </div>
                <div id="messageSuccess">
                    {{-- @if (session('success_message')) --}}
                    @if ($success_message)
    
                        <x-alert>
                            <x-slot name="entrada">
                                Producto agregado.
                            </x-slot>
                            <x-slot name="message">
                                {{ $success_message }}
                            </x-slot>
                        </x-alert>

                    @endif
                </div>
            </div>

        </div>
    </div>
</section>
