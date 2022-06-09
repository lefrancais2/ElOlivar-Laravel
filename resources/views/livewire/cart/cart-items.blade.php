<section id="container-section">
    <div class="container">

        {{-- mensaje de eliminacion de articulo --}}
        <div id="messageSuccess">
            @if ($success_message)
                <x-alert>
                    <x-slot name="entrada">
                        Información.
                    </x-slot>
                    <x-slot name="message">
                        {{ $success_message }}
                    </x-slot>
                </x-alert>
            @endif
        </div>
        {{-- Fin mensaje de eliminacion de articulo --}}

        <div>
            <table class="table table-striped table-hover">
                <thead>
                    <caption>Lista de productos</caption>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Producto</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Total</th>
                        <th scope="col">Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- @livewire('cart.list-table-cart') --}}
                    @foreach ($content as $item)
                        <tr wire:key="amount-id-{{ $item->id }}">
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $item->name }}</td>

                            {{-- Edicion de cantidad --}}
                            {{-- Se muestra la cantidad --}}
                            @if (!$activar)
                                <td>{{ $item->qty }}</td>
                            @else
                                {{-- se activa la edicion para cantidad --}}
                                <td>
                                    {{-- <livewire:user-profile-one :user="$user" :wire:key="'user-profile-one-'.$user->id"> --}}
                                    <input wire:model.defer="quantity" type="number" class="input-number-amount"
                                        value="{{ $item->qty }}">
                                    <button wire:click="editItem({{ $item->id }})"
                                        class="btn btn-accept-amount">OK!</button>
                                </td>
                            @endif

                            <td>{{ $item->price }}</td>
                            <td>S/. {{ $item->price * $item->qty }}</td>

                            <td>
                                <a href="#" wire:click="deleteItem({{ $item->id }},'{{ $item->name }}')">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </a>
                                <a href="#" wire:click="activeEdition">
                                    <i class="fa fa-edit" aria-hidden="true" id="edit-{{ $item->id }}"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    <tr>
                        <td colspan="3"></td>
                        <td>Total a pagar: </td>
                        <td>S/. {{ $suma }}</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="btn-float-right">
            <a href="{{ route('pago-online.index') }}" class="btn btn-primary contact-button">COMPRAR <i
                    class="fas fa-cash-register"></i></a>
        </div>

    </div>

</section>
