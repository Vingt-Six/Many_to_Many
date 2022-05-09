<section>
    <h1 class="mx-5 mt-5">Section 1 :</h1>
    @foreach ($posts as $post)
        <div class="card mx-5 mt-4">
            <div class="card-body">
                <h5 class="card-title">{{ $post -> name }}</h5>
                <p class="card-text">{{ $post -> post }}</p>
                <div class="flex">
                    @foreach ($post->tag as $tag)
                        <button style="width: 100px;">{{ $tag -> name }}</button>
                    @endforeach
                </div>
            </div>
        </div>
    @endforeach
</section>
