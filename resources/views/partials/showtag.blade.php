<section>
    <h1>{{ $tag -> name }}</h1>
    @foreach ($tag->post as $post)
        <p>{{$loop->iteration . '-' . $post -> post }}</p>
    @endforeach
</section>