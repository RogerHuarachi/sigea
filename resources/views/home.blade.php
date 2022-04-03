
@extends('layouts.app')

@section('content')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Inicio</h1>
        </div>
      </div>
    </div>
</div>

<section class="content">
  <div class="container-fluid">
    @include('option.error')
    @include('option.validation')
    @include('option.confirmation')
    <div class="card">
      <div class="card-header ui-sortable-handle">
        <h5 class="card-title">Bienvenid@</h5>
      </div>
      <div class="card-body">
        <h5>Sistema de control de asistencia</h5>
        <div class="row justify-content-md-center">
          <div class="col-md-auto">
            <a class="btn btn-success btn-lg" href="{{ route('inputs.store') }}"><i class="fas fa-minus-circle"></i> Marcar Entrada</a>
          </div>
          <div class="col-md-auto">
              <a class="btn btn-danger btn-lg" href="{{ route('outputs.store') }}"><i class="fas fa-minus-circle"></i> Marcar Salida</a>
          </div>
        </div>
        <div class="row pt-2">
            <div class="col-md-6">
                <div class="card card-info">
                    <div class="card-header">
                        <h5 class="card-title">Agencia Nacional</h5>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-light small">
                            <thead class="thead-light">
                                <tr>
                                    <th>Usuario</th>
                                    <th>Acumulado</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($nac as $user)
                                    <tr>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->total_delayed }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card card-info">
                    <div class="card-header">
                        <h5 class="card-title">Agencia Cala Cala</h5>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">

                        <table class="table table-light small">
                            <thead class="thead-light">
                                <tr>
                                    <th>Usuario</th>
                                    <th>Acumulado</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cc as $user)
                                    <tr>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->total_delayed }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div><div class="row pt-2">
            <div class="col-md-6">
                <div class="card card-info">
                    <div class="card-header">
                        <h5 class="card-title">Agencia El Paso</h5>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-light small">
                            <thead class="thead-light">
                                <tr>
                                    <th>Usuario</th>
                                    <th>Acumulado</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($ep as $user)
                                    <tr>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->total_delayed }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card card-info">
                    <div class="card-header">
                        <h5 class="card-title">Agencia Punata</h5>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-light small">
                            <thead class="thead-light">
                                <tr>
                                    <th>Usuario</th>
                                    <th>Acumulado</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pu as $user)
                                    <tr>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->total_delayed }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row pt-2">
            <div class="col-md-6">
                <div class="card card-info">
                    <div class="card-header">
                        <h5 class="card-title">Agencia Casco Viejo</h5>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-light small">
                            <thead class="thead-light">
                                <tr>
                                    <th>Usuario</th>
                                    <th>Acumulado</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cv as $user)
                                    <tr>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->total_delayed }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card card-info">
                    <div class="card-header">
                        <h5 class="card-title">Agencia Rio Seco</h5>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-light small">
                            <thead class="thead-light">
                                <tr>
                                    <th>Usuario</th>
                                    <th>Acumulado</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($rs as $user)
                                    <tr>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->total_delayed }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="row pt-2">
            <div class="col-md-6">
                <div class="card card-info">
                    <div class="card-header">
                        <h5 class="card-title">Agencia Nacional</h5>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="chart">
                            <canvas id="timeRetAge1" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card card-info">
                    <div class="card-header">
                        <h5 class="card-title">Agencia Cala Cala</h5>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="chart">
                            <canvas id="timeRetAge2" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row pt-2">
            <div class="col-md-6">
                <div class="card card-info">
                    <div class="card-header">
                        <h5 class="card-title">Agencia El Paso</h5>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="chart">
                            <canvas id="timeRetAge3" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card card-info">
                    <div class="card-header">
                        <h5 class="card-title">Agencia Punata</h5>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="chart">
                            <canvas id="timeRetAge4" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row pt-2">
            <div class="col-md-6">
                <div class="card card-info">
                    <div class="card-header">
                        <h5 class="card-title">Agencia Casco Viejo</h5>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="chart">
                            <canvas id="timeRetAge5" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card card-info">
                    <div class="card-header">
                        <h5 class="card-title">Agencia Rio Seco</h5>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="chart">
                            <canvas id="timeRetAge6" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
      </div>
    </div>
  </div>
</section>
@endsection

@section('script')
<script>
    $(document).ready(function(){
        $.ajax({
            type:'get',
            url: '{{ url('timeRetAge1') }}',
            success: function (data) {
                var agencies = Object.keys(data);
                var regist = Object.values(data);
                renderChart1(agencies, regist);
            }
        });
        $.ajax({
            type:'get',
            url: '{{ url('timeRetAge2') }}',
            success: function (data) {
                var agencies = Object.keys(data);
                var regist = Object.values(data);
                renderChart2(agencies, regist);
            }
        });
        $.ajax({
            type:'get',
            url: '{{ url('timeRetAge3') }}',
            success: function (data) {
                var agencies = Object.keys(data);
                var regist = Object.values(data);
                renderChart3(agencies, regist);
            }
        });
        $.ajax({
            type:'get',
            url: '{{ url('timeRetAge4') }}',
            success: function (data) {
                var agencies = Object.keys(data);
                var regist = Object.values(data);
                renderChart4(agencies, regist);
            }
        });
        $.ajax({
            type:'get',
            url: '{{ url('timeRetAge5') }}',
            success: function (data) {
                var agencies = Object.keys(data);
                var regist = Object.values(data);
                renderChart5(agencies, regist);
            }
        });
        $.ajax({
            type:'get',
            url: '{{ url('timeRetAge6') }}',
            success: function (data) {
                var agencies = Object.keys(data);
                var regist = Object.values(data);
                renderChart6(agencies, regist);
            }
        });
    });
    var renderChart1 = function(labels, data){
        var ctx = document.getElementById('timeRetAge1').getContext('2d');
        var chart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Tiempo Acumulado',
                    data: data,
                    borderColor: "rgba(0, 123, 255, 0.9)",
                    borderWidth: "0",
                    backgroundColor: "rgba(210, 214, 222, 1)"
                }]
            },
            options: {
                responsive  : true,
                scales   :{
                    yAxes: [
                        {
                            ticks:{
                                suggestedMin: 0
                            }
                        }
                    ]
                }
            }
        });
    }
    var renderChart2 = function(labels, data){
        var ctx = document.getElementById('timeRetAge2').getContext('2d');
        var chart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Tiempo Acumulado',
                    data: data,
                    borderColor: "rgba(0, 123, 255, 0.9)",
                    borderWidth: "0",
                    backgroundColor: "rgba(210, 214, 222, 1)"
                }]
            },
            options: {
                responsive  : true,
                scales   :{
                    yAxes: [
                        {
                            ticks:{
                                suggestedMin: 0
                            }
                        }
                    ]
                }
            }
        });
    }
    var renderChart3 = function(labels, data){
        var ctx = document.getElementById('timeRetAge3').getContext('2d');
        var chart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Tiempo Acumulado',
                    data: data,
                    borderColor: "rgba(0, 123, 255, 0.9)",
                    borderWidth: "0",
                    backgroundColor: "rgba(210, 214, 222, 1)"
                }]
            },
            options: {
                responsive  : true,
                scales   :{
                    yAxes: [
                        {
                            ticks:{
                                suggestedMin: 0
                            }
                        }
                    ]
                }
            }
        });
    }
    var renderChart4 = function(labels, data){
        var ctx = document.getElementById('timeRetAge4').getContext('2d');
        var chart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Tiempo Acumulado',
                    data: data,
                    borderColor: "rgba(0, 123, 255, 0.9)",
                    borderWidth: "0",
                    backgroundColor: "rgba(210, 214, 222, 1)"
                }]
            },
            options: {
                responsive  : true,
                scales   :{
                    yAxes: [
                        {
                            ticks:{
                                suggestedMin: 0
                            }
                        }
                    ]
                }
            }
        });
    }
    var renderChart5 = function(labels, data){
        var ctx = document.getElementById('timeRetAge5').getContext('2d');
        var chart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Tiempo Acumulado',
                    data: data,
                    borderColor: "rgba(0, 123, 255, 0.9)",
                    borderWidth: "0",
                    backgroundColor: "rgba(210, 214, 222, 1)"
                }]
            },
            options: {
                responsive  : true,
                scales   :{
                    yAxes: [
                        {
                            ticks:{
                                suggestedMin: 0
                            }
                        }
                    ]
                }
            }
        });
    }
    var renderChart6 = function(labels, data){
        var ctx = document.getElementById('timeRetAge6').getContext('2d');
        var chart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Tiempo Acumulado',
                    data: data,
                    borderColor: "rgba(0, 123, 255, 0.9)",
                    borderWidth: "0",
                    backgroundColor: "rgba(210, 214, 222, 1)"
                }]
            },
            options: {
                responsive  : true,
                scales   :{
                    yAxes: [
                        {
                            ticks:{
                                suggestedMin: 0
                            }
                        }
                    ]
                }
            }
        });
    }
</script>
@endsection
