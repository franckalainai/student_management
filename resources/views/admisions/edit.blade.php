@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Admision
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   <form action="{{route('admisions.update', $admision->student_id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                   <div class="row">
                        <div class="col-md-8">
                                <div class="form-group col-md-6">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                    <input type="text" value="{{$admision->first_name}}" name="first_name" id="first_name" class="form-control text-capitalize" placeholder="First Name">
                                    <input type="hidden" name="department_id" id="department_id">
                                    <input type="hidden" name="faculty_id" id="faculty_id">
                                    <input type="hidden" name="batch_id" id="batch_id">
                                </div>

                            <!-- Last Name Field -->
                                <div class="form-group col-md-6">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                    <input type="text" value="{{$admision->last_name}}" name="last_name" id="last_name" class="form-control text-capitalize" placeholder="Last Name">
                                </div>

                                <!-- Email Field -->
                                <div class="form-group col-md-6">
                                    <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                    <select name="department_id" id="department_id" class="form-control">
                                        <option value="0" selected="true" disabled="true">Choose Department</option>
                                        @foreach($departments as $department)
                                            <option value="{{$department->department_id}}"
                                                {{$department->department_id == $admision->department_id ? 'selected' : ''}}>
                                                {{$department->department_name}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>


                                <div class="form-group col-md-6">
                                    <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                    <select name="batch_id" id="batch_id" class="form-control">
                                        <option value="0" selected="true" disabled="true">Choose Batch</option>
                                        @foreach($batches as $batch)
                                            <option value="{{$batch->batch_id}}"
                                            {{$batch->batch_id == $admision->batch_id ? 'selected' : ''}}>
                                            {{$batch->year}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group col-md-6">
                                    <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                    <select name="faculty_id" id="faculty_id" class="form-control">
                                        <option value="0" selected="true" disabled="true">Choose Faculty</option>
                                        @foreach($faculties as $faculty)
                                            <option value="{{$faculty->faculty_id}}"
                                            {{$faculty->faculty_id == $admision->faculty_id ? 'selected' : ''}}>
                                            {{$faculty->faculty_name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group col-md-6">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                    <input type="email" value="{{$admision->email}}" name="email" id="email" class="form-control text-capitalize" placeholder="Email">
                                </div>


                                <div class="form-group col-md-6">
                                    <i class="fa fa-phone"></i>
                                    <input type="text" value="{{$admision->phone}}" name="phone" id="phone" class="form-control text-capitalize" placeholder="Phone">
                                </div>


                                <div class="form-group col-md-6">
                                    <i class="fa fa-calendar teacherdob"></i>
                                    <input type="text" value="{{$admision->dob}}" name="dob" id="dob" class="form-control text-capitalize" placeholder="Date Of Birth">
                                </div>

                                <!-- Nationality Field -->
                                <div class="form-group col-md-6">
                                    <i class="fa fa-id-card"></i>
                                    <input type="text" value="{{$admision->nationality}}" name="nationality" id="nationality" class="form-control text-capitalize" placeholder="Nationality">
                                </div>

                                <!-- Passport Field -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <i class="fas fa-passport"></i>
                                        <input type="text" value="{{$admision->passport}}" name="passport" id="passport" class="form-control text-capitalize" placeholder="Passport">
                                    </div>
                                </div>

                                <!-- Dateregistered Field -->
                                <div class="form-group col-md-6">
                                    <i class="fa fa-calendar"></i>
                                    <input type="text" value="{{$admision->dateregistered}}" name="dateregistered" id="dateregistered" class="form-control text-capitalize" placeholder="Date Registered">

                                </div>


                                <!-- Address Field -->
                                <div class="form-group col-md-12">
                                    <i class="fa fa-map-marker"></i>
                                        <textarea name="address" id="address" class="form-control text-capitalize" cols="40" rows="2" placeholder="Address">{{$admision->address}}</textarea>
                                </div>

                                <div class="form-group col-md-12">
                                    <i class="fa fa-map-marker"></i>
                                        <textarea name="current_address" id="current_address" class="form-control text-capitalize" cols="40" rows="2" placeholder="Current Address">{{$admision->current_address}}</textarea>
                                </div>


                                <div class="form-group col-sm-6">
                                    <input type="hidden" value="{{Auth::id()}}" name="user_id" id="user_id" class="form-control text-capitalize" placeholder="User ID">
                                </div>



                        </div>
                        <!-- Fin col-md-8 -->


                            <div class="col-md-1">
                                <style>
                                .teacher-image{
                                    height: 160px;
                                    padding-left: 1px;
                                    padding-right: 1px;
                                    background: #eee;
                                    width: 140px;
                                    margin: 0 auto;
                                    border-radius: 50%;
                                    vertical-align: middle;
                                }

                                .image{
                                    vertical-align: middle;
                                    width: 50px;
                                    height: 50px;
                                    border-radius: 50px;

                                }


                                .image > input[type="file"]{
                                    display: none;
                                }

                                .btn-choose{
                                    padding: 10px;
                                    text-align: center;
                                    background: gray;
                                    border: none;
                                    color: black;
                                    border-radius: 80%;
                                }

                                .fieldset{
                                    margin-top: 5px;
                                }

                                .fieldset legend{
                                    display: block;
                                    width: 100%;
                                    padding: 0;
                                    font-size: 15px;
                                    border: 0;
                                    line-height: inline;
                                    color: #797979;
                                    border-bottom: 1px solid #e5e5e5;
                                }

                                .info{
                                    float: right;
                                }

                            </style>
                            <!-- Image Field -->

                                <div class="form-group">
                                    <fieldset>
                                        <legend for="gender" >Gender</legend>
                                            <table>
                                                <tr>
                                                    <td>
                                                        <label>
                                                            <input type="radio" name="gender" id="gender" value="0" required checked
                                                            {{$admision->gender == 0 ? 'checked' : ''}}>

                                                                Male&nbsp;
                                                        </label>
                                                    </td>

                                                    <td>
                                                        <label>
                                                            <input type="radio" name="gender" id="gender" value="1" required
                                                            {{$admision->gender == 1 ? 'checked' : ''}}>

                                                                Female
                                                        </label>
                                                    </td>
                                                </tr>

                                            </table>
                                    </fieldset>

                                    <fieldset>
                                        <legend for="gender" >Status</legend>
                                            <table>
                                                <tr>
                                                    <td>
                                                        <label>
                                                            <input type="radio" name="status" id="status" value="0" required checked
                                                            {{$admision->status == 0 ? 'checked' : ''}}>
                                                                Single&nbsp;
                                                        </label>
                                                    </td>

                                                    <td>
                                                        <label>
                                                            <input type="radio" name="status" id="status" value="1" requered
                                                            {{$admision->status == 1 ? 'checked' : ''}}>
                                                                Married
                                                        </label>
                                                    </td>
                                                </tr>

                                            </table>
                                        </fieldset>
                                </div>
                                <!-- fin div form-group-->

                            </div>
                            <!--fin div clo-md-1-->

                            <div class="col-md-3">
                                <div class="form-group form-group-login">
                                    <table style="margin: 0 auto;">
                                        <thead><tr class="info"></tr></thead>
                                        <tbody>
                                            <tr>
                                            <td class="image">
                                                    {!! Html::image('admissions_images/' . $admision->image,
                                                    null, ['class' => 'teacher-image', 'id' => 'showImage']) !!}
                                                    <input type="file"
                                                    name="image"
                                                    id="image"
                                                    accept="image/x-png, image/png, image/jpg, image/jpeg">
                                            </td>
                                            </tr>
                                            <tr>
                                                <td style="text-align:center; background: #ddd;">
                                                    <input type="button" name="browse_file" id="browse_file"
                                                    class="form-control text-capitalize btn-choose"
                                                    class="btn btn-outline-danger" value="choose">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>


                                <div class="row">
                                <span>Guadians</span>
                                    <div class="form-group col-md-4">
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                        <input type="text" value="{{$admision->father_name}}" name="father_name" id="father_name" class="form-control text-capitalize" placeholder="Father Name">
                                    </div>

                                    <div class="form-group col-md-4">
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                        <input type="text" value="{{$admision->mother_name}}" name="mother_name" id="mother_name" class="form-control text-capitalize" placeholder="Mother Name">
                                    </div>

                                    <div class="form-group col-md-4">
                                        <i class="fa fa-phone" aria-hidden="true"></i>
                                        <input type="text" value="{{$admision->father_phone}}" name="father_phone" id="father_phone" class="form-control text-capitalize" placeholder="Father phone">
                                    </div>
                                </div>
                        </div>

                    </div>

                    <a href="{{ route('admisions.index') }}" class="btn btn-warning">Close</a>
                    {!! Form::submit('Update Student', ['class' => 'btn btn-info']) !!}

                    </form>
               </div>
           </div>
       </div>
   </div>
@endsection


@push('scripts')
  <script type="text/javascript">
    $('#dob').datetimepicker({
        'format': 'YYYY-MM-DD',
        'useCurrent': false
    })

    $('#dateregistered').datetimepicker({
        'format': 'YYYY-MM-DD',
        'useCurrent': false
    })

    $('#browse_file').on('click', function(){
        $('#image').click();
    })

    $('#image').on('change', function(e){
        showFile(this, '#showImage');
    })

    function showFile(fileInput, img, showName){
        if(fileInput.files[0]){
            var reader = new FileReader();
            reader.onload = function(e){
                $(img).attr('src', e.target.result);
            }
            reader.readAsDataURL(fileInput.files[0])
        }
        $(showName).text(fileInput.files[0].name);
    }
  </script>
@endpush
