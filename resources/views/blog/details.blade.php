<h1>Szczegóły</h1>
<p> Dodano {{ $detailpage -> created_at }}</p>
<h2>{{ $detailpage -> title }}</h2>
<p>
    {{ $detailpage -> post }}
</p>
<p>
    {{ $detailpage -> author }}
</p>

<p> Ostatnio edytowano {{ $detailpage -> updated_at }}</p>
<a href="{{@action('BlogController@index')}}">Wróć do strony głównej</a>