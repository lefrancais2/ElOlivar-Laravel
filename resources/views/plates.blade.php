@extends('layouts.base')

@section('content')
    
    {{-- <x-title title="Carta" class="title-carta"/> --}}
    <x-title title="Carta" beforePage="Home"/>

    @livewire('carta',['option_select'=>'Pollo'])

    <x-delivery-area>
        <x-slot name="title">
            Delivery Gratis
        </x-slot>
        <x-slot name="message">
            Servicio de entrega rápido y confiable.
        </x-slot>
    </x-delivery-area>
    
@endsection