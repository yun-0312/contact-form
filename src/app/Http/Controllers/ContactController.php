<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function index() {
        return view('index');
    }

    public function confirm(ContactRequest $request) {
        $content = $request->only(['name', 'email', 'tel', 'content']);
        return view('confirm', compact('content'));
    }

    public function store(ContactRequest $request) {
        $contact = $request->only(['name', 'email', 'tel', 'content']);
        Contact::create($contact);
        return view('thanks');
    }
}
