<x-layout title="Homepage Blog">
    <section class="py-4">
        <h1 class="display-5 fw-bold">Homepage</h1>
        <p class="lead mb-0">Benvenuto nel blog realizzato con Laravel, Controller, Blade Components e Bootstrap con Vite.</p>
    </section>

    @if (session()->has('email_sent'))
        <div class="alert alert-success" role="alert">
            {{ session('email_sent') }}
        </div>
    @endif

    @if (session()->has('email_error'))
        <div class="alert alert-danger" role="alert">
            {{ session('email_error') }}
        </div>
    @endif

    <section class="mt-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2 class="h3 mb-0">Ultimi articoli</h2>
            <a href="{{ route('articles.index') }}" class="btn btn-outline-primary">Vai all'indice</a>
        </div>

        <div class="row g-3">
            @foreach(array_slice($articles, 0, 2) as $article)
                <div class="col-12 col-md-6">
                    <x-card :article="$article" />
                </div>
            @endforeach
        </div>
    </section>

</x-layout>
