<h1>Contact</h1>
@if ($contacts->count())
    <table class="table table-striped table-bordered table-responsive">
        <thead>
            <tr>
                <th>Cell Phone</th>
                <th>Landline</th>
                <th>Address</th>
                <th>E-mail</th>
                <th>Bank Name</th>
                <th>Bank Number</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($contacts as $contact)
                <tr>
                    <td>
                        {{ $contact->cell_number }}
                    </td>
                    <td>
                        {{ $contact->phone_number }}
                    </td>
                    <td>
                        {{ $contact->address }}
                    </td>
                    <td>
                        {{ $contact->email_address }}
                    </td>
                    <td>
                        {{ $contact->account_name }}
                    </td>
                    <td>
                        {{ $contact->account_number }}
                    </td>
                    <td><a class="btn btn-info" href="{{ route('admin.contact.edit',array($contact->id)) }}">Edit</a></td>
                </tr>
            @endforeach
        </tbody>
      
    </table>
@else
    There are no Contact Us info
@endif

