<!-- Id Field -->
<div class="col-sm-12">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $schedule->id }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $schedule->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $schedule->updated_at }}</p>
</div>

<!-- Begins At Field -->
<div class="col-sm-12">
    {!! Form::label('begins_at', 'Begins At:') !!}
    <p>{{ $schedule->begins_at }}</p>
</div>

<!-- Ends At Field -->
<div class="col-sm-12">
    {!! Form::label('ends_at', 'Ends At:') !!}
    <p>{{ $schedule->ends_at }}</p>
</div>

<!-- Group Id Field -->
<div class="col-sm-12">
    {!! Form::label('group_id', 'Group Id:') !!}
    <p>{{ $schedule->group_id }}</p>
</div>

<!-- Lesson Id Field -->
<div class="col-sm-12">
    {!! Form::label('lesson_id', 'Lesson Id:') !!}
    <p>{{ $schedule->lesson_id }}</p>
</div>

<!-- Room Id Field -->
<div class="col-sm-12">
    {!! Form::label('room_id', 'Room Id:') !!}
    <p>{{ $schedule->room_id }}</p>
</div>

<!-- User Id Field -->
<div class="col-sm-12">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{{ $schedule->user_id }}</p>
</div>

