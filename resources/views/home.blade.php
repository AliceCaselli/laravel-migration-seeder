@extends('layouts/main')

@section('content')
<table class="table ">
    <thead>
        <tr>

            <th scope="col">Azienda</th>
            <th scope="col">Stazione di partenza</th>
            <th scope="col">Stazione di arrivo</th>
            <th scope="col">Orario di partenza</th>
            <th scope="col">Orario di arrivo</th>
            <th scope="col">Codice treno</th>
            <th scope="col">Numero di carrozze</th>
            <th scope="col">In orario</th>
            <th scope="col">Cancellato</th>
        </tr>
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
