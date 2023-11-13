<?php

namespace App\Services\Campaign\Import\Mappers;

use App\Models\Tag;
use App\Models\Location;
use App\Traits\CampaignAware;

class LocationMapper
{
    use CampaignAware;
    use ImportMapper;
    use EntityMapper;

    protected array $ignore = ['id', 'campaign_id', 'slug', 'image', '_lft', '_rgt', 'location_id', 'created_at', 'updated_at'];

    public function first(): void
    {
        $this
            ->prepareModel(Location::class)
            ->trackMappings('locations', 'location_id');
    }

    public function prepare(): self
    {
        $this->campaign->locations()->forceDelete();
        return $this;
    }

    public function tree(): self
    {
        foreach ($this->parents as $parent => $children) {
            if (!isset($this->mapping[$parent])) {
                continue;
            }
            // We need the nested trait to trigger for this so it's going to be inefficient
            $locations = Location::whereIn('id', $children)->get();
            /** @var Location $location */
            foreach ($locations as $location) {
                $location->setParentId($this->mapping[$parent]);
                $location->save();
            }
        }

        return $this;
    }
}
