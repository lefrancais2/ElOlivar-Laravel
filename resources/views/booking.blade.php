@extends('layouts.base')

@section('content')
    
    <x-title title="Reservas" beforePage="Home"/>

    {{-- @livewire('carta',['option_select'=>'Pollo']) --}}
    @livewire('booking')

    <x-delivery-area>
        <x-slot name="title">
            El Olivar
        </x-slot>
        <x-slot name="message">
            Reservas online y por teléfono
        </x-slot>
    </x-delivery-area>
    
@endsection