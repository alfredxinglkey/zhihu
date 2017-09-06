@if(count($posts) > 0)
    @foreach($posts as $post)
        <div class="panel panel-default">
            <div class="panel-heading">
                <a href="{{ route('users.show', $user->id) }}">
                    <img src="{{ $user->gravatar('30') }}" alt="{{ $user->name }}" class="gravatar" />
                </a>
                <span class="user">
                    <a href="{{ route('users.show', $user->id) }}">{{ $user->name }}</a>
                </span>
                <span class="timestamp">{{ $post->created_at->diffForHumans() }}</span>
            </div>
            <div class="panel-body">
                <span class="content" style="display: block;">{{ $post->content }}</span>
            </div>
            <div class="panel-footer">

            </div>
        </div>
    @endforeach
@endif