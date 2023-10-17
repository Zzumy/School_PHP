<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    public function index()
    {
        $lessons = response()->json(Lesson::all());
        return $lessons;
    }

    public function show($id)
    {
        $lesson = response()->json(Lesson::find($id));
        return $lesson;
    }

    public function delete($id)
    {
        Lesson::find($id)->delete();
        return redirect('/lesson/list');
    }

    public function store(Request $request)
    {
        $lesson = new Lesson();
        $lesson->status = $request->status;
        $lesson->subject_id = $request->subject_id;
        $lesson->save();
        return redirect('/lesson/list');
    }

    public function update(Request $request, $id)
    {
        $lesson = Lesson::find($id);
        $lesson->status = $request->status;
        $lesson->subject_id = $request->subject_id;
        $lesson->save();
        return redirect('/lesson/list');
    }

    public function newView()
    {
        return view('lesson.new');
    }

    public function editView($id)
    {
        $lesson = Lesson::find($id);
        return view('lesson.edit', ["lesson" => $lesson]);
    }

    public function listView()
    {
        $lessons = Lesson::all();
        return view("lesson.list", ["lessons" => $lessons]);
    }

    public function deleteView()
    {
        $lessons = Lesson::all();
        return view("lesson.delete", ["lessons" => $lessons]);
    }
}
