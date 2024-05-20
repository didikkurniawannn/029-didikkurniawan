<?php
namespace App\Livewire\Master\Kepegawaian\Jabatan;
use Livewire\Component;
use App\Models\RefJabatan as Model;
use Livewire\WithPagination;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Form extends Component
{
    use WithPagination;
    use LivewireAlert;
    protected $paginationTheme = 'bootstrap';
    protected $listeners = ['store' => 'render','delete', 'confirmed'];
    public $search = '';
    public $showForm;
    public $kode;
    public $jabatan;
    public $jabatan_id = NULL;
    public $atasan_id;
    public $alias;
    public $primaryId;
    public $url;
    public $icon;
    
    public $mode = 'create';
    public $perpage = 10;
    public $total;
    public $sortColoumName = "jabatan";
    public $sortDirection = "asc";
    protected $queryString = ['search'];
    
    public function mount()
    {
        $this->total = Model::where('is_active',1)->where('is_delete','=',0)->count();
    }
    
    protected $rules = [
        'jabatan'      => 'required',
    ];
    
    public function render()
    {
        
        setActivity('Pengguna Mengakses Halaman Jabatan');
        return view('livewire.master.kepegawaian.jabatan.form');
    }
    
    
    private function resetInput()
    {
        $this->kode             = NULL;
        $this->jabatan          = NULL;
        $this->jabatan_id       = NULL;
        $this->atasan_id        = NULL;
    }
    
    public function cancel()
    {
        $this->mode = 'create';
        $this->resetInput();
    }
    
    public function create()
    {
        $this->resetInput();
        $this->mode = 'create';
        $this->showForm = true;
        $this->isOpen = true;
        $this->dispatch("showForm");
    }
    
    public function store()
    {
        $this->validate();
        $model = Model::firstOrNew(['id' =>  $this->jabatan_id]);
        $model->id          = Model::max('id') + 1;
        $model->jabatan     = $this->jabatan;
        $model->kode        = $this->kode;
        $model->is_active   = 1;
        $model->is_delete   = 0;
        
        if($model->save()){
            $this->resetInput();
            $this->alert('success', 'Jabatan Berhasil di Simpan', [
                'position' => 'top',
                'timer' => 3000,
                'toast' => true,
                'timerProgressBar' => true,
            ]);
        }else{
            return $this->alert('error', 'Jabatan Gagal di Simpan', [
                'position' => 'top',
                'timer' => 3000,
                'toast' => true,
                'timerProgressBar' => true,
            ]);
        }
        
    }
    
    public function edit($primaryId)
    {
        $this->isOpen = true;
        $this->mode = 'update';
        $this->primaryId = $primaryId;
        $model = Model::where('id','=',$primaryId)->first();
        $this->jabatan          = $model->jabatan;
        $this->kode             = $model->kode;
        $this->jabatan_id       = $model->id;
        $this->atasan_id        = $model->atasan_id;
        $this->dispatch("showForm");
        $this->showForm = true;
    }
    
    public function update()
    {
        $this->validate();
        $model = Model::firstOrNew(['id' =>  $this->jabatan_id]);
        $model->jabatan     = $this->jabatan;
        $model->kode        = $this->kode;
        $model->atasan_id   = $this->atasan_id;
        $model->is_active   = 1;
        $model->is_delete   = 0;
        
        if($model->save()){
            $this->mode = "create";
            $this->resetInput();
            $this->alert('success', 'Jabatan Berhasil di Ubah', [
                'position' => 'top',
                'timer' => 3000,
                'toast' => true,
                'timerProgressBar' => true,
            ]);
        }else{
            return $this->alert('error', 'Jabatan Gagal di Ubah', [
                'position' => 'top',
                'timer' => 3000,
                'toast' => true,
                'timerProgressBar' => true,
            ]);
        }
        
    }
    
    public $isOpen = false;
    public function toggle()
    {
        $this->isOpen = !$this->isOpen;
    }
    
    
}
