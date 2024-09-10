<div class="container_Box_Card">
    <div class="box_Card">
        @foreach ($comics as $comic)
            <div class="card">
                <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                <h5>{{ $comic['title'] }}</h5>
            </div>
        @endforeach
    </div>
    <button> Load More</button>
</div>
