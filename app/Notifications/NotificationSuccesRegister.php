<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class NotificationSuccesRegister extends Notification implements ShouldQueue
{
    use Queueable;

    protected $client;

    // Injectez les données nécessaires (ici, le client inscrit)
    public function __construct($client)
    {
        $this->client = $client;
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
     * Envoyer la notification par e-mail
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('Inscription réussie!')
            ->markdown('emails.succesregister', [
                'client' => $this->client
            ]);
    }

    /**
     * Optionnel : Ajouter d'autres canaux (par exemple, la base de données)
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toDatabase($notifiable)
    {
        return [
            'client_id' => $this->client->id,
            'message' => 'Votre inscription a été réussie!',
        ];
    }
}
