@if ($contacts->count())
@foreach ($contacts as $contact)

    <div>
    <h3>Cellphone</h3>
    {{ $contact->cell_number }}
    </div>
    <div>
    <h3>Phone</h3>
    {{ $contact->phone_number }}
    </div>
    <div>
    <h3>Address</h3>
        {{ $contact->address }}
    </div>
    <div>
    <h3>Email</h3>
    {{ $contact->email_address }}
    </div>
    <div>
    <h3>Bank Name</h3>
    {{ $contact->account_name }}
    </div>
    <div>
    <h3>Bank Number</h3>
        {{ $contact->account_number }}
    </div>
  
@endforeach
@else
    There are no information on Contact Us.
@endif