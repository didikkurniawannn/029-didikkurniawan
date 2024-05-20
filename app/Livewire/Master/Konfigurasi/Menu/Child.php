<?php

namespace App\Livewire\Master\Konfigurasi\Menu;

use Livewire\Component;
use App\Models\RefMenu as Model;
use Livewire\WithPagination;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Illuminate\Support\Facades\Crypt;

class Child extends Component
{
    use WithPagination;
    use LivewireAlert;
    protected $paginationTheme = 'bootstrap';
    protected $listeners = ['store' => 'render','delete', 'confirmed'];
    public $search = '';
    
    public $primaryId;
    public $menu;
    public $menu_id;
    public $posisi;
    public $jenis_menu;
    public $url;
    public $icon;
    public $sortColoumName;
    
    public $menu_list;
    public $parent;
    public $parent_id;
    public $parent_name;
    public $mode = 'create';
    public $perpage = 5;
    protected $queryString = ['search'=> ['except' => '']];
    
    public function mount($id)
    {
        $this->parent = Crypt::decrypt($id);
        $model = Model::where('id','=',$this->parent)->first();
        $this->parent_name = $model->menu;
        $this->menu_list   = Model::where('is_active','=',1)->where('is_delete','=',0)->where('parent_id',0)->orderBy('menu','asc')->get();
    }
    
    protected $rules = [
        'menu'      => 'required',
        'posisi'    => 'required',
        'url'       => 'required',
    ];
    
    
    public function updatingSearch()
    {
        $this->resetPage();
    }
    
    public function render()
    {
        
        return view('livewire.master.konfigurasi.menu.child',
        [
            'model' => Model::where('is_delete',0)
            ->whereRaw('LOWER(menu) like ?', ['%'.strtolower($this->search).'%'])
            ->where('parent_id','=',$this->parent)
            ->orderBy('posisi')
            ->paginate($this->perpage)
        ]);
    }
    
    
    private function resetInput()
    {
        $this->menu         = NULL;
        $this->menu_id      = NULL;
        $this->posisi       = NULL;
        $this->jenis_menu   = NULL;
        $this->url          = NULL;
        $this->icon         = NULL;
        
    }
    
    public function cancel()
    {
        $this->mode = 'create';
        $this->resetInput();
    }
    
    public function create()
    {
        $this->isOpen = true;
        $this->mode = 'create';
        $this->resetInput();
        $this->showForm = true;
        
        $this->dispatch("showForm");
    }
    
    public function store()
    {
        $this->validate();
        $model = Model::firstOrNew(['id' =>  $this->menu_id]);
        $model->id          = Model::max('id') + 1;
        $model->menu        = $this->menu;
        $model->parent_id   = $this->parent;
        $model->posisi      = $this->posisi;
        $model->jenis_menu  = 'Backend';
        $model->url         = $this->url;
        $model->is_active   = 1;
        $model->is_delete   = 0;
        
        if($model->save()){
            $this->resetInput();
            $this->alert('success', 'SubMenu Berhasil di Simpan/Ubah', [
                'position' => 'top',
                'timer' => 3000,
                'toast' => true,
                'timerProgressBar' => true,
            ]);
        }else{
            return $this->alert('error', 'SubMenu Gagal di Simpan/Ubah', [
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
        // $this->menu_id = $model['id'];
        // $this->menu= $model['menu'];
        $this->menu        = $model->menu;
        $this->menu_id     = $model->id;
        $this->parent_id   = $model->parent_id;
        $this->posisi      = $model->posisi;
        $this->jenis_menu  = $model->jenis_menu;
        $this->url         = $model->url;
        $this->icon        = $model->icon;
        
        $this->dispatch("showForm");
        $this->showForm = true;
    }
    
    public function update()
    {
        $this->validate();
        
        $model = Model::where('id',$this->menu_id)->first();
        $model->menu        = $this->menu;
        $model->parent_id   = $this->parent_id;
        $model->posisi      = $this->posisi;
        $model->jenis_menu  = 'Backend';
        $model->url         = $this->url;
        $model->is_active   = 1;
        
        if($model->save()){
            $this->mode = "create";
            $this->resetInput();
            $this->alert('success', 'SubMenu Berhasil di Simpan/Ubah', [
                'position' => 'top',
                'timer' => 3000,
                'toast' => true,
                'timerProgressBar' => true,
            ]);
        }else{
            return $this->alert('error', 'SubMenu Gagal di Simpan/Ubah', [
                'position' => 'top',
                'timer' => 3000,
                'toast' => true,
                'timerProgressBar' => true,
            ]);
        }
        
    }
    
    public function deleteConfirm($id)
    {
        $data = Model::where('id',$id)->first();
        $this->menu_id = $id;
        return $this->alert('question', 'Apakah Anda Yakin Akan Menghapus SubMenu ? '.$data->menu.'', [
            'showConfirmButton' => true,
            'confirmButtonText' => 'Ok',
            'showCancelButton' => true,
            'cancelButtonText' => 'Cancel',
            'onConfirmed' => 'confirmed',
            'toast' => false,
            'position' => 'center',
            'timer' => 2000
        ]);
    }
    
    public function confirmed()
    {
        $model = Model::where('id', $this->menu_id)->firstOrFail();
        $newStatus = $model->is_delete = 1;
        $model->update([
            'is_delete' => $newStatus,
            'deleted_at' => date('Y-m-d H:i:s'),
        ]);
        if($model->is_delete==1){
            $this->resetInput();
            return $this->alert('success', 'SubMenu Berhasil di Hapus', [
                'position' => 'top',
                'timer' => 3000,
                'toast' => true,
                'timerProgressBar' => true,
            ]);
        }else{
            return $this->alert('error', 'SubMenu Gagal di Hapus', [
                'position' => 'top',
                'timer' => 3000,
                'toast' => true,
                'timerProgressBar' => true,
            ]);
        }
        
        
    }
    
    public function delete($id)
    {
        $model = Model::where('id', $id)->firstOrFail();
        $newStatus = $model->is_delete = 1;
        $model->update(['is_delete' => $newStatus]);
        if($model->is_delete==1){
            $this->dispatch('swal:modal', [
                'type' => 'success',
                'message' => 'Berhasil',
                'text' => 'SubMenu Berhasil Di Hapus'
            ]);
        }else{
            $this->dispatch('swal:modal', [
                'type' => 'error',
                'message' => 'Gagal',
                'text' => 'SubMenu Berhasil Di Hapus'
            ]);
        }
    }
    
    
    public $isOpen = false;
    public function toggle()
    {
        $this->isOpen = !$this->isOpen;
    }
    
    public function status($id)
    {
        $model = Model::where('id', $id)->firstOrFail();
        $newStatus = $model->is_active === 1 ? 0 : 1;
        $infoStatus = $newStatus == 1 ? "Tidak Aktif" : "Aktif"; 
        $model->update(['is_active' => $newStatus]);
        return $this->alert('success', 'Status Unit Kerja '.$model->unit_kerja.' '.$infoStatus, [
            'position' => 'top',
            'timer' => 3000,
            'toast' => true,
            'timerProgressBar' => true,
        ]);
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
    
    
}
