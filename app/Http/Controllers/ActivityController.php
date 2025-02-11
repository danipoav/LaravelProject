<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function index()
    {
        $activities = Activity::all();
        return view('activity.activity', compact('activities'));
    }
    public function create() {}
    public function store() {}
    public function show() {}
    public function edit() {}
    public function update() {}
    public function destroy() {}
}
