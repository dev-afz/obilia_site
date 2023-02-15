@forelse ($messages as $msg)
    <x-workspace.chat.message :message="$msg" :for="$msg->sender_id === auth()->id() ? 'sender' : 'receiver'" />
@empty
    <span class="text-center d-block">No messages found</span>
@endforelse
