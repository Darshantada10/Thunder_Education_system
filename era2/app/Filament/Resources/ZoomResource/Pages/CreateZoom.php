<?php

namespace App\Filament\Resources\ZoomResource\Pages;

use App\Models\Zoom;
use App\Traits\ZoomJWT;
use Filament\Pages\Actions;
use Illuminate\Support\Facades\DB;
use App\Filament\Resources\ZoomResource;
use Filament\Resources\Pages\CreateRecord;

class CreateZoom extends CreateRecord
{
    protected static string $resource = ZoomResource::class;
    use ZoomJWT;

    const MEETING_TYPE_INSTANT = 1;
    const MEETING_TYPE_SCHEDULE = 2;
    const MEETING_TYPE_RECURRING = 3;
    const MEETING_TYPE_FIXED_RECURRING_FIXED = 8;

protected $GlobalDataForZoom = null;
protected function mutateFormDataBeforeCreate(array $data): array
{
    $this->GlobalDataForZoom = $data;
    return $data;
}
protected function getRedirectUrl(): string
{
    $zoom = new Zoom; 
    $path = 'users/me/meetings';
    $response = $this->zoomPost($path, [
        'topic' => $this->GlobalDataForZoom['topic'],
        'type' => self::MEETING_TYPE_SCHEDULE,
        'start_time' => $this->toZoomTimeFormat($this->GlobalDataForZoom['start_time']),
        'duration' => 60,
        'password' => $this->GlobalDataForZoom['password'],
        'settings' => [
            'host_video' => true,
            'participant_video' => true,
            'waiting_room' => true,
        ]
    ]);

    $zoomDataLastRec = DB::table('zooms')->orderBy('id', 'desc')->first();
    $zoom = new Zoom; 
    $ZoomDataById = $zoom::find($zoomDataLastRec->id);
    $ZoomDataById->topic = (json_decode($response->body())->topic);
    $ZoomDataById->start_url = (json_decode($response->body())->start_url);
    $ZoomDataById->join_url = (json_decode($response->body())->join_url);
    $ZoomDataById->password = (json_decode($response->body())->password);
    $ZoomDataById->start_time = (json_decode($response->body())->start_time);
    $ZoomDataById->save();

    return $this->getResource()::getUrl('index');
}

}
