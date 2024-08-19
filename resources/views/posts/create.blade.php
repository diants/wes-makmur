<h1>Create New Post</h1>
    <form method="POST" action="{{ route('posts.store') }}">
        @csrf
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required>
        <label for="content">Content:</label>
        <textarea id="content" name="content" required></textarea>
        <button type="submit">Submit</button>
    </form>
