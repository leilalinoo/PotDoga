@foreach($clubs as $club)
<form method="post" action="/api/club/{{ $club->club_id }}">
    {{csrf_field()}}
    @method('DELETE')
    <p>
        Id: {{ $club->club_id }} <br>
        establishment: {{ $club->establishment}} <br>
        location: {{ $club->location }}<br>
        max_number: {{ $club->max_number }}
    </p>

    <input type="submit" value="Törlés">

</form>
@endforeach