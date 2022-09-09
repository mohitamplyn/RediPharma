<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Contact;

use Illuminate\Support\Facades\DB;

class ContactController extends Controller {
    public function index() {
        $contact = Contact:: latest() -> get();
        return view('admin.contact.index', ['contacts' => $contact]);
    }
}

