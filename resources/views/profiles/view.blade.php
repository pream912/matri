@extends('layouts.app')
@section('content')
    <div class="container">
        <table class="table table-striped">
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>பெயர்</td>
                <td> {{ $profile->name }} </td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>சாதி</td>
                <td>{{ $profile->caste }}</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>பிறந்த தேதி</td>
                <td>{{ $profile->dob }}</td>
              </tr>
              <tr>
                <th scope="row">4</th>
                <td>கல்வி</td>
                <td>{{ $profile->edu }}</td>
              </tr>
              <tr>
                <th scope="row">5</th>
                <td>வேலை / தொழில்</td>
                <td>{{ $profile->job }}</td>
              </tr>
              <tr>
                <th scope="row">6</th>
                <td>மாத வருமானம்</td>
                <td>{{ $profile->sal }}</td>
              </tr>
              <tr>
                <th scope="row">7</th>
                <td>உயரம்</td>
                <td>{{ $profile->height }}</td>
              </tr>
              <tr>
                <th scope="row">8</th>
                <td>நிறம்</td>
                <td>{{ $profile->color }}</td>
              </tr>
              <tr>
                <th scope="row">9</th>
                <td>வசிக்கும் இடம்</td>
                <td>{{ $profile->loc1 }}</td>
              </tr>
              <tr>
                <th scope="row">10</th>
                <td>பூர்வீகம்</td>
                <td>{{ $profile->loc2 }}</td>
              </tr>
              <tr>
                <th scope="row">11</th>
                <td>குலதெய்வம்</td>
                <td>{{ $profile->kula_god }}</td>
              </tr>
              <tr>
                <th scope="row">12</th>
                <td>தந்தையின் பெயர்</td>
                <td>{{ $profile->fname }}</td>
              </tr>
              <tr>
                <th scope="row">13</th>
                <td>தாயின் பெயர்</td>
                <td>{{ $profile->mname }}</td>
              </tr>
              <tr>
                <th scope="row">14</th>
                <td>தொலைபேசி</td>
                <td>{{ $profile->con1 }}</td>
              </tr>
              <tr>
                <th scope="row">15</th>
                <td>முகவரி</td>
                <td>{{ $profile->address }}</td>
              </tr>
              <tr>
                <th scope="row">16</th>
                <td>இராசி</td>
                <td>{{ $profile->rasi }}</td>
              </tr>
              <tr>
                <th scope="row">17</th>
                <td>நட்சத்திரம்</td>
                <td>{{ $profile->natcha }}</td>
              </tr>
              <tr>
                <th scope="row">18</th>
                <td>லக்னம்</td>
                <td>{{ $profile->laknam }}</td>
              </tr>
            </tbody>
          </table>
        <div class="col-3">
            <a href="/storage/photos/{{$profile->photo}}"><img class="img-thumnail" style="height:200px; width:200px; object-fit:cover; box-shadow: 1px 4px 8px rgba(0, 0, 0, 0.25);" src="/storage/photos/{{$profile->photo}}" alt="Thumnail"></a>
        </div>
        <div class="col-3">
            <a href="/storage/horoscopes/{{$profile->horoscope}}"><img class="img-thumnail" style="height:200px; width:200px; object-fit:cover; box-shadow: 1px 4px 8px rgba(0, 0, 0, 0.25);" src="/storage/horoscopes/{{$profile->horoscope}}" alt="Thumnail"></a>
        </div>
    </div>
@endsection