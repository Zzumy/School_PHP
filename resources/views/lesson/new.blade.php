<form action="/api/lesson" method="post">
    {{csrf_field()}}
    <input type="text" name="status" placeholder="Status">
    <select name="subject_id">
        <option value="1">1</option>
        <option value="2">2</option>
    </select>
    <input type="submit" value="Ok">
</form>