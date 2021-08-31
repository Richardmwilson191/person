<form action="{{ route('person.store') }}" method="POST">
    @csrf
    Name: <input type="text" name="name" id=""><br>
    Email: <input type="email" name="email" id=""><br>
    Age: <input type="date" name="dob" id=""><br>
    Address: <input type="text" name="address" id=""><br>
    Address Line 2: <input type="text" name="address2" id=""><br>
    City: <input type="text" name="city" id=""><br>
    Parish: <input type="text" name="parish" id=""><br>
    Country: <input type="text" name="country" id=""><br>
    <input type="submit" name="submit" value="submit">
</form>
<hr>

<table>
    <thead>
        <th>Name</th>
        <th>Email</th>
        <th>DOB</th>
        <th>Address</th>
        <th>Address 2</th>
        <th>City</th>
        <th>Parish</th>
        <th>Country</th>
        <th colspan="3">Actions</th>
    </thead>
    <tbody>
        @foreach ($persons as $person)
        <tr>
            <td>{{ $person->name }}</td>
            <td>{{ $person->email }}</td>
            <td>{{ $person->dob }}</td>
            <td>{{ $person->address }}</td>
            <td>{{ $person->address_line_1 }}</td>
            <td>{{ $person->city }}</td>
            <td>{{ $person->parish }}</td>
            <td>{{ $person->country }}</td>
            <td><a href="{{ route('person.edit', $person->id) }}">Edit</a></td>
            <td><form action="{{ route('person.delete', $person->id) }}" method="POST">
                    @csrf
                    <button type="submit">Delete</button>
                </form>
            </td>
            <td><a href="{{ route('person.show', $person->id) }}">View</a></td>
        </tr>
        @endforeach
    </tbody>
</table>    

<style>
    td {
        padding: 0 10px;
        border: 1px solid blue;
    }
</style>

