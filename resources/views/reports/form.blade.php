<!-- New Report Form -->
<div class="form-group">
    {!! Form::label('user_id', 'Patient') !!}
    {!! Form::text('user_id', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('procedure', 'Procedure') !!}
    {!! Form::text('procedure', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('statement', 'Statement') !!}
    {!! Form::text('statement', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('findings', 'Findings') !!}
    {!! Form::text('findings', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('impression', 'Impression') !!}
    {!! Form::text('impression', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('conclusion', 'Conclusion') !!}
    {!! Form::textarea('conclusion', null, ['class' => 'form-control']) !!}
</div>

<!-- Add Report Button -->
<div class="form-group">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary']) !!}
</div>