<div class="list-group mb-3">
    <i class="bi bi-moon text-white"></i>
    <a href="{{ route('home') }}" class="list-group-item list-group-item-action">Home</a>
    <a href="{{ route('test') }}" class="list-group-item list-group-item-action">Test</a>
</div>
<p class="small text-white mb-0">Manage Posts</p>
<div class="list-group mb-3">
    <a href="{{ route('post.index') }}" class="list-group-item list-group-item-action">Posts</a>
    <a href="{{ route('post.create') }}" class="list-group-item list-group-item-action">Create Post</a>
</div>
<p class="small text-white mb-0">Manage Categories</p>
<div class="list-group mb-3">
    <a href="{{ route('category.index') }}" class="list-group-item list-group-item-action">Category Lists</a>
    <a href="{{ route('category.create') }}" class="list-group-item list-group-item-action">Create Category</a>
</div>
