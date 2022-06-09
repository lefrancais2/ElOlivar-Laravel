<footer id="footer-main">
    <div class="footer-encabezado">
        <h1>elOlivar</h1>
        <p><span>Dirección:</span> Av. Buenos Aires 386 Puente Piedra</p>
        <p><span>email:</span> info@olivargrill.com</p>
    </div>
    <div class="footer-col2">
        <h1>nuestro menu</h1>
        <ul class="menu-footer">
            <li>
                <a href="">Pollo</a>
            </li>
            <li>
                <a href="">Parrilladas</a>
            </li>
            <li>
                <a href="">Carnes</a>
            </li>
            <li>
                <a href="">Anticuchos</a>
            </li>
        </ul>
    </div>
    <div class="footer-col3">
        <h1>newsletter</h1>
        <form wire:submit.prevent="submit">
            @csrf
            <input type="email" class="input-news" wire:model="email" placeholder="Tu correo electronico">
            @error('email') <span class="error">{{ $message }}</span> @enderror

            <button type="submit" class="boton-news">suscribete</button>
        </form>
    </div>
    
</footer>
