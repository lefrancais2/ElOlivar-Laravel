@extends('layouts.base')

@section('content')
    
    {{-- <x-title title="Carta" class="title-carta"/> --}}
    <x-title title="Descripción" beforePage="Carta"/>

    @livewire('show-plate',['image'=>$image,'plate'=>$plate])

    <x-delivery-area>
        <x-slot name="title">
            No Gratis
        </x-slot>
        <x-slot name="message">
            Servicio de entrega rápido y confiable.
        </x-slot>
    </x-delivery-area>
    
@endsection