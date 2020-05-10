<?php

namespace App\Http\Transformers;

use Illuminate\Support\Collection;

abstract class Transformer
{
    /**
     * @param Collection|array $item
     * @return mixed
     */
    public abstract function transform($item);

    /**
     * @param Collection|array $data
     * @return array
     */
    public function transformMultiple($data): array
    {
        $transformedData = [];
        foreach ($data as $datum) {
            $transformedData[] = $this->transform($datum);
        }

        return $transformedData;
    }

    public function transformPagination($data): array
    {
        $transformedData = [];
        foreach ($data as $datum) {
            $transformedData[] = $this->transform($datum);
        }

        return [
            'data' => $transformedData,
            'total' => $data->total(),
            'per_page' => $data->perPage(),
            'current_page' => $data->currentPage(),
            'last_page' => $data->lastPage(),
        ];
    }
}
