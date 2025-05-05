<x-layout>
    <h2> Currently Available tasks</h2>
    <ul>
        @foreach($tasks as $task)
            <li>
                <x-card href="{{ route('tasks.show', $task->id)}}" :highlight="$task['priority'] === 'high'">
                    <h3>{{ $task->name }}</h3>
                </x-card>
            </li>
        @endforeach
    </ul>

    {{ $tasks->links() }}
</x-layout>