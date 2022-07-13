<?php
namespace App\Http\Controllers\Hobbie;

use App\Services\Hobbie\Service;
use App\Http\Controllers\Controller;

class BaseController extends Controller
{
    public $service;

    public function __construct(Service $service) {
        $this->service = $service;
    }
}