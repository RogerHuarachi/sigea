
@extends('layouts.app')

@section('content')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Faltas</h1>
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
                                    <th>Opciones</th>
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
                                            <div class="btn-group">
                                                @can('absences.update')
                                                    <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#absenceEdit{{ $absence->id }}"><i class="fas fa-pen"></i></button>
                                                    @include('absences.edit')
                                                @endcan
                                                @can('absences.destroy')
                                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#absenceDelete{{ $absence->id }}"><i class="fas fa-trash-alt"></i></button>
                                                    @include('absences.delete')
                                                @endcan
                                            </div>
                                            <div class="btn-group">
                                                {{-- @can('absences.first') --}}
                                                    @if ($absence->type == 'Vacaciones')
                                                        <a type="submit" class="btn btn-warning btn-sm" href="{{ route('absences.first', $absence->id) }}"><i class="fa fa-check"></i></a>
                                                    @endif
                                                {{-- @endcan --}}
                                                {{-- @can('absences.first') --}}
                                                    @if ($absence->type == 'Vacaciones')
                                                        <a type="submit" class="btn btn-success btn-sm" href="{{ route('absences.second', $absence->id) }}"><i class="fa fa-check"></i></a>
                                                    @endif
                                                {{-- @endcan --}}
                                            </div>
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

@include('absences.create')
@endsection
