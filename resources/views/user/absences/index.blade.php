
@extends('layouts.app')

@section('content')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Mis Vacaciones</h1>
        </div>
        <div class="col-sm-6">
            @can('absences.store')
                <ol class="breadcrumb float-sm-right">
                    <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#absenceCreate"><i class="fas fa-plus-circle"></i></button>
                </ol>
            @endcan
        </div>
      </div>
    </div>
</div>

<section class="content">
    <div class="container-fluid">
        @include('option.error')
        @include('option.validation')
        @include('option.confirmation')
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Usuario</th>
                                    <th>Tipo</th>
                                    <th>Fecha</th>
                                    <th>Apr</th>
                                    <th>Apr</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($absences as $absence)
                                    <tr>
                                        <td>{{ $absence->id }}</td>
                                        <td>{{ $absence->user->name }}</td>
                                        <td>{{ $absence->type }}</td>
                                        <td>{{ $absence->date }}</td>
                                        <td>
                                            @if ($absence->first)
                                                <i class="fas fa-check"></i>
                                            @endif
                                        </td>
                                        <td>
                                            @if ($absence->second)
                                                <i class="fas fa-check"></i>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('user.absences.create')
@endsection
