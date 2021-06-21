<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ConditionsAndTreatments extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'conditions_and_treatments';

    /**
     * @var array
    */
    protected $fillable = ['title', 'description', 'sequence', 'created_by', 'updated_by' ];


    public static function addConditionsAndTreatments($data)
    {
        $result = self::Create(
            [
                'title'    => $data['title'],
                'description'      => $data['description'],
                'sequence'  => $data['sequence'],
                'created_by'    => $data['userId'],
                'updated_by'    => $data['userId']
            ]
        );
        return $result->id;
    }

    /* Update ConditionsAndTreatments based on Id
    */
    public static function updateConditionsAndTreatments($id, $data )
    {
        self::where('id', $id)->update( $data );
    }

    
    public static function viewConditionsAndTreatments($id) {
        $data = ConditionsAndTreatments::select('id', 'title', 'description', 'sequence');

        if ($id != "NA") {
            $data = $data->where('id', '=', $id);
        }
        
        $data = $data->get();
    
        return $data;
    }
}
