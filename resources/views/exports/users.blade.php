<table>
    <thead>
    <tr>
        <th>ID Number</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Status</th>
        <th>Class</th>
        <th>Address</th>
    </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
        <tr>
            <td>{{ $user->tc }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->surname }}</td>
            <td>{{ $user->info->phone }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->info->status == 1 ? 'Active' : 'Inactive' }}</td>
            <td>{{ $user->info->group->title }}</td>
            <td>{{ $user->info->address }}</td>

        </tr>
    @endforeach
    </tbody>
</table>
