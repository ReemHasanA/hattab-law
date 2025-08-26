<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $contacts = Contact::query()->paginate(10);

            return view("admin.contact.index", [
                "contacts" => $contacts,
            ]);
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ContactRequest $request)
    {
        try {
            Contact::create($request->validated());

            return redirect()->route("contact.home")->with("success",__("Thanks for your message"));
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        try {
            $contact = Contact::findOrFail($id);

            if (is_null($contact->read_at)) {
                $contact->update(["read_at" => now()]);
            }

            return view("admin.contact.show", [
                "contact"=> $contact,
            ]);
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
