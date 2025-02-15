@extends('layouts.view')

@section('content')
    <h1 class=" text-2xl font-bold mb-4">Activity Details</h1>
    <p><strong>ID:</strong> {{ $activity->id }}</p>
    <p><strong>Tipo:</strong> {{ $activity->type }}</p>
    <p><strong>ID de Usuario:</strong> {{ $activity->user_id }}</p>
    <p><strong>Fecha y Hora:</strong> {{ $activity->datetime }}</p>
    <p><strong>Pagado:</strong> {{ $activity->paid ? 'Yes' : 'No' }}</p>
    <p><strong>Notas:</strong> {{ $activity->notes }}</p>
    <p class=" mb-4"><strong>Satisfacción:</strong> {{ $activity->satisfaction }}</p>

    <a href="{{ route('activities.index') }}" class=" bg-gray-500 text-white px-4 py-2 rounded ">Return</a>
@endsection
