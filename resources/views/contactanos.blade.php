@extends('layouts.base')

@section('content')
    
    <x-title title="Contactanos" beforePage="Home"/>

    {{-- @livewire('carta',['option_select'=>'Pollo']) --}}
    @livewire('form-contact')

    <x-contactmap />
    
@endsection