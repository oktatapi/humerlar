<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Project;

class EmployeeProjectController extends Controller
{
    public function index()
    {        
        return Employee::with('projects')->get();

    }

    // Dolgozó hozzárendelése projekthez
    public function store(Request $request)
    {
        $validated = $request->validate([
            'employeeId' => 'required|exists:employees,id',
            'projectId'  => 'required|exists:projects,id',
            'joinedAt'   => 'nullable|date',
        ]);

        $employee = Employee::findOrFail($validated['employeeId']);
        
        // Hozzárendelés (a syncWithoutDetaching megakadályozza a duplikációt)
        $employee->projects()->syncWithoutDetaching([
            $validated['projectId'] => [
                'joinedAt' => $validated['joinedAt'] ?? now()->toDateString()
            ]
        ]);

        return response()->json(['message' => 'Sikeres hozzárendelés'], 201);
    }

    // Dolgozó levétele a projektről
    public function destroy(Employee $employee, Project $project)
    {
        $employee->projects()->detach($project->id);

        return response()->json(['message' => 'Sikeresen eltávolítva a projektből']);
    }    
}
