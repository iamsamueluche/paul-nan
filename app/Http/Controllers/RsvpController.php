<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;
use Throwable;

class RsvpController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'subject' => ['required', 'string', 'max:255'],
            'message' => ['required', 'string', 'max:5000'],
        ]);

        $timestamp = now()->format('Y-m-d H:i:s');
        $logLine = sprintf(
            "[%s] Name: %s | Email: %s | Subject: %s\nMessage: %s\n---\n",
            $timestamp,
            $data['name'],
            $data['email'],
            $data['subject'],
            $data['message']
        );

        $logPath = storage_path('logs/rsvp-submissions.log');
        File::append($logPath, $logLine);

        // Optional mail dispatch for environments with mail configured.
        $to = [
            'Paulkoloboi@yahoo.com',
            'nankamabu12@gmail.com',
            'samueluche8@gmail.com',
        ];

        $mailSubject = 'New RSVP: ' . $data['subject'];
        $mailBody = "Name: {$data['name']}\nEmail: {$data['email']}\nSubject: {$data['subject']}\n\nMessage:\n{$data['message']}\n";

        try {
            Mail::raw($mailBody, function ($message) use ($to, $mailSubject, $data): void {
                $message->to($to)
                    ->subject($mailSubject)
                    ->replyTo($data['email']);
            });
        } catch (Throwable $e) {
            // Keep success response if submission is logged, even when mail isn't configured.
        }

        return response('Your RSVP was sent successfully.', 200);
    }
}
