{{-- filepath: d:\Archivos\dylontech\resources\views\blog\index.blade.php --}}
@include('partials.layout') {{-- Incluye el contenido del archivo layout.blade.php --}}
@include('partials.navbar2') <!-- Incluye el navbar -->

@section('content')
<section id="blog" class="blog">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>Blog</h2>
            <p>Últimas publicaciones</p>
        </div>

        <div class="row">
            @foreach ($posts as $post)
                <div class="col-lg-4 col-md-6">
                    <div class="blog-item">
                        <img src="{{ $post->image ?? asset('assets/img/default-blog.jpg') }}" alt="{{ $post->title }}" class="img-fluid">
                        <h3><a href="#">{{ $post->title }}</a></h3>
                        <p>{{ Str::limit($post->content, 100) }}</p>
                        <a href="#" class="read-more">Leer más</a>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="pagination">
            {{ $posts->links() }}
        </div>
    </div>
</section>
@endsection