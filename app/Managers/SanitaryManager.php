<?php

namespace App\Managers;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class SanitaryManager
{
    public function __construct()
    {
        //
    }

    public function sanitize(array|Collection|Request $data)
    {
        if ($data instanceof Request) {
            $data = $data->all();
        }

        foreach ($data as $key => $value) {
            if (is_array($value)) {
                $this->sanitize($value);
            } else {
                $data[$key] = strip_tags($value);
                $data[$key] = htmlentities($value, ENT_QUOTES, 'UTF-8', false);
                $data[$key] = htmlspecialchars($value);
                $data[$key] = filter_var($value, FILTER_SANITIZE_SPECIAL_CHARS);
            }
        }
        return $data;
    }
}
