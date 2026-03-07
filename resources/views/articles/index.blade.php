<x-layout title="Indice Articoli">
    <section class="py-4">
        <h1 class="display-6 fw-bold">Indice articoli</h1>
        <p class="text-secondary">Questa pagina mostra l'elenco completo degli articoli del blog.</p>
    </section>

    <section>
        <div class="row g-3">
            @foreach($articles as $article)
                <div class="col-12 col-md-6 col-lg-4">
                    <x-card :article="$article" />
                </div>
            @endforeach
        </div>
    </section>
</x-layout>
