<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assets List</title>
    <style>
        /* Add any custom styles for the PDF export */
        body {
            font-family: Arial, sans-serif;
            font-size: 14px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Asset List</h2>
    <table>
        <thead>
            <tr>
                @foreach ($headings as $heading)
                    <th>{{ $heading }}</th>
                @endforeach
            </tr>
        </thead>
        <tbody>
    @foreach ($assets as $asset)
        <tr>
            <td>{{ $asset->id }}</td>
            <td>{{ optional($asset->assetType)->name }}</td>
            <td>{{ $asset->description }}</td>
            <td>{{ $asset->purchase_date }}</td>
            <td>{{ $asset->purchase_price }}</td>
            <td>{{ $asset->condition }}</td>
            <td>{{ $asset->location }}</td>
            <td>{{ $asset->used_by }}</td>
            <td>{{ $asset->status }}</td>
        </tr>
    @endforeach
</tbody>
</body>
</html>
