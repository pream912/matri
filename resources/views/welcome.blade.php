@extends('layouts.app')
@section('content')
  <div class="container">
      <div class="jumbotron">
          <h1 class="display-4">இலவச பதிவு!</h1>
          <p class="lead">அணைத்து தமிழ் இனத்தவர்களுக்கும் ஒரு மாபெரும் திருமண தகவல்  களஞ்சியம்.</p>
          <hr class="my-4">
          <p>உங்களுக்கு பொருத்தமான வரன்களை நீங்களே தேர்ந்தெடுத்து 
              கொள்ளலாம். தமிழில் முழு வரனின் விபரங்களை அறியலாம்.</p>
          <a class="btn btn-primary btn-lg" style="box-shadow: 1px 4px 10px rgba(0, 0, 0, 0.25);" href="/profile/create" role="button">பதிவு செய்க</a>
        </div>
      <div style="padding:20px; box-shadow: 1px 4px 10px rgba(0, 0, 0, 0.25);">
          {!! Form::open(['action' => 'ProfileController@search', 'method' => 'POST','enctype' => 'multipart/form-data']) !!}
          <div style="padding:5px" class="row">  
            <div class="col-md-2">
                  <label class="form-control-lg">வரன்:</label>
            </div>
            <div calss="col-md-auto">
                <select class="form-control form-control-lg" name="sex">
                    <option value="male">மணமகன்</option>
                    <option value="female">மணமகள்</option>
                </select>
            </div>
          </div>
            <div style="padding:5px" class="row">  

            <div class="col-md-2">
                <label class="form-control-lg">சாதி:</label>
            </div>
            <div calss="col-md-auto">
                <select class="form-control form-control-lg" name="caste">
                    <option value="முத்தரையர்">முத்தரையர்</option>
                    <option value="முக்குலத்தோர்">முக்குலத்தோர்</option>
                    <option value="மறவர்">மறவர்</option>
                    <option value="தேவர்">தேவர்</option>
                    <option value="அகமுடையார்">அகமுடையார்</option>
                    <option value="கவுண்டர்">கவுண்டர்</option>
                    <option value="ரெடியார்">ரெடியார்</option>
                    <option value="நாடார்">நாடார்</option>
                    <option value="நாயுடு">நாயுடு</option>
                    <option value="விஸ்வகரமா">விஸ்வகரமா</option>
                    <option value="யாதவர்">யாதவர்</option>
                    <option value="வாணன்">வாணன்</option>
                    <option value="மருத்துவர்">மருத்துவர்</option>
                    <option value="கள்ளர்">கள்ளர்</option>
                    <option value="வெள்ளாலர்">வெள்ளாலர்</option>
                    <option value="செட்டியார்">செட்டியார்</option>
                    <option value="சௌராஸ்டியர்">சௌராஸ்டியர்</option>
                    <option value="கன்னடர்">கன்னடர்</option>
                    <option value="தெலுங்கர்">தெலுங்கர்</option>
                </select>
            </div>
            </div>
          <div style="padding:5px" class="row">
            <div class="col-md-2">
                <label class="form-control-lg">இராசி:</label>
            </div>
            <div calss="col-md-auto">
                <select class="form-control form-control-lg" name="rasi">
                    <option value="மேஷம்">மேஷம்</option>
                    <option value="ரிஷபம்">ரிஷபம்</option>
                    <option value="மிதுனம்">மிதுனம்</option>
                    <option value="கடகம்">கடகம்</option>
                    <option value="சிம்மம்">சிம்மம்</option>
                    <option value="கன்னி">கன்னி</option>
                    <option value="துலாம்">துலாம்</option>
                    <option value="விருச்சகம்">விருச்சகம்</option>
                    <option value="தனுசு">தனுசு</option>
                    <option value="மகரம்">மகரம்</option>
                    <option value="கும்பம்">கும்பம்</option>
                    <option value="மீனம்">மீனம்</option>
                </select>
            </div>
          </div>
          <div style="padding:5px" class="row">
            <div class="col-md-2">
                <label class="form-control-lg">நட்சத்திரம்:</label>
            </div>
            <div calss="col-md-auto">
                <select class="form-control form-control-lg" name="natcha">
                    <option value="அஸ்வினி" selected="selected">அஸ்வினி</option>
                    <option value="பரணி">பரணி</option>
                    <option value="கார்த்திகை">கார்த்திகை</option>
                    <option value="ரோகிணி">ரோகிணி</option>
                    <option value="மிருகசீரிடம்">மிருகசீரிடம்</option>
                    <option value="திருவாதிரை">திருவாதிரை</option>
                    <option value="புனர்பூசம்">புனர்பூசம்</option>
                    <option value="பூசம்">பூசம்</option>
                    <option value="ஆயில்யம்">ஆயில்யம்</option>
                    <option value="மகம்">மகம்</option>
                    <option value="பூரம்">பூரம்</option>
                    <option value="உத்திரம்">உத்திரம்</option>
                    <option value="ஹஸ்தம்">ஹஸ்தம்</option>
                    <option value="சித்திரை">சித்திரை</option>
                    <option value="சுவாதி">சுவாதி</option>
                    <option value="விசாகம்">விசாகம்</option>
                    <option value="அனுசம்">அனுசம்</option>
                    <option value="கேட்டை">கேட்டை</option>
                    <option value="மூலம்">மூலம்</option>
                    <option value="பூராடம்">பூராடம்</option>
                    <option value="உத்திராடம்">உத்திராடம்</option>
                    <option value="திருவோணம்">திருவோணம்</option>
                    <option value="அவிட்டம்">அவிட்டம்</option>
                    <option value="சதயம்">சதயம்</option>
                    <option value="பூரட்டாதி">பூரட்டாதி</option>
                    <option value="உத்திரட்டாதி">உத்திரட்டாதி</option>
                    <option value="ரேவதி">ரேவதி</option>
                </select>
            </div>
          </div>
          <div style="padding:5px" class="row">
            <div class="col-md-4">
            <input class="btn btn-primary btn-lg" type="submit" value="தேடு">
          </div>
          </div>
          {!! Form::close() !!}
      </div>
  </div>
@endsection

