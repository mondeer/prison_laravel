@extends('prisonhome')

@section('content')
<h3><i class="fa fa-angle-right"></i>Enroll New Prisoner</h3>

    <!-- INLINE FORM ELELEMNTS -->
    <div class="row">

        <div class="col-lg-12">
            <div class="panel panel-danger">
                <div class="panel-heading">Fill in Prisoner Details</div>
                <div class="panel-body">
                <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data"
                          action="/prisonercreate">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            <label class="col-md-4 control-label"> First Name</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="first_name" value="{{ old('first_name') }}">
                            </div>
                        </div>

                            <div class="form-group">
                              <label class="col-md-4 control-label"> Middle Name</label>
                              <div class="col-md-6">
                                  <input type="text" class="form-control" name="middle_name" value="{{ old('middle_name') }}">
                              </div>
                            </div>


                            <div class="form-group">
                              <label class="col-md-4 control-label"> Last Name</label>
                              <div class="col-md-6">
                                  <input type="text" class="form-control" name="last_name" value="{{ old('last_name') }}">
                              </div>
                            </div>

                            <div class="form-group">
                              <label class="col-md-4 control-label">National ID</label>
                              <div class="col-md-6">
                                  <input type="text" class="form-control" name="national_id" value="{{ old('national_id') }}">
                              </div>
                            </div>


                            <div class="form-group">
                              <label class="col-md-4 control-label">Court File Number</label>
                              <div class="col-md-6">
                                 <input type="text" class="form-control" name="file_no" value="{{ old('file_no') }}">
                              </div>
                            </div>



                              <div class="form-group">
                                <label class="col-md-4 control-label">Home County</label>
                                <div class="col-md-6">
                                     <input type="text" class="form-control" name="home_county" value="{{ old('home_county') }}">
                                </div>
                              </div>



                            <div class="form-group">
                              <label class="col-md-4 control-label">Home Location</label>
                              <div class="col-md-6">
                                  <input type="text" class="form-control" name="home_location" value="{{ old('home_location') }}">
                              </div>
                            </div>


                        <div class="form-group">
                            <label class="col-md-4 control-label">Prisoner next of kin</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="next_kin" value="{{ old('next_kin') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Prisoner next of kin contacts</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="kin_contacts" value="{{ old('kin_contacts') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Prisoner Mobile Number</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="prisoner_mobile" value="{{ old('prisoner_mobile') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Date of Imprisonment</label>
                            <div class="col-md-6">
                                <input type="date" class="form-control" placeholder="YYYY-MM-DD" name="adm_date" value="{{ old('adm_date') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Crime Committed</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="crime" value="{{ old('crime') }}">
                            </div>
                        </div>



                        <div class="form-group">
                            <label class="col-md-4 control-label">Gender</label>
                            <div class="col-md-6">
                                <select name="gender" class="form-control">
                                    <option></option>
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Date of Birth</label>
                            <div class="col-md-6">
                                <input type="date" class="form-control" placeholder="YYYY-MM-DD" name="dob" value="{{ old('dob') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Upload Prisoner Photo.</label>
                            <div class="col-md-6">
                                <input type="file" class="form-control" name="profile_pix" placeholder="Upload Image"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">do you have any medical history</label>
                            <div class="col-md-6">
                                <select name="medquiz" class="form-control">
                                    <option></option>
                                    <option>Yes</option>
                                    <<option>No</option>
                                </select>
                              </div>
                            </div>

                          <div class="form-group">
                            <label class="col-md-4 control-label">prisoners health history</label>
                            <div class="col-md-6">
                                <select name="medical_history" class="form-control">
                                    <option></option>
                                    <option>Diabetes</option>
                                    <option>Hypertension</option>
                                    <option>Tuberculosis</option>
                                    <option>HIV</option>
                                    <option>Any drug allergy</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Prisoner weight</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="weight" value="{{ old('weight') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Prisoner height</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="height" value="{{ old('height') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">Submit Entry</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div><!-- /col-lg-12 -->

        <div class="col-lg-6">

        </div>

    </div><!-- /row -->
@endsection
