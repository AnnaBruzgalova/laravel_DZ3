<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Student;
use Illuminate\Http\Request;

class GroupStudentController extends Controller
{
 public function index()
 {
$groups = Group::all();
 return view('groups.index', compact('groups'));
}

 public function create()
 {
return view('groups.create');
 }

 public function store(Request $request)
{
Group::create($request->all());
 return redirect()->route('groups.index');
}

 public function show(Group $group)
 {
 $students = $group->students;
 return view('groups.show', compact('group', 'students'));
}

 public function createStudent(Group $group)
 {
return view('students.create', compact('group'));
}

public function storeStudent(Request $request, Group $group)
{
 $group->students()->create($request->all());
 return redirect()->route('groups.show', $group);
}

 public function showStudent(Student $student)
{
 return view('students.show', compact('student'));
}
}