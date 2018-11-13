@extends('layouts.app')
@section('content')
    <hr>
    <div class="container">
        {!! Form::open(['action' => 'ProfileController@search', 'method' => 'POST','enctype' => 'multipart/form-data']) !!}
        <div class="form-group row">
            {{Form::radio('sex', 'male')}} 
            {{Form::label('sex', 'மணமகன்')}} &nbsp; &nbsp;
            {{Form::radio('sex', 'female')}} 
            {{Form::label('sex', 'மணமகள்')}}
        </div>
        <div class="form-group row">
            <div class="col-12 col-md-2">{{Form::label('caste', 'சாதி')}}</div>
            <div class="col-12 col-md-10 ">{{Form::select('caste', ['முத்தரையர்' => 'முத்தரையர்',
                                                            'முக்குலத்தோர்' => 'முக்குலத்தோர்',
                                                            'மறவர்' => 'மறவர்',
                                                            'தேவர்' => 'தேவர்',
                                                            'அகமுடையார்' => 'அகமுடையார்',
                                                            'கவுண்டர்' => 'கவுண்டர்',
                                                            'ரெடியார்' => 'ரெடியார்',
                                                            'நாடார்' => 'நாடார்',
                                                            'நாயுடு' => 'நாயுடு',
                                                            'விஸ்வகரமா' => 'விஸ்வகரமா',
                                                            'யாதவர்' => 'யாதவர்',
                                                            'வாணன்' => 'வாணன்',
                                                            'மருத்துவர்' => 'மருத்துவர்',
                                                            'கள்ளர்' => 'கள்ளர்',
                                                            'வெள்ளாலர்' => 'வெள்ளாலர்',
                                                            'செட்டியார்' => 'செட்டியார்',
                                                            'சௌராஸ்டியர்' => 'சௌராஸ்டியர்',
                                                            'கன்னடர்' => 'கன்னடர்',
                                                            'தெலுங்கர்' => 'தெலுங்கர்',])}}</div>
        </div>
        <div class="form-group row">
                <div class="col-2">{{Form::label('rasi', 'இராசி')}}</div>
                <div class="col-10 ">{{Form::select('rasi', ['மேஷம்' => 'மேஷம்',
                                                                'ரிஷபம்' => 'ரிஷபம்',
                                                                'மிதுனம்' => 'மிதுனம்',
                                                                'கடகம்' => 'கடகம்',
                                                                'சிம்மம்' => 'சிம்மம்',
                                                                'கன்னி' => 'கன்னி',
                                                                'துலாம்' => 'துலாம்',
                                                                'விருச்சகம்' => 'விருச்சகம்',
                                                                'தனுசு' => 'தனுசு',
                                                                'மகரம்' => 'மகரம்',
                                                                'கும்பம்' => 'கும்பம்',
                                                                'மீனம்' => 'மீனம்',])}}</div>
        </div>
        <div class="form-group row">
            <div class="col-2">{{Form::label('natcha', 'நட்சத்திரம்')}}</div>
            <div class="col-10 ">{{Form::select('natcha', ['அஸ்வினி' => 'அஸ்வினி',
                                                            'பரணி' => 'பரணி',
                                                            'கார்த்திகை' => 'கார்த்திகை',
                                                            'ரோகிணி' => 'ரோகிணி',
                                                            'மிருகசீரிடம்' => 'மிருகசீரிடம்',
                                                            'திருவாதிரை' => 'திருவாதிரை',
                                                            'புனர்பூசம்' => 'புனர்பூசம்',
                                                            'பூசம்' => 'பூசம்',
                                                            'ஆயில்யம்' => 'ஆயில்யம்',
                                                            'மகம்' => 'மகம்',
                                                            'பூரம்' => 'பூரம்',
                                                            'உத்திரம்' => 'உத்திரம்',
                                                            'ஹஸ்தம்' => 'ஹஸ்தம்',
                                                            'சித்திரை' => 'சித்திரை',
                                                            'சுவாதி' => 'சுவாதி',
                                                            'விசாகம்' => 'விசாகம்',
                                                            'அனுசம்' => 'அனுசம்',
                                                            'கேட்டை' => 'கேட்டை',
                                                            'மூலம்' => 'மூலம்',
                                                            'பூராடம்' => 'பூராடம்',
                                                            'உத்திராடம்' => 'உத்திராடம்',
                                                            'திருவோணம்' => 'திருவோணம்',
                                                            'அவிட்டம்' => 'அவிட்டம்',
                                                            'சதயம்' => 'சதயம்',
                                                            'பூரட்டாதி' => 'பூரட்டாதி',
                                                            'உத்திரட்டாதி' => 'உத்திரட்டாதி',
                                                            'ரேவதி' => 'ரேவதி',
                                                            ], 'அஸ்வினி')}}</div>
        </div>
        {{form::submit('Submit', ['class'=>'btn-primary'])}}
        {!! Form::close() !!}


@foreach ($profiles as $profile)
<hr>
<div class="row" style="box-shadow: 1px 4px 10px rgba(0, 0, 0, 0.25); padding-top: 15px;">
    <div class="col-3">
    <a href="/storage/photos/{{$profile->photo}}"><img class="img-thumnail" style="height:200px; width:200px; object-fit:cover; box-shadow: 1px 4px 8px rgba(0, 0, 0, 0.25);" src="/storage/photos/{{$profile->photo}}" alt="Thumnail"></a>
    </div>
    <div class="col-9">
        <table class="table table-borderless">
            <tr>
            <td>பெயர்: {{ $profile->name }}</td>
                <td>பிறந்த தேதி: {{ $profile->dob }}</td>
            </tr>
            <tr>
                <td>கல்வி: {{ $profile->edu }}</td>
                <td>வேலை / தொழில்: {{ $profile->job }}</td>
            </tr>
            <tr>
                <td>இராசி: {{ $profile->rasi }}</td>
                <td>நட்சத்திரம்: {{ $profile->natcha }}</td>
            </tr>
            <tr>
                <td>வசிக்கும் இடம்: {{ $profile->loc1 }}</td>
            <td><a class="btn btn-primary" href="/profile/{{ $profile->id }}">View</a></td>
            </tr>
        </table>
    </div>
</div>
@endforeach
</div>

@endsection