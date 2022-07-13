<?php
namespace App\Http\Controllers\Contacts;


use App\Services\Contacts\Service;
use App\Http\Controllers\Controller;

class BaseController extends Controller
{
    public $service;

    public function __construct(Service $service) {
        $this->service = $service;
    }
}