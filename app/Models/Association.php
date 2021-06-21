<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Association extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'associations';

    /**
     * @var array
    */
    protected $fillable = ['image_path', 'sequence', 'created_by', 'updated_by' ];


    public static function addAssociation($data)
    {
        $result = self::Create(
            [
                'image_path'    => $data['image_path'],
                'sequence'      => $data['sequence'],
                'created_by'    => $data['userId'],
                'updated_by'    => $data['userId']
            ]
        );
        return $result->id;
    }

    /* Update Association based on Id
    */
    public static function updateAssociation($id, $data )
    {
        self::where('id', $id)->update( $data );
    }

    
    public static function viewAssociation($id, $paginate) {
        $data = Association::select('id','image_path');

        if ($id != "NA") {
            $data = $data->where('id', '=', $id);
        }
        
        if ($paginate > 0) {
            $data = $data->paginate($paginate);
        } else {
            $data = $data->get();
        }
    
        return $data;
    }
}
