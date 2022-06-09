<section id="container-section" class="container">
    <div class="row">
        <div class="col-12 col-lg-7">
            <div>
                <h2 class="text-center">Get in touch</h2>
            </div>
            <div class="mb-3">
                <form wire:submit.prevent="submit">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nombre</label>
                        <input type="text" wire:model="name" class="form-control rounded-area" id="name" name="name"
                            placeholder="Escribe tu nombre" value="{{ old('name') }}" autofocus>
                        @error('name') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" wire:model="email" class="form-control rounded-area" id="email"
                            placeholder="Escribe tu email" value="{{ old('email') }}">
                        @error('email') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Telefono</label>
                        <input type="text" wire:model="phone" class="form-control rounded-area" id="phone"
                            placeholder="Escribe tu número de celular" value="{{ old('phone') }}">
                        @error('phone') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Escribe tu mensaje aquí</label>
                        <textarea wire:model="message" class="form-control rounded-area" name="message" id="message"
                            cols="30" rows="7"> {{ old('message') }}</textarea>
                        @error('message') <span class="error">{{ $message }}</span> @enderror
                    </div>

                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary float-end contact-button">ENVIAR MENSAJE</button>
                    </div>
                </form>
            </div>
            <div id="messageSuccess">
                {{-- @if (session('success_message')) --}}
                @if ($success_message)

                    <x-alert>
                        <x-slot name="entrada">
                            Mensaje Enviado.
                        </x-slot>
                        <x-slot name="message">
                            {{ $success_message }}
                        </x-slot>
                    </x-alert>
                @endif
            </div>
        </div>
        <div id="move" class="col-12 col-lg-3">
            <x-informacion/>
        </div>
    </div>

</section>
