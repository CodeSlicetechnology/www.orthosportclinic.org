<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GalleryVideos extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'gallery_videos';

    /**
     * @var array
    */
    protected $fillable = ['video_path', 'created_by', 'updated_by' ];


    public static function addGalleryVideos($data)
    {
        $result = self::Create(
            [
                'video_path'    => $data['video_path'],
                'created_by'    => $data['userId'],
                'updated_by'    => $data['userId']
            ]
        );
        return $result->id;
    }

    /* Update GalleryVideos based on Id
    */
    public static function updateGalleryVideos($id, $data )
    {
        self::where('id', $id)->update( $data );
    }

    
    public static function viewGalleryVideos($id, $paginate) {
        $data = GalleryVideos::select('id', 'video_path');

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
