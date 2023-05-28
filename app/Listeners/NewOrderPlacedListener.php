namespace App\Listeners;

use App\Events\NewOrderPlaced;

class NewOrderPlacedListener
{
    public function handle(NewOrderPlaced $event)
    {
        // Logic to prepare and send SMS notification for new order placement
    }
}
