<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Create Employee</title>
    </head>
    <body>
        <form action="{{ route('employees.store') }}" method="POST">
            @csrf
            <label>Employee Name</label>
            <input type="text" name="name" />

            <label>Employee Age</label>
            <input type="text" name="age" />

            <label>Employee Email</label>
            <input type="text" name="email" />

            <button type="submit">Create</button>
        </form>
    </body>
</html>
