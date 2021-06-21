<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CommonProcedures extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'common_procedures';

    /**
     * @var array
    */
    protected $fillable = ['title', 'description', 'sequence', 'created_by', 'updated_by' ];


    public static function addCommonProcedures($data)
    {
        $result = self::Create(
            [
                'title'         => $data['title'],
                'description'   => $data['description'],
                'sequence'      => $data['sequence'],
                'created_by'    => $data['userId'],
                'updated_by'    => $data['userId']
            ]
        );
        return $result->id;
    }

    /* Update CommonProcedures based on Id
    */
    public static function updateCommonProcedures($id, $data )
    {
        self::where('id', $id)->update( $data );
    }

    
    public static function viewCommonProcedures($id, $paginate) {
        $data = CommonProcedures::select('id','title','description');

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
