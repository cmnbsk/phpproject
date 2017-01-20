{{ Session::get('message') }}
<h1>Mój blog</h1>

<a href="blog/create">Dodaj nowy post</a>


@foreach($blogs->reverse() as $data)
    <h2><a href="blog/show/{{ $data->id }}">{{ $data -> title }}</a></h2>
    <p>{{ $data->post }} </p>
    <p>{{ $data->author }} </p>
    <a href="blog/edit/{{ $data->id }}">Edytuj post</a>
    <form class="" action="{{ action('BlogController@destroy', $data->id) }}" method="post">
        <input type="hidden" name="_method" value="delete">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="submit" name="name" value="delete">
    </form>
    <hr>
@endforeach