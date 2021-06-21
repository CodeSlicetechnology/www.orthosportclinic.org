<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DoctorQualification extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'doctor_qualifications';

    /**
     * @var array
    */
    protected $fillable = ['about_doctors_id', 'qualification', 'sequence', 'created_by', 'updated_by' ];


    public static function addDoctorQualification($data)
    {
        $result = self::Create(
            [
                'about_doctors_id'  => $data['about_doctors_id'],
                'qualification'     => $data['qualification'],
                'sequence'          => $data['sequence'],
                'created_by'        => $data['userId'],
                'updated_by'        => $data['userId']
            ]
        );
        return $result->id;
    }

    /* Update DoctorQualification based on Id
    */
    public static function updateDoctorQualification($id, $data )
    {
        self::where('id', $id)->update( $data );
    }
}
