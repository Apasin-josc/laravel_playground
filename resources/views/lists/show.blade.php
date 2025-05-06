<x-layout>
    <h2> {{ $task->name }}</h2>
    <div class="bg-gray-200 p-4 rounded">
        <p><strong>Priority Level:</strong> {{ $task->priority }}</p>
        <p><strong>Description: </strong> {{ $task->description }}</p>
    </div>

    <div class="border-2 border-dashed bg-white px-4 pb-4 my-4 rounded">
        <h3> Team information</h3>
        <p><strong>Team name:</strong>{{ $task->team->name }}</p>
        <p><strong>Location:</strong> {{ $task->team->location }}</p>
    </div>

</x-layout>