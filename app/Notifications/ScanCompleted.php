<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class ScanCompleted extends Notification
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
        return (new MailMessage)
            ->subject('Je sessie is afgerond!')
            ->line('Je hebt zojuist een je sessie' . $this->scan->title . ' afgerond.')
            ->line('We zijn ontzettend benieuwd naar je ervaringen met de sessie. Zou je ons door middel van 4 vragen willen laten weten wat je van de Digitale Gesprekshulp vond?')
            ->action('Geef feedback', url('/sessie/' . $this->scan->id . '/feedback'))
            ->line('Alvast bedankt!');
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
