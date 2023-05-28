namespace App\Listeners;

use App\Events\UserLoggedIn;

class UserLoggedInListener
{
    public function handle(UserLoggedIn $event)
    {
        // Logic to prepare and send SMS notification for user login
    }
}
