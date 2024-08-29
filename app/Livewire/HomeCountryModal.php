<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use MakiDizajnerica\GeoLocation\Facades\GeoLocation;
use App\Models\Country;
use App\Helpers\DistanceHelper;
class HomeCountryModal extends Component
{

    public $userGeolocation;
    public $countries;
    public $selectedCountry;
    public $show = false;

public function mount()
    {

        $user = auth()->user();
        $ip = request()->ip();
        $ip = "188.230.144.148";
        $geolocation = GeoLocation::lookup($ip);

        $this->userGeolocation = [
            'country' => $geolocation->get('country'),
            'iso' => $geolocation->get('countryCode')
        ];

        $this->countries = Country::get();
        $this->selectedCountry = $this->userGeolocation['iso'];
        $country = $user->country()->first();


        if(empty($country)) {
          $this->show = true;
        }



    }

    public function setCountry(): void
    {

        $user = auth()->user();

        $country = Country::where('iso2', $this->selectedCountry)->first();

        if($country){
            $user->update(['country_id' => $country->id]);
            $this->show = false;

        }
    }

    public function render()
    {
        return view('livewire.home-country-modal');
    }
}
