<?php

 use Illuminate\Support\Facades\DB;




    // helper dibawah diperuntukan untuk mendapatkan id dari row terakhir
    // PERINGATAN Helper dibawh hanya berlaku untuk row terakhir dari satu Table
    function getlatestid(){

        return DB::getPdo()->lastInsertId();
    }



?>