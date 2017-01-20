<h1>Szczegóły</h1>
<h2>{{ $detailpage -> title }}</h2>
<p>
    {{ $detailpage -> post }}
</p>
<p>
    {{ $detailpage -> author }}
</p>
<a href="{{@action('BlogController@index')}}">Wróć do strony głównej</a>