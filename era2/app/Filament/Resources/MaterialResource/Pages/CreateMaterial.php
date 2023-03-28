<?php

namespace App\Filament\Resources\MaterialResource\Pages;

use DB;
use PDF;

use App\Models\Material;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\MaterialResource;

class CreateMaterial extends CreateRecord
{
    protected static string $resource = MaterialResource::class;
    protected $GlobalDataForMaterial = null;

    protected function mutateFormDataBeforeCreate(array $data): array
{
    $this->GlobalDataForMaterial = $data;

    // dd($data);   
     return $data;
// dd($data);
}

protected function getRedirectUrl(): string
{
    $material = new Material;
    // dd($this->GlobalDataForMaterial);
    $data = [
        'title' => 'Welcome to thunder education system ',
        'date' => date('m/d/Y'),
        'course' =>$this->GlobalDataForMaterial['course_details_id'],
        'topic' =>$this->GlobalDataForMaterial['topic'],
        'data' => $this->GlobalDataForMaterial['material'],
        
        // 'data' => print_r($_REQUEST)
    ];
    // dd($data);
    $pdf = PDF::loadView('myPDF', $data);
    $materialDataLastRec = DB::table('materials')->orderBy('id', 'desc')->first();
    $materialDataById = $material::find($materialDataLastRec->id);

    // route('material.upload',$material);

    // dd($materialDataById);
    $path = public_path('storage/pdf/');
    $fileName = 'Era' . time() . '.pdf';
    $pdf->save($path . '/' . $fileName);
    $materialDataById ->course_details_id = $this->GlobalDataForMaterial['course_details_id'];
    $materialDataById ->topic = $this->GlobalDataForMaterial['topic'];
    $materialDataById ->material = $fileName;
    $materialDataById ->save();

    // dd($fileName);
    return $this->getResource()::getUrl('index');

}
}
