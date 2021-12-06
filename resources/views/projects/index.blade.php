@extends('layouts.app')
@section('title')
    Wensen bekijken
@endsection
@section('content')
    <style>
        .button-add{
            color: white;
            font-weight: bold;
        }

        .card{
            background: rgba( 255, 255, 255, 0.2 );
            box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
            backdrop-filter: blur( 3px );
            -webkit-backdrop-filter: blur( 3px );
            border-radius: 10px;
            border: 1px solid rgba( 255, 255, 255, 0.18 );
            border-radius: 15px;
            color: black;
        }
    </style>
<section style="background-color: #48CAE4; height: 90%" class="d-flex justify-content-start align-items-center flex-column">
    <div class="d-flex align-items-center justify-content-center flex-column" style="">
        <p>Wishlist</p>
        <a class="btn button-add" style="width: 100%; background-color: #0096C7" href="{{ route('projects.create') }}" title="Wens maken"> Wens maken</a>
    </div>
    <div class="flex-wrap d-flex align-items-center justify-content-between" style="width: 90%;">

        @foreach($projects as $project)
        <div class="card" style="width: 18rem;">
{{--            <img class="card-img-top" src="..." alt="Card image cap">--}}
            <div class="card-body">
                <h5 class="card-title">{{ $project->naam }}</h5>
                <p class="card-text">{{$project->beschrijving}}</p>
                <a href="{{ route('projects.show', $project->id) }}" class="btn btn-primary">Go somewhere</a>

                <form action="{{ route('projects.destroy', $project->id) }}" method="POST" class="flex-wrap d-flex">
                    @csrf
                    @method('DELETE')
                    <button type="submit" title="delete" style="border: none; background-color:transparent;">
                        <i class="fas fa-trash fa-lg text-danger"></i>
                    </button>
                    <a href="{{ route('projects.edit', $project->id) }}">
                        <i class="fas fa-edit  fa-lg"></i></a>
                </form>

            </div>
        </div>

        @endforeach

    </div>
</section>
    {!! $projects->links() !!}

@endsection
