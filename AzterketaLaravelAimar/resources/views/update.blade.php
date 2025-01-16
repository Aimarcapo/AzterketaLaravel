@extends('layouts.app')

@section('content')
<div class="container">
<form action="{{ route('etxe-update')}}" method="POST" id="updateForm">
    @csrf
    @method('PUT')
    <label for="id">Selecciona un personaje para update:</label>
    <select name="id" id="id" required>
        <option value="">--Selecciona un etxe--</option>
        @foreach($etxes as $etxe)
        <option value="{{ $etxe->id }}">{{ $etxe->id }}</option>
        @endforeach
    </select>
    <label for="helbidea">Helbidea:</label>
    <input name="helbidea" id="helbidea" type="text"></input>
    <label for="logelak">Logela kopurua:</label>
    <input name="logelak" id="logelak" type="number" min="1" required></input>

    <label for="eraikuntza_urtea">Eraikuntza urtea:</label>
    <input name="eraikuntza_urtea" id="eraikuntza_urtea" type="number" min="1800" max="{{ date('Y') }}" required></input>
    <button type="submit">Update</button>
</form>
</div>