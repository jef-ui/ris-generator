<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    @page {
        margin-top: 10px;
    }
</style>

</head>
<body>
    <div style="padding: 40px; font-family: Arial, sans-serif;">
        <!-- Logo at the top -->
<div style="text-align: center; margin: 0; padding: 0;">
    <img src="{{ public_path('storage/logo.png') }}" alt="Logo" style="width: 800px; height: auto; margin-top: 0; padding-top: 0;">
</div>

        
    
        <!-- Title -->
        <h3 style="text-align:center;">CERTIFICATE OF APPEARANCE</h3>
    
        <p>
            This is to certify that <strong>{{ $name }}</strong> of 
            <strong>{{ $office_agency }}</strong> appeared in Office of Civil Defense 
            MIMAROPA Regional Office on <strong>{{ \Carbon\Carbon::parse($appearance_date)->format('F d, Y') }}</strong> 
            to <strong>{{ $purpose }}</strong>.
        </p>
        <p>
            This certification is issued to the above-mentioned personnel for whatever legal purpose it may serve.
        </p>
        <p>
            Issued on <strong>{{ \Carbon\Carbon::parse($issued_date)->format('F d, Y') }}</strong> at Office of Civil Defense Regional Office, Kumintang Ilaya, Batangas City.
        </p>
        <br><br><br>
        <p style="text-align:right;">
            <strong>MARC REMBRANDT P. VICTORE</strong><br>
            Chairperson, RDRRMC MIMAROPA<br>
            Officer-in-Charge, OCD MIMAROPA
        </p>
    </div>
    
    
</body>
</html>