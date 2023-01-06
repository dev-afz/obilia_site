@forelse ($messages as $m)
    <x-chat.message :for="$m->sender_id == auth()->id() ? 'reply' : 'sender'" :message="$m" />
@empty
@endforelse
