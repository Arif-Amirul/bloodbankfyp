<?php

namespace App\Http\Livewire\Emandate;
use Livewire\Component;
use OpenSpout\Common\Entity\Style\Style;
use Rap2hpoutre\FastExcel\FastExcel;
use App\Models\User;

class Cft extends Component
{
    public function renderReportList()
    {
        $data = User::all();
        foreach ( $data as $item) {
            yield $item;
        }
    }

    public function generateExcel()
    {
        return response()->streamDownload(function () {
            $header_style = (new Style())->setFontBold();
            $rows_style = (new Style())->setShouldWrapText(false);
            return (new FastExcel($this->renderReportList()))
                ->headerStyle($header_style)
                ->rowsStyle($rows_style)
                ->export('php://output' , function ($item) {
                return [
                    'name'	 => $item->name,
                    'email'	 => $item->email,
                ];
            });
        }, sprintf('users-%s.xlsx',now()->format('Y-m-d')));
    }

    public function render()
    {
        return view('livewire.emandate.cft')->extends('layouts.main');
    }
}
