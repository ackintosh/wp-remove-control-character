<?php
class WPRemoveControlCharacter
{
    /**
     * remove control character
     * http://qiita.com/suin/items/fd4c0fc808316793f9cc
     *
     * @param   string  $content
     * @return  string
     */
    public function remove($content)
    {
        return preg_replace('/[\x00-\x09\x0B\x0C\x0E-\x1F\x7F]/', '', $content);
    }
}
