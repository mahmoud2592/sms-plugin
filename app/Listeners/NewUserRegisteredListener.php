namespace App\Listeners;

use App\Events\NewUserRegistered;

class NewUserRegisteredListener
{
    public function handle(NewUserRegistered $event)
    {
        // Logic to prepare and send SMS notification for new user registration
    }
}
