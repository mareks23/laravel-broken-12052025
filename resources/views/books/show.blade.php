<h2>{{ $book->title }}</h2>
<h3>{{ $book->author }}</h3>
<p>{{ $book->released_at }}</p>
<a href="/books">All books</a>

<form action="/books/{{$book->id}}" method="post">
                    @csrf
                    @method('delete')
                    <input type="submit" value="dzēst">
                </form>