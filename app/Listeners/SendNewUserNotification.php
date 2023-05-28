// app/Listeners/SendNewUserNotification.php

namespace App\Listeners;

use App\Events\NewUserRegistered;

class SendNewUserNotification
{
    public function handle(NewUserRegistered $event)
    {
        // Logic to prepare and send the SMS notification for a new user registration
    }
}
