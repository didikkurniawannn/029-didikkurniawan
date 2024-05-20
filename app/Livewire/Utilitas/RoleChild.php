<?php

namespace App\Livewire\Utilitas;

use App\Models\RefMenu;
use App\Models\RefRole;
use Livewire\Component;
use App\Models\RefAksesMenu as Model;
use Livewire\WithPagination;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Illuminate\Support\Facades\Crypt;

class RoleChild extends Component
{
    use WithPagination;
    use LivewireAlert;
    protected $paginationTheme = 'bootstrap';
    public $firstIdView = NULL;
    public $viewSelected = [];
    public $viewSelectAll = false;
    public $role_id;
    public $nm_akses;
    public $parent;
    public $mode = 'create';
    
    public function mount($id)
    {
        $this->parent = Crypt::decrypt($id);
        $this->viewSelected = Model::where('role_id','=',$this->parent)->pluck('menu_id');
        $this->role_id = $this->parent;
        $this->nm_akses = RefRole::where('id',$this->parent)->first();
    }
    
    public function render()
    {
        $menu = RefMenu::where('is_active','=',1)->where('parent_id','=',0)->orderBy('parent_id','asc')->paginate(10);
        $this->firstIdView = $menu[0]->id;
        return view('livewire.utilitas.role-child',['menu'=>$menu]);
    }
    
    
    public function resetSelected()
    {
        $this->viewSelected = [];
        $this->viewSelectAll = false;
    }
    
    public function updatedViewSelectAll($value)
    {
        if($value){
            $this->viewSelected = Model::where('id','>=',$this->firstIdView)->pluck('id');
        }else{
            $this->viewSelected = [];
        }
    }
    
    public function updatedViewSelected($value)
    {
        if(strlen($value) == 5){
            $this->viewSelectAll = true;
        }else{
            $this->viewSelectAll = false;
        }
    }
    
    public function store()
    {
        $berhasil = 0; $gagal = 0;
        $akses = Model::where('role_id',$this->role_id)->delete();
        foreach($this->viewSelected as $key => $item){
            // dd($item);            
            $akses = Model::updateOrInsert(
                ['menu_id' => $item, 'role_id' => $this->role_id],
                [
                    'id' => Model::max('id') + 1,
                    'view' => 1,
                    'create' => 1,
                    'update' => 1,
                    'delete' => 1,
                    'print' => 1,
                    'export' => 1,
                    ]
                );
            }
            return $this->alert('success', 'Menu Berhasil di Update', [
                'position' => 'top',
                'timer' => 3000,
                'toast' => true,
                'timerProgressBar' => true,
            ]);
    }
}
