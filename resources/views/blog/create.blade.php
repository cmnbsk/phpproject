<h1>Dodaj nowy post</h1>
    <form class="" action="/blog" method="post">

        <input type="text" name="title" value="" placeholder="Titles">
        {{ ($errors->has('title')) ? $errors->first('title') : '' }}<br>
        <textarea name="post" rows="8" cols="40" placeholder="Descriptions"></textarea>
            {{ ($errors->has('post')) ? $errors->first('post') : '' }}<br>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="submit" name="name" value="post">
    </form>