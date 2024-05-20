<?php
namespace App\Livewire\Master\Referensi\Wilayah;
use Livewire\Component;
use App\Models\Wilayah\RefKabupaten as Model;
use App\Models\Wilayah\RefProvinsi;
use Livewire\WithPagination;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Kabupaten extends Component
{
    use WithPagination;
    use LivewireAlert;
    protected $paginationTheme = 'bootstrap';
    protected $listeners = ['store' => 'render','delete', 'confirmed'];
    public $search = '';
    
    public $mode = 'create';
    public $actionTitle = 'Tambah';
    public $perpage = 10;
    public $id_kab = NULL;
    public $id_prov = NULL;
    public $name;
    public $provinsi_list;
    public $searchProvinsi;
    public $sortColoumName = "name";
    public $sortDirection = "asc";
    protected $queryString = ['search'];
    
    public function mount()
    {
        $this->provinsi_list        = RefProvinsi::orderBy('name','asc')->get();
        $this->searchProvinsi       = getApp()->prov;
    }
    
    public function rules()
    {
        return [
            'name'      => 'required',
            'id_prov'      => 'required',
            'id_kab'      => 'required|min:4|max:4',
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
    
    public function render()
    {
        
        // if (Auth::user()->role_id==5) {
            $query = Model::query();
            $query->when($this->searchProvinsi != "", function ($q) {
                return $q->where('province_id', 'like', '%'.$this->searchProvinsi.'%');
            });
            $query->when($this->search != "", function ($q) {
                return $q->whereRaw('LOWER(name) like ?', ['%'.strtolower($this->search).'%']);
            });
            $rows = $query->orderBy($this->sortColoumName,$this->sortDirection)
            ->paginate($this->perpage);

        if ($rows[0]!=null) {
            $this->firstId = $rows[0]->id;
        }
        return view('livewire.master.referensi.wilayah.kabupaten', [
          'model'=> $rows
      ]);
        // return view('livewire.master.referensi.wilayah.kabupaten',
        // [
        //     'model' => Model::where('province_id',32)
        //     ->whereRaw('LOWER(name) like ?', ['%'.strtolower($this->search).'%'])->orderBy($this->sortColoumName,$this->sortDirection)->paginate(100)
        // ]);
    }
    
    
    private function resetInput()
    {
        $this->name     = NULL;
        $this->id_prov     = NULL;
        $this->id_kab     = NULL;
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
        $model = Model::firstOrNew(['id' =>  $this->id_kab]);
        $model->id                  = $this->id_kab;
        $model->province_id         = $this->id_prov;
        $model->name                = $this->name;
        
        if($model->save()){
            $this->resetInput();
            $log = 'Data Kabupaten '.$model->name.' Berhasil di Ditambah';
            setActivity($log);
            $this->alert('success', $log, [
                'position' => 'top-end',
                'timer' => 3000,
                'toast' => true,
            ]);
        }else{
            $log = 'Data Kabupaten '.$model->name.' Gagal di Ditambah';
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
        $this->id_prov     = $model->province_id;
        $this->id_kab  = $model->id;
        $this->dispatch("showForm");
        $this->showForm = true;
    }
    
    public function update()
    {
        $this->validate();
        $model = Model::firstOrNew(['id' =>  $this->id_kab]);
        $model->name                = $this->name;
        $model->province_id         = $this->id_prov;
        
        if($model->save()){
            $this->mode = "create";
            $this->actionTitle = 'Ubah';
            $this->resetInput();
            $log = 'Data Kabupaten '.$model->name.' Berhasil di Ubah';
            setActivity($log);
            $this->alert('success', $log, [
                'position' => 'top-end',
                'timer' => 3000,
                'toast' => true,
            ]);
        }else{
            $log = 'Data Kabupaten '.$model->name.' Gagal di Ubah';
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
            $log = 'Data Kabupaten Berhasil di Hapus';
            setActivity($log);
            $this->alert('success', $log, [
                'position' => 'top-end',
                'timer' => 3000,
                'toast' => true,
            ]);
        }else{
            $log = 'Data Kabupaten Gagal di Hapus';
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
