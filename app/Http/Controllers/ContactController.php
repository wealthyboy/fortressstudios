<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Http\Requests\StoreContactRequest;
use App\Http\Requests\UpdateContactRequest;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreContactRequest $request)
    {
        $input = $request->validated();
    
        // Retrieve user IP address
        $userIp = $request->ip();
    
        try {
            // Create a new contact entry
            $contact = Contact::create([
                'name' => $input['name'],
                'email' => $input['email'],
                'phone' => $input['phone'],
                'user_ip' => $userIp,
                'message' => $input['message'],
            ]);
    
            // Handle file uploads if necessary (e.g., attachments)
            if ($request->hasFile('attachment')) {
                // Add media to the 'attachments' collection (assuming Media Library package is used)
                $contact->addMediaFromRequest('attachment')->toMediaCollection('attachments');
            }
    
            // If creation is successful, return a success response
            return response()->json([
                'success' => true,
                'message' => 'Your message has been sent successfully.'
            ], 200);
        } catch (\Exception $exception) {
            // Log the error
            Log::error('Error storing contact message: ' . $exception->getMessage());
    
            // Return an error response
            return response()->json([
                'success' => false,
                'message' => 'There was an error sending your message. Please try again later.'
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateContactRequest $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
