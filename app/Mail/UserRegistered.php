<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\User;

class UserRegistered extends Mailable

{
use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    /**
     * Build the message.
     *
     * @return $this
     */
public $user;
 public function __construct(User $user)
 {
     $this->user = $user;
 }

    public function build()
    {
      return $this->to($this->user->email)
            ->view('auth.emails.confirm');

    }

}
