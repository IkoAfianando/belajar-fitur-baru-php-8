<?php

class Address {
    public ?string $country;
}

class User {
    public ?Address $address;
}

// manual null checking
function getCountry(?User $user) : ?string
{
    if($user != null && $user->address != null){
        return $user->address->country;
    }
    return null;
}

// automation null checking
function getCountryNew(?user $user) : ?string
{
    return $user?->address?->country;
}

echo getCountry(null) . PHP_EOL;
