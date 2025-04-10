<x-layout>
    <div class="note-container single-note">
        <div class="note-header">
            <a href={{ route('note.index') }} class="new-note-btn">Home Page</a>
            <h1>Date : {{ $note->updated_at }}</h1>
            <div class="note-buttons">
                <a href={{ route(name: 'note.edit', parameters: $note) }} class="note-edit-button">Edit</a>
                <form action={{ route('note.destroy', $note) }} method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="note-delete-button">Delete</button>
                </form>
            </div>
        </div>
        <div class="note">
            <div class="note-body">
                {{ $note->note }}
            </div>
        </div>
    </div>
</x-layout>
