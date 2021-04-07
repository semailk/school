@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <?php $user = \App\Models\User::find(\Illuminate\Support\Facades\Auth::id());?>

                <ul style="list-style-type: none;" class="text-center">
                  <li> <img style="display: block; margin-right: auto;margin-left: auto" src="{{asset(\Illuminate\Support\Facades\Storage::disk('s3')->url($user->img))}}" width="100" height="100" alt=""></li><h5>Fotonu dəyişdirmək istəyirsiniz?</h5>
                    <form action="{{route('img.update')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="img" class="form-control mb-2">
                        <h5>Adı və mobil telefonu da dəyişə bilərsiniz</h5>
                        <input class="form-control" type="text" name="name" value="{{$user->name}}">
                        <input class="form-control mt-2" type="number" name="phone" value="{{$user->phone}}">
                        <button class="btn btn-primary mt-2">Fotoşəkil göndərmək</button>
                    </form>
                    <li>AD: {{$user->name}}</li>
                    <li>Email: {{$user->email}}</li>
                    <li>Telefon: {{$user->phone}}</li>
                    <li>Yaradılış tarixi: {{$user->created_at}}</li>
                </ul>
            </div>
            <div class="col-md-6">
                @if(isset($account->paid_in) && $account->paid_in > now())
                    <div class="alert-success">
                        <h4>Ödənilib: {{$account->paid_in}} - Bitir: {{$account->paid_before}}</h4>
                    </div>
                @else
                    <div class="alert-danger">
                        <h4>Kurs üçün pul ödəməmisiniz</h4>
                    </div>
                @endif
            </div>
        </div>
    </div>
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
        <tr>
            @if(isset($account->attendance))
                <td class="text-center">@foreach(collect($account->attendance)->pluck('value') as $int)
                        <h6>{{$int}}</h6> @endforeach </td>
                <td class="text-center">@foreach(collect($account->appraisal)->pluck('value') as $int)
                        <h6>{{$int}}</h6> @endforeach </td>
                <td class="text-center">@foreach(collect($account->home_work)->pluck('value') as $int)
                        <h6>{{$int}}</h6> @endforeach </td>
                <td class="text-center">
                    <h1>{{collect(array_merge($account->home_work,$account->appraisal))->pluck('value')->avg()}}</h1>
                </td>
                {{--                <td class="text-center">5</td>--}}
                {{--                        <h6>{{$date}}</h6> @endforeach</th>--}}

                {{--                <td class="text-center">@foreach(collect($item->home_work)->pluck('value') as $home_work)--}}
                {{--                        <h6>{{$home_work}}</h6> @endforeach </td>--}}
                {{--                <td class="text-center"><h1>{{$avg}}</h1></td>--}}
            @endif
        </tr>
        {{--                    @endforeach--}}
        </tbody>
    </table>
@endsection
