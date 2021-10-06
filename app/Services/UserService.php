<?php
namespace App\Services;
use App\Models\User;
use App\Models\Company;
use App\Models\Address;
use Illuminate\Support\Facades\Http;
class UserService
{
    public static function userApi()
    {
        $users = Http::get(config('app.json_api_url') . '/users')->collect();
            foreach($users as $user)
            {
                $u = User::updateOrCreate(
                    ['id' => $user['id']],
                    [
                        'name' => $user['name'],
                        'username' => $user['username'],
                        'email' => $user['email'],
                        'website' => $user['website'],
                        'phone' => $user['phone'],
                    ]
                );
                $u->address()->updateOrCreate(
                    ['user_id' => $user['id']],
                    [
                        'street' => $user['address']['street'],
                        'suite' => $user['address']['suite'],
                        'city' => $user['address']['city'],
                        'zipcode' => $user['address']['zipcode'],
                        'geo_lat' => $user['address']['geo']['lat'],
                        'geo_lng' => $user['address']['geo']['lng']
                    ]
                );
                $u->company()->updateOrCreate(
                    ['user_id' => $user['id']],
                    [
                        'name' => $user['company']['name'],
                        'catchPhrase' => $user['company']['catchPhrase'],
                        'bs' => $user['company']['bs'],
                    ]
                    );                      
            }
    }
}