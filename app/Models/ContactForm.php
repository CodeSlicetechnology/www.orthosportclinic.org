<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactForm extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'contact_forms';

    /**
     * @var array
    */
    protected $fillable = ['name', 'email', 'phone', 'subject', 'message'];


    public static function addContactForm($data)
    {
        $result = self::Create(
            [
                'name'    => $data['name'],
                'email'      => $data['email'],
                'phone'      => $data['phone'],
                'subject'      => $data['subject'],
                'message'      => $data['message']
            ]
        );
        return $result->id;
    }

    /* Update ContactForm based on Id
    */
    public static function updateContactForm($id, $data )
    {
        self::where('id', $id)->update( $data );
    }

    
    public static function viewContactForm($id, $paginate) {
        $data = ContactForm::select('id', 'name', 'email', 'phone', 'subject', 'message');

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
