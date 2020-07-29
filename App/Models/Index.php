<?php
namespace App\Models;
use \App\DB\Sql;
use \App\Model;

class Index extends Model {
    public static function siteData(){
        $sql = new Sql();
        $meta = $sql->select("SELECT * FROM site_meta");
        $sociais = $sql->select("SELECT * FROM site_sociais");
        return array(
            'meta' => $meta[0],
            'sociais' => $sociais[0]
        );
    }
    public static function listMenu(){
        $sql = new Sql();
        return $sql->select("SELECT * FROM site_menu WHERE status = :STS", array(
            'STS' => 1
        ));
    }
    public static function listServices(){
        $sql = new Sql();
        $services = $sql->select("SELECT * FROM site_services");
        $subs = $sql->select("SELECT * FROM site_services_subs");
        return array(
            'service' => $services,
            'sub' => $subs
        );
    }
    public static function listTimeline(){
        $sql = new Sql();
        return $sql->select("SELECT * FROM site_timeline");
    }
    public static function listPorts(){
        $sql = new Sql();
        return $sql->select("SELECT * FROM site_portfolios WHERE status = '1' ORDER BY id DESC LIMIT 3");
    }
    public static function listClients(){
        $sql = new Sql();
        return $sql->select("SELECT * FROM site_cliepart");
    }
}
