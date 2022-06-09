<div class="cart-navbar d-none d-lg-block">
    <a href="{{route('cart.index')}}" class="position-relative">
        <i class="fas fa-shopping-cart"></i>

        {{-- cuando el carro esta vacío --}}
        @if ($count == 0)
            <span
                class="position-absolute top-0 start-100 translate-middle badge border border-light rounded-circle bg-danger p-2">
                <span class="visually-hidden">New alerts</span>
            </span>
        @else
            {{-- Cuando el carro tiene elementos --}}
            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                {{$count}}
                <span class="visually-hidden">unread messages</span>
            </span>
        @endif
        {{-- // --}}

    </a>
</div>
