@extends('voter.layout')

@section('content')
    
<div>
    <h2>#{{ $dayOfYear }} {{ $question->question ?? 'Ma még nem érkezett kérdés' }}</h2>

    @if ($question)
        <form method="POST" action="{{ route('vote', $question->id) }}">
            @csrf
            @method('POST')

            <ul>
                @foreach ($question->votes as $vote)
                    <li>
                        <label><input type="radio" name="vote" value="{{ $vote->id }}">{{ $vote->option }}</label>
                        <span><i class="fas fa-heart"></i>{{ $vote->votes }}</span>
                    </li>
                @endforeach

                <li>
                    <input type="text" name="new_vote" placeholder="Saját válasz hozzáadása">
                </li>
            </ul>

            <input type="submit" value="Szavazok">
        </form>
    @endif
</div>

@endsection