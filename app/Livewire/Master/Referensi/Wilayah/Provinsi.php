<?php
namespace App\Livewire\Master\Referensi\Wilayah;
use Livewire\Component;
use App\Models\Wilayah\RefProvinsi as Model;
use Livewire\WithPagination;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Provinsi extends Component
{
    use WithPagination;
    use LivewireAlert;
    protected $paginationTheme = 'bootstrap';
    protected $listeners = ['store' => 'render','delete', 'confirmed'];
    public $search = '';
    
    public $mode = 'create';
    public $actionTitle = 'Tambah';
    public $perpage = 10;
    public $id_prov = NULL;
    public $name;
    public $total;
    public $sortColoumName = "name";
    public $sortDirection = "asc";
    protected $queryString = ['search'];
    
    public function mount()
    {
        
    }
    
    protected $rules = [
        'name'      => 'required',
    ];
    
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
    
    public function render()
    {
        return view('livewire.master.referensi.wilayah.provinsi',
        [
            'model' => Model::whereRaw('LOWER(name) like ?', ['%'.strtolower($this->search).'%'])->orderBy($this->sortColoumName,$this->sortDirection)->paginate($this->perpage)
        ]);
    }
    
    
    private function resetInput()
    {
        $this->name     = NULL;
        $this->id_prov     = NULL;
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
        $model = Model::firstOrNew(['id' =>  $this->id_prov]);
        $model->id          = Model::max('id') + 1;
        $model->name        = $this->name;
        
        if($model->save()){
            $this->resetInput();
            $log = 'Data Provinsi '.$model->name.' Berhasil di Ditambah';
            setActivity($log);
            $this->alert('success', $log, [
                'position' => 'top-end',
                'timer' => 3000,
                'toast' => true,
            ]);
        }else{
            $log = 'Data Provinsi '.$model->name.' Gagal di Ditambah';
            notify()->success($log);
            return redirect()->route('account.index');
        }
        
    }
    
    public function edit($primaryId)
    {
        $this->isOpen = true;
        $this->mode = 'update';
        $this->actionTitle = 'Ubah';
        $this->primaryId = $primaryId;
        $model = Model::where('id','=',$primaryId)->first();
        $this->name     = $model->name;
        $this->id_prov  = $model->id;
        $this->dispatch("showForm");
        $this->showForm = true;
    }
    
    public function update()
    {
        $this->validate();
        $model = Model::firstOrNew(['id' =>  $this->id_prov]);
        $model->name        = $this->name;
        
        if($model->save()){
            $this->mode = "create";
            $this->actionTitle = 'Ubah';
            $this->resetInput();
            $log = 'Data Provinsi '.$model->name.' Berhasil di Ubah';
            setActivity($log);
            $this->alert('success', $log, [
                'position' => 'top-end',
                'timer' => 3000,
                'toast' => true,
            ]);
        }else{
            $log = 'Data Provinsi '.$model->name.' Gagal di Ubah';
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
            $log = 'Data Provinsi Berhasil di Hapus';
            setActivity($log);
            $this->alert('success', $log, [
                'position' => 'top-end',
                'timer' => 3000,
                'toast' => true,
            ]);
        }else{
            $log = 'Data Provinsi Gagal di Hapus';
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
