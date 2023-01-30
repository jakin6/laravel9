<?php 
namespace App\Models;

class Listing{
    public static function all(){
        return  [
            [
            'id'=>1,
            'title'=>'Listing one',
            'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus consectetur commodi repellendus sint eveniet tempore id tempora 
            molestiae dolorem ex praesentium, recusandae vero ipsum suscipit temporibus voluptate vel harum eos.'
        ],
        [
            'id'=>2,
            'title'=>'Listing one',
            'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus consectetur commodi repellendus sint eveniet tempore id tempora 
            molestiae dolorem ex praesentium, recusandae vero ipsum suscipit temporibus voluptate vel harum eos.'
        ],
        [
            'id'=>3,
            'title'=>'Listing one',
            'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus consectetur commodi repellendus sint eveniet tempore id tempora 
            molestiae dolorem ex praesentium, recusandae vero ipsum suscipit temporibus voluptate vel harum eos.'
        ],];
    }

    public static function find($id){
        $listings=self::all();
        foreach($listings as $listing){
            if($listing['id']==$id){
              return $listing;  
            }
        }
    }
}

?>