@foreach ($lessons as $lesson)
    <form action="/api/lesson/{{$lesson->lesson_id}}" method="post">
        {{csrf_field()}}
        {{method_field('DELETE')}}
        <input type="submit" value="{{$lesson->name}}">
    </form>
@endforeach