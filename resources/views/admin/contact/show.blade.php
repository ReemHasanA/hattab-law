@extends('layouts.dashboard') 

@section('style')
<link rel="stylesheet" href="{{asset('home/css/ourteam.css')}}">
@endsection

@section('body')
<div class="form-container form-container-bottom" style="margin-top: 30px;">
    <h1>Message</h1>
        <table>
            <tr>
                <th>Name </th>
                <td>{{ $contact->name }}</td>
            </tr>
            <tr>
                <th>Phone</th>
                <td>
                    <a href="tel:{{ $contact->phone_number }}">{{ $contact->phone_number }}</a>
                </td>
            </tr>
            <tr>
                <th>Email</th>
                <td>
                    <a href="mailto:{{ $contact->email }}" class="full-text">{{ $contact->email }}</a>
                </td>   
            </tr>
            <tr>
                <th>Message</th>
                <td>{{ $contact->message }}</td>
            </tr>

        </table>
</div>
@endsection
