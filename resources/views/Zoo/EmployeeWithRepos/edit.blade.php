<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Create Employee</title>
    </head>
    <body>
        <form
            action="{{ route('employees.update', ['employee' => $employee->id]) }}"
            method="POST"
        >
            @csrf @method('PUT')

            <label>Employee Name</label>
            <input type="text" name="employee" value="{{ $employee->id }}" />

            <label>Employee Name</label>
            <input type="text" name="name" value="{{ $employee->name }}" />

            <label>Employee Age</label>
            <input type="text" name="age" value="{{ $employee->age }}" />

            <label>Employee Email</label>
            <input type="text" name="email" value="{{ $employee->email }}" />

            <button type="submit">Edit Employee</button>
        </form>
    </body>
</html>
