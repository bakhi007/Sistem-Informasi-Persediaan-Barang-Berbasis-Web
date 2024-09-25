<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unsplash Photos</title>
</head>
<body>
    <h1>Unsplash Photos</h1>
    <!-- <form action="{{ route('photos.search') }}" method="GET">
        <input type="text" name="query" placeholder="Search for photos">
        <button type="submit">Search</button>
    </form>

    <div>
        @foreach ($photos as $photo)
            <img src="{{ $photo['urls']['small'] }}" alt="{{ $photo['alt_description'] }}">
        @endforeach
    </div> -->

    <div>
        @if ($photo)
            <img src="{{ $photo['urls']['regular'] }}" alt="{{ $photo['alt_description'] ?? 'Photo' }}" style="width: 100%; max-width: 600px;">
        @else
            <p>No photo available.</p>
        @endif
    </div>
</body>
</html>
