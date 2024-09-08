@php use App\Models\Sentence; @endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>quote list</title>
</head>
    <body>
        <h1>Fine sentences I read and approve</h1>
        @php /** @var Sentence $sentence */ @endphp
        @foreach($sentences as $sentence)
            <p> {{$sentence->value}}, {{$sentence->author}}</p>
        @endforeach

    </body>
</html>
