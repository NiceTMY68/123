<div class="container">
    <button>
        <a href="{{ route('employees.create') }}">Create New Employee</a>
    </button>
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
            @foreach ($employees as $employee)
            <tr>
                <td>{{ $employee->id }}</td>
                <td>{{ $employee->name }}</td>
                <td>{{ $employee->age }}</td>
                <td>{{ $employee->email }}</td>
                <td>
                    <button>
                        <a
                            href="{{ route('employees.show', ['employee' =>$employee->id] )}}"
                            >Show</a
                        >
                    </button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
