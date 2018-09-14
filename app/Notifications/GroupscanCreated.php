<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class GroupscanCreated extends Notification
{
    use Queueable;

    protected $group;
    protected $scan;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($group, $scan)
    {
        //
        $this->group = $group;
        $this->scan = $scan;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('Je doet mee aan groepssessie: "' . $this->group->title . '"!')
            ->line('Je hebt je deelname bevestigd aan groepssessie: ' . $this->group->title . '.')
            ->action('Naar de sessie', route('scan.show', $scan))
            ->line('Veel succes!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
