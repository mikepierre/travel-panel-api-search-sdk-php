<?php
/**
 * Created by PhpStorm.
 * User: ST20
 * Date: 10/29/2019
 * Time: 2:50 PM
 */

namespace TravelPanel\Controller;


class AttractionTicketsTest extends \PHPUnit_Framework_TestCase
{

    public function testRates()
    {
        $AttractionTickets = new AttractionTickets();
        $response =
            $AttractionTickets->rates(
                [
                    'city'=>'Orland, FL',
                    'start_date'=>date('m/d/Y',strtotime(date() . "+1 days"))
                ]);
        $this->assertEquals(200, http_response_code());
        $this->assetArrayHashKey('data',$response);

    }

    public function testBook()
    {
        $AttractionTickets = new AttractionTickets();
        $response =
            $AttractionTickets->book(
                [
                    'first_name'=>'Mike',
                    'last_name'=>'Pierre',
                    'child_first_name'=>'John',
                    'child_last_name'=>'Doe',
                    'child_age'=>'17',
                    'adult_price'=>'220',
                    'adult_age_group'=>'21',
                    'child_price'=>'75',
                    'adult'=>'2',
                    'child'=>'1',
                    'start_date'=>date('m/d/Y',strtotime(date() . "+1 days")),
                    'attid'=>1

                    ]
            );
        $this->assetArrayHashKey('data',$response);
    }
}
