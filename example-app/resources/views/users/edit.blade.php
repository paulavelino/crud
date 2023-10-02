<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Edit User</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body>
        <section class='container mt-5'>
            @if(session('success'))
                <div class='alert alert-success'>{{ session('success') }}</div>
            @endif
            <div class='card'>
                <div class='card-header'>
                    Edit User
                </div>
                <div class='card-body'>
                    <form action="{{ route('user.update',$data->id) }}" method='post'>
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" name='name' value='{{ $data->name }}' class='form-control' >
                            @error('name') <p class='text text-danger'> {{  $message }}</p> @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="text" name='email' value='{{ $data->email }}' class='form-control' >
                            @error('email') <p class='text text-danger'> {{  $message }}</p> @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" name='password' class='form-control' >
                            @error('password') <p class='text text-danger'> {{  $message }}</p> @enderror
                        </div>
                        <br>
                        <div>
                            <button type='submit' class='btn btn-primary'>Update</button>
                            <a href="{{ route('user.index') }}" class='btn btn-secondary'>Back</a>
                        </div>
                    </form>
                </div>
                <div class='card-footoer'></div>
            </div>
        </section>  
    </body>
</html>