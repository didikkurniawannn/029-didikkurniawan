<?php
namespace App\Livewire\Master\Referensi\Wilayah;
use Livewire\Component;
use App\Models\Wilayah\RefDesa as Model;
use App\Models\Wilayah\RefKabupaten;
use App\Models\Wilayah\RefKecamatan;
use Livewire\WithPagination;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Desa extends Component
{
    use WithPagination;
    use LivewireAlert;
    protected $paginationTheme = 'bootstrap';
    protected $listeners = ['store' => 'render','delete', 'confirmed'];
    public $search = '';
    
    public $mode = 'create';
    public $actionTitle = 'Tambah';
    public $perpage = 10;
    public $id_kec = NULL;
    public $id_kab = NULL;
    public $id_desa = NULL;
    public $name;
    public $kecamatan_list;
    public $kabupaten_list;
    public $searchKabupaten;
    public $searchKecamatan = NULL;
    public $sortColoumName = "name";
    public $sortDirection = "asc";
    protected $queryString = ['search'];
    
    public function mount()
    {
        $this->kecamatan_list  = RefKecamatan::where('regency_id', getApp()->kab)->orderBy('name','asc')->get();

    }
    public function render()
    {
        
            $query = Model::query();
            
            $query->when($this->searchKecamatan == "", function ($q) {
                return $q->where('district_id', '=', 320437);
            });

            $query->when($this->searchKecamatan != "", function ($q) {
                return $q->where('district_id', '=', $this->searchKecamatan);
            });
            
            $query->when($this->search != "", function ($q) {
                return $q->whereRaw('LOWER(name) like ?', ['%'.strtolower($this->search).'%']);
            });
            $rows = $query->orderBy($this->sortColoumName,$this->sortDirection)
            ->paginate($this->perpage);

        if ($rows[0]!=null) {
            $this->firstId = $rows[0]->id;
        }
        return view('livewire.master.referensi.wilayah.desa', [
            'model'=> $rows
        ]);
    }

    public function rules()
    {
        return [
            'name'      => 'required',
            'id_desa'      => 'required',
            'id_kec'      => 'required|min:6|max:6',
        ];
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
    
    public function updatingSearch()
    {
        $this->resetPage();
    }
    
    private function resetInput()
    {
        $this->name     = NULL;
        $this->id_desa     = NULL;
        $this->id_kec     = NULL;
    }
    
    public function cancel()
    {
        $this->mode = 'create';
        $this->actionTitle = 'Tambah';
        $this->resetInput();
    }
    
    public function create()
    {
        $this->resetInput();
        $this->mode = 'create';
        $this->actionTitle = 'Tambah';
        $this->showForm = true;
        $this->isOpen = true;
        $this->dispatch("showForm");
    }
    
    public function store()
    {
        $this->validate();
        $model = Model::firstOrNew(['id' =>  $this->id_desa]);
        $model->id                      = $this->id_desa;
        $model->district_id             = $this->id_kec;
        $model->name                    = $this->name;
        
        if($model->save()){
            $this->resetInput();
            $log = 'Data Desa '.$model->name.' Berhasil di Ditambah';
            setActivity($log);
            $this->alert('success', $log, [
                'position' => 'top-end',
                'timer' => 3000,
                'toast' => true,
            ]);
        }else{
            $log = 'Data Desa '.$model->name.' Gagal di Ditambah';
            $this->alert('error', $log, [
                'position' => 'top-end',
                'timer' => 3000,
                'toast' => true,
            ]);
        }
        
    }
    
    public function edit($primaryId)
    {
        $this->isOpen = true;
        $this->mode = 'update';
        $this->actionTitle = 'Ubah';
        $this->primaryId = $primaryId;
        $model = Model::where('id','=',$primaryId)->first();
        $this->name         = $model->name;
        $this->id_desa      = $model->id;
        $this->id_kec       = $model->district_id;
        $this->dispatch("showForm");
        $this->showForm = true;
    }
    
    public function update()
    {
        $this->validate();
        $model = Model::firstOrNew(['id' =>  $this->id_desa]);
        $model->name        = $this->name;
        $model->district_id = $this->id_kec;
        
        if($model->save()){
            $this->mode = "create";
            $this->actionTitle = 'Ubah';
            $this->resetInput();
            $log = 'Data Desa '.$model->name.' Berhasil di Ubah';
            setActivity($log);
            $this->alert('success', $log, [
                'position' => 'top-end',
                'timer' => 3000,
                'toast' => true,
            ]);
        }else{
            $log = 'Data Desa '.$model->name.' Gagal di Ubah';
            $this->alert('error', $log, [
                'position' => 'top-end',
                'timer' => 3000,
                'toast' => true,
            ]);
            
        }
        
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
            $this->resetInput();
            $log = 'Data Desa Berhasil di Hapus';
            setActivity($log);
            $this->alert('success', $log, [
                'position' => 'top-end',
                'timer' => 3000,
                'toast' => true,
            ]);
        }else{
            $log = 'Data Desa Gagal di Hapus';
            $this->alert('error', $log, [
                'position' => 'top-end',
                'timer' => 3000,
                'toast' => true,
            ]);
            
        }
    }
    
    public $isOpen = false;
    public function toggle()
    {
        $this->isOpen = !$this->isOpen;
    }
    
    
    
}
