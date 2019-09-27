<div class="jumbotron" style="background-color: #fbfbfb">
    <div class="card">
        <div class="card-header">
            Post A Blog
        </div>
        <div class="card-body">
                {{ Form::open(['action' => ['BlogController@create', '3'], 'method' => 'POST']) }}
                    {{Form::label('title', 'Title:', array('class' => 'blog-label'))}}
                    {{Form::text('title', 'Title', ['class' => 'form'])}}<br>
                    {{Form::label('tags', 'Tags:', ['class' => 'form'])}}
                    {{Form::text('tags', 'Tags', ['class' => 'form'])}}<br>
                    {{Form::textarea('content', 'Content', ['class' => 'form'])}}<br>
                    {{Form::submit('Post Blog', ['class' => 'btn btn-secondary'])}}
                {{ Form::close() }}
        </div>
    </div>
</div>
