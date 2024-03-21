<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="ie=edge" http-equiv="X-UA-Compatible">

    <title>Laravel-migration-seeder</title>

    @vite('resources/js/app.js')
</head>

<body>
    <h1>Trains</h1>

    <div class="container">
        <div class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Company</th>
                    <th>From</th>
                    <th>To</th>
                    <th>Departure Time</th>
                    <th>Arrival Time</th>
                    <th>Train Code</th>
                    <th>Coaches Number</th>
                    <th>On Time</th>
                    <th>Cancellato</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($trains as $train)
                    <tr>
                        <td>{{ $train->id }}</td>
                        <td>{{ $train->company }}</td>
                        <td>{{ $train->from }}</td>
                        <td>{{ $train->to }}</td>
                        <td>{{ $train->departure_time }}</td>
                        <td>{{ $train->arrival_time }}</td>
                        <td>{{ $train->train_code }}</td>
                        <td>{{ $train->coaches_number }}</td>
                        <td>{{ $train->on_time }}</td>
                        <td>{{ $train->cancelled }}</td>
                    </tr>

                @empty
                    <tr>
                        <td colspan="100%"> No train found</td>
                    </tr>
                @endforelse
            </tbody>
        </div>
    </div>


</body>

</html>
