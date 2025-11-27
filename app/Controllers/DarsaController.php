<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Darsa;

class DarsaController extends BaseController
{

    public function create()
    {
        // dd($this->request->getVar());

        helper('form');

        $drs = new Darsa();

        $type = $this->request->getVar('type');
        // dd($type);

        $valid = $this->validate(
            [
                'name' => 'required',
            ],
        );

        // dd($valid);
        if (!$valid) {
            return redirect()->back()->with('toast', 'error')->with('title', lang('app.sorry'))->with('text', lang('error.errorOccured'));
        }


        $data = [
            'category_id' => $this->request->getVar('category_id'),
            'name' => $this->request->getVar('name'),
        ];
        // dd($data);

        $drs->save($data);

        return redirect()->back()->with('toast', 'success')->with('title', lang('app.done'))->with('text', lang('app.successfully'));
    }
}
