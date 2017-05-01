<?php

namespace prison;

use Illuminate\Database\Eloquent\Model;

class Prisoner extends Model
{
  protected $fillable= ['first_name', 'middle_name', 'last_name', 'national_id', 'file_no',
                        'home_county', 'home_location', 'next_kin', 'kin_contacts', 'prisoner_mobile', 'adm_date', 'crime', 'gender', 'dob', 'profile_pix', 'medquiz', 'medical_history', 'weight', 'height'];
}
