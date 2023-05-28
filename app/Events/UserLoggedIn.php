
namespace App\Events;

use App\Order;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class UserLoggedIn
{
    use Dispatchable, SerializesModels;

    event(new UserLoggedIn($user));

}
