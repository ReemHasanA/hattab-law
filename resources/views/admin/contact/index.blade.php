@extends('layouts.dashboard') 

@section('body')
    <h1>Message List</h1>

    @if($contacts->isEmpty())
        <p class="text-center text-muted">No Message available.</p>
    @else
        <table class="table table-dark table-bordered">
            <thead>
                <tr>
                    <th>Name </th>
                    <th>Phone Number</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contacts as $contact)
                    <tr>
                        <td>
                            <span class="short-text">{{ Str::limit($contact->name, 50, '...') }}</span>
                            <a href="{{ route('contact.show', $contact->id) }}" class="full-text">{{ $contact->name }}</a>
                        </td>
                        <td>
                            <a href="tel:{{ $contact->phone_number }}">{{ $contact->phone_number }}</a>
                        </td> 
                        <td>
                            <a href="mailto:{{ $contact->email }}" class="short-text">{{ Str::limit($contact->email, 50, '...') }}</a>
                            <a href="mailto:{{ $contact->email }}" class="full-text">{{ $contact->email }}</a>
                        </td>   
                        <td>
                            <span class="short-text">{{ Str::limit($contact->message, 50, '...') }}</span>
                            <span class="full-text">{{ $contact->message }}</span>
                        </td>
                        <td class="action-buttons" style="height: 84px;">
                            <a href="{{ route('contact.show', $contact->id) }}" class="btn btn-info">View</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    
    <div class="d-flex justify-content-center mt-3">
        {{ $contacts->links() }}
    </div>
@endsection

   
