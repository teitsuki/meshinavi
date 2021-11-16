<div class="row">
    <div>
        <img src="{{ Storage::disk('admin')->url($restaurant->img_path) }}" class="square-img">
    </div>
    <div class="ml-3">
        <div class="mt-3 mb-3">
            <h3>
                <a href="{{ route('restaurants.show', $restaurant->id) }}">
                    {{ $restaurant->name }}
                </a>
            </h3>
        </div>
        <div>
            <div>{{ $restaurant->pr_short }}</div>
            <div>{{ $restaurant->opentime }}</div>
        </div>
    </div>
</div>