@extends('layouts.mainlayout')
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
                <div class="col-2">{{Form::label('rasi', 'இராசி')}}</div>
                <div class="col-10 ">{{Form::select('rasi', ['1' => 'மேஷம்',
                                                                '2' => 'ரிஷபம்',
                                                                '3' => 'மிதுனம்',
                                                                '4' => 'கடகம்',
                                                                '5' => 'சிம்மம்',
                                                                '6' => 'கன்னி',
                                                                '7' => 'துலாம்',
                                                                '8' => 'விருச்சகம்',
                                                                '9' => 'தனுசு',
                                                                '10' => 'மகரம்',
                                                                '11' => 'கும்பம்',
                                                                '12' => 'மீனம்',])}}</div>
        </div>
        <div class="form-group row">
            <div class="col-2">{{Form::label('natcha', 'நட்சத்திரம்')}}</div>
            <div class="col-10 ">{{Form::select('natcha', ['1' => 'அஸ்வினி',
                                                            '2' => 'பரணி',
                                                            '3' => 'கார்த்திகை',
                                                            '4' => 'ரோகிணி',
                                                            '5' => 'மிருகசீரிடம்',
                                                            '6' => 'திருவாதிரை',
                                                            '7' => 'புனர்பூசம்',
                                                            '8' => 'பூசம்',
                                                            '9' => 'ஆயில்யம்',
                                                            '10' => 'மகம்',
                                                            '11' => 'பூரம்',
                                                            '12' => 'உத்திரம்',
                                                            '13' => 'ஹஸ்தம்',
                                                            '14' => 'சித்திரை',
                                                            '15' => 'சுவாதி',
                                                            '16' => 'விசாகம்',
                                                            '17' => 'அனுசம்',
                                                            '18' => 'கேட்டை',
                                                            '19' => 'மூலம்',
                                                            '20' => 'பூராடம்',
                                                            '21' => 'உத்திராடம்',
                                                            '22' => 'திருவோணம்',
                                                            '23' => 'அவிட்டம்',
                                                            '24' => 'சதயம்',
                                                            '25' => 'பூரட்டாதி',
                                                            '26' => 'உத்திரட்டாதி',
                                                            '27' => 'ரேவதி',
                                                            ], '1')}}</div>
        </div>
        {{form::submit('Submit', ['class'=>'btn-primary'])}}
        {!! Form::close() !!}
    </div>
@endsection

