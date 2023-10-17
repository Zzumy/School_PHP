@foreach ($lessons as $lesson)
    <form action="/api/lesson/{{$lesson->lesson_id}}" method="post">
        {{csrf_field()}}
        {{method_field('GET')}}
        <input type="submit" value="{{$lesson->status}}">
        <input type="submit" value="{{$lesson->subject_id}}">
    </form>
@endforeach