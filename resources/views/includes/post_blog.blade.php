<div class="jumbotron" style="background-color: #fbfbfb">
    <div class="card">
        @include('includes.messages')
        <div class="card-header">
            Post A Blog
        </div>
        <div class="card-body">
                {{ Form::open(['action' => ['BlogController@store'], 'method' => 'POST','files' => true]) }}
                    {{Form::label('title', 'Title:', array('class' => 'blog-label'))}}
                    {{Form::text('title', null, ['class' => 'form'])}}<br>

                    {{Form::textarea('text', null, ['id' => 'blog-textarea', 'class' => 'form'])}}<br>

                    {{Form::label('title', 'Post Image:&nbsp;&nbsp;', array('class' => 'blog-label'))}}
                    {{Form::file('image')}}<br>

                    {{Form::label('title', 'Podcast File:', array('class' => 'blog-label'))}}
                    {{Form::file('podcast')}}<br>

                    {{Form::label('title', 'YouTube Link:', array('class' => 'blog-label'))}}
                    {{Form::text('youtube-link', null, ['class' => 'form'])}}<br>

                    {{Form::submit('Post Blog', ['class' => 'btn btn-secondary'])}}
                {{ Form::close() }}
        </div>
    </div>
</div>
