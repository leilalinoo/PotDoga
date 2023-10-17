@foreach ($clubs as $club)
    <form action="/api/clubs/{{$club->club_id}}" method="post">
        @csrf
        {{method_field('GET')}}
        <div class="form-group">
            <input type="submit" value="{{$club->location}}">
        </div>
    </form>
@endforeach