<?php

namespace App\Livewire\Frontend;

use DB;
use App\Models\Transaksi\Rapat as Model;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Carbon\Carbon; // Pastikan Carbon diimpor


class Home extends Component
{
    public $list_rapat;
    public $dateRange;
    public $currentMonth;
    public $currentYear;
    public $days;
    public $date;
    public $events = [];

    #[Layout('components.layouts.frontend.app')]
    
    public function mount(){
        
        $this->currentMonth = Carbon::now()->month;
        $this->currentYear = Carbon::now()->year;
        $this->list_rapat   = Model::where('finish',1)->whereIn('status',[1,3])->get();
        $this->date = Carbon::now();
        $this->loadEvents();
        $this->generateCalendarDays($this->date);
    }
    public function loadEvents()
    {
        $events = DB::table('t_rapat')
                ->select(DB::raw('date(tanggal_mulai) as event_date'), 't_rapat.*')
                ->whereMonth('tanggal_mulai', $this->date->month)
                ->whereYear('tanggal_mulai', $this->date->year)
                ->whereIn('status',[1,3])
                ->orderBy('tanggal_mulai', 'asc')
                ->get()
                ->groupBy('event_date');

        $this->events = $events;
    }

    public function generateCalendarDays($date)
    {
        $startDayOfMonth = $date->copy()->startOfMonth();
        $endDayOfMonth = $date->copy()->endOfMonth();

        // Menemukan hari Minggu sebelum atau sama dengan hari pertama bulan
        $startDay = $startDayOfMonth->copy()->startOfWeek();

        // Menemukan hari Sabtu setelah atau sama dengan hari terakhir bulan
        $endDay = $endDayOfMonth->copy()->endOfWeek();

        $days = [];
        while ($startDay->lte($endDay)) {
            $days[] = $startDay->copy();
            $startDay->addDay();
        }

        // Periksa apakah hari terakhir adalah hari pertama dari minggu berikutnya
        // Jika ya, hapus hari tersebut dari array
        if ($days[count($days) - 1]->dayOfWeek == Carbon::SUNDAY) {
            array_pop($days);
        }

        $this->days = $days;
    }

    public function render()
    {
        return view('livewire.frontend.home');
    }

    public function goToNextMonth()
    {
        // dd(123);
        $this->date->addMonth();
        $this->generateCalendarDays($this->date);
    }

    public function goToPreviousMonth()
    {
        $this->date->subMonth();
        $this->generateCalendarDays($this->date);
    }
}
