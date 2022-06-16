namespace App\Providers;
class MD5HashProvider extends \Illuminate\Hashing\HashServiceProvider
{
    public function boot()
    {
    \App::bind('hash', function () {
        return new \App\Classes\MD5Hasher;
    });
}}