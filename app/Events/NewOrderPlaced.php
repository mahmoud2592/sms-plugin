// app/Events/NewOrderPlaced.php

namespace App\Events;

use App\Order;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class NewOrderPlaced
{
    use Dispatchable, SerializesModels;

    public $order;

    public function __construct(Order $order)
    {
        $this->order = $order;
    }

    event(new NewOrderPlaced($order));

}
