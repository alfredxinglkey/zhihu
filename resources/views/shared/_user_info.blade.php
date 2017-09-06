<a href="{{ route('users.show', $user->id) }}">
    <img src="{{ $user->gravatar('60') }}" alt="{{ $user->name }}" class="gravatar"/>
</a>
<a href="{{ route('users.show', $user->id) }}"><h4>{{ $user->name }}</h4></a>