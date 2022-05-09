<section class="mx-5 mt-5">
    <h1>Section 2 :</h1>
    <div class="card text-center mx-auto" style="width: 25rem;">
        <ul class="list-group list-group-flush">
                @foreach ($tags as $tag)
                <a href="tag/{{ $tag->id }}" class="text-decoration-none">
                    <li class="list-group-item">{{ $tag->name }}</li>
                </a>
                @endforeach
            </ul>
        </div>
</section>
