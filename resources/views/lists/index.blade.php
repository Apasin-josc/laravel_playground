<x-layout>
    <h2> Currently Available tasks</h2>
    <ul>
        @foreach($tasks as $task)
            <li>
                <x-card href="/lists/{{ $task->id }}" :highlight="$task['priority'] === 'high'">
                    <h3>{{ $task->name }}</h3>
                </x-card>
            </li>
        @endforeach
    </ul>
</x-layout>