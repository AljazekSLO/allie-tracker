<?php

namespace App\Livewire\Visits;

use Livewire\Component;
use App\Models\Visit;
use Livewire\WithPagination;
use Livewire\WithoutUrlPagination;

class RecentlyVisited extends Component
{

    use WithPagination, WithoutUrlPagination;

    public $showAll = false;

    protected $listeners = ['refreshComponent' => '$refresh'];


    public function render()
    {
        $userCountry= auth()->user()->country()->first();

        if($userCountry){
            $query = auth()->user()
            ->visits()
            ->where('country_id', '!=', $userCountry->id)
            ->orderBy('end_date', 'desc');
            
            $visits = $this->showAll ? $query->get() : $query->simplePaginate(3);
        }
        

        return view('livewire.visits.recently-visited', [
            'visits' => $visits ?? null
        ]);
        
    }

    public function viewAll(){
        $this->showAll = !$this->showAll;

    }
}
