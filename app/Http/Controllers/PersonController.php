<?php

namespace App\Http\Controllers;

use App\Models\AlternateAddress;
use App\Models\Person;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PersonController extends Controller
{
    public function index()
    {
        // $persons = DB::select('select * from person');
        $persons = DB::table('person')
            ->join('alternate_address', 'person.id', '=', 'alternate_address.user_id')
            ->select()
            ->get();
        return view('person.index', ['persons' => $persons]);
    }

    public function show($id)
    {
        $person = Person::join('alternate_address', 'person.id', '=', 'alternate_address.user_id')->where('id', $id)->first();
        return view('person.show', ['person' => $person]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'email|unique:person,email'
        ]);
        DB::insert('insert into person (name, email, dob, address) values (?, ?, ?, ?)', [$request->name, $request->email, $request->dob, $request->address]);

        // Get user id
        $user_id = DB::table('person')->where('email', $request->email)->get('id');
        $user_id = $user_id[0]->id;
        // dd($user_id[0]->id);

        DB::insert('insert into alternate_address (user_id, address_line_1, city, parish, country) values (?, ?, ?, ?, ?)', [$user_id, $request->address2, $request->city, $request->parish, $request->country]);
        return redirect()->back();
    }

    public function edit($id)
    {
        $person = Person::join('alternate_address', 'person.id', '=', 'alternate_address.user_id')->where('id', $id)->first();
        return view('person.edit', ['person' => $person]);
    }

    public function update(Request $request, $id)
    {
        // Prepare person table data
        $person = Person::find($id);
        $person->name = $request->name;
        $person->email = $request->email;
        $person->dob = $request->dob;
        $person->address = $request->address;
        $person->update();

        // Prepare alternate address table data
        $alt_address = AlternateAddress::where('user_id', $id)->first();
        $alt_address->address_line_1 = $request->address2;
        $alt_address->city = $request->city;
        $alt_address->parish = $request->parish;
        $alt_address->country = $request->country;

        $alt_address->update();
        return redirect()->back();
    }

    public function delete($id)
    {
        if ($alt_address = AlternateAddress::find($id)) {
            $alt_address->delete();
        }

        if ($person = Person::find($id)) {
            $person->delete();
        }

        return redirect()->back();
    }
}
