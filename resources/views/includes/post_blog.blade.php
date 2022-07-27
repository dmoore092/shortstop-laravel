<div class="jumbotron" style="background-color: #fbfbfb">
    <div class="card">
        <div class="card-header">
            Post A Blog
        </div>
        <div class="card-body">
                {{ Form::open(['action' => ['BlogController@create'], 'method' => 'POST']) }}
                    {{Form::label('title', 'Title:', array('class' => 'blog-label'))}}
                    {{Form::text('title', null, ['class' => 'form'])}}<br>
                    {{Form::label('tags', 'Tags:', ['class' => 'form'])}}
                    {{Form::text('tags', null, ['class' => 'form'])}}<br>
                    {{Form::textarea('text', null, ['id' => 'blog-textarea', 'class' => 'form'])}}<br>
                    {{Form::submit('Post Blog', ['class' => 'btn btn-secondary'])}}
                {{ Form::close() }}
        </div>
    </div>
</div>
