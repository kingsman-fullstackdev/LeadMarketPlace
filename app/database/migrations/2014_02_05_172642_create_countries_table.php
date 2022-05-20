<?php

use Illuminate\Database\Migrations\Migration;

class CreateCountriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('countries',function($table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('fips',2);
			$table->string('iso2',2);
			$table->string('iso3',3);
			$table->integer('un');
			$table->decimal('area',10,4);
			$table->decimal('pop2005',13,4);
			$table->integer('region');
			$table->integer('subregion');
			$table->decimal('lon',4,4);
			$table->decimal('lat',4,4);
		});

		DB::statement("ALTER TABLE countries ADD COLUMN shape GEOMETRY"); 

		DB::table('countries')->insert(array(

							array("iso2"=>"AF", "name"=>"Afghanistan"),
							array("iso2"=>"AL", "name"=>"Albania"),
							array("iso2"=>"DZ", "name"=>"Algeria"),
							array("iso2"=>"AS", "name"=>"American Samoa"),
							array("iso2"=>"AD", "name"=>"Andorra"),
							array("iso2"=>"AO", "name"=>"Angola"),
							array("iso2"=>"AI", "name"=>"Anguilla"),
							array("iso2"=>"AQ", "name"=>"Antarctica"),
							array("iso2"=>"AG", "name"=>"Antigua and Barbuda"),
							array("iso2"=>"AR", "name"=>"Argentina"),
							array("iso2"=>"AM", "name"=>"Armenia"),
							array("iso2"=>"AW", "name"=>"Aruba"),
							array("iso2"=>"AU", "name"=>"Australia"),
							array("iso2"=>"AT", "name"=>"Austria"),
							array("iso2"=>"AZ", "name"=>"Azerbaijan"),
							array("iso2"=>"BS", "name"=>"Bahamas"),
							array("iso2"=>"BH", "name"=>"Bahrain"),
							array("iso2"=>"BD", "name"=>"Bangladesh"),
							array("iso2"=>"BB", "name"=>"Barbados"),
							array("iso2"=>"BY", "name"=>"Belarus"),
							array("iso2"=>"BE", "name"=>"Belgium"),
							array("iso2"=>"BZ", "name"=>"Belize"),
							array("iso2"=>"BJ", "name"=>"Benin"),
							array("iso2"=>"BM", "name"=>"Bermuda"),
							array("iso2"=>"BT", "name"=>"Bhutan"),
							array("iso2"=>"BO", "name"=>"Bolivia"),
							array("iso2"=>"BA", "name"=>"Bosnia and Herzegowina"),
							array("iso2"=>"BW", "name"=>"Botswana"),
							array("iso2"=>"BV", "name"=>"Bouvet Island"),
							array("iso2"=>"BR", "name"=>"Brazil"),
							array("iso2"=>"IO", "name"=>"British Indian Ocean Territory"),
							array("iso2"=>"BN", "name"=>"Brunei Darussalam"),
							array("iso2"=>"BG", "name"=>"Bulgaria"),
							array("iso2"=>"BF", "name"=>"Burkina Faso"),
							array("iso2"=>"BI", "name"=>"Burundi"),
							array("iso2"=>"KH", "name"=>"Cambodia"),
							array("iso2"=>"CM", "name"=>"Cameroon"),
							array("iso2"=>"CA", "name"=>"Canada"),
							array("iso2"=>"CV", "name"=>"Cape Verde"),
							array("iso2"=>"KY", "name"=>"Cayman Islands"),
							array("iso2"=>"CF", "name"=>"Central African Republic"),
							array("iso2"=>"TD", "name"=>"Chad"),
							array("iso2"=>"CL", "name"=>"Chile"),
							array("iso2"=>"CN", "name"=>"China"),
							array("iso2"=>"CX", "name"=>"Christmas Island"),
							array("iso2"=>"CC", "name"=>"Cocos (Keeling) Islands"),
							array("iso2"=>"CO", "name"=>"Colombia"),
							array("iso2"=>"KM", "name"=>"Comoros"),
							array("iso2"=>"CG", "name"=>"Congo"),
							array("iso2"=>"CD", "name"=>"Congo, the Democratic Republic of the"),
							array("iso2"=>"CK", "name"=>"Cook Islands"),
							array("iso2"=>"CR", "name"=>"Costa Rica"),
							array("iso2"=>"CI", "name"=>"Cote d'Ivoire"),
							array("iso2"=>"HR", "name"=>"Croatia (Hrvatska)"),
							array("iso2"=>"CU", "name"=>"Cuba"),
							array("iso2"=>"CY", "name"=>"Cyprus"),
							array("iso2"=>"CZ", "name"=>"Czech Republic"),
							array("iso2"=>"DK", "name"=>"Denmark"),
							array("iso2"=>"DJ", "name"=>"Djibouti"),
							array("iso2"=>"DM", "name"=>"Dominica"),
							array("iso2"=>"DO", "name"=>"Dominican Republic"),
							array("iso2"=>"TP", "name"=>"East Timor"),
							array("iso2"=>"EC", "name"=>"Ecuador"),
							array("iso2"=>"EG", "name"=>"Egypt"),
							array("iso2"=>"SV", "name"=>"El Salvador"),
							array("iso2"=>"GQ", "name"=>"Equatorial Guinea"),
							array("iso2"=>"ER", "name"=>"Eritrea"),
							array("iso2"=>"EE", "name"=>"Estonia"),
							array("iso2"=>"ET", "name"=>"Ethiopia"),
							array("iso2"=>"FK", "name"=>"Falkland Islands (Malvinas)"),
							array("iso2"=>"FO", "name"=>"Faroe Islands"),
							array("iso2"=>"FJ", "name"=>"Fiji"),
							array("iso2"=>"FI", "name"=>"Finland"),
							array("iso2"=>"FR", "name"=>"France"),
							array("iso2"=>"FX", "name"=>"France, Metropolitan"),
							array("iso2"=>"GF", "name"=>"French Guiana"),
							array("iso2"=>"PF", "name"=>"French Polynesia"),
							array("iso2"=>"TF", "name"=>"French Southern Territories"),
							array("iso2"=>"GA", "name"=>"Gabon"),
							array("iso2"=>"GM", "name"=>"Gambia"),
							array("iso2"=>"GE", "name"=>"Georgia"),
							array("iso2"=>"DE", "name"=>"Germany"),
							array("iso2"=>"GH", "name"=>"Ghana"),
							array("iso2"=>"GI", "name"=>"Gibraltar"),
							array("iso2"=>"GR", "name"=>"Greece"),
							array("iso2"=>"GL", "name"=>"Greenland"),
							array("iso2"=>"GD", "name"=>"Grenada"),
							array("iso2"=>"GP", "name"=>"Guadeloupe"),
							array("iso2"=>"GU", "name"=>"Guam"),
							array("iso2"=>"GT", "name"=>"Guatemala"),
							array("iso2"=>"GN", "name"=>"Guinea"),
							array("iso2"=>"GW", "name"=>"Guinea-Bissau"),
							array("iso2"=>"GY", "name"=>"Guyana"),
							array("iso2"=>"HT", "name"=>"Haiti"),
							array("iso2"=>"HM", "name"=>"Heard and Mc Donald Islands"),
							array("iso2"=>"VA", "name"=>"Holy See (Vatican City State)"),
							array("iso2"=>"HN", "name"=>"Honduras"),
							array("iso2"=>"HK", "name"=>"Hong Kong"),
							array("iso2"=>"HU", "name"=>"Hungary"),
							array("iso2"=>"IS", "name"=>"Iceland"),
							array("iso2"=>"IN", "name"=>"India"),
							array("iso2"=>"ID", "name"=>"Indonesia"),
							array("iso2"=>"IR", "name"=>"Iran (Islamic Republic of)"),
							array("iso2"=>"IQ", "name"=>"Iraq"),
							array("iso2"=>"IE", "name"=>"Ireland"),
							array("iso2"=>"IL", "name"=>"Israel"),
							array("iso2"=>"IT", "name"=>"Italy"),
							array("iso2"=>"JM", "name"=>"Jamaica"),
							array("iso2"=>"JP", "name"=>"Japan"),
							array("iso2"=>"JO", "name"=>"Jordan"),
							array("iso2"=>"KZ", "name"=>"Kazakhstan"),
							array("iso2"=>"KE", "name"=>"Kenya"),
							array("iso2"=>"KI", "name"=>"Kiribati"),
							array("iso2"=>"KP", "name"=>"Korea, Democratic People's Republic of"),
							array("iso2"=>"KR", "name"=>"Korea, Republic of"),
							array("iso2"=>"KW", "name"=>"Kuwait"),
							array("iso2"=>"KG", "name"=>"Kyrgyzstan"),
							array("iso2"=>"LA", "name"=>"Lao People's Democratic Republic"),
							array("iso2"=>"LV", "name"=>"Latvia"),
							array("iso2"=>"LB", "name"=>"Lebanon"),
							array("iso2"=>"LS", "name"=>"Lesotho"),
							array("iso2"=>"LR", "name"=>"Liberia"),
							array("iso2"=>"LY", "name"=>"Libyan Arab Jamahiriya"),
							array("iso2"=>"LI", "name"=>"Liechtenstein"),
							array("iso2"=>"LT", "name"=>"Lithuania"),
							array("iso2"=>"LU", "name"=>"Luxembourg"),
							array("iso2"=>"MO", "name"=>"Macau"),
							array("iso2"=>"MK", "name"=>"Macedonia, The Former Yugoslav Republic of"),
							array("iso2"=>"MG", "name"=>"Madagascar"),
							array("iso2"=>"MW", "name"=>"Malawi"),
							array("iso2"=>"MY", "name"=>"Malaysia"),
							array("iso2"=>"MV", "name"=>"Maldives"),
							array("iso2"=>"ML", "name"=>"Mali"),
							array("iso2"=>"MT", "name"=>"Malta"),
							array("iso2"=>"MH", "name"=>"Marshall Islands"),
							array("iso2"=>"MQ", "name"=>"Martinique"),
							array("iso2"=>"MR", "name"=>"Mauritania"),
							array("iso2"=>"MU", "name"=>"Mauritius"),
							array("iso2"=>"YT", "name"=>"Mayotte"),
							array("iso2"=>"MX", "name"=>"Mexico"),
							array("iso2"=>"FM", "name"=>"Micronesia, Federated States of"),
							array("iso2"=>"MD", "name"=>"Moldova, Republic of"),
							array("iso2"=>"MC", "name"=>"Monaco"),
							array("iso2"=>"MN", "name"=>"Mongolia"),
							array("iso2"=>"MS", "name"=>"Montserrat"),
							array("iso2"=>"MA", "name"=>"Morocco"),
							array("iso2"=>"MZ", "name"=>"Mozambique"),
							array("iso2"=>"MM", "name"=>"Myanmar"),
							array("iso2"=>"NA", "name"=>"Namibia"),
							array("iso2"=>"NR", "name"=>"Nauru"),
							array("iso2"=>"NP", "name"=>"Nepal"),
							array("iso2"=>"NL", "name"=>"Netherlands"),
							array("iso2"=>"AN", "name"=>"Netherlands Antilles"),
							array("iso2"=>"NC", "name"=>"New Caledonia"),
							array("iso2"=>"NZ", "name"=>"New Zealand"),
							array("iso2"=>"NI", "name"=>"Nicaragua"),
							array("iso2"=>"NE", "name"=>"Niger"),
							array("iso2"=>"NG", "name"=>"Nigeria"),
							array("iso2"=>"NU", "name"=>"Niue"),
							array("iso2"=>"NF", "name"=>"Norfolk Island"),
							array("iso2"=>"MP", "name"=>"Northern Mariana Islands"),
							array("iso2"=>"NO", "name"=>"Norway"),
							array("iso2"=>"OM", "name"=>"Oman"),
							array("iso2"=>"PK", "name"=>"Pakistan"),
							array("iso2"=>"PW", "name"=>"Palau"),
							array("iso2"=>"PA", "name"=>"Panama"),
							array("iso2"=>"PG", "name"=>"Papua New Guinea"),
							array("iso2"=>"PY", "name"=>"Paraguay"),
							array("iso2"=>"PE", "name"=>"Peru"),
							array("iso2"=>"PH", "name"=>"Philippines"),
							array("iso2"=>"PN", "name"=>"Pitcairn"),
							array("iso2"=>"PL", "name"=>"Poland"),
							array("iso2"=>"PT", "name"=>"Portugal"),
							array("iso2"=>"PR", "name"=>"Puerto Rico"),
							array("iso2"=>"QA", "name"=>"Qatar"),
							array("iso2"=>"RE", "name"=>"Reunion"),
							array("iso2"=>"RO", "name"=>"Romania"),
							array("iso2"=>"RU", "name"=>"Russian Federation"),
							array("iso2"=>"RW", "name"=>"Rwanda"),
							array("iso2"=>"KN", "name"=>"Saint Kitts and Nevis<"),
							array("iso2"=>"LC", "name"=>"Saint LUCIA"),
							array("iso2"=>"VC", "name"=>"Saint Vincent and the Grenadines"),
							array("iso2"=>"WS", "name"=>"Samoa"),
							array("iso2"=>"SM", "name"=>"San Marino"),
							array("iso2"=>"ST", "name"=>"Sao Tome and Principe<"),
							array("iso2"=>"SA", "name"=>"Saudi Arabia"),
							array("iso2"=>"SN", "name"=>"Senegal"),
							array("iso2"=>"SC", "name"=>"Seychelles"),
							array("iso2"=>"SL", "name"=>"Sierra Leone"),
							array("iso2"=>"SG", "name"=>"Singapore"),
							array("iso2"=>"SK", "name"=>"Slovakia (Slovak Republic)"),
							array("iso2"=>"SI", "name"=>"Slovenia"),
							array("iso2"=>"SB", "name"=>"Solomon Islands"),
							array("iso2"=>"SO", "name"=>"Somalia"),
							array("iso2"=>"ZA", "name"=>"South Africa"),
							array("iso2"=>"GS", "name"=>"South Georgia and the South Sandwich Islands"),
							array("iso2"=>"ES", "name"=>"Spain"),
							array("iso2"=>"LK", "name"=>"Sri Lanka"),
							array("iso2"=>"SH", "name"=>"St. Helena"),
							array("iso2"=>"PM", "name"=>"St. Pierre and Miquelon"),
							array("iso2"=>"SD", "name"=>"Sudan"),
							array("iso2"=>"SR", "name"=>"Suriname"),
							array("iso2"=>"SJ", "name"=>"Svalbard and Jan Mayen Islands"),
							array("iso2"=>"SZ", "name"=>"Swaziland"),
							array("iso2"=>"SE", "name"=>"Sweden"),
							array("iso2"=>"CH", "name"=>"Switzerland"),
							array("iso2"=>"SY", "name"=>"Syrian Arab Republic"),
							array("iso2"=>"TW", "name"=>"Taiwan, Province of China"),
							array("iso2"=>"TJ", "name"=>"Tajikistan"),
							array("iso2"=>"TZ", "name"=>"Tanzania, United Republic of"),
							array("iso2"=>"TH", "name"=>"Thailand"),
							array("iso2"=>"TG", "name"=>"Togo"),
							array("iso2"=>"TK", "name"=>"Tokelau"),
							array("iso2"=>"TO", "name"=>"Tonga"),
							array("iso2"=>"TT", "name"=>"Trinidad and Tobago"),
							array("iso2"=>"TN", "name"=>"Tunisia"),
							array("iso2"=>"TR", "name"=>"Turkey"),
							array("iso2"=>"TM", "name"=>"Turkmenistan"),
							array("iso2"=>"TC", "name"=>"Turks and Caicos Islands"),
							array("iso2"=>"TV", "name"=>"Tuvalu"),
							array("iso2"=>"UG", "name"=>"Uganda"),
							array("iso2"=>"UA", "name"=>"Ukraine"),
							array("iso2"=>"AE", "name"=>"United Arab Emirates"),
							array("iso2"=>"GB", "name"=>"United Kingdom"),
							array("iso2"=>"US", "name"=>"United States"),
							array("iso2"=>"UM", "name"=>"United States Minor Outlying Islands"),
							array("iso2"=>"UY", "name"=>"Uruguay"),
							array("iso2"=>"UZ", "name"=>"Uzbekistan"),
							array("iso2"=>"VU", "name"=>"Vanuatu"),
							array("iso2"=>"VE", "name"=>"Venezuela"),
							array("iso2"=>"VN", "name"=>"Viet Nam"),
							array("iso2"=>"VG", "name"=>"Virgin Islands (British)"),
							array("iso2"=>"VI", "name"=>"Virgin Islands (U.S.)"),
							array("iso2"=>"WF", "name"=>"Wallis and Futuna Islands"),
							array("iso2"=>"EH", "name"=>"Western Sahara"),
							array("iso2"=>"YE", "name"=>"Yemen"),
							array("iso2"=>"YU", "name"=>"Yugoslavia"),
							array("iso2"=>"ZM", "name"=>"Zambia"),
							array("iso2"=>"ZW", "name"=>"Zimbabwe"),
			));
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('countries');
	}

}