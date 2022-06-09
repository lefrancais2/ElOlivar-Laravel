<section class="title">
    {{-- <img src="{{asset('storage/recursos/restaurante_title.png')}}" alt=""> --}}
    <img src="{{asset('storage/recursos/restaurante_title2.png')}}" alt="">
    {{-- <h3 {{$attributes->merge(['class'])}}>{{$title}}</h3> --}}
    <h3>{{$title}}</h3>
    <div class="div-link">
        @if($beforePage == "Home")
            <a href="/" class="link">{{$beforePage}} </a>    
        @else
            <a href="{{route('carta.index')}}" class="link">{{$beforePage}} </a>
        @endif
        <i class="fas fa-long-arrow-alt-right"></i>
        <span>{{$title}}</span>
    </div>
</section>
