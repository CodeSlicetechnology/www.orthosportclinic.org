<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactDetails extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'contact_details';

    /**
     * @var array
    */
    protected $fillable = ['email', 'country_code', 'phone', 'timings', 'appointment_link', 'created_by', 'updated_by'];


    public static function addContactDetails($data)
    {
        $result = self::Create(
            [
                'email'    => $data['email'],
                'country_code'      => $data['country_code'],
                'phone'      => $data['phone'],
                'timings'      => $data['timings'],
                'appointment_link'      => $data['appointment_link'],
                'created_by'    => $data['userId'],
                'updated_by'    => $data['userId']
            ]
        );
        return $result->id;
    }

    /* Update ContactDetails based on Id
    */
    public static function updateContactDetails($id, $data )
    {
        self::where('id', $id)->update( $data );
    }

    
    public static function viewContactDetails($id) {
        $data = ContactDetails::select('id', 'email', 'country_code', 'phone', 'timings', 'appointment_link')
                ->where('id', '=', $id)
                ->first();

        return $data;
    }
}
