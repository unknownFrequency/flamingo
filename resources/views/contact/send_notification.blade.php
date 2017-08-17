<html>
<head></head>
<body style="background: black; color: white">
    <h1>En kunde har skrevet</h1>
    <p>Kunde: {{ $user }}</p>
    <p>Subject: {{ $title }}</p>
    <p>Message: {{ $body }}</p>
    <p><a href="{{ $url }}">{{ $url }}</a></p>
</body>
</html>