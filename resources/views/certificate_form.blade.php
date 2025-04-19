<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('certificate.preview') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Full Name" required><br>
        <input type="text" name="office_agency" placeholder="Office / Agency" required><br>
        <input type="date" name="appearance_date" required><br>
        <textarea name="purpose" placeholder="Purpose" required></textarea><br>
        <input type="date" name="issued_date" required><br>
        <button type="submit">Preview Certificate</button>
    </form>
    <a href="{{ route('certificate.history') }}">View History</a>    
</body>
</html>