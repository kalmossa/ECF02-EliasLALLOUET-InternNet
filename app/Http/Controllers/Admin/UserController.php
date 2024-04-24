<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
       return $this->index();
    }

    public function create()
    {
        return $this->create();
    }

    public function store(Request $request)
    {
        return $this->store();
    }

    public function show(string $id)
    {
        return $this->show();
    }


    public function edit(string $id)
    {
        return $this->edit();
    }

    public function update(Request $request, string $id)
    {
        return $this->update();
    }

    public function delete(string $id)
    {
        return $this->delete();
    }
}
