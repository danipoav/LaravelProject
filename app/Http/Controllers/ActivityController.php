<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $activities = Activity::all();
        return view('activities.index', compact('activities'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'type' => 'required|in:surf,windsurf,kayak,atv,hot air ballon',
            'user_id' => 'required|exists:users,id',
            'datetime' => 'required|date',
            'paid' => 'required|boolean',
            'notes' => 'required|string',
            'satisfaction' => 'nullable|integer|min:0|max:10',
        ]);

        Activity::create($validateData);

        return redirect()->route('activity.activity')->with('succes', 'Activity created correctly');
    }

    /**
     * Display the specified resource.
     */
    public function show(Activity $activity)
    {
        return view('activity.activity', compact('activity'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $activity = Activity::findOrFail($id);

        $validateData = $request->validate([
            'type' => 'required|in:surf,windsurf,kayak,atv,hot air ballon',
            'user_id' => 'required|exists:users,id',
            'datetime' => 'required|date',
            'paid' => 'required|boolean',
            'notes' => 'required|string',
            'satisfaction' => 'nullable|integer|min:0|max:10',
        ]);

        $activity->update($validateData);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $activity = Activity::findOrFail($id);
        $activity->delete();
    }
}
