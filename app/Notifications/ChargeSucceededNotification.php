<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ChargeSucceededNotification extends Notification
{
    use Queueable;
    public $chargeAmount;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($chargeAmount)
    {
        $this->chargeAmount = $chargeAmount;
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
        ->subject('Charge Succeeded')
        ->greeting('Hello!')
        ->line('Your charge was successful.')
        ->line('Charge Amount: $' . $this->chargeAmount)
        ->line('Thank you for your payment!')
        ->salutation('Regards');
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
