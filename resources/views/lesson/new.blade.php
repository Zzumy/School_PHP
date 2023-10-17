<form action="/api/lesson" method="post">
    {{csrf_field()}}
    <input type="text" name="lesson" placeholder="Lesson">
    <input type="text" name="subject" placeholder="Subject">
    <input type="submit" value="Ok">
</form>