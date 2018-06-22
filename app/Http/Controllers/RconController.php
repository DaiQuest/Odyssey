<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use daiquest\Rcon;
use Thedudeguy\Rcon;
//require_once ('./rcon.php');

class RconController extends Controller
{
    public function RconConnect() {
        $host = '192.99.5.44'; // Server host name or IP
        $port = 25575;                      // Port rcon is listening on
        $password = '5148546'; // rcon.password setting set in server.properties
        $timeout = 10;                       // How long to timeout.
        $isconnected = false;
        $rcon = new Rcon($host, $port, $password, $timeout);
        if ($rcon->connect())
        {
            $isconnected = true;
        }
        $result = [ $isconnected , $rcon];
        return $result;
    }


    public function index () {
        $isconnected = $this->RconConnect();

        return view('rcon/index' , ['isconnected' => $isconnected[0]]);
    }


    public function ExecuteCommand(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'cmd' => 'required|string',
        ]);
        $RconConnect = $this->RconConnect();
        if ($RconConnect[0] === true) {
            $data = $request->all();
            $rcon = $RconConnect[1];
            $cm2 = $rcon->sendCommand('say admin ' . $data['name'] . '....');
            $cmd = $rcon->sendCommand($data['cmd']);

        }

        if ($cmd && $cm2 === false) {
            $request->session()->flash('message', 'une erreur est survenue');
            var_dump($data['name']);
            var_dump($cmd);
            return redirect()->route('RconCmd');
        } else {
            $request->session()->flash('message', 'say admin ' . $data['name'] . '.... / ' . $data['cmd'] );
            return redirect()->route('Rcon');
        }
    }







}
