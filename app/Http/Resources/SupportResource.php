<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SupportResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'identifier' => $this->id,
            'subject' => strtoupper($this->subject),
            'content' => strtoupper($this->body),
            'status' => $this->status,
            'createDate' => Carbon::make($this->created_at)->format('d-m-Y H:i:s'),
            'updateDate' => Carbon::make($this->updated_at)->format('d-m-Y H:i:s'),
        ];
    }
}
