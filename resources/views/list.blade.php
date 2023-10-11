<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Laravel User List</title>
</head>

<body class="outer-screen">
    <div>
        <h2>Usuários</h2>
        <table class="table">
            <tr class="headers">
                <td>ID:</td>
                <td>Name:</td>
                <td>Age:</td>
                <td>Email:</td>
                <td>Actions</td>
            </tr>
            <tbody>
                @foreach($users as $user)
                    <tr class="data">
                        <td>{{ $user['id'] }}</td>
                        <td>{{ $user['name'] }}</td>
                        <td>{{ $user['age'] }}</td>
                        <td>{{ $user['email'] }}</td>
                        <td>
                            <div id="dropdown" class="dropdown-content">
                                <a href="#edit">Edit</a>
                                <a href="#delete">Delete</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <span class="opt">
            {{ $users->links() }}
        </span>
    </div>
</body>

<style>
    .w-5{
        display: none;
    }

    h2{
        color:white;
    }

    .outer-screen{
        display: flex;
        justify-content: center;
        justify-items: center;
        font-family: Calibri, serif;
        background-color: #1a202c;
    }

    .table td, .table th {
        border: 1px solid #ddd;
        padding: 8px;
    }

    .headers {
        padding-top: 12px;
        padding-bottom: 12px;
        background-color: #ff1517;
        color: white;
        text-align: center;
    }

    .data{
        background-color: #f2f2f2;
        transition: 0.2s ease-in;
    }

    .data:hover{
        background-color: rgb(128, 128, 128);
    }

    .opt{
        color: white;
        margin-top: 2rem;
    }

    .dropdown-content a {
        padding: 5px;
        color: black;
        text-decoration: none;
        transition: 0.2s ease-in;
    }

    .dropdown-content a:hover {
        background-color: #ff1517;
    }
</style>

</html>
