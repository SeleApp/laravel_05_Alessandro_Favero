<x-layout title="Contattaci">
    <section class="py-4">
        <h1 class="display-5 fw-bold text-center">Contattaci</h1>
        <p class="lead text-center mb-0">Compila il form per inviarci la tua richiesta.</p>
    </section>

    <section class="mt-4">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-md-8">
                @if ($errors->any())
                    <div class="alert alert-danger" role="alert">
                        <p class="mb-2"><strong>Controlla i dati inseriti:</strong></p>
                        <ul class="mb-0 ps-3">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="{{ route('contact.us') }}" class="p-4 border rounded bg-light">
                    @csrf

                    <div class="mb-3">
                        <label for="user" class="form-label">Inserisci il tuo nome</label>
                        <input type="text" class="form-control" id="user" name="user" value="{{ old('user') }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Inserisci la tua email</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="message" class="form-label">Scrivi qui il tuo messaggio</label>
                        <textarea class="form-control" id="message" name="message" rows="5" required>{{ old('message') }}</textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Invia</button>
                </form>
            </div>
        </div>
    </section>
</x-layout>
