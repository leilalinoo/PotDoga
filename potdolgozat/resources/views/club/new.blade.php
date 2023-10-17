<form action="/api/clubs" method="post">
    {{csrf_field()}}
    <input type="date" name="establishment" placeholder="establishment">
    <input type="text" name="location" placeholder="location">
    <input type="number" name="max_number" placeholder="Max_Number">
    <input type="submit" value="Ok">
</form>