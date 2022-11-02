<?php
namespace Muneeb\Inspire\Controllers;

use Illuminate\Http\Request;
use Muneeb\Inspire\Inspire;

class InspirationController
{
    public function __invoke(Inspire $inspire)
    {
        $quote = $inspire->justDoIt();
        return view('inspire::index', compact('quote'));
    }
}
