// app/Http/Controllers/SettingsController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function index()
    {
        return view('settings.index');
    }
    public function save(Request $request)
    {
        $registrationVerificationEnabled = $request->input('registration_verification', false);

        // Save the setting to the configuration file or database
        Config::set('app.registration_verification_enabled', $registrationVerificationEnabled);

        return redirect()->route('settings')->with('success', 'Settings saved successfully.');
    }
}
