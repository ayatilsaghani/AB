<h1>Posts</h1>
<a href="{{ route('posts.create') }}">Create New Post</a>
<ul>
    @foreach ($posts as $post)
        <li>
            {{ $post->title }} 
            <a href="{{ route('posts.edit', $post->id) }}">Edit</a>
            <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </li>
    @endforeach
</ul>