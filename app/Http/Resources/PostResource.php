<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'atas_nama' => $this->atas_nama,
            'tanggal_pembuatan' => $this->tanggal_pembuatan,
            'keterangan' => $this->keterangan,
            'created_at' => date_format($this->created_at,"Y/m/d H:i:s")
        ];
    }
}
