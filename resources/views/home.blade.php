@extends('layouts/main')

@section('content')
<table class="table ">
    <thead>
        <th>Azienda</th>
        <th>Stazione di partenza</th>
        <th>Stazione di arrivo</th>
        <th>Orario di partenza</th>
        <th>Orario di arrivo</th>
        <th>Codice treno</th>
        <th>Numero di carrozze</th>
        <th>In orario</th>
        <th>Cancellato</th>
    </thead>

    <tbody> 
        
        @foreach($trains as $train) 

            
            <tr class="{{ $train->is_cancelled ? 'cancelled' : ''}}">
                
                <td>{{$train->company}}</td>
                <td>{{$train->departure_station}}</td>
                <td>{{$train->arrival_station}}</td>
                <td>{{$train->departure_time}}</td>
                <td>{{$train->arrival_time}}</td>
                <td>{{$train->train_code}}</td>
                <td>{{$train->number_of_cars}}</td>

                <td>{{$train->is_on_time ? 'in orario' : 'in ritardo'}}</td>
                
            </tr>
            
        
        @endforeach
    </tbody>
</table>
@endsection
