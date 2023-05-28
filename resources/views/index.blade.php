<!-- resources/views/settings/index.blade.php -->

<form action="{{ route('settings.save') }}" method="POST">
    @csrf

    <div>
        <label>
            <input type="checkbox" name="registration_verification" value="1"
                {{ $registrationVerificationEnabled ? 'checked' : '' }}>
            Enable new customer registration verification
        </label>
    </div>

    <button type="submit">Save Settings</button>
</form>
