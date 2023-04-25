<!DOCTYPE html> 
<html>
<head>
    <title>{{ $details['title'] }}</title>
</head>
<body>
    <h1>{{ $details['title'] }}</h1>
    <p>{{ $details['body'] }}</p>
    @if($details['attach'] !== null )
        <p><a href={{ $details['attach'] }}>Download file</a></p>    
    @endif
</body>
</html>
