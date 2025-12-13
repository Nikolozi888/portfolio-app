<?php

namespace App\Traits;

trait RedirectResponse
{
    public function successRedirect($route, $message = "წარმატებულად შესრულდა")
    {
        return redirect()->route($route)->with('message', $message)->with('type', 'success');
    }

    public function infoRedirect($route, $message = "ინფორმაცია")
    {
        return redirect()->route($route)->with('message', $message)->with('type', 'info');
    }

    public function warningRedirect($route, $message = "გაფრთხილება!")
    {
        return redirect()->route($route)->with('message', $message)->with('type', 'warning');
    }

    public function errorRedirect($route, $message = "შეცდომა!")
    {
        return redirect()->route($route)->with('message', $message)->with('type', 'error');
    }
}
