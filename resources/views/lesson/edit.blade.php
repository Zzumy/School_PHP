<form action="/api/lesson/{{$lesson->lesson_id}}" method="post">
    {{csrf_field()}}
    {{method_field('PUT')}}
    <input type="text" name="name" placeholder="Lesson name" value="{{$lesson->name}}">
    <input type="text" name="subject" placeholder="Lesson subject" value="{{$lesson->subject}}">
    <input type="submit" value="Ok">
</form>