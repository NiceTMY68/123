<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Employee Detail</title>
    </head>
    <body>
        <div class="container">
            <table border="1">
                <thead>
                    <tr>
                        <th>Employee ID</th>
                        <th>Employee Name</th>
                        <th>Employee Age</th>
                        <th>Employee Email</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $employee->id }}</td>
                        <td>{{ $employee->name }}</td>
                        <td>{{ $employee->age }}</td>
                        <td>{{ $employee->email }}</td>
                    </tr>
                </tbody>
            </table>

            <button>
                <a href="{{ route('employees.index') }}">Back</a>
            </button>

            <button>
                <a
                    href="{{ route('employees.edit', ['employee' => $employee->id]) }}"
                    >Edit</a
                >
            </button>

            <form
                action="{{ route('employees.destroy', ['employee' => $employee->id])
            }}"
                method="POST"
            >
                @csrf @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </div>
    </body>
</html>
