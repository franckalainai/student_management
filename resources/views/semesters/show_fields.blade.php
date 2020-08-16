<!-- Semester Name Field -->
<div class="form-group">
    {!! Form::label('semester_name', 'Semester Name:') !!}
    <p>{{ $semesters->semester_name }}</p>
</div>

<!-- Semester Code Field -->
<div class="form-group">
    {!! Form::label('semester_code', 'Semester Code:') !!}
    <p>{{ $semesters->semester_code }}</p>
</div>

<!-- Semester Duration Field -->
<div class="form-group">
    {!! Form::label('semester_duration', 'Semester Duration:') !!}
    <p>{{ $semesters->semester_duration }}</p>
</div>

<!-- Semester Description Field -->
<div class="form-group">
    {!! Form::label('semester_description', 'Semester Description:') !!}
    <p>{{ $semesters->semester_description }}</p>
</div>

