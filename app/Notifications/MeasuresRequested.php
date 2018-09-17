<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class MeasuresRequested extends Notification
{
    protected $scan;

    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($scan)
    {
        //
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
        $data = '';
        foreach ($this->scan->group->owner->measures as $measure) {
            if ($measure->active) {
                $data .= '<h2>' . $measure->question->title . '</h2>' . '<p>' . $measure->measure . '</p>';
                $data .= '<strong>trekker</strong>: ' . $measure->user->user->name;
                $data .= '<br><hr>';
            }
        }
        return (new MailMessage)
            ->subject('Actiepunten van sessie "' . $this->scan->title . '".')
                    ->line('Je hebt de actiepunten van de sessie "' . $this->scan->title . '" aangevraagd. Je kan ze ook bekijken door het volgen van onderstaande link')
                    ->action('Bekijk de actiepunten online', url('/sessie/' . $this->scan->id . '/actiepunten'))
                    ->line('<h1>Actiepunten:</h1><hr>')
                    ->line($data)
                    ->line('<p> bla-la </p>');
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
