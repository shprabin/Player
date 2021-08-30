<?php

namespace App\Models;

use Exception;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    /**
     * Check if the uploaded file is Json Type or not
     */
    public static function is_valid_file_type($file)
    {
        if ($file->getMimeType() == "application/json")
            return  true;
        else
            throw new Exception("Error: File type should be .json and Content should be well Formatted Json");
    }

    public static function parseJson($filepath)
    {
        $players = [];
        $json_string = file_get_contents($filepath);
        $json_arr = json_decode($json_string, true);
        print_r($json_arr);
        if (!json_last_error()) {
            foreach ($json_arr["Players"] as $p) {
                print_r($p);
                $player = new Player();
                $player->name = $p["Name"];
                $player->age = $p["Age"];
                $player->city = $p["Location"]["City"];
                $player->province = $p["Location"]["Province"];
                $player->country =  $p["Location"]["Country"];
                $players[] = $player;
            }
            return $players;
        } else {
            throw new Exception("JSON Parser Error:" . json_last_error_msg());
        }
    }
}
