<?php

namespace App\Livewire\Visits;

use Livewire\Component;
use App\Models\Visit;
use Livewire\WithPagination;
use Livewire\WithoutUrlPagination;

class RecentlyVisited extends Component
{

    use WithPagination, WithoutUrlPagination;


    public function render()
    {
        // Get the current user's country ID
        $userCountryId = auth()->user()->country()->first()->id;

        // Retrieve visits to countries other than the user's own, ordered by end date
        $visits = auth()->user()
            ->visits()
            ->where('country_id', '!=', $userCountryId)
            ->orderBy('end_date', 'desc')
            ->simplePaginate(3);

        return view('livewire.visits.recently-visited', [
            'visits' => $visits
        ]);
    }
}
