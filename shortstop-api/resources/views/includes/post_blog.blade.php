<div class="jumbotron">
    <h1 class="display-4">Post A Blog!</h1>
<p>
    {{ Form::open(['action' => ['PlayerController@update', '3'], 'method' => 'POST']) }}
        {{Form::label('name', 'Name', array('class' => 'update-label'))}}
        {{Form::text('name', 'name', ['class' => 'form', 'placeholder' => 'Name'])}}
        {{Form::submit('Post Blog', ['class' => 'btn btn-secondary'])}}
    {{ Form::close() }}
</p>
</div>
