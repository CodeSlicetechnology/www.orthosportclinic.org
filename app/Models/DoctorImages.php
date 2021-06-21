<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DoctorImages extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'doctor_images';

    /**
     * @var array
    */
    protected $fillable = ['about_doctors_id', 'image_path', 'image_type', 'created_by', 'updated_by' ];


    public static function addDoctorImages($data)
    {
        $result = self::Create(
            [
                'about_doctors_id'  => $data['about_doctors_id'],
                'image_path'        => $data['image_path'],
                'image_type'        => $data['image_type'],
                'created_by'        => $data['userId'],
                'updated_by'        => $data['userId']
            ]
        );
        return $result->id;
    }

    /* Update DoctorImages based on Id
    */
    public static function updateDoctorImages($id, $data )
    {
        self::where('id', $id)->update( $data );
    }
}
