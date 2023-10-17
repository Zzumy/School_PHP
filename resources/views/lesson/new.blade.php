<form action="/api/lesson" method="post">
    {{csrf_field()}}
    <input type="text" name="status" placeholder="Status">
    <input type="text" name="subject_id" placeholder="Subject">
    <input type="submit" value="Ok">
</form>