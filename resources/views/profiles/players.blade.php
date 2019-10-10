@extends('layouts.app')

@section('title', 'Athletic Prospects | Players')

@section('content')

<div class="jumbotron col-md-7 ml-auto mr-auto">
{{--    <script type="text/javascript" charset="utf8" src="{{ asset('js/DataTables/datatables.min.js')}}"></script>--}}
    <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <h1 class="display-4">Players</h1>
        {!! Form::open() !!}
            {{Form::label('search', 'Search', array('class' => 'update-label'))}}
            {{Form::text('search','', ['class' => 'form', 'id'=>'search','placeholder' => 'Search'])}}
        {!! Form::close() !!}
  <p class="lead"></p>
  <hr class="my-4">
    <div class="row d-flex justify-content-start">
        @if(count($users) > 0)
            <table id="players-table" class="table" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Name</th>
                    </tr>
                </thead>
                <tbody>
            @foreach($users as $user)
                @if($user->role == 'player')
                    <tr>
                        <td>
                            {{ $user->name }}
                        </td>
                    </tr>
                @endif
            @endforeach
                </tbody>
            </table>
        @else
            <h1>No Players Found</h1>
        @endif
    </div>

  <hr class="my-4">
  {{$users->links()}}
  @include('includes.footer')
    <script src="{{ asset('js/tablesdata.js') }}"></script>
</div>

@endsection

{{--<div class="container col-sm-12 col-md-5">--}}
{{--    <div class="card mb-3 mt-3 {{$user->sport}} ">--}}
{{--        <div class="row no-gutters">--}}
{{--            <div class="col-md-4">--}}
{{--                <a href="/players/{{$user->id}}" style="text-decoration: none !important;">--}}
{{--                    <img src="https://shortstop-userimages.s3.amazonaws.com/{{$user->profile_image}}" style="min-width:150px;max-width: 260px;" class="card-img ml-3 mt-4" alt="Player Profile Image">--}}
{{--                </a>--}}
{{--            </div>--}}
{{--            <div class="col-md-8">--}}
{{--                <div class="card-body ml-3">--}}
{{--                    <a href="/players/{{$user->id}}" style="text-decoration: none !important;">--}}
{{--                        <h5 class="card-title">{{ $user->name }}</h5>--}}
{{--                    </a>--}}
{{--                    <p class="card-text">--}}
{{--                        Sport: {{$user->sport}}--}}
{{--                        <br/>--}}
{{--                        Position: {{$user->primary_position}}--}}
{{--                        <br/>--}}
{{--                    </p>--}}
{{--                    @if($user->commitment == null)--}}
{{--                        --}}{{--                                        provides space for commitment being null--}}
{{--                        <br>--}}
{{--                    @else--}}
{{--                        <p class="card-text">Commitment: {{$user->commitment}}</p>--}}
{{--                    @endif--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}