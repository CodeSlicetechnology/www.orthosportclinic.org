<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutSectionTwo extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'about_section_twos';

    /**
     * @var array
    */
    protected $fillable = ['about_doctors_id', 'title', 'description', 'created_by', 'updated_by' ];


    public static function addAboutSectionTwo($data)
    {
        $result = self::Create(
            [
                'about_doctors_id'      => $data['about_doctors_id'],
                'title'                 => $data['title'],
                'description'           => $data['description'],
                'created_by'            => $data['userId'],
                'updated_by'            => $data['userId']
            ]
        );
        return $result->id;
    }

    /* Update AboutSectionTwo based on Id
    */
    public static function updateAboutSectionTwo($id, $data )
    {
        self::where('id', $id)->update( $data );
    }

    
    public static function viewAboutSectionTwo($id) {
        $data = AboutSectionTwo::select('id', 'title', 'description', 'sequence');

        if ($id != "NA") {
            $data = $data->where('id', '=', $id);
        }
        
        $data = $data->get();
    
        return $data;
    }
}
