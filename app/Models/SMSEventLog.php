namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SMSEventLog extends Model
{
    protected $table = 'sms_event_logs';
    protected $fillable = ['event_name', 'event_data', 'timestamp'];
    // Add any other necessary fields and relationships
}
