<?php

namespace Tests\Unit;

use App\Services\Spareto;
use Tests\TestCase;

class SparetoTest extends TestCase
{
    public function test_getProduct()
    {
        $product = Spareto::getProduct("/products/original-imperium-engine-mounting/25651");

        $expectedProduct = [
            'dimension' => [],
            'specification' => [
                'Fitting Position' => 'Front',
                'Weight' => '1.456 Kg',
            ],
            'oem' => [
                ['brand' => 'ALFA ROMEO', 'oem' => '51761603'],
                ['brand' => 'ALFA ROMEO', 'oem' => '51799110'],
                ['brand' => 'ALFA ROMEO', 'oem' => '51810285'],
                ['brand' => 'FIAT', 'oem' => '51761603'],
                ['brand' => 'FIAT', 'oem' => '51799110'],
                ['brand' => 'FIAT', 'oem' => '51810285'],
                ['brand' => 'LANCIA', 'oem' => '51761603'],
                ['brand' => 'LANCIA', 'oem' => '51799110'],
                ['brand' => 'LANCIA', 'oem' => '51810285'],
            ],
            'cross' => [
                '149715', '6269', '51761603', '51799110', '51810285',
                'AS-203005', '51390', '51524', '011157', '71-22242',
                '5126', '51761603', '51799110', '51810285', 'FEM4247',
                '594436', '594544', '51761603', '51799110', '51810285',
                '36347', '05679', '214 030 0036', '214 030 0085', 'F8-6630',
                'F8-8242', 'R59779', '2706153', '2706751', 'T405679',
                '00219484', 'TED46865', '364785', '31501', '31509',
                '395532', '395548'
            ],
            'vehicles' => [
                [
                    'short_name' => 'LINEA',
                    'permalink' => 'fiat/fiat-linea-323-1-dot-6-d-multijet',
                    'model' => 'FIAT LINEA (323) 1.6 D Multijet',
                    'produced' => '2009-06 - ...',
                    'power' => '77',
                    'hp' => '105',
                    'ccm' => '1598',
                ],
                [
                    'short_name' => 'LINEA',
                    'permalink' => 'fiat/fiat-linea-323-1-dot-3-d-multijet',
                    'model' => 'FIAT LINEA (323) 1.3 D Multijet',
                    'produced' => '2007-06 - ...',
                    'power' => '66',
                    'hp' => '90',
                    'ccm' => '1248',
                ],
            ],
            'name' => '25651 - Engine Mounting',
        ];

        $this->assertEqualsCanonicalizing($expectedProduct, $product);
    }
}
