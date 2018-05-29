<?php

namespace App\Http\Controllers\Ajax;

use App\City;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;

class LiveSearchController extends Controller
{
    public function index(Request $request)
    {
        $value = $request->input('value');
        $table = $request->input('db_table');
        $columns = $request->input('db_columns');

        if (is_array($columns))
        {
            // посик в нескольких столбцах $columns
            $sql = "SELECT * FROM $table WHERE ";

            foreach ($columns as $column)
            {
                $sql .= "LOCATE ('$value', $column) OR ";
            }
            $sql = substr_replace($sql, '', -4);
            $res = DB::select($sql);

            return $res;

        } else {
            // поиск в одном столбце $columns
            $res = DB::select("SELECT * FROM $table WHERE LOCATE (:value, $columns)", ['value' => $value]);
            return $res;
        }
    }

    public function result(Request $request)
    {
        $template = $request->input('template');

        $arr = $request->input('obj');
        $arr['item_type'] = $request->input('item_type');

        return view($template)->with('data', $arr);
    }
}
