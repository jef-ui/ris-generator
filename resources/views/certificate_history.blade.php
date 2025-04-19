<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>Name</th><th>Agency</th><th>Purpose</th><th>Issued Date</th><th>PDF</th>
        </tr>
        @foreach ($certificates as $cert)
            <tr>
                <td>{{ $cert->name }}</td>
                <td>{{ $cert->office_agency }}</td>
                <td>{{ $cert->purpose }}</td>
                <td>{{ $cert->issued_date }}</td>
                <td>
                    <form action="{{ route('certificate.generate') }}" method="POST" target="_blank">
                        @csrf
                        @foreach (['name', 'office_agency', 'appearance_date', 'purpose', 'issued_date'] as $field)
                            <input type="hidden" name="{{ $field }}" value="{{ $cert->$field }}">
                        @endforeach
                        <button type="submit">View PDF</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>