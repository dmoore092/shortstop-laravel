<div class="jumbotron" style="background-color: #fbfbfb">
    <div class="card mb-5">
        <div class="card-header">
            Edit About Us
        </div>
        <div class="card-body">
            {{ Form::open(['action' => ['PagesController@updateAbout'], 'method' => 'POST']) }}
                {{Form::label('header', 'Header:', array('class' => 'blog-label'))}}
                {{Form::text('header', null, ['class' => 'form'])}}<br>
                {{Form::textarea('text', null, ['id' => 'summary-ckeditor', 'class' => 'form'])}}<br>
                {{Form::submit('Update About Us', ['class' => 'btn btn-danger'])}}
            {{ Form::close() }}
        </div>
    </div>
    <div class="card mb-5">
        <div class="card-header">
            Edit Home Page
        </div>
        <div class="card-body">
            {{ Form::open(['action' => ['PagesController@updateHome'], 'method' => 'POST']) }}
            {{Form::label('header', 'Header:', array('class' => 'blog-label'))}}
            {{Form::text('header', null, ['class' => 'form'])}}<br>
            {{Form::textarea('text', null, ['id' => 'summary-ckeditor', 'class' => 'form'])}}<br>
            {{Form::submit('Update Home Page', ['class' => 'btn btn-danger'])}}
            {{ Form::close() }}
        </div>
    </div>
</div>
