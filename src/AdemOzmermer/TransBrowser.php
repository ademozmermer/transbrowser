<?php


namespace AdemOzmermer\TransBrowser;


use Illuminate\Http\Request;

class TransBrowser
{
    /**
     * @param Request $request
     * @return string
     *
     */
    protected function detectLang(Request $request): string
    {
        $lang = substr($request->server('HTTP_ACCEPT_LANGUAGE'), 0, 2);

        $acceptLang = config('transbrowser.all_langs');

        $lang = in_array($lang, $acceptLang) ? $lang : config('transbrowser.default_lang');

        return $lang;

    }
}
