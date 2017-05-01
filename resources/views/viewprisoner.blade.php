@extends('prisonhome')


@section('content')

  <h3>Prisoners</h3>
  <div class="row mt">

    <div class="col-md-12">
      <table class="table table-striped table-advance table-hover">
        <hr>

        <thead>
          <tr>
            <th>ID.</th>
            <th>Prisoner Name</th>
            <th>National Id</th>
            <th>Court File No.</th>
            <th>Home County</th>
            <th>Medical History</th>
            <th>Weight</th>
            <th>Height</th>
            <th>Prisoner Contacts</th>
          </tr>
        </thead>

        <tbody>
          @foreach($prisoners as $prisoner)
            <tr>
              <td>{{$prisoner->id}}</td>
              <td>{{$prisoner->first_name}} {{$prisoner->middle_name}} {{$prisoner->last_name}}</td>
              <td>{{$prisoner->national_id}}</td>
              <td>{{$prisoner->file_no}}</td>
              <td>{{$prisoner->home_county}}</td>
              <td>{{$prisoner->medquiz}}, {{$prisoner->medical_history}}</td>
              <td>{{$prisoner->weight}}</td>
              <td>{{$prisoner->height}}</td>
              <td>{{$prisoner->prisoner_mobile}}</td>
              <td>
                <a class="btn btn-primary" href="/prisoner/{{$prisoner->id}}/edit">Edit</a>
              </td>
              <td>
                <form class="form-horizontal" action="/prisoner/{{$prisoner->id}}" method="post">
                  <input type="hidden" name="_token" value="{{csrf_token()}}">
                  <input type="hidden" name="_method" value="delete">
                  <button class="btn btn-danger" type="submit" name="button">Delete</button>
                </form>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>

    </div>

  </div>

@endsection
