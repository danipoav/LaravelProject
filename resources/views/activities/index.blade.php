@extends('layouts.view')

@section('content')
    <h1 class=" text-2xl font-bold mb-4">Activities</h1>
    <a href="{{ route('activities.create') }}" class=" bg-blue-500 text-white px-4 py-2 rounded">Create new Activity</a>

    <table class=" min-w-full mt-4 border">
        <thead>
            <tr class=" bg-gray-200">
                <th class=" border p-2">ID</th>
                <th class=" border p-2">Type</th>
                <th class=" border p-2">User ID</th>
                <th class=" border p-2">Date Time</th>
                <th class=" border p-2">Status</th>
                <th class=" border p-2">Notes</th>
                <th class=" border p-2">Satisfaction</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($activities as $activity)
                <tr>
                    <td class="border p-2">{{ $activity->id }}</td>
                    <td class="border p-2">{{ $activity->type }}</td>
                    <td class="border p-2">{{ $activity->user_id }}</td>
                    <td class="border p-2">{{ $activity->datetime }}</td>
                    <td class="border p-2">{{ $activity->paid }}</td>
                    <td class="border p-2">{{ $activity->notes }}</td>
                    <td class="border p-2">{{ $activity->satisfaction }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
