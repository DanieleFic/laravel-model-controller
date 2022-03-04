
<div class="ms_container">
    <h2>LISTA FILM</h2>
    {{-- @dd($movie_dati); --}}
    <div class="ms_containerfilm">
        @foreach ($movie_dati as $key => $element)
            {{--  @foreach($element as $film) --}}
                <div class="ms_boxfilm">
                    {{-- <img src="{{$element["thumb"]}}" alt=""> --}}
                    <h2>{{$element->title}}</h2>
                    <p>{{$element->original_title}}</p>
                    <p>{{$element->nationality}}</p>
                    <p>{{$element->date}}</p>
                    <p>{{$element->vote}}</p>
                </div>
            @endforeach
    </div>
    
            
</div>

