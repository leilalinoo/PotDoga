<form action="/api/clubs/{{$club->club_id}}" method="post">
    {{csrf_field()}}
    {{method_field('PUT')}}
    <input type="date" name="establishment" placeholder="establishment">
    <input type="text" name="location" placeholder="location">
    <input type="number" name="max_number" placeholder="Max_Number">
    <input type="submit" value="OK">
</form>