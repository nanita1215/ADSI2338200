<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show All Users</title>
    <style>
        body {
            font-family: Arial;
            color: #3a3a3a;
        }
        h1 {
            text-align: center;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }
        table th,
        table td {
            border: 1px solid #3a3a3a;
            padding: 10px;

        }
        table tr:nth-child(even) {
            background-color: #dadada;
            
        }
    </style>
</head>
<body>
    <main>
        <h1>Show All Users</h1>
        <hr>
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>FullName</th>
                    <th>Email</th>
                    <th>phone</th>
                    <th>Birthdate</th>
                    <th>Gender</th>
                    <th>Address</th>
                    <th>Role</th>
                </tr>
            </thead>
            <tbody>
                 @foreach ($users as $user)
                 <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->fullname }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->phone }}</td>
                    <td>{{ $user->Birthdate }}</td>
                    <td>{{ $user->Gender }}</td>
                    <td>{{ $user->Address }}</td>
                    <td>{{ $user->Role }}</td>
                 </tr>
                 @endforeach
            </tbody>
        </table>

    </main>

</body>
</html>