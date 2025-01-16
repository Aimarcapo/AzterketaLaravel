@extends('layouts.app')

@section('content')
<div class="container">


    <a href="/">Volver al inicio</a>
    <a href="/filter">Filtra</a>
    <a href="/updatear">Updatea</a>
    <!-- <form action="{{ route('etxe-update')}}" method="POST" id="updateForm">
        @csrf
        @method('PUT')
        <label for="id">Selecciona un personaje para eliminar:</label>
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
    </form> -->
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-success">


                <div class="panel-heading">List of Etxes</div>
                <table class="table">
                    <tr>
                        <th>Helbidea</th>
                        <th>Logelak</th>
                        <th>Eraikuntza Urtea</th>
                    </tr>
                    @foreach($etxes as $etxe)
                    <tr>
                        <td>{{ $etxe->helbidea }}</td>
                        <td>{{ $etxe->logelak }}</td>
                        <td>{{ $etxe->eraikuntza_urtea }}</td>
                    </tr>
                    @endforeach
                </table>

            </div>
            @if(Auth::guest())
            <a href="/login" class="btn btn-info">You need to login to see the list >></a>
            @endif
        </div>
    </div>
</div>
@endsection