<?php

namespace DigitalCreative\NovaRangeFilter;

use Illuminate\Database\Eloquent\Builder;
use Laravel\Nova\Filters\Filter;
use Laravel\Nova\Http\Requests\NovaRequest;

class SliderFilter extends Filter
{
    /**
     * The filter's component.
     *
     * @var string
     */
    public $component = 'nova-slider-filter';

    /**
     * Apply the filter to the given query.
     *
     * @param Request $request
     * @param Builder $query
     * @param mixed $value
     *
     * @return Builder
     */
    public function apply(NovaRequest $request, $query, $value)
    {
        return $query;
    }

    /**
     * Get the filter's available options.
     *
     * @param Request $request
     *
     * @return array
     */
    public function options(NovaRequest $request)
    {
        return [];
    }

    public function minValue(int $min): self
    {
        return $this->withMeta([ 'min' => $min ]);
    }

    public function maxValue(int $max): self
    {
        return $this->withMeta([ 'max' => $max ]);
    }

    public function label(string $label): self
    {
        return $this->withMeta([ 'label' => $label ]);
    }

}
