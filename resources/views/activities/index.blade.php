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
                <th></th>
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
                    <td class=" border p-2">
                        <a href="{{ route('activities.show', $activity->id) }}" class=" text-blue-600">Show</a>
                        <a href="{{ route('activities.edit', $activity->id) }}" class=" text-blue-600">Edit</a>
                        <form action="{{ route('activities.destroy', $activity->id) }}" method="POST"
                            class=" inline-block ml-2" onsubmit="return confirm('¿You sure?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class=" text-red-600">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
