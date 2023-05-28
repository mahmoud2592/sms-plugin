namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserVerificationSetting extends Model
{
    protected $table = 'user_verification_settings';
    protected $fillable = ['enabled'];
    // Add any other necessary fields and relationships
}
