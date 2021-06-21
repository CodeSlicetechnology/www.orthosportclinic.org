<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blogs extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'blogs';

    /**
     * @var array
    */
    protected $fillable = ['title', 'image_path', 'description', 'created_by', 'updated_by' ];


    public static function addBlogs($data)
    {
        $result = self::Create(
            [
                'title'    => $data['title'],
                'image_path'    => $data['image_path'],
                'description'      => $data['description'],
                'created_by'    => $data['userId'],
                'updated_by'    => $data['userId']
            ]
        );
        return $result->id;
    }

    /* Update Blogs based on Id
    */
    public static function updateBlogs($id, $data )
    {
        self::where('id', $id)->update( $data );
    }

    
    public static function viewBlogs($id, $paginate) {
        $data = Blogs::select('id','title','image_path','description');

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
