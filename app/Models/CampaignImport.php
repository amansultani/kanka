<?php

namespace App\Models;

use App\Enums\CampaignImportStatus;
use App\Models\Concerns\SortableTrait;
use App\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Prunable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Storage;

/**
 * @property int $id
 * @property CampaignImportStatus $status_id
 * @property Campaign $campaign
 * @property User $user
 */
class CampaignImport extends Model
{
    use Prunable;
    use SortableTrait;

    public $fillable = [
        'user_id',
        'campaign_id',
        'status_id'
    ];

    public $casts = [
        'config' => 'array',
        'status_id' => CampaignImportStatus::class,
    ];

    public $sortable = [
        'status_id',
        'updated_at',
        'created_by',
    ];

    public function campaign()
    {
        return $this->belongsTo(Campaign::class);
    }

    /**
     * Automatically prune old elements from the db
     */
    public function prunable(): Builder
    {
        return static::/*where('updated_at', '<=', now()->subDays(1))
            ->*/whereIn('status_id', [CampaignImportStatus::PREPARED, CampaignImportStatus::QUEUED]);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function isPrepared(): bool
    {
        return $this->status_id == CampaignImportStatus::PREPARED;
    }

    public function isFailed(): bool
    {
        return $this->status_id == CampaignImportStatus::FAILED;
    }
    protected function pruning(): void
    {
        $files = Arr::get($this->config, 'files');
        if (empty($files)) {
            return;
        }
        foreach ($files as $file) {
            Storage::disk('s3')->delete($file);
        }
    }
}
