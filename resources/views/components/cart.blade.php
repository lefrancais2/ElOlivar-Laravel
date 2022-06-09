<section id="container-section">
    <div class="container">
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
                @livewire('cart.list-table-cart')
            </tbody>
        </table>
    </div>

</section>
