<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MinecraftAPI\MinecraftQuery;
use App\MinecraftAPI\MinecraftQueryException;

class IndexController extends Controller
{
    function layout() {
        $query = $this->initializeConnection();
        return view('pages.index')->with('query', $query);
    }

    function initializeConnection() {
        $query = new MinecraftQuery( );

        try
        {
            $query->Connect( '109.73.52.223', 25565 );

            return $query;
            //print_r( $Query->GetInfo( ) );
            //print_r( $Query->GetPlayers( ) );
        }
        catch( MinecraftQueryException $e )
        {
            echo $e->getMessage( );
        }
    }
}
