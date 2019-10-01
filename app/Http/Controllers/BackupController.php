<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
//use mysqli;
//use MySQLDump;
//use MySQLImport;

class BackupController extends Controller
{
    public function index(){
     
       return view ('recursos.backup.index');

    } 
   
    public function exportar(){


    return view ('recursos.backup.exportar');

    }

    public function importar(){

   
    return view ('recursos.backup.importar');

    }


}
