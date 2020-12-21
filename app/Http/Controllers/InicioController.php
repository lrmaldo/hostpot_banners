<?php

namespace App\Http\Controllers;

use App\Carrusel;
use App\Publicidad;
use Illuminate\Http\Request;
use RouterOS\Client;
use RouterOS\Config;
use RouterOS\Query;



class InicioController extends Controller
{
    public function Inicio()
    {
        /*   $config = new \RouterOS\Config([
            'host' => '10.5.50.1',
            'user' => 'admin',
            'pass' => '',
            'port' => 8728,
        ]); */

        // Create config object with parameters
        $config =
            (new Config())
            ->set('host', '10.5.50.1')
            ->set('port', 8728)
            ->set('pass', '')
            ->set('user', 'admin');

        // Initiate client with config object
        $client = new Client($config);
        dump($config);
    }

    public function user()
    {
        $config =
            (new Config())
            ->set('host', '10.5.50.1')
            ->set('port', 8728)
            ->set('pass', '')
            ->set('user', 'admin');

        // Initiate client with config object
        $client = new Client($config);

        // Build query for details about user profile
        //$query = new Query('/ip/hotspot/user/profile/print');
        $query = new Query('/ip/route/print');
        // Add user
        $out = $client->query($query)->read();
        dd($out);
    }

    public function ip_add()
    {

        $config =
            (new Config())
            ->set('host', '10.5.50.1')
            ->set('port', 8728)
            ->set('pass', '')
            ->set('user', 'admin');

            $client = new Client($config);
        // Build query
        //$query = new Query('/ip/address/print');
        $query = new Query('/ip/route/print');
        // Send query to RouterOS
        $response = $client->query($query)->read();
        print_r($response);
    }

   public function host(Request $request){
    $mac=$request['mac'];
    $ip=$request['ip'];
    $username=$request['username'];
    $linklogin=$request['link-login'];
    $linkorig=$request['link-orig'];
    $error=$request['error'];
    $chapid=$request['chap-id'];
    $chapchallenge=$request['chap-challenge'];
    $linkloginonly=$request['link-login-only'];
    $linkorigesc=$request['link-orig-esc'];
    $macesc=$request['mac-esc'];

    $carruseles = Carrusel::all();
    $banners = Publicidad::all();
       return view('hostpot/loginH',compact('carruseles','banners'));

       /* return view('hostpot/loginH',compact(
            'mac',
            'ip',
            'username',
            'linklogin',
            'linkorig',
            'error',
            'chapid',
            'chapchallenge',
            'chapchallenge',
            'linkloginonly',
            'linkorigesc',
            'macesc')); */

      /*  $mac=$_POST['mac'];
       $ip=$_POST['ip'];
       $username=$_POST['username'];
       $linklogin=$_POST['link-login'];
       $linkorig=$_POST['link-orig'];
       $error=$_POST['error'];
       $chapid=$_POST['chap-id'];
       $chapchallenge=$_POST['chap-challenge'];
       $linkloginonly=$_POST['link-login-only'];
       $linkorigesc=$_POST['link-orig-esc'];
       $macesc=$_POST['mac-esc']; */
   }

   public function hotspot_zona($id){
    $carruseles = Carrusel::where('zona_id',$id)->get();
    $id_zona = $id;
    return view('hostpot.LoginZona',compact('carruseles','id_zona'));
   }

   public function hotspot_zona_video($id){
    $carruseles = Carrusel::where('zona_id',$id)->get();
    return view('hostpot.LoginZonaVideo',compact('carruseles'));
   }


}
