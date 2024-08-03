<x-layout>
    <div class="note-container">
        <a href="{{ route('note.create') }}" class="new-note-btn">{{-- note.create access the create method in controller --}}
            New Note
        </a>
        <div class="notes">
            @foreach ($notes as $note)
                <div class="note">
                    <div class="note-body">
                        {{ Str::words($note->note, 30)}} {{-- Str::words limit the words shown --}}
                    </div>
                    <div class="note-buttons">
                        <a href="{{ route('note.show', $note) }}" class="note-edit-button">View</a> {{-- like ('/note/{id}/edit', [NoteContr.... the $note passes like the id to the note.show--}}
                        <a href="{{ route('note.edit', $note) }}" class="note-edit-button">Edit</a>
                        <button class="note-delete-button">Delete</button>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>
