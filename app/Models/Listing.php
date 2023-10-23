<?php
  namespace App\Models;

class Listing {
    public static function all() {
        return [
            [ 
                'id' => 1,
                'title' => 'Listing one',
                'description' => 'For managing dependencies, Laravel uses composer. Make sure you have a Composer installed on your system before you install Laravel. In this chapter, you will see the installation process of Laravel.'
            ],
            [
                'id' => 2,
                'title' => 'Listing two',
                'description' => 'For managing dependencies, Laravel uses composer. Make sure you have a Composer installed on your system before you install Laravel. In this chapter, you will see the installation process of Laravel.'
            ]
            ] ;
    }

    public static function find($id) {
        $listings = self::all();

        foreach($listings as $listing) {
            if($listing['id'] == $id) {
                return $listing;
        } 
    } 
 }
}