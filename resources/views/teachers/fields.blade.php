<div class="modal fade left" id="teacher-add-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="width: 90%" role="document">
    <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Teacher Details</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
                <div class="modal-body">
                    <!-- First Name Field -->
                    <div class="row">
                        <div class="form-group col-sm-4">
                            <input type="text" name="first_name" id="first_name" class="form-control text-capitalize" placeholder="First Name">
                        </div>

                        <!-- Last Name Field -->
                        <div class="form-group col-sm-4">
                            <input type="text" name="last_name" id="last_name" class="form-control text-capitalize" placeholder="Last Name">
                        </div>

                        <!-- Email Field -->
                        <div class="form-group col-sm-4">
                            <input type="email" name="email" id="email" class="form-control text-capitalize" placeholder="Email">
                        </div>
                    </div>

                    <!-- Gender Field -->
                    <div class="row">
                        <div class="form-group col-md-6">
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
                        </div>

                        <div class="form-group col-md-6">
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
                    </div>


                    <div class="row">
                    <!-- Dob Field -->
                    <div class="form-group col-md-6">
                        <i class="fa fa-calendar teacherdob"></i>
                        <input type="text" name="dob" id="dob" class="form-control text-capitalize" placeholder="DD-MM-YYYY">
                    </div>

                    @push('scripts')
                        <script type="text/javascript">
                            $('#dob').datetimepicker({
                                format: 'YYYY-MM-DD',
                                useCurrent: false
                            })
                        </script>
                    @endpush

                    <!-- Phone Field -->
                    <div class="form-group col-md-6">
                    <i class="fa fa-phone"></i>
                        <input type="text" name="phone" id="phone" class="form-control text-capitalize" placeholder="Phone">
                    </div>



                    <!-- Address Field -->
                    <div class="form-group col-md-6">
                        <i class="fa fa-map-marker"></i>
                        <textarea name="address" id="address" class="form-control text-capitalize" placeholder="Address" cols="40" rows="1">
                        </textarea>
                    </div>

                    <!-- Nationality Field -->
                    <div class="form-group col-md-6">
                    <i class="fa fa-id-card"></i>
                        <input type="text" name="nationality" id="nationality" class="form-control text-capitalize" placeholder="Nationality">
                    </div>

                    <!-- Passport Field -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="passport" id="passport" class="form-control text-capitalize" placeholder="Passport">
                        </div>
                    </div>

                    <!-- Dateregistered Field -->
                    <div class="form-group col-md-6">
                        <i class="fa fa-calendar"></i>
                        <input type="text" name="dateregistered" id="dateregistered" class="form-control text-capitalize" placeholder="Date Registered">

                    </div>

                    @push('scripts')
                        <script type="text/javascript">
                            $('#dateregistered').datetimepicker({
                                format: 'YYYY-MM-DD',
                                useCurrent: false
                            })
                        </script>
                    @endpush

                    <!-- User Id Field -->
                    <div class="form-group col-sm-6">
                        <input type="number" name="user_id" id="user_id" class="form-control text-capitalize" placeholder="User ID">
                    </div>

                    </div>



                    <!-- Image Field -->
                    <div class="form-group col-sm-6">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="image" id="image" required>
                        </div>
                    </div>


                </div>

                <!-- Status Field -->

                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                        {!! Form::submit('Register Teacher', ['class' => 'btn btn-success']) !!}
                    </div>
        </div>
    </div>
</div>

