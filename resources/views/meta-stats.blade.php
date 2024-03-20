<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Estadísticas de Meta</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Estadísticas de Meta</h1>

        @if (isset($data['data']))
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Métrica</th>
                        <th>Valor</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data['data'] as $metric)
                        <tr>
                            <td>{{ $metric['name'] }}</td>
                            <td>{{ $metric['values'][0]['value'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>No hay datos disponibles.</p>
        @endif
    </div>
</body>
</html>
