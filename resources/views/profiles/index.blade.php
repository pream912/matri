@extends('layouts.app')
@section('content')
    <div class="container">
        {!! Form::open(['action' => 'ProfileController@store', 'method' => 'POST','enctype' => 'multipart/form-data']) !!}
        <hr>
        <h2 style="text-align: center;">சுயவிவரம்</h2>
        </br>
            <div class="form-group row">
                <div class="col-2"> {{Form::label('name', 'பெயர்')}} </div>
                <div class="col-7 input-group-sm"> {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => ''])}} </div>
                <div class="col-3"> 
                {{Form::radio('sex', 'male')}} 
                {{Form::label('sex', 'ஆன்')}} &nbsp; &nbsp;
                {{Form::radio('sex', 'female')}} 
                {{Form::label('sex', 'பெண்')}}
            </div>
            </div>
            <div class="form-group row">
                <div class="col-2">{{Form::label('caste', 'சாதி')}}</div>
                <div class="col-10 ">{{Form::select('caste', ['முத்தரையர்' => 'முத்தரையர்',
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
                <div class="col-2">{{Form::label('dob', 'பிறந்த தேதி')}}</div>
                <div class="col-10 input-group-sm">{{Form::date('dob', \Carbon\Carbon::now())}}</div>
            </div>
            <div class="form-group row">
                <div class="col-2">{{Form::label('edu', 'கல்வி')}}</div>
                <div class="col-10 input-group-sm">{{Form::text('edu', '', ['class' => 'form-control', 'placeholder' => ''])}}</div>
            </div>
            <div class="form-group row">
                <div class="col-2">{{Form::label('job', 'வேலை / தொழில்')}}</div>
                <div class="col-10 input-group-sm">{{Form::text('job', '', ['class' => 'form-control', 'placeholder' => ''])}}</div>
            </div>
            <div class="form-group row">
                <div class="col-2">{{Form::label('sal', 'மாத வருமானம்')}}</div>
                <div class="col-10 input-group-sm">{{Form::text('sal', '', ['class' => 'form-control', 'placeholder' => ''])}}</div>
            </div>
            <div class="form-group row">
                <div class="col-2">{{Form::label('height', 'உயரம்')}}</div>
                <div class="col-10 input-group-sm">{{Form::text('height', '', ['class' => 'form-control', 'placeholder' => ''])}}</div>
            </div>
            <div class="form-group row">
                <div class="col-2">{{Form::label('loc1', 'வசிக்கும் இடம்')}}</div>
                <div class="col-5 input-group-sm">{{Form::text('loc1', '', ['class' => 'form-control', 'placeholder' => ''])}}</div>
                <div class="col-5">
                    {{Form::radio('loc_i', 'tn')}} 
                    {{Form::label('loc_i', 'தமிழகம்')}} &nbsp; &nbsp;
                    {{Form::radio('loc_i', 'os')}} 
                    {{Form::label('loc_i', 'வெளிமாநிலம்')}} &nbsp; &nbsp;
                    {{Form::radio('loc_i', 'oc')}} 
                    {{Form::label('loc_i', 'வெளிநாடு')}}
                </div>
            </div>
            <div class="form-group row">
                <div class="col-2">{{Form::label('loc2', 'பூர்வீகம்')}}</div>
                <div class="col-10 input-group-sm">{{Form::text('loc2', '', ['class' => 'form-control', 'placeholder' => ''])}}</div>
            </div>
        </br>
        <hr>
        <h2 style="text-align: center;">குடும்பம்</h2>
        </br>
            <div class="form-group row">
                <div class="col-2">{{Form::label('fname', 'தந்தையின் பெயர்')}}</div>
                <div class="col-6 input-group-sm">{{Form::text('fname', '', ['class' => 'form-control', 'placeholder' => ''])}}</div>
                <div class="col-4">
                    {{Form::radio('falive', 'alive')}} 
                    {{Form::label('falive', 'இருக்கிறார்')}} &nbsp; &nbsp;
                    {{Form::radio('falive', 'notalive')}} 
                    {{Form::label('falive', 'இல்லை')}}
                </div>
            </div>
            <div class="form-group row">
                <div class="col-2">{{Form::label('fjob', 'தந்தையின் வேலை')}}</div>
                <div class="col-10 input-group-sm">{{Form::text('fjob', '', ['class' => 'form-control', 'placeholder' => ''])}}</div>
            </div>
            <div class="form-group row">
                <div class="col-2">{{Form::label('mname', 'தாயின் பெயர்')}}</div>
                <div class="col-6 input-group-sm">{{Form::text('mname', '', ['class' => 'form-control', 'placeholder' => ''])}}</div>
                <div class="col-4">
                    {{Form::radio('malive', 'alive')}} 
                    {{Form::label('malive', 'இருக்கிறார்')}} &nbsp; &nbsp;
                    {{Form::radio('malive', 'notalive')}} 
                    {{Form::label('malive', 'இல்லை')}}
                </div>
            </div>
            <div class="form-group row">
                <div class="col-2">{{Form::label('mjob', 'தாயின்  வேலை')}}</div>
                <div class="col-10 input-group-sm">{{Form::text('mjob', '', ['class' => 'form-control', 'placeholder' => ''])}}</div>
            </div>
            <div class="form-group row">
                <div class="col-2">{{Form::label('bro', 'அண்ணன் / தம்பி')}}</div>
                <div class="col-10 input-group-sm">{{Form::selectRange('bro', 0, 10)}}</div>
            </div>
            <div class="form-group row">
                <div class="col-2">{{Form::label('sis', 'அக்கா / தங்கை ')}}</div>
                <div class="col-10 input-group-sm">{{Form::selectRange('sis', 0, 10)}}</div>
            </div>
            <div class="form-group row">
                <div class="col-2">{{Form::label('status', 'வசதி வாய்ப்பு ')}}</div>
                <div class="col-10 ">{{Form::select('status', ['0' => 'குறிப்பிடவில்லை', '1' => 'VIP குடும்பம்', '2' => 'வசதிகொண்ட குடும்பம்', '3' => 'நடுத்தர குடும்பம்', '4' => 'வசதியற்ற குடும்பம்'], '0')}}</div>
            </div>
        </br>
        <hr>
        <h2 style="text-align: center;">தொடர்புக்கு</h2>
        </br>
            <div class="form-group row">
                <div class="col-2">{{Form::label('con_person', 'தொடர்புக்கு')}}</div>
                <div class="col-10 input-group-sm">{{Form::text('con_person', '', ['class' => 'form-control', 'placeholder' => ''])}}</div>
            </div>
            <div class="form-group row">
                <div class="col-2">{{Form::label('relation', 'உறவு')}}</div>
                <div class="col-10 input-group-sm">{{Form::text('relation', '', ['class' => 'form-control', 'placeholder' => ''])}}</div>
            </div>
            <div class="form-group row">
                <div class="col-2">{{Form::label('con1', 'தொலைபேசி 1')}}</div>
                <div class="col-10 input-group-sm">{{Form::text('con1', '', ['class' => 'form-control', 'placeholder' => ''])}}</div>
            </div>
            <div class="form-group row">
                <div class="col-2">{{Form::label('con2', 'தொலைபேசி 2')}}</div>
                <div class="col-10 input-group-sm">{{Form::text('con2', '', ['class' => 'form-control', 'placeholder' => ''])}}</div>
            </div>
            <div class="form-group row">
                <div class="col-2">{{Form::label('address', 'முகவரி')}}</div>
                <div class="col-10 input-group-sm">{{Form::text('address', '', ['class' => 'form-control', 'placeholder' => ''])}}</div>
            </div>
            <div class="form-group row">
                <div class="col-2">{{Form::label('email', 'Email')}}</div>
                <div class="col-10 input-group-sm">{{Form::text('email', '', ['class' => 'form-control', 'placeholder' => ''])}}</div>
            </div>
        </br>
        <hr>
        <h2 style="text-align: center;">ஜாதகம்</h2>
        </br>
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
            <div class="form-group row">
                <div class="col-2">{{Form::label('laknam', 'லக்னம்')}}</div>
                <div class="col-10 input-group-sm">{{Form::select('laknam', ['மேஷம்' => 'மேஷம்',
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
        </br>
        <hr>
        <h2 style="text-align: center;">எதிர்பார்ப்பு</h2>
        </br>
            <div class="form-group row">
                <div class="col-2">{{Form::label('e_edu', 'கல்வி')}}</div>
                <div class="col-10 input-group-sm">{{Form::text('e_edu', '', ['class' => 'form-control', 'placeholder' => ''])}}</div>
            </div>
            <div class="form-group row">
                <div class="col-2">{{Form::label('e_job', 'வேலை')}}</div>
                <div class="col-10 input-group-sm">{{Form::text('e_job', '', ['class' => 'form-control', 'placeholder' => ''])}}</div>
            </div>
        </br>
        <hr>
        <h2 style="text-align: center;">இணைப்பு</h2>
        </br>
            <div class="form-group row">
                <div class="col-2">{{Form::label('photo', 'புகைப்படம்')}}</div>
                <div class="col-10 input-group-sm">{{Form::file('photo')}}</div>
            </div>
            <div class="form-group row">
                <div class="col-2">{{Form::label('horoscope', 'ஜாதகம்')}}</div>
                <div class="col-10 input-group-sm">{{Form::file('horoscope')}}</div>
            </div>
            {{form::submit('Submit', ['class'=>'btn-primary'])}}
        {!! Form::close() !!}
    </div>
@endsection