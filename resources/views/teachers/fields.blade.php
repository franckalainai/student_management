<div class="modal fade left" id="teacher-add-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="width: 90%" role="document">
    <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add Teacher Form</h5>

            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>

            </div>
                <div class="modal-body">
                <div class="panel panel-default">
                    <div class="panel-body"><i class="fa fa-book" aria-hidden="true"></i> Teacher Details</div>
                </div>
                    <div class="row">
                        <div class="col-md-8">
                                <div class="form-group col-md-6">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                    <input type="text" name="first_name" id="first_name" class="form-control text-capitalize" placeholder="First Name">
                                </div>

                            <!-- Last Name Field -->
                                <div class="form-group col-md-6">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                    <input type="text" name="last_name" id="last_name" class="form-control text-capitalize" placeholder="Last Name">
                                </div>

                                <!-- Email Field -->
                                <div class="form-group col-md-6">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                    <input type="email" name="email" id="email" class="form-control text-capitalize" placeholder="Email">
                                </div>


                                <div class="form-group col-md-6">
                                    <i class="fa fa-phone"></i>
                                    <input type="text" name="phone" id="phone" class="form-control text-capitalize" placeholder="Phone">
                                </div>


                                <div class="form-group col-md-6">
                                    <i class="fa fa-calendar teacherdob"></i>
                                    <input type="text" name="dob" id="dob" class="form-control text-capitalize" placeholder="Date Of Birth">
                                </div>

                                <!-- Nationality Field -->
                                <div class="form-group col-md-6">
                                    <i class="fa fa-id-card"></i>
                                    <input type="text" name="nationality" id="nationality" class="form-control text-capitalize" placeholder="Nationality">
                                </div>

                                <!-- Passport Field -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <i class="fas fa-passport"></i>
                                        <input type="text" name="passport" id="passport" class="form-control text-capitalize" placeholder="Passport">
                                    </div>
                                </div>

                                <!-- Dateregistered Field -->
                                <div class="form-group col-md-6">
                                    <i class="fa fa-calendar"></i>
                                    <input type="text" name="dateregistered" id="dateregistered" class="form-control text-capitalize" placeholder="Date Registered">

                                </div>


                                <!-- Address Field -->
                                <div class="form-group col-md-12">
                                    <i class="fa fa-map-marker"></i>
                                        <textarea name="address" id="address" class="form-control text-capitalize" cols="40" rows="2" placeholder="Address"></textarea>
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
                                                            <input type="radio" name="gender" id="gender" value="0" required checked>
                                                                Male&nbsp;
                                                        </label>
                                                    </td>

                                                    <td>
                                                        <label>
                                                            <input type="radio" name="gender" id="gender" value="1" required>
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
                                                            <input type="radio" name="status" id="status" value="0" required checked>
                                                                Single&nbsp;
                                                        </label>
                                                    </td>

                                                    <td>
                                                        <label>
                                                            <input type="radio" name="status" id="status" value="1" requered>
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
                                                    {!! Html::image('teacher_images/profile.png',
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


                        </div>
                        <!-- fin col-md-4-->
                    </div>
                    <!-- Fin row -->

                    <!--row-->
                </div>


                <!-- Fin modal-body -->

                <div class="modal-footer">
                    <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                    {!! Form::submit('Register Teacher', ['class' => 'btn btn-success']) !!}
                </div>
        </div>
    </div>
</div>

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

