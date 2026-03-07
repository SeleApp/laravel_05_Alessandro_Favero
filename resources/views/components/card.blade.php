@props(['article'])

<div class="card h-100 shadow-sm">
    <div class="card-body d-flex flex-column">
        <h5 class="card-title">{{ $article['title'] }}</h5>
        <h6 class="card-subtitle mb-2 text-muted">{{ $article['subtitle'] }}</h6>
        <p class="card-text">{{ \Illuminate\Support\Str::limit($article['content'], 120) }}</p>
        <a href="{{ route('articles.show', ['id' => $article['id']]) }}" class="btn btn-primary mt-auto">Leggi dettaglio</a>
    </div>
</div>
