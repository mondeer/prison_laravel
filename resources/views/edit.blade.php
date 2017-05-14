@extends('prisonhome')

@section('content')
  <h3>Update</h3>

  <div class="row mt">
    <div class="col-lg-12">
      <div class="panel panel-default">
        <div class="panel-heading">Update Prisoner Details</div>
          <div class="panel-body">
            <form class="form-horizontal" action="/prisoner/edit/{{$prisoner->id}}" method="post">
              <input type="hidden" name="_token" value="{{csrf_token()}}">
              <input type="hidden" name="_method" value="put">

              <div class="form-group">
                <label class="col-md-2">National ID</label>
                <div class="">
                  <input class="col-md-4" type="text" name="national_id" value="{{$prisoner->national_id}}">
                </div>
              </div>

              <div class="form-group">
                <label class="col-md-2">Home Location</label>
                <div class="">
                  <input class="col-md-4" type="text" name="home_location" value="{{$prisoner->home_location}}">
                </div>
              </div>

              <div class="form-group">
                <label class="col-md-2">Next of Kin</label>
                <div class="">
                  <input class="col-md-4" type="text" name="next_kin" value="{{$prisoner->next_kin}}">
                </div>
              </div>

              <div class="form-group">
                <div class="">
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </div>

            </form>

          </div>
      </div>

    </div>

  </div>
@endsection
