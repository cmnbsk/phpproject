<h1>Dodaj nowy post</h1>
    <form class="" action="{{ action('BlogController@store') }}" method="post">

        <input type="text" name="title" value="" required  placeholder="Tytuł">
        {{ ($errors->has('title')) ? $errors->first('title') : '' }}<br>
        <textarea name="post" rows="8" cols="40" required placeholder="Opis"></textarea>
        {{ ($errors->has('post')) ? $errors->first('post') : '' }}<br>
        <input type="text" name="author" value="" required placeholder="Autor">
        {{ ($errors->has('author')) ? $errors->first('author') : '' }}<br>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="submit" name="_name" value="Dodaj">
    </form>