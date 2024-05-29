<?php

namespace App\Livewire\Rapat\Peserta;

use Livewire\Component;
use App\Models\Transaksi\Rapat as Model;
use Livewire\WithPagination;
use Livewire\WithoutUrlPagination;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Illuminate\Support\Facades\Auth;

class Index extends Component
{
    use WithPagination,WithoutUrlPagination;
    use LivewireAlert;
    protected $paginationTheme = 'bootstrap';
    protected $listeners = ['store' => 'render','delete', 'confirmed'];
    public $search = '';
    
    public $perpage = 10;
    public $role_list;
    public $nama_rapat;
    public $firstId;
    
    public $sortColoumName = "created_at";
    public $sortDirection = "desc";
    protected $queryString = ['search'];

    public function sortBy($coloumName)
    {
        if($this->sortColoumName === $coloumName){
            $this->sortDirection = $this->swapSortDirection();
        }else{
            $this->sortDirection ='asc';
        }
        $this->sortColoumName = $coloumName;
    }
    
    public function swapSortDirection()
    {
        return $this->sortDirection === 'asc' ? 'desc' : 'asc';
    }
    
    
    public function render()
    {
        $query = Model::query();
        $query->when($this->nama_rapat != "", function ($q) {
            return $q->whereRaw('LOWER(nama_rapat) like ?', ['%'.strtolower($this->nama_rapat).'%']);
        });
        
        if(Auth::user()->role_id == 2){
            $rows = $query->where('created_id',Auth::user()->id)->where('is_delete','!=', 1)
            ->orderBy($this->sortColoumName,$this->sortDirection)
            ->paginate($this->perpage);
        }else{
            $rows = $query->where('is_delete','!=', 1)->orderBy($this->sortColoumName,$this->sortDirection)
            ->paginate($this->perpage);
        }

        if ($rows[0]!=null) {
            $this->firstId = $rows[0]->id;
        }
        
        return view('livewire.rapat.peserta.index', [
          'model'=> $rows
        ]);

    }
}
