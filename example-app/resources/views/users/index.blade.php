<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>User Create</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body>
        <section class='container mt-5'>
            @if(session('success'))
                <div class='alert alert-success'>{{ session('success') }}</div>
            @endif
            <a href="{{ route('user.create') }}" class='btn btn-success float-end'>Create User</a>
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $key => $val)
                        <tr>
                            <th scope="row">{{++$key}}</th>
                            <td>{{$val->name}}</td>
                            <td>{{$val->email}}</td>
                            <td>
                                <a href="{{ route('user.edit',$val->id) }}" class='btn btn-secondary'>edit</a>
                                <a href="{{ route('user.show',$val->id) }}" class='btn btn-danger'>delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                </table>
        </section>  
    </body>
</html>