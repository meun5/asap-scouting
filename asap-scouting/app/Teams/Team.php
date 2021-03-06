<?php

/**
 * FRC Scouting Application (Written for FRC Team 4646 ASAP)
 *
 * @author      Alexander Young <meun5@team4646.org>
 * @copyright   2016 Alexander Young
 * @link        https://github.com/meun5/asap-scouting
 * @license     https://github.com/meun5/asap-scouting/blob/master/LICENSE
 * @version     v1-beta
 */

namespace app\Teams;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Team extends Eloquent
{
    protected $table = "teams";

    protected $fillable = [
        "team_id",
        "details",  
        "fouls", 
        "auto_breach", 
        "auto_cross", 
        "auto_high", 
        "auto_low", 
        "tele_high", 
        "tele_low", 
        "tele_portcullis", 
        "tele_cheval_de_frise", 
        "tele_moat", 
        "tele_ramparts", 
        "tele_drawbridge", 
        "tele_sally_port", 
        "tele_rock_wall", 
        "tele_rough_terrain", 
        "tele_low_bar",
        "nonce",
    ];

    public static $defences = [
        "auto_breach", 
        "auto_cross", 
        "auto_high", 
        "auto_low", 
        "tele_high", 
        "tele_low", 
        "tele_portcullis", 
        "tele_cheval_de_frise", 
        "tele_moat", 
        "tele_ramparts", 
        "tele_drawbridge", 
        "tele_sally_port", 
        "tele_rock_wall", 
        "tele_rough_terrain", 
        "tele_low_bar",
    ];

    public static $auto = [
        "auto_breach", 
        "auto_cross", 
        "auto_high", 
        "auto_low",
    ];

    public static $tele = [
        "tele_high", 
        "tele_low", 
        "tele_portcullis", 
        "tele_cheval_de_frise", 
        "tele_moat", 
        "tele_ramparts", 
        "tele_drawbridge", 
        "tele_sally_port", 
        "tele_rock_wall", 
        "tele_rough_terrain", 
        "tele_low_bar",
    ];

    public static $defaults = [
        "name" => "Untitled Team",
        "defences" => [
            "portcullis" => false,
            "cheval_de_frise" => false,
            "moat" => false,
            "ramparts" => false,
            "drawbridge" => false,
            "sally_port" => false,
            "rock_wall" => false,
            "rough_terrain" => false,
            "low_bar" => false,
        ],
        "hprank" => "nonexistent",
        "images" => [],
        "comments" => [],
        "bot_type" => "offense",
        "runOnce" => true,
    ];

    public function getSortable()
    {
        unset($this->fillable[1]);
        array_pop($this->fillable);
        $this->fillable = array_values($this->fillable);
        return $this->fillable;
    }

    public function getDefences()
    {
        return self::$defences;
    }
}
