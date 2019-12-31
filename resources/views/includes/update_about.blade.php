<div class="card mb-5">
    @include('includes.messages')
    <div class="card-header">
        Edit About Us
    </div>
    <div class="card-body">
        {{ Form::open(['action' => ['PagesController@updateAbout'], 'method' => 'POST']) }}
        {{Form::label('header', 'Header:', array('class' => 'blog-label'))}}
        {{Form::text('header', $about->header, ['class' => 'form'])}}<br>
        {{Form::textarea('text', $about->text, ['id' => 'about-textarea', 'class' => 'form'])}}<br>
        {{Form::submit('Update About Us', ['class' => 'btn btn-secondary'])}}
        {{ Form::close() }}
    </div>
</div>