<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GalleryImages extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'gallery_images';

    /**
     * @var array
    */
    protected $fillable = ['image_path', 'sequence', 'description', 'created_by', 'updated_by' ];


    public static function addGalleryImages($data)
    {
        $result = self::Create(
            [
                'image_path'    => $data['image_path'],
                'sequence'      => $data['sequence'],
                'description'      => $data['description'],
                'created_by'    => $data['userId'],
                'updated_by'    => $data['userId']
            ]
        );
        return $result->id;
    }

    /* Update GalleryImages based on Id
    */
    public static function updateGalleryImages($id, $data )
    {
        self::where('id', $id)->update( $data );
    }

    
    public static function viewGalleryImages($id, $paginate) {
        $data = GalleryImages::select('id', 'image_path', 'sequence', 'description');

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
