namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SMSNotificationTemplate extends Model
{
    protected $table = 'sms_notification_templates';
    protected $fillable = ['event_name', 'template'];
    // Add any other necessary fields and relationships
}
