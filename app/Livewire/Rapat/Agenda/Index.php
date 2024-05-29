<?php

namespace App\Livewire\Rapat\Agenda;
use Livewire\Component;
use App\Models\Transaksi\Rapat as Model;
use Livewire\WithPagination;
use Livewire\WithoutUrlPagination;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;

class Index extends Component
{
    use WithPagination,WithoutUrlPagination;
    use LivewireAlert;
    protected $paginationTheme = 'bootstrap';
    protected $listeners = ['store' => 'render','delete', 'confirmed'];
    public $search = '';
    
    public $perpage = 10;
    public $role_list;
    
    public $sortColoumName = "created_at";
    public $sortDirection = "desc";
    protected $queryString = ['search'];

    public function mount()
    {
        // if(Auth::user()->role_id == 5){
        //     $this->listPasar = RefPasar::orderBy('namapasar','asc')->where('id',Auth::user()->pasar_id)->get();
        // }else{
        //     $this->listPasar = RefPasar::orderBy('namapasar','asc')->get();
        // }
        // $this->selectTanggal = date('Y-m-d');
    }
    
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
            // $query->when($this->selectPasar != "", function ($q) {
            //     return $q->where('pasar_id','=',$this->selectPasar);
            // });
            // $query->when($this->selectTanggal != "", function ($q) {
            //     return $q->where('detail_tgl','=',$this->selectTanggal);
            // });
        if(Auth::user()->role_id == 2){
            $rows = $query->where('created_id',Auth::user()->id)->where('is_delete','!=', 1)
            ->orderBy($this->sortColoumName,$this->sortDirection)
            ->paginate($this->perpage);
        }else{
            $rows = $query->where('is_delete','!=', 1)->orderBy($this->sortColoumName,$this->sortDirection)
            ->paginate($this->perpage);
        }
        // dd($rows);

        if ($rows[0]!=null) {
            $this->firstId = $rows[0]->id;
        }
        
        return view('livewire.rapat.agenda.index', [
          'model'=> $rows
        ]);

    }
    
    
    public function deleteRequest($id)
    {
        $this->dispatch("swal:deleteRequest", [
            'type' => 'warning',
            'title' =>'Apa anda yakin ?',
            'text' =>'Setelah memilih YA maka data akan Dihapus',
            'id'=>$id
        ]);
    }
    public function deleteSelectedRequest($id)
    {
        if(Model::where('id',$id)->delete()){
            $log = 'Data Rapat Berhasil di Hapus';
            setActivity($log);
            $this->alert('success', $log, [
                'position' => 'top-end',
                'timer' => 3000,
                'toast' => true,
            ]);
        }else{
            $log = 'Data Rapat Gagal di Hapus';
            $this->alert('error', $log, [
                'position' => 'top-end',
                'timer' => 3000,
                'toast' => true,
            ]);
            
        }
    }
}
