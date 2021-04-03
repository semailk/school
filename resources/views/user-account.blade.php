@extends('layouts.main')
@section('content')
    <table class="table">
        <thead>
        <tr>
            <th class="text-center" scope="col">Ziyarət tarixi</th>
            <th class="text-center" scope="col">Dərs qiyməti</th>
            <th class="text-center" scope="col">Ev tapşırığı</th>
            <th class="text-center" scope="col">Ümumi qiymətləndirmə</th>
        </tr>
        </thead>
        <tbody>
{{--        @foreach($account as $item)--}}
<!--        --><?php //$item = json_decode($item, true); ?>
<!--        --><?php //$avg = collect(array_merge($item->appraisal, $item->home_work))->pluck('value')->avg();?>
            <tr>
                <td class="text-center">03.04.2021</td>
                <td class="text-center">5</td>
                <td class="text-center">5</td>
{{--                <td class="text-center">5</td>--}}
{{--                <th class="text-center" scope="row">@foreach(collect($item->attendance)->pluck('value') as $date)--}}
{{--                <th class="text-center" scope="row">@foreach(collect($item->attendance)->pluck('value') as $date)--}}
{{--                        <h6>{{$date}}</h6> @endforeach</th>--}}
{{--                <td class="text-center">@foreach(collect($item->appraisal)->pluck('value') as $int) <h6>{{$int}}</h6> @endforeach </td>--}}
{{--                <td class="text-center">@foreach(collect($item->home_work)->pluck('value') as $home_work)--}}
{{--                        <h6>{{$home_work}}</h6> @endforeach </td>--}}
{{--                <td class="text-center"><h1>{{$avg}}</h1></td>--}}
            </tr>
<tr>
    <td class="text-center">06.04.2021</td>
    <td class="text-center">1</td>
    <td class="text-center">1</td>
    <td class="text-center">3</td>
</tr>
{{--        @endforeach--}}
        </tbody>
    </table>
@endsection
