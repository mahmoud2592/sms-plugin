namespace App\Listeners;

use App\Events\ProductPriceUpdated;

class ProductPriceUpdatedListener
{
    public function handle(ProductPriceUpdated $event)
    {
        // Logic to prepare and send SMS notification for product price update
    }
}
