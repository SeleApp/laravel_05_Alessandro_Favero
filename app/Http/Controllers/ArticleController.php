<?php

namespace App\Http\Controllers;

class ArticleController extends Controller
{
    private array $articles = [
        [
            'id' => 1,
            'title' => 'Laravel e Vite: partenza rapida',
            'subtitle' => 'Configurazione frontend moderna per il tuo progetto',
            'author' => 'Redazione Laravel 04',
            'content' => 'Vite in Laravel permette una compilazione rapida degli asset, hot reload durante lo sviluppo e una configurazione pulita. In questo articolo vediamo come avviare Node, installare i pacchetti npm e integrare correttamente CSS e JavaScript nel layout Blade.',
        ],
        [
            'id' => 2,
            'title' => 'Controller in Laravel: perche usarli',
            'subtitle' => 'Separare logica e viste in modo ordinato',
            'author' => 'Redazione Laravel 04',
            'content' => 'I controller aiutano a mantenere il codice leggibile: le rotte restano snelle e la logica applicativa e centralizzata in metodi dedicati. Con metodi come homepage, index e show si gestisce facilmente il flusso del blog.',
        ],
        [
            'id' => 3,
            'title' => 'Componenti Blade anonimi',
            'subtitle' => 'Ridurre la duplicazione del markup',
            'author' => 'Redazione Laravel 04',
            'content' => 'Con i componenti anonimi possiamo riutilizzare layout, navbar e card in tutte le pagine. Questo approccio rende il progetto piu manutenibile: una modifica al componente si riflette ovunque venga utilizzato.',
        ],
    ];

    public function homepage()
    {
        return view('homepage', ['articles' => $this->articles]);
    }

    public function index()
    {
        return view('articles.index', ['articles' => $this->articles]);
    }

    public function show(int $id)
    {
        foreach ($this->articles as $article) {
            if ($article['id'] === $id) {
                return view('articles.show', ['article' => $article]);
            }
        }

        abort(404);
    }
}