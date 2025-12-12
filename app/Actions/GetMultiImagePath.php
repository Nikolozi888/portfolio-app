<?php

namespace App\Actions;

use Carbon\Carbon;

class GetMultiImagePath
{
    public function handle($current_timestamp, $index, $file)
    {
        $file_name = $current_timestamp . "-" . ($index + 1) . '.' . $file->extension();
        $path = $file->storeAs('images', $file_name, 'public');

        return $path;
    }
}
