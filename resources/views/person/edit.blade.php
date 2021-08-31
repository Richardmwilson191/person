<form action="{{ route('person.update', $person->id) }}" method="POST">
    @csrf
    Name: <input type="text" name="name" id="" value="{{ $person->name }}"><br>
    Email: <input type="email" name="email" id="" value="{{ $person->email }}"><br>
    Age: <input type="date" name="dob" id="" value="{{ $person->dob }}"><br>
    Address: <input type="text" name="address" id="" value="{{ $person->address }}"><br>
    Address Line 2: <input type="text" name="address2" id="" value="{{ $person->address_line_1 }}"><br>
    City: <input type="text" name="city" id="" value="{{ $person->city }}"><br>
    Parish: <input type="text" name="parish" id="" value="{{ $person->parish }}"><br>
    Country: <input type="text" name="country" id="" value="{{ $person->country }}"><br>
    <input type="submit" name="submit" value="Update">
</form>