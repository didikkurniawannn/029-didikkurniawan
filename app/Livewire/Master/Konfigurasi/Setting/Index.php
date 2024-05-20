<?php

namespace App\Livewire\Master\Konfigurasi\Setting;

use Livewire\Component;
use App\Models\RefSetting;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class Index extends Component
{
    use LivewireAlert;
    use WithFileUploads;
    
    public $name;
    public $description;
    public $keywords;
    public $favicon;
    public $logo;
    public $splashscreen;
    public $logo_text;
    public $address;
    public $phone;
    public $email;
    public $facebook;
    public $instagram;
    public $twitter;
    public $youtube;
    public $sandbox_status;
    public $sandbox_wa;
    public $tte;
    public $setting_id;
    public $logo_url;
    public $favicon_url;
    public $logo_text_url;
    public $splashscreen_url;
    public $storage_url;
    public $is_sso;
    
    public function mount()
    {
        $data = RefSetting::where('is_active','=',1)->first();
        $this->setting_id       = $data->id;
        $this->name             = $data->name;
        $this->description      = $data->description;
        $this->keywords         = $data->keywords;
        // $this->favicon          = $data->favicon;
        // $this->logo             = $data->logo;
        $this->address          = $data->address;
        $this->phone            = $data->phone;
        $this->email            = $data->email;
        $this->facebook         = $data->facebook;
        $this->instagram        = $data->instagram;
        $this->twitter          = $data->twitter;
        $this->youtube          = $data->youtube;
        $this->sandbox_status   = $data->sandbox_status;
        $this->sandbox_wa       = $data->sandbox_wa;
        $this->tte              = $data->tte;
        $this->storage_url      = $data->storage_url;
        $this->is_sso           = $data->is_sso;
        
        $this->logo_url         = Storage::disk('public')->url($data->logo_url);
        $this->favicon_url      = Storage::disk('public')->url($data->favicon_url);
        $this->logo_text_url    = Storage::disk('public')->url($data->logo_text_url);
        $this->splashscreen_url = Storage::disk('public')->url($data->splashscreen_url);
        
        
    }
    
    protected $rules =[
        'name' => 'required',
        'description' => 'required',
        'keywords' => 'required',
        'address' => 'required',
        'phone' => 'required',
        'email' => 'required',
        'facebook' => 'required',
        'instagram' => 'required',
        'twitter' => 'required',
        'youtube' => 'required',
        // 'logo' => 'required|image|mimes:jpeg,bmp,png,jpg,svg|max:2000',
        // 'favicon' => 'required|image|mimes:jpeg,bmp,png,jpg,svg|max:2000'
    ];
    
    private function resetInput()
    {
        $this->setting_id       = NULL;
        $this->name             = NULL;
        $this->description      = NULL;
        $this->keywords         = NULL;
        $this->favicon          = NULL;
        $this->logo             = NULL;
        $this->address          = NULL;
        $this->phone            = NULL;
        $this->email            = NULL;
        $this->facebook         = NULL;
        $this->instagram        = NULL;
        $this->twitter          = NULL;
        $this->youtube          = NULL;
        $this->is_sso          = NULL;
        
    }
    
    public function store()
    {
        $this->validate();
        $model = RefSetting::firstOrNew(['id' =>  $this->setting_id]);
        $model->id               = $this->setting_id;
        $model->name             = $this->name;
        $model->description      = $this->description;
        $model->keywords         = $this->keywords;
        $model->favicon          = $this->favicon;
        $model->logo             = $this->logo;
        $model->address          = $this->address;
        $model->phone            = $this->phone;
        $model->email            = $this->email;
        $model->facebook         = $this->facebook;
        $model->instagram        = $this->instagram;
        $model->twitter          = $this->twitter;
        $model->youtube          = $this->youtube;
        $model->sandbox_status   = $this->sandbox_status;
        $model->sandbox_wa       = $this->sandbox_wa;
        $model->tte              = $this->tte;
        $model->storage_url     = $this->storage_url;
        $model->is_sso          = $this->is_sso;
        $model->is_active        = 1;
        
        // dd($this->splashscreen);
        
        if ($this->logo) {
            $this->validate(['logo' => 'required|image|mimes:jpeg,bmp,png,jpg,svg|max:2000']);
            $pathFolder = Storage::disk('public')->path('logo');
            if (!file_exists($pathFolder)) {
                Storage::disk('public')->makeDirectory('logo');
            }
            $model->logo = $this->logo->getClientOriginalName();
            $model->logo_url = $this->logo->store('logo', 'public');
            $model->logo_size = $this->logo->getSize();
            $model->logo_path = Storage::disk('public')->path($this->logo->store('logo', 'public'));
            $model->logo_human_size = humanFileSize($this->logo->getSize());
            Image::load(Storage::disk('public')->path($this->logo->store('logo', 'public')))
            ->quality(10)
            // ->blur(50)
            // ->greyscale()
            // ->width(100)
            // ->height(100)
            ->save();
        }
        
        if ($this->logo_text) {
            $this->validate(['logo_text' => 'required|image|mimes:jpeg,bmp,png,jpg,svg|max:2000']);
            $pathFolder = Storage::disk('public')->path('logo_text');
            if (!file_exists($pathFolder)) {
                Storage::disk('public')->makeDirectory('logo_text');
            }
            $model->logo_text = $this->logo_text->getClientOriginalName();
            $model->logo_text_url = $this->logo_text->store('logo_text', 'public');
            $model->logo_text_size = $this->logo_text->getSize();
            $model->logo_text_path = Storage::disk('public')->path($this->logo_text->store('logo_text', 'public'));
            $model->logo_text_human_size = humanFileSize($this->logo_text->getSize());
            Image::load(Storage::disk('public')->path($this->logo_text->store('logo_text', 'public')))
            ->quality(10)
            // ->blur(50)
            // ->greyscale()
            // ->width(100)
            // ->height(100)
            ->save();
        }        
        
        if ($this->favicon) {
            $this->validate(['favicon' => 'required|image|mimes:jpeg,bmp,png,jpg,svg|max:2000']);
            $pathFolder = Storage::disk('public')->path('favicon');
            if (!file_exists($pathFolder)) {
                Storage::disk('public')->makeDirectory('favicon');
            }
            $model->favicon = $this->favicon->getClientOriginalName();
            $model->favicon_url = $this->favicon->store('favicon', 'public');
            $model->favicon_size = $this->favicon->getSize();
            $model->favicon_path = Storage::disk('public')->path($this->favicon->store('favicon', 'public'));
            $model->favicon_human_size = humanFileSize($this->favicon->getSize());
        }
        
        if ($this->splashscreen) {
            $this->validate(['splashscreen' => 'required|image|mimes:jpeg,bmp,png,jpg,svg|max:2000']);
            $pathFolder = Storage::disk('public')->path('splashscreen');
            if (!file_exists($pathFolder)) {
                Storage::disk('public')->makeDirectory('splashscreen');
            }
            $model->splashscreen = $this->splashscreen->getClientOriginalName();
            $model->splashscreen_url = $this->splashscreen->store('splashscreen', 'public');
            $model->splashscreen_size = $this->splashscreen->getSize();
            $model->splashscreen_path = Storage::disk('public')->path($this->splashscreen->store('splashscreen', 'public'));
            $model->splashscreen_human_size = humanFileSize($this->splashscreen->getSize());
        }
        
        if($model->save()){
            $this->mount();
            setActivity('Pengguna Menambahkan/Merubah Setting');
            $this->alert('success', 'Setting Website Information Berhasil di Simpan/Ubah', [
                'position' => 'top',
                'timer' => 3000,
                'toast' => true,
                'timerProgressBar' => true,
            ]);
        }else{
            return $this->alert('error', 'Setting Website Information Gagal di Simpan/Ubah', [
                'position' => 'top',
                'timer' => 3000,
                'toast' => true,
                'timerProgressBar' => true,
            ]);
        }
        
    }
    
    public function render()
    {
        setActivity('Pengguna Mengakses Halaman Setting');
        return view('livewire.master.konfigurasi.setting.index');
    }
}
