<div class="card mb-5">
    @include('includes.messages')
    <div class="card-header">
        Edit Home Page
    </div>
    <div class="card-body">
        {{ Form::open(['action' => ['PagesController@updateHome'], 'method' => 'POST']) }}
        {{Form::label('header', 'Header:', array('class' => 'blog-label'))}}
        {{Form::text('header', $home->header, ['class' => 'form'])}}<br>
        {{Form::textarea('text', $home->text, ['id' => 'home-textarea', 'class' => 'form'])}}<br>
        {{Form::submit('Update Home Page', ['class' => 'btn btn-secondary'])}}
        {{ Form::close() }}
    </div>
</div>