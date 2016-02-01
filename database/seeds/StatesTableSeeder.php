<?php

use Illuminate\Database\Seeder;

class StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('states')->delete();

        $states = array(
            // Canada
            array('code' => 'CA', 'abbreviation' => 'AB', 'name' => 'Alberta'),
            array('code' => 'CA', 'abbreviation' => 'BC', 'name' => 'British Columbia'),
            array('code' => 'CA', 'abbreviation' => 'MB', 'name' => 'Manitoba'),
            array('code' => 'CA', 'abbreviation' => 'NB', 'name' => 'New Brunswick'),
            array('code' => 'CA', 'abbreviation' => 'NL', 'name' => 'Newfoundland and Labrador'),
            array('code' => 'CA', 'abbreviation' => 'NT', 'name' => 'Northwest Territories'),
            array('code' => 'CA', 'abbreviation' => 'NS', 'name' => 'Nova Scotia'),
            array('code' => 'CA', 'abbreviation' => 'NU', 'name' => 'Nunavut'),
            array('code' => 'CA', 'abbreviation' => 'ON', 'name' => 'Ontario'),
            array('code' => 'CA', 'abbreviation' => 'PE', 'name' => 'Prince Edward Island'),
            array('code' => 'CA', 'abbreviation' => 'QC', 'name' => 'Quebec'),
            array('code' => 'CA', 'abbreviation' => 'SK', 'name' => 'Saskatchewan'),
            array('code' => 'CA', 'abbreviation' => 'YT', 'name' => 'Yukon'),

            // USA
            array('code' => 'US', 'abbreviation' => 'AL', 'name' => 'Alabama'),
            array('code' => 'US', 'abbreviation' => 'AK', 'name' => 'Alaska'),
            array('code' => 'US', 'abbreviation' => 'AZ', 'name' => 'Arizona'),
            array('code' => 'US', 'abbreviation' => 'AR', 'name' => 'Arkansas'),
            array('code' => 'US', 'abbreviation' => 'CA', 'name' => 'California'),
            array('code' => 'US', 'abbreviation' => 'CO', 'name' => 'Colorado'),
            array('code' => 'US', 'abbreviation' => 'CT', 'name' => 'Connecticut'),
            array('code' => 'US', 'abbreviation' => 'DE', 'name' => 'Delaware'),
            array('code' => 'US', 'abbreviation' => 'FL', 'name' => 'Florida'),
            array('code' => 'US', 'abbreviation' => 'GA', 'name' => 'Georgia'),
            array('code' => 'US', 'abbreviation' => 'HI', 'name' => 'Hawaii'),
            array('code' => 'US', 'abbreviation' => 'ID', 'name' => 'Idaho'),
            array('code' => 'US', 'abbreviation' => 'IL', 'name' => 'Illinois'),
            array('code' => 'US', 'abbreviation' => 'IN', 'name' => 'Indiana'),
            array('code' => 'US', 'abbreviation' => 'IA', 'name' => 'Iowa'),
            array('code' => 'US', 'abbreviation' => 'KS', 'name' => 'Kansas'),
            array('code' => 'US', 'abbreviation' => 'KY', 'name' => 'Kentucky'),
            array('code' => 'US', 'abbreviation' => 'LA', 'name' => 'Louisiana'),
            array('code' => 'US', 'abbreviation' => 'ME', 'name' => 'Maine'),
            array('code' => 'US', 'abbreviation' => 'MD', 'name' => 'Maryland'),
            array('code' => 'US', 'abbreviation' => 'MA', 'name' => 'Massachusetts'),
            array('code' => 'US', 'abbreviation' => 'MI', 'name' => 'Michigan'),
            array('code' => 'US', 'abbreviation' => 'MN', 'name' => 'Minnesota'),
            array('code' => 'US', 'abbreviation' => 'MS', 'name' => 'Mississippi'),
            array('code' => 'US', 'abbreviation' => 'MO', 'name' => 'Missouri'),
            array('code' => 'US', 'abbreviation' => 'MT', 'name' => 'Montana'),
            array('code' => 'US', 'abbreviation' => 'NE', 'name' => 'Nebraska'),
            array('code' => 'US', 'abbreviation' => 'NV', 'name' => 'Nevada'),
            array('code' => 'US', 'abbreviation' => 'NH', 'name' => 'New Hampshire'),
            array('code' => 'US', 'abbreviation' => 'NJ', 'name' => 'New Jersey'),
            array('code' => 'US', 'abbreviation' => 'NM', 'name' => 'New Mexico'),
            array('code' => 'US', 'abbreviation' => 'NY', 'name' => 'New York'),
            array('code' => 'US', 'abbreviation' => 'NC', 'name' => 'NC'),
            array('code' => 'US', 'abbreviation' => 'ND', 'name' => 'North Dakota'),
            array('code' => 'US', 'abbreviation' => 'OH', 'name' => 'Ohio'),
            array('code' => 'US', 'abbreviation' => 'OK', 'name' => 'Oklahoma'),
            array('code' => 'US', 'abbreviation' => 'OR', 'name' => 'Oregon'),
            array('code' => 'US', 'abbreviation' => 'PA', 'name' => 'Pennsylvania'),
            array('code' => 'US', 'abbreviation' => 'RI', 'name' => 'Rhode Island'),
            array('code' => 'US', 'abbreviation' => 'SC', 'name' => 'South Carolina'),
            array('code' => 'US', 'abbreviation' => 'SD', 'name' => 'South Dakota'),
            array('code' => 'US', 'abbreviation' => 'TN', 'name' => 'Tennessee'),
            array('code' => 'US', 'abbreviation' => 'TX', 'name' => 'Texas'),
            array('code' => 'US', 'abbreviation' => 'UT', 'name' => 'Utah'),
            array('code' => 'US', 'abbreviation' => 'VT', 'name' => 'Vermont'),
            array('code' => 'US', 'abbreviation' => 'VA', 'name' => 'Virginia'),
            array('code' => 'US', 'abbreviation' => 'WA', 'name' => 'Washington'),
            array('code' => 'US', 'abbreviation' => 'WV', 'name' => 'West Virginia'),
            array('code' => 'US', 'abbreviation' => 'WI', 'name' => 'Wisconsin'),
            array('code' => 'US', 'abbreviation' => 'WY', 'name' => 'Wyoming'),
            array('code' => 'US', 'abbreviation' => 'AS', 'name' => 'American Samoa'),
            array('code' => 'US', 'abbreviation' => 'DC', 'name' => 'District of Columbia'),
            array('code' => 'US', 'abbreviation' => 'GU', 'name' => 'Guam'),
            array('code' => 'US', 'abbreviation' => 'MP', 'name' => 'Northern Mariana Islands'),
            array('code' => 'US', 'abbreviation' => 'PR', 'name' => 'Puerto Rico'),
            array('code' => 'US', 'abbreviation' => 'VI', 'name' => 'United States Virgin Islands'),
        );

        DB::table('states')->insert($states);
    }
}
