<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;
use App\Models\Student;

class StudentController extends Controller
{
    public function create(Group $group)
    {
        return view('students.create', compact('group'));
    }

    public function store(Request $request, Group $group)
    {
        $request->validate([
            'surname' => 'required|string|max:255',
            'name' => 'required|string|max:255',
        ]);

        $group->students()->create($request->all());
        return redirect()->route('groups.show', $group);
    }

    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }

    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    public function update(Request $request, Student $student)
    {
        $request->validate([
            'surname' => 'required|string|max:255',
            'name' => 'required|string|max:255',
        ]);

        $student->update($request->all());
        return redirect()->route('students.show', $student);
    }

    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('groups.show', $student->group);
    }
}
