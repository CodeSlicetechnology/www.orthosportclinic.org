<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomeSectionOne extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'home_section_ones';

    /**
     * @var array
    */
    protected $fillable = ['main_title', 'sub_title_1', 'sub_title_2', 'image_path', 'created_by', 'updated_by' ];


    public static function addHomeSectionOne($data)
    {
        $result = self::Create(
            [
                'main_title'    => $data['main_title'],
                'sub_title_1'      => $data['sub_title_1'],
                'sub_title_2'  => $data['sub_title_2'],
                'image_path'  => $data['image_path'],
                'created_by'    => $data['userId'],
                'updated_by'    => $data['userId']
            ]
        );
        return $result->id;
    }

    /* Update HomeSectionOne based on Id
    */
    public static function updateHomeSectionOne($id, $data )
    {
        self::where('id', $id)->update( $data );
    }

    
    public static function viewHomeSectionOne($id) {
        $data = HomeSectionOne::select('id', 'main_title', 'sub_title_1', 'sub_title_2', 'image_path');

        if ($id != "NA") {
            $data = $data->where('id', '=', $id);
        }
        
        $data = $data->first();
    
        return $data;
    }
}
