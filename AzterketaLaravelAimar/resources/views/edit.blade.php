@extends('layouts.app')

@section('content')
<div class="container">


    <a href="/">Volver al inicio</a>
    <form action="{{ route('etxe-filter')}}" method="GET" id="updateForm">
        @csrf
        @method('GET')
        <label for="id">Filtroa</label>
        <select name="id" id="id" required>
            <option value="">--Selecciona un etxe--</option>
            @foreach($etxes as $etxe)
            <option value="{{ $etxe->id }}">{{ $etxe->id }}</option>
            @endforeach
        </select>
        <button type="submit">Update</button>
    </form>
</div>
@endsection