<x-layout :title="$article['title']">
    <article class="py-4">
        <p class="text-uppercase text-secondary fw-semibold mb-2">Dettaglio articolo</p>
        <h1 class="display-6 fw-bold">{{ $article['title'] }}</h1>
        <p class="text-muted">{{ $article['subtitle'] }} · di {{ $article['author'] }}</p>

        <div class="card mt-4 shadow-sm">
            <div class="card-body">
                <p class="mb-0">{{ $article['content'] }}</p>
            </div>
        </div>

        <a href="{{ route('articles.index') }}" class="btn btn-outline-dark mt-4">Torna all'indice</a>
    </article>
</x-layout>
