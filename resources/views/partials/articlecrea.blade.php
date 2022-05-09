<section class="mx-5 mt-5">
    <form action="/post" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nom du post</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="..." name="name">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Post</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="post"></textarea>
        </div>
        @foreach ($tags as $tag)
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="tag_id[]" id="inlineCheckbox1" value="{{ $tag -> id }}">
                <label class="form-check-label" for="inlineCheckbox1">{{ $tag -> name }}</label>
            </div>
        @endforeach
        <div>
            <button class="btn btn-outline-primary" type="submit">Add Post</button>
        </div>
    </form>
</section>
