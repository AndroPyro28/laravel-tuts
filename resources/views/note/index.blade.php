<x-layout>
    <h1>index </h1>

    <div class="note-container">
        <a href="{{ route('note.create') }}" class="new-note-btn">New Note</a>

        <div class="notes">

            @foreach ($notes as $note)
            <div class="note">
                <div class="note-body text-red-500">{{ Str::words($note->note, 30) }}</div>
                <div class="note-buttons">
                    <a href="{{ route('note.show', $note) }}" class="note-view-button">View</a>
                    <a href="{{ route('note.edit', $note) }}" class="note-edit-btn">Edit</a>
                    <form action="{{ route('note.destroy', $note) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="note-delete-button">Delete</button>
                        </form>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-layout>