<x-layout>
    <h2> {{ $task->name }}</h2>
    <div class="bg-gray-200 p-4 rounded">
        <p><strong>Priority Level:</strong> {{ $task->priority }}</p>
        <p><strong>Description: </strong> {{ $task->description }}</p>
    </div>
</x-layout>