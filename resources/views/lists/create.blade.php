<x-layout>
    <h2>Create Page</h2>
    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        <h2>Create a New Task</h2>

        <!-- Task Name -->
        <label for="name">Task Name:</label>
        <input 
          type="text" 
          id="name" 
          name="name" 
          value="{{ old('name') }}" 
          required
        >

        <!-- Task Strength -->
        <label for="priority">Task Priority (Low or High):</label>
        <input 
          type="text" 
          id="priority" 
          name="priority" 
          required
        >

        <!-- Task Description -->
        <label for="description">Task Description:</label>
        <textarea 
          id="description" 
          name="description" 
          rows="5" 
          required
        ></textarea>

        <!-- select a team -->
        <label for="team_id">Team:</label>
        <select id="team_id" name="team_id" required>
          <option value="" disabled selected>Select a team</option>
            @foreach ($teams as $team)
                <option value="{{ $team->id }}">{{ $team->name }}</option>
            @endforeach
        </select>

        <button type="submit" class="btn mt-4">Create Task</button>

        <!-- validation errors -->
    </form>
</x-layout>