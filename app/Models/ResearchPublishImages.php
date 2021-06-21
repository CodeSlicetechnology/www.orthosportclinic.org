<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ResearchPublishImages extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'research_publish_images';

    /**
     * @var array
    */
    protected $fillable = ['about_doctors_id', 'image_path', 'sequence', 'created_by', 'updated_by' ];


    public static function addResearchPublishImages($data)
    {
        $result = self::Create(
            [
                'about_doctors_id'  => $data['about_doctors_id'],
                'image_path'        => $data['image_path'],
                'sequence'        => $data['sequence'],
                'created_by'        => $data['userId'],
                'updated_by'        => $data['userId']
            ]
        );
        return $result->id;
    }

    /* Update ResearchPublishImages based on Id
    */
    public static function updateResearchPublishImages($id, $data )
    {
        self::where('id', $id)->update( $data );
    }

    
    public static function viewResearchPublishImages($id, $paginate) {
        $data = ResearchPublishImages::select('id','image_path', 'sequence');

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
