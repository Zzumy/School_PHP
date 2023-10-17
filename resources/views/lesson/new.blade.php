<form action="/api/lesson" method="post">
    {{csrf_field()}}
    <input type="text" name="name" placeholder="Lesson">
    <input type="text" name="subject" placeholder="Subject">
    <input type="submit" value="Ok">
</form>