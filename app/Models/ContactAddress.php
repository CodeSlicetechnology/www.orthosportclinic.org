<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactAddress extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'contact_addresses';

    /**
     * @var array
    */
    protected $fillable = ['address_title', 'address', 'created_by', 'updated_by'];


    public static function addContactAddress($data)
    {
        $result = self::Create(
            [
                'address_title'    => $data['address_title'],
                'address'      => $data['address'],
                'created_by'      => $data['userId'],
                'updated_by'      => $data['userId']
            ]
        );
        return $result->id;
    }

    /* Update ContactAddress based on Id
    */
    public static function updateContactAddress($id, $data )
    {
        self::where('id', $id)->update( $data );
    }

    
    public static function viewContactAddress($id, $paginate) {
        $data = ContactAddress::select('id', 'address_title', 'address');

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
