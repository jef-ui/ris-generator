<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certificate Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container {
            background-color: #fff;
            padding: 30px 40px;
            border-radius: 10px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 500px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #2c3e50;
        }

        input, textarea {
            width: 100%;
            padding: 12px 15px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 16px;
        }

        textarea {
            resize: vertical;
            height: 80px;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #2c3e50;
            color: white;
            font-size: 16px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #1a252f;
        }

        .link {
            display: block;
            text-align: center;
            margin-top: 15px;
            color: white;
            text-decoration: none;
            background-color: #3498db;
            padding: 12px;
            border-radius: 6px;
            text-transform: uppercase;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        .link:hover {
            background-color: #2980b9;
        }

        .button-group {
            display: flex;
            justify-content: space-between;
            gap: 10px;
        }

        .button-group button {
            width: 100%;
            flex: 1;
        }
    </style>
</head>
<body>
    <form action="{{ route('certificate.generate') }}" method="POST" target="_blank">
        @csrf
        <input type="text" name="name" placeholder="Full Name" required>
        <input type="text" name="office_agency" placeholder="Office / Agency" required>
        <input type="date" name="appearance_date" required>
        <textarea name="purpose" placeholder="Purpose of Visit" required></textarea>
        <input type="date" name="issued_date" required>
    
        <div class="button-group">
            <button type="submit" name="action" value="preview">Preview Certificate</button>
            <button type="submit" name="action" value="download">Download Certificate</button>
        </div>

        <a href="{{ route('certificate.history') }}" class="link">View History</a>
    </form>    
</body>
</html>
 