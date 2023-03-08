<div class="container">
    <form method="POST" action="{{ url('/posts') }}">
        @csrf
        <div class="form-group">
            <label for="title">name</label>
            <label for="name"></label><input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="title">description</label>
            <textarea  type="text" id="title" name="description" class="form-control" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">tạo</button>

    </form>
</div>

