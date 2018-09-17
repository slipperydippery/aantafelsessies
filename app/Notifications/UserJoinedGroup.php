<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class UserJoinedGroup extends Notification
{
    protected $group;
    protected $scans;

    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($group, $scan)
    {
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
            ->subject($this->scan->user->name . ' doet mee aan je groepssessie!')
            ->line($this->scan->user->name . ' heeft zijn/haar deelname bevestigd aan jouw groepssessie "' . $this->group->title . '". ')
            ->action('Beheer jouw groepssessie', url('/scan/' . $this->group->owner->id))
            ->line('Veel succes met de voortgang van de sessie!');
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
