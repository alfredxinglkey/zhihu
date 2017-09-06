<li id="post-{{ $post->id }}">
    <a href="{{ route('users.show', $user->id )}}">
        <img src="{{ $user->gravatar() }}" alt="{{ $user->name }}" class="gravatar"/>
    </a>
    <span class="user">
    <a href="{{ route('users.show', $user->id )}}">{{ $user->name }}</a>
  </span>
    <span class="timestamp">
    {{ $post->created_at->diffForHumans() }}
  </span>
    <span class="content">{{ $post->content }}</span>
</li>