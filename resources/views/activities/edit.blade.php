@extends('layouts.view')

@section('content')
    <h1 class=" text-2xl font-bold mb-4">Edit Activity</h1>

    @if ($errors->any())
        <div class=" bg-red-500 text-red-800 p-2 mb-4">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('activities.update', $activity->id) }}" method="POST" class=" space-y-4">
        @csrf
        @method('PUT')
        <div>
            <label for="type" class="block">Tipo:</label>
            <select name="type" id="type" class="border p-2">
                <option value="surf" {{ $activity->type == 'surf' ? 'selected' : '' }}>Surf</option>
                <option value="windsurf" {{ $activity->type == 'windsurf' ? 'selected' : '' }}>Windsurf</option>
                <option value="kayak" {{ $activity->type == 'kayak' ? 'selected' : '' }}>Kayak</option>
                <option value="atv" {{ $activity->type == 'atv' ? 'selected' : '' }}>ATV</option>
                <option value="hot air balloon" {{ $activity->type == 'hot air balloon' ? 'selected' : '' }}>Hot Air Balloon
                </option>
            </select>
        </div>

        <div>
            <label for="user_id" class="block">ID de Usuario:</label>
            <input type="number" name="user_id" id="user_id" value="{{ $activity->user_id }}" class="border p-2"
                required>
        </div>

        <div>
            <label for="datetime" class="block">Fecha y Hora:</label>
            <input type="datetime-local" name="datetime" id="datetime"
                value="{{ date('Y-m-d\TH:i', strtotime($activity->datetime)) }}" class="border p-2" required>
        </div>

        <div>
            <label for="paid" class="block">¿Pagado?</label>
            <input type="checkbox" name="paid" id="paid" value="1" {{ $activity->paid ? 'checked' : '' }}>
        </div>

        <div>
            <label for="notes" class="block">Notas:</label>
            <textarea name="notes" id="notes" class="border p-2">{{ $activity->notes }}</textarea>
        </div>

        <div>
            <label for="satisfaction" class="block">Satisfacción (0-10):</label>
            <input type="number" name="satisfaction" id="satisfaction" min="0" max="10"
                value="{{ $activity->satisfaction }}" class="border p-2">
        </div>

        <button type="submit" class=" bg-green-500 text-white px-4 py-2 rounded">Edit</button>
    </form>

@endsection
