<section id="books">
        <div class="container">
            <ul class="list-group">
                @foreach($books as $book)
                    <li class="list-group-item">
                        {{ $book->title }}
                    </li>
                @endforeach
            </ul>
        </div>
    </section>