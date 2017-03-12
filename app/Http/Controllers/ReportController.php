<?php

namespace App\Http\Controllers;

use App\action;
use App\Target;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function ActionAndTarget() {
        $action = action::all();
        $targets = Target::all();
        $res = [];
        foreach ($action as $key => $act) {
            $temp = [
                'y' => $act->recieveDate . '',
                'action' => $act['target']
            ];
            foreach ($targets as $target) {
                if( $act->recieveDate == $target->recieveDate) {
                    $temp['target'] = $target['target'];
                }
            }
            $res[] = $temp;
        }
        return view('report.action-target')->with('response', $res);
    }
}
