<section id="container-section">
    <div id="section-contact" class="container">
        <div class="row">
            <div class="col-12 col-lg-7">
                <div>
                    <h2 class="text-center">Realizar una reserva</h2>
                </div>
                <div class="mb-3">
                    <form wire:submit.prevent="submitForm">
                        <div class="mb-3">
                            <label for="name" class="form-label">Nombre</label>
                            <input type="text" wire:model="name" class="form-control rounded-area" id="name" name="name"
                                placeholder="Escribe tu nombre" value="{{ old('name') }}" autofocus>
                            @error('name') <span class="error">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <label for="lastname" class="form-label">Apellidos</label>
                            <input type="text" wire:model="lastname" class="form-control rounded-area" id="lastname"
                                name="lastname" placeholder="Escribe tu apellido" value="{{ old('lastname') }}">
                            @error('lastname') <span class="error">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" wire:model="email" class="form-control rounded-area" id="email"
                                placeholder="Escribe tu email" value="{{ old('email') }}">
                            @error('email') <span class="error">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Telefono</label>
                            <input type="tel" id="phone" name="phone" pattern="[9][0-9]{8}"
                                wire:model="phone" class="form-control rounded-area"
                                placeholder="Escribe tu número de celular" value="{{ old('phone') }}">
                            @error('phone') <span class="error">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <label for="date" class="form-label">Fecha</label>
                            <input type="date" wire:model="date" class="form-control rounded-area" id="date"
                                value="{{ old('date') }}">
                            @error('date') <span class="error">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <label for="hour" class="form-label">Hora</label>
                            <input type="time" wire:model="hour" class="form-control rounded-area" id="hour"
                                value="{{ old('hour') }}">
                            @error('hour') <span class="error">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <label for="num_persons" class="form-label">Número de personas</label>
                            <input type="number" wire:model="num_persons" class="form-control rounded-area"
                                id="num_persons" value="{{ old('num_persons') }}" min="1" max="100">
                            @error('num_persons') <span class="error">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary float-end contact-button">RESERVAR</button>
                        </div>
                    </form>
                </div>
                <div id="messageSuccess">
                    {{-- @if (session('success_message')) --}}
                    @if ($success_message)
    
                        {{-- <div class="alert alert-primary alert-dismissible fade show" role="alert">
                            <i class="fas fa-check-circle"></i>
                            <strong> Mensaje Enviado!</strong> {{ $success_message }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div> --}}
                        <x-alert>
                            <x-slot name="entrada">
                                Mensaje Enviado.
                            </x-slot>
                            <x-slot name="message">
                                {{$success_message}}
                            </x-slot>
                        </x-alert>
                    @endif
                </div>
            </div>
            <div id="move" class="col-12 col-lg-3">
                <x-informacion/>
            </div>
        </div>
    </div>
</section>
