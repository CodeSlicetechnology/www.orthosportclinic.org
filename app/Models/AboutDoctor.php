<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\DoctorQualification;
use App\Models\DoctorImages;
use App\Models\AboutSectionOne;
use App\Models\AboutSectionTwo;
use App\Models\ResearchPublishImages;

class AboutDoctor extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'about_doctors';

    /**
     * @var array
    */
    protected $fillable = ['doctorName', 'subTitle', 'landing_desc', 'created_by', 'updated_by' ];


    public static function addAboutDoctor($data)
    {
        $result = self::Create(
            [
                'doctorName'    => $data['doctorName'],
                'subTitle'      => $data['subTitle'],
                'landing_desc'  => $data['landing_desc'],
                'created_by'    => $data['userId'],
                'updated_by'    => $data['userId']
            ]
        );
        return $result->id;
    }

    /* Update AboutDoctor based on Id
    */
    public static function updateAboutDoctor($id, $data )
    {
        self::where('id', $id)->update( $data );
    }

    
    public static function viewAboutDoctor($id, $pageFlag) {
        $data = AboutDoctor::select('id', 'doctorName', 'subTitle', 'landing_desc')
            ->with('doctorQualification')
            ->with('doctorImages');

        if ($pageFlag) {
            $data = $data->with('aboutSectionOne')
                ->with('aboutSectionTwo')
                ->with('researchPublishImages');
        }

        if ($id != "NA") {
            $data = $data->where('id', '=', $id);
        }
        
        $data = $data->first();
    
        return $data;
    }

    public function aboutSectionOne()
    {
        return $this->hasOne('App\Models\AboutSectionOne', 'about_doctors_id', 'id')
            ->select('about_section_ones.about_doctors_id', 'about_section_ones.description');
    }

    public function aboutSectionTwo()
    {
        return $this->hasMany('App\Models\AboutSectionTwo', 'about_doctors_id', 'id')
            ->select('about_section_twos.id', 'about_section_twos.about_doctors_id', 'about_section_twos.title', 'about_section_twos.description');
    }

    public function doctorQualification()
    {
        return $this->hasMany('App\Models\DoctorQualification', 'about_doctors_id', 'id')
            ->select('doctor_qualifications.about_doctors_id', 'doctor_qualifications.qualification', 'doctor_qualifications.sequence');
    }

    public function doctorImages()
    {
        return $this->hasMany('App\Models\DoctorImages', 'about_doctors_id', 'id')
            ->select('doctor_images.about_doctors_id', 'doctor_images.image_path', 'doctor_images.image_type');
    }

    public function researchPublishImages()
    {
        return $this->hasMany('App\Models\ResearchPublishImages', 'about_doctors_id', 'id')
            ->select('research_publish_images.about_doctors_id', 'research_publish_images.image_path');
    }
}
