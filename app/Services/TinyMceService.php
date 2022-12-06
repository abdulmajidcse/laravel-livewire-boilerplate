<?php

namespace App\Services;

use Illuminate\Support\Str;

trait TinyMceService
{
    public function tinyMceReplaceUrl(string $content)
    {
        $replaceText = 'src="' . url('storage');

        $search  = array('src="storage', 'src="/storage', 'src="../storage', 'src="../../storage', 'src="../../../storage', 'src="../../../../storage');
        $replace = array($replaceText, $replaceText, $replaceText, $replaceText, $replaceText, $replaceText);
        return Str::replace($search, $replace, $content);
    }
}
