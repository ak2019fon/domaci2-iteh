<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use App\Models\StudentGroup;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function create(Request $request)
    {
        $group = StudentGroup::find($request->group_id);
        if (!$group) {
            return response()->json(['error' => 'Group is not valid'], 400);
        }

        $classroom = StudentGroup::find($request->classroom_id);
        if (!$classroom) {
            return response()->json(['error' => 'Classroom is not valid'], 400);
        }
        if ($group->size > $classroom->size) {
            return response()->json(['error' => 'Classroom is too small'], 400);
        }
        $schedule = Schedule::create([
            'day' => $request->day,
            'from' => $request->from,
            'to' => $request->to,
            'student_group_id' => $request->group_id,
            'classroom_id' => $request->classroom_id
        ]);
        return response()->json($schedule);
    }
}
