<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutSectionOne extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'about_section_ones';

    /**
     * @var array
    */
    protected $fillable = ['about_doctors_id', 'description', 'created_by', 'updated_by' ];


    public static function addAboutSectionOne($data)
    {
        $result = self::Create(
            [
                'about_doctors_id'    => $data['about_doctors_id'],
                'description'      => $data['description'],
                'created_by'    => $data['userId'],
                'updated_by'    => $data['userId']
            ]
        );
        return $result->id;
    }

    /* Update AboutSectionOne based on Id
    */
    public static function updateAboutSectionOne($id, $data )
    {
        self::where('id', $id)->update( $data );
    }
}
