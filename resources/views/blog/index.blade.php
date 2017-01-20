{{ Session::get('message') }}
<h1>Mój blog</h1>

@foreach($blogs as $data)
    <h2><a href="blog/{{ $data->id }}">{{ $data -> title }}</a></h2>
    <p>{{ $data -> post }} </p>
    <a href="blog/{{ $data->id }}/edit">Edytuj post</a>
    <form class="" action="blog/{{ $data->id }}" method="post">
        <input type="hidden" name="method" value="delete">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="submit" name="name" value="post">
    </form>
    <hr>
@endforeach