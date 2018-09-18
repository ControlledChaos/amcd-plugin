<?php
/**
 * SCallback for the Schema organization type field.
 *
 * @package    Alana_Morshead
 * @subpackage Admin\Partials\Field_Callbacks
 *
 * @since      1.0.0
 * @author     Greg Sweet <greg@ccdzine.com>
 */

namespace AMCD_Plugin\Admin\Partials\Field_Callbacks;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

$types = [

	// First option save null.
	null          => __( 'Select one&hellip;', 'amcd-plugin' ),
	'Airline'     => __( 'Airline', 'amcd-plugin' ),
	'Corporation' => __( 'Corporation', 'amcd-plugin' ),

	// Educational Organizations.
	'EducationalOrganization' => __( 'Educational Organization', 'amcd-plugin' ),
		'CollegeOrUniversity' => __( '— College or University', 'amcd-plugin' ),
		'ElementarySchool'    => __( '— Elementary School', 'amcd-plugin' ),
		'HighSchool'          => __( '— High School', 'amcd-plugin' ),
		'MiddleSchool'        => __( '— Middle School', 'amcd-plugin' ),
		'Preschool'           => __( '— Preschool', 'amcd-plugin' ),
		'School'              => __( '— School', 'amcd-plugin' ),

	'GovernmentOrganization'  => __( 'Government Organization', 'amcd-plugin' ),

	// Local Businesses.
	'LocalBusiness' => __( 'Local Business', 'amcd-plugin' ),
		'AnimalShelter' => __( '— Animal Shelter', 'amcd-plugin' ),

		// Automotive Businesses.
		'AutomotiveBusiness' => __( '— Automotive Business', 'amcd-plugin' ),
			'AutoBodyShop'     => __( '—— Auto Body Shop', 'amcd-plugin' ),
			'AutoDealer'       => __( '—— Auto Dealer', 'amcd-plugin' ),
			'AutoPartsStore'   => __( '—— Auto Parts Store', 'amcd-plugin' ),
			'AutoRental'       => __( '—— Auto Rental', 'amcd-plugin' ),
			'AutoRepair'       => __( '—— Auto Repair', 'amcd-plugin' ),
			'AutoWash'         => __( '—— Auto Wash', 'amcd-plugin' ),
			'GasStation'       => __( '—— Gas Station', 'amcd-plugin' ),
			'MotorcycleDealer' => __( '—— Motorcycle Dealer', 'amcd-plugin' ),
			'MotorcycleRepair' => __( '—— Motorcycle Repair', 'amcd-plugin' ),

		'ChildCare'            => __( '— Child Care', 'amcd-plugin' ),
		'Dentist'              => __( '— Dentist', 'amcd-plugin' ),
		'DryCleaningOrLaundry' => __( '— Dry Cleaning or Laundry', 'amcd-plugin' ),

		// Emergency Services.
		'EmergencyService' => __( '— Emergency Service', 'amcd-plugin' ),
			'FireStation'   => __( '—— Fire Station', 'amcd-plugin' ),
			'Hospital'      => __( '—— Hospital', 'amcd-plugin' ),
			'PoliceStation' => __( '—— Police Station', 'amcd-plugin' ),

		'EmploymentAgency' => __( '— Employment Agency', 'amcd-plugin' ),

		// Entertainment Businesses.
		'EntertainmentBusiness' => __( '— Entertainment Business', 'amcd-plugin' ),
			'AdultEntertainment' => __( '—— Adult Entertainment', 'amcd-plugin' ),
			'AmusementPark'      => __( '—— Amusement Park', 'amcd-plugin' ),
			'ArtGallery'         => __( '—— Art Gallery', 'amcd-plugin' ),
			'Casino'             => __( '—— Casino', 'amcd-plugin' ),
			'ComedyClub'         => __( '—— Comedy Club', 'amcd-plugin' ),
			'MovieTheater'       => __( '—— Movie Theater', 'amcd-plugin' ),
			'NightClub'          => __( '—— Night Club', 'amcd-plugin' ),

		// Financial Services.
		'FinancialService' => __( '— Financial Service', 'amcd-plugin' ),
			'AccountingService' => __( '—— Accounting Service', 'amcd-plugin' ),
			'AutomatedTeller'   => __( '—— Automated Teller', 'amcd-plugin' ),
			'BankOrCreditUnion' => __( '—— Bank or Credit Union', 'amcd-plugin' ),
			'InsuranceAgency'   => __( '—— Insurance Agency', 'amcd-plugin' ),

		// Food Establishments.
		'FoodEstablishment' => __( '— Food Establishment', 'amcd-plugin' ),
			'Bakery'             => __( '—— Bakery', 'amcd-plugin' ),
			'BarOrPub'           => __( '—— Bar or Pub', 'amcd-plugin' ),
			'Brewery'            => __( '—— Brewery', 'amcd-plugin' ),
			'CafeOrCoffeeShop'   => __( '—— Cafe or Coffee Shop', 'amcd-plugin' ),
			'FastFoodRestaurant' => __( '—— Fast Food Restaurant', 'amcd-plugin' ),
			'IceCreamShop'       => __( '—— Ice Cream Shop', 'amcd-plugin' ),
			'Restaurant'         => __( '—— Restaurant', 'amcd-plugin' ),
			'Winery'             => __( '—— Winery', 'amcd-plugin' ),

		// Government Offices.
		'GovernmentOffice' => __( '— Government Office', 'amcd-plugin' ),
			'PostOffice' => __( '—— Post Office', 'amcd-plugin' ),

		// Health and Beauty Businesses.
		'HealthAndBeautyBusiness' => __( '— Health and Beauty Business', 'amcd-plugin' ),
			'BeautySalon'  => __( '—— Beauty Salon', 'amcd-plugin' ),
			'DaySpa'       => __( '—— Day Spa', 'amcd-plugin' ),
			'HairSalon'    => __( '—— Hair Salon', 'amcd-plugin' ),
			'HealthClub'   => __( '—— Health Club', 'amcd-plugin' ),
			'NailSalon'    => __( '—— Nail Salon', 'amcd-plugin' ),
			'TattooParlor' => __( '—— Tattoo Parlor', 'amcd-plugin' ),

		// Home and Construction Businesses.
		'HomeAndConstructionBusiness' => __( '— Home and Construction Business', 'amcd-plugin' ),
			'Electrician'       => __( '—— Electrician', 'amcd-plugin' ),
			'GeneralContractor' => __( '—— General Contractor', 'amcd-plugin' ),
			'HVACBusiness'      => __( '—— HVAC Business', 'amcd-plugin' ),
			'HousePainter'      => __( '—— House Painter', 'amcd-plugin' ),
			'Locksmith'         => __( '—— Locksmith', 'amcd-plugin' ),
			'MovingCompany'     => __( '—— MovingCompany', 'amcd-plugin' ),
			'Plumber'           => __( '—— Plumber', 'amcd-plugin' ),
			'RoofingContractor' => __( '—— Roofing Contractor', 'amcd-plugin' ),

		'InternetCafe' => __( '— Internet Cafe', 'amcd-plugin' ),

		// Legal Services.
		'LegalService' => __( '— Legal Service', 'amcd-plugin' ),
			'Attorney' => __( '—— Attorney', 'amcd-plugin' ),
			'Notary'   => __( '—— Notary', 'amcd-plugin' ),

		'Library' => __( '— Library', 'amcd-plugin' ),

		// Lodging Businesses.
		'LodgingBusiness' => __( '— Lodging Business', 'amcd-plugin' ),
			'BedAndBreakfast' => __( '—— Bed and Breakfast', 'amcd-plugin' ),
			'Campground'      => __( '—— Campground', 'amcd-plugin' ),
			'Hostel'          => __( '—— Hostel', 'amcd-plugin' ),
			'Hotel'           => __( '—— Hotel', 'amcd-plugin' ),
			'Motel'           => __( '—— Motel', 'amcd-plugin' ),
			'Resort'          => __( '—— Resort', 'amcd-plugin' ),

		'ProfessionalService' => __( '— Professional Service', 'amcd-plugin' ),
		'RadioStation'        => __( '— Radio Station', 'amcd-plugin' ),
		'RealEstateAgent'     => __( '— Real Estate Agent', 'amcd-plugin' ),
		'RecyclingCenter'     => __( '— Recycling Center', 'amcd-plugin' ),
		'SelfStorage'         => __( '— Self Storage', 'amcd-plugin' ),
		'ShoppingCenter'      => __( '— Shopping Center', 'amcd-plugin' ),

		// Sports Activity Locations.
		'SportsActivityLocation' => __( '— Sports Activity Location', 'amcd-plugin' ),
			'BowlingAlley'       => __( '—— Bowling Alley', 'amcd-plugin' ),
			'ExerciseGym'        => __( '—— Exercise Gym', 'amcd-plugin' ),
			'GolfCourse'         => __( '—— Golf Course', 'amcd-plugin' ),
			'HealthClub'         => __( '—— Health Club', 'amcd-plugin' ),
			'PublicSwimmingPool' => __( '—— Public Swimming Pool', 'amcd-plugin' ),
			'SkiResort'          => __( '—— Ski Resort', 'amcd-plugin' ),
			'SportsClub'         => __( '—— Sports Club', 'amcd-plugin' ),
			'StadiumOrArena'     => __( '—— Stadium or Arena', 'amcd-plugin' ),
			'TennisComplex'      => __( '—— Tennis Complex', 'amcd-plugin' ),

		// Store types.
		'Store' => __( '— Store', 'amcd-plugin' ),
			'AutoPartsStore'      => __( '—— Auto Parts Store', 'amcd-plugin' ),
			'BikeStore'           => __( '—— Bike Store', 'amcd-plugin' ),
			'BookStore'           => __( '—— Book Store', 'amcd-plugin' ),
			'ClothingStore'       => __( '—— Clothing Store', 'amcd-plugin' ),
			'ComputerStore'       => __( '—— Computer Store', 'amcd-plugin' ),
			'ConvenienceStore'    => __( '—— Convenience Store', 'amcd-plugin' ),
			'DepartmentStore'     => __( '—— Department Store', 'amcd-plugin' ),
			'ElectronicsStore'    => __( '—— Electronics Store', 'amcd-plugin' ),
			'Florist'             => __( '—— Florist', 'amcd-plugin' ),
			'FurnitureStore'      => __( '—— Furniture Store', 'amcd-plugin' ),
			'GardenStore'         => __( '—— Garden Store', 'amcd-plugin' ),
			'GroceryStore'        => __( '—— Grocery Store', 'amcd-plugin' ),
			'HardwareStore'       => __( '—— Hardware Store', 'amcd-plugin' ),
			'HobbyShop'           => __( '—— Hobby Shop', 'amcd-plugin' ),
			'HomeGoodsStore'      => __( '—— Home Goods Store', 'amcd-plugin' ),
			'JewelryStore'        => __( '—— Jewelry Store', 'amcd-plugin' ),
			'LiquorStore'         => __( '—— Liquor Store', 'amcd-plugin' ),
			'MensClothingStore'   => __( '—— Mens Clothing Store', 'amcd-plugin' ),
			'MobilePhoneStore'    => __( '—— Mobile Phone Store', 'amcd-plugin' ),
			'MovieRentalStore'    => __( '—— Movie Rental Store', 'amcd-plugin' ),
			'MusicStore'          => __( '—— Music Store', 'amcd-plugin' ),
			'OfficeEquipmentStore'=> __( '—— Office Equipment Store', 'amcd-plugin' ),
			'OutletStore'         => __( '—— Outlet Store', 'amcd-plugin' ),
			'PawnShop'            => __( '—— Pawn Shop', 'amcd-plugin' ),
			'PetStore'            => __( '—— Pet Store', 'amcd-plugin' ),
			'ShoeStore'           => __( '—— Shoe Store', 'amcd-plugin' ),
			'SportingGoodsStore'  => __( '—— Sporting Goods Store', 'amcd-plugin' ),
			'TireShop'            => __( '—— Tire Shop', 'amcd-plugin' ),
			'ToyStore'            => __( '—— Toy Store', 'amcd-plugin' ),
			'WholesaleStore'      => __( '—— Wholesale Store', 'amcd-plugin' ),

		'TelevisionStation'        => __( '— Television Station', 'amcd-plugin' ),
		'TouristInformationCenter' => __( '— Tourist Information Center', 'amcd-plugin' ),
		'TravelAgency'             => __( '— Travel Agency', 'amcd-plugin' ),

	'MedicalOrganization' => __( 'Medical Organization', 'amcd-plugin' ),
	'NGO'                 => __( 'NGO (Non-Governmental Organization', 'amcd-plugin' ),
	'PerformingGroup'     => __( 'Performing Group', 'amcd-plugin' ),
	'SportsOrganization'  => __( 'Sports Organization', 'amcd-plugin' )
];

$options = get_option( 'schema_org_type' );

$html = '<p><select id="schema_org_type" name="schema_org_type">';

foreach( $types as $type => $value ) {

	$selected = ( $options == $type ) ? 'selected="' . esc_attr( 'selected' ) . '"' : '';

	$html .= '<option value="' . esc_attr( $type ) . '" ' . $selected . '>' . esc_html( $value ) . '</option>';

}

$html .= '</select>';
$html .= sprintf(
	'<label for="schema_org_type"> %1s</label> <a href="%2s" target="_blank" class="tooltip" title="%3s"><span class="dashicons dashicons-editor-help"></span></a>',
	$args[0],
	esc_attr( esc_url( 'https://schema.org/docs/full.html#C.Organization' ) ),
	esc_attr( __( 'Read documentation for organization types', 'amcd-plugin' ) )
);
$html .= '</p>';

echo $html;