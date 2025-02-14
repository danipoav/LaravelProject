@extends('layouts.view')

@section('content')
    <h1 class=" font-bold text-2xl mb-4">Create Activity</h1>

    @if ($errors->any())
        <div class="bg-red-200 text-red-800 p-2 mb-4">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('activities.store') }}" method="POST" class=" space-y-4">
        @csrf
        <div>
            <label for="type" class=" block">Type:</label>
            <select name="type" id="type" class=" border p-2">
                <option value="surf">Surf</option>
                <option value="windsurf">Windsurf</option>
                <option value="kayak">Kayak</option>
                <option value="atv">ATV</option>
                <option value="hot air balloon">Hot Air Ballon</option>
            </select>
        </div>

        <div>
            <label for="user_id" class=" block">ID User:</label>
            <input type="number" name="user_id" id="user_id" class=" border p-2" required>
        </div>

        <div>
            <label for="datetime" class=" block">Date Time:</label>
            <input type="date" name="datetime" id="datetime" required class=" border p-2">
        </div>

        <div>
            <label for="paid" class=" block">Paid:</label>
            <input type="checkbox" name="paid" id="paid" value="1">
        </div>

        <div>
            <label for="notes" class="block">Notas:</label>
            <textarea name="notes" id="notes" class="border p-2" required></textarea>
        </div>

        <div>
            <label for="satisfaction" class="block">Satisfacción (0-10):</label>
            <input type="number" name="satisfaction" id="satisfaction" min="0" max="10" class="border p-2">
        </div>
        <button type="submit" class=" bg-blue-500 text-white px-4 py-2 rounded mt-4">Create</button>
    </form>
@endsection
