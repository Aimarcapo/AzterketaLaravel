@extends('layouts.app')

@section('content')
<div class="container">


    <a href="/">Volver al inicio</a>


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