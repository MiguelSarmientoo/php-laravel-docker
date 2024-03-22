<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Styles -->
    <style>
        table {
            font-family: Arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }
        th {
            background-color: #f2f2f2;
            border: 1px solid #dddddd;
            padding: 8px;
            text-align: left;
        }
        td {
            border: 1px solid #dddddd;
            padding: 8px;
            text-align: left;
        }
        tr:nth-child(even) {
            background-color: #dddddd;
        }
        .crud-actions {
            display: flex;
            justify-content: center;
            gap: 10px;
        }
        .btn {
            padding: 8px 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
            font-size: 14px;
        }
        .btn-primary {
            background-color: #007bff;
            color: white;
        }
        .btn-danger {
            background-color: #dc3545;
            color: white;
        }
    </style>
</head>
<body>
    <div class="content">
        <h2 style="text-align: center;">DataCrud List</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Campo 1</th>
                    <th>Campo 2</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Dato 1</td>
                    <td>Dato 2</td>
                    <td class="crud-actions">
                        <button class="btn btn-primary">View</button>
                        <button class="btn btn-warning">Edit</button>
                        <button class="btn btn-danger">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Dato 3</td>
                    <td>Dato 4</td>
                    <td class="crud-actions">
                        <button class="btn btn-primary">View</button>
                        <button class="btn btn-warning">Edit</button>
                        <button class="btn btn-danger">Delete</button>
                    </td>
                </tr>
                <!-- Agrega más filas si es necesario -->
            </tbody>
        </table>
        <div style="text-align: center; margin-top: 20px;">
            <button class="btn btn-success">Create DataCrud</button>
        </div>
    </div>
</body>
</html>
