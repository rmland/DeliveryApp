<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\ContactoRequest;
use App\Mail\SendMensajeContactoMail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;
class ContactoController extends Controller
{
    public function index(Request $request): View
    {
        return view('contacto.index');
    }
    public function store(ContactoRequest $request): RedirectResponse
    {
        $contacto =  Contacto::create($request->validated());

        Mail::to($request->get('correo'))->send(new SendMensajeContactoMail($contacto));
        return Redirect::route('contacto.index')
            ->with('success', 'Tu mensaje ha sido enviado correctamente.');
    }
}
