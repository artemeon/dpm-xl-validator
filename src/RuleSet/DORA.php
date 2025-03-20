<?php

/*
 * This file is part of the Artemeon Core - Web Application Framework.
 *
 * (c) Artemeon <www.artemeon.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Artemeon\DpmXLValidator\RuleSet;

use Artemeon\DpmXLValidator\RuleSetInterface;

class DORA implements RuleSetInterface
{
    public function getAll(): array
    {
        return [
            'e23674_e' => 'with {tB_05.01, default: null, interval: false}: not ( isnull ({(c0020, c0050, c0060, c0070, c0080, c0110)}) )',
            'e23675_e' => 'with {tB_01.03, default: null, interval: false}: not ( isnull ({c*}) )',
            'e23676_e' => 'with {tB_01.02, default: null, interval: false}: not ( isnull ({c0020-0090}) )',
            'e23677_e' => 'with {tB_01.01, default: null, interval: false}: not ( isnull ({c*}) )',
            'e23680_e' => 'with {tB_02.02, default: null, interval: false}: not ( isnull ({c0040-0080}) )',
            'e23681_e' => 'with {tB_07.01, default: null, interval: false}: not ( isnull ({(c0050, c0070, c0080, c0090, c0100, c0110)}) )',
            'e23682_e' => 'with {tB_06.01, default: null, interval: false}: not ( isnull ({(c0020, c0030, c0050, c0070, c0080, c0090, c0100)}) )',
            'e23683_e' => 'with {tB_04.01, default: null, interval: false}: not ( isnull ({c0030}) )',
            'e23792_e' => 'with {tB_02.01, default: null, interval: false}: not ( isnull ({(c0020, c0040, c0050)}) )',
            'v22912_m' => 'with {tB_02.01, default: null, interval: false}: if ( {c0020} = [eba_CO:x3] ) then ( not ( isnull ({c0030}) ) ) endif',
            'v22913_s' => 'with {tB_01.02, default: null, interval: false}: {c0110} >= 0',
            'v23716_s' => 'with {tB_02.01, default: null, interval: false}: {c0050} >= 0',
            'v8803_m' => 'with {tB_01.02, default: 0, interval: false}: if (not (isnull ({c0110}))) then (not (isnull ({c0100}))) endif',
            'v8804_m' => 'with {tB_01.02, default: 0, interval: false}: if({c0040} != [eba_CT:x318] and {c0040} != [eba_CT:x317]) then (not (isnull ({c0110}))) endif',
            'v8805_m' => 'with {tB_02.01, default: 0, interval: false}: if({c0020} = [eba_CO:x3]) then (not (isnull ({c0030}))) endif',
            'v8816_m' => 'with {tB_02.02, default: 0, interval: false}: {c0080} > {c0070}',
            'v8817_m' => 'with {tB_05.01, default: 0, interval: false}: if ({c0070} = [eba_CT:x212]) then ({c0020} in {[eba_qCO:qx2000], [eba_qCO:qx2002]}) endif',
            'v8818_m' => 'with {tB_05.01, default: 0, interval: false}: if ({c0070} = [eba_CT:x212]) then ({c0040} in {[eba_qCO:qx2000], [eba_qCO:qx2002]}) endif',
            'v8821_m' => 'with {tB_05.01, default: 0, interval: false}: if({c0020} = [eba_qCO:qx2000]) then ( (match({c0030}, "^[A-Z0-9]{18}[0-9]{2}$"))) endif',
            'v8823_m' => 'with {tB_05.01, default: 0, interval: false}: if({c0030} != "null") then ({c0040} != "null") endif',
            'v8824_m' => 'with {tB_05.01, default: 0, interval: false}: if({c0100} != "null") then ({c0090} != "null") endif',
            'v8825_m' => 'with {tB_07.01, default: 0, interval: false}: if {c0050} = [eba_ZZ:x959] or {c0050} = [eba_ZZ:x960] then (not (isnull ({c0060}))) endif',
            'v8826_m' => 'match({tB_01.02, c0060}, "^[A-Z0-9]{18}[0-9]{2}$")',
            'v8850_m' => 'with {tB_05.01, default: null, interval: false}: if ( not ( isnull ({c0030}) ) ) or not (( isnull ({c0040}) )) or not (( isnull ({c0050}) )) or not (( isnull ({c0060}) )) or not (( isnull ({c0070}) )) or not (( isnull ({c0080}) )) or not (( isnull ({c0090}) )) or not (( isnull ({c0100}) )) or not (( isnull ({c0110}) )) or not (( isnull ({c0120}) )) then ( ( not ( isnull ({c0020}) ) )) endif',
            'v8851_m' => 'with {tB_05.01, default: null, interval: false}: if ( not ( isnull ({c0030}) ) ) or not (( isnull ({c0040}) )) or not (( isnull ({c0020}) )) or not (( isnull ({c0060}) )) or not (( isnull ({c0070}) )) or not (( isnull ({c0080}) )) or not (( isnull ({c0090}) )) or not (( isnull ({c0100}) )) or not (( isnull ({c0110}) )) or not (( isnull ({c0120}) )) then ( ( not ( isnull ({c0050}) ) )) endif',
            'v8852_m' => 'with {tB_05.01, default: null, interval: false}: if ( not ( isnull ({c0030}) ) ) or not (( isnull ({c0040}) )) or not (( isnull ({c0050}) )) or not (( isnull ({c0020}) )) or not (( isnull ({c0070}) )) or not (( isnull ({c0080}) )) or not (( isnull ({c0090}) )) or not (( isnull ({c0100}) )) or not (( isnull ({c0110}) )) or not (( isnull ({c0120}) )) then ( ( not ( isnull ({c0060}) ) )) endif',
            'v8853_m' => 'with {tB_05.01, default: null, interval: false}: if ( not ( isnull ({c0030}) ) ) or not (( isnull ({c0040}) )) or not (( isnull ({c0050}) )) or not (( isnull ({c0060}) )) or not (( isnull ({c0020}) )) or not (( isnull ({c0080}) )) or not (( isnull ({c0090}) )) or not (( isnull ({c0100}) )) or not (( isnull ({c0110}) )) or not (( isnull ({c0120}) )) then ( ( not ( isnull ({c0070}) ) )) endif',
            'v8854_m' => 'with {tB_05.01, default: null, interval: false}: if ( not ( isnull ({c0030}) ) ) or not (( isnull ({c0040}) )) or not (( isnull ({c0050}) )) or not (( isnull ({c0060}) )) or not (( isnull ({c0070}) )) or not (( isnull ({c0020}) )) or not (( isnull ({c0090}) )) or not (( isnull ({c0100}) )) or not (( isnull ({c0110}) )) or not (( isnull ({c0120}) )) then ( ( not ( isnull ({c0080}) ) )) endif',
            'v8855_m' => 'with {tB_05.01, default: null, interval: false}: if ( not ( isnull ({c0030}) ) ) or not (( isnull ({c0040}) )) or not (( isnull ({c0050}) )) or not (( isnull ({c0060}) )) or not (( isnull ({c0070}) )) or not (( isnull ({c0080}) )) or not (( isnull ({c0090}) )) or not (( isnull ({c0100}) )) or not (( isnull ({c0020}) )) or not (( isnull ({c0120}) )) then ( ( not ( isnull ({c0110}) ) )) endif',
            'v8856_m' => 'with {tB_01.03, default: null, interval: false}: if ( not ( isnull ({c0030}) ) ) then ( ( not ( isnull ({c0040}) ) )) endif',
            'v8857_m' => 'with {tB_01.03, default: null, interval: false}: if ( not ( isnull ({c0040}) ) ) then ( ( not ( isnull ({c0030}) ) )) endif',
            'v8858_m' => 'with {tB_01.02, default: null, interval: false}: if ( not ( isnull ({c0030}) ) ) or not (( isnull ({c0040}) )) or not (( isnull ({c0050}) )) or not (( isnull ({c0060}) )) or not (( isnull ({c0070}) )) or not (( isnull ({c0080}) )) or not (( isnull ({c0090}) )) or not (( isnull ({c0100}) )) or not (( isnull ({c0110}) )) then ( ( not ( isnull ({c0020}) ) )) endif',
            'v8859_m' => 'with {tB_01.02, default: null, interval: false}: if ( not ( isnull ({c0020}) ) ) or not (( isnull ({c0040}) )) or not (( isnull ({c0050}) )) or not (( isnull ({c0060}) )) or not (( isnull ({c0070}) )) or not (( isnull ({c0080}) )) or not (( isnull ({c0090}) )) or not (( isnull ({c0100}) )) or not (( isnull ({c0110}) )) then ( ( not ( isnull ({c0030}) ) )) endif',
            'v8860_m' => 'with {tB_01.02, default: null, interval: false}: if ( not ( isnull ({c0030}) ) ) or not (( isnull ({c0020}) )) or not (( isnull ({c0050}) )) or not (( isnull ({c0060}) )) or not (( isnull ({c0070}) )) or not (( isnull ({c0080}) )) or not (( isnull ({c0090}) )) or not (( isnull ({c0100}) )) or not (( isnull ({c0110}) )) then ( ( not ( isnull ({c0040}) ) )) endif',
            'v8861_m' => 'with {tB_01.02, default: null, interval: false}: if ( not ( isnull ({c0030}) ) ) or not (( isnull ({c0040}) )) or not (( isnull ({c0020}) )) or not (( isnull ({c0060}) )) or not (( isnull ({c0070}) )) or not (( isnull ({c0080}) )) or not (( isnull ({c0090}) )) or not (( isnull ({c0100}) )) or not (( isnull ({c0110}) )) then ( ( not ( isnull ({c0050}) ) )) endif',
            'v8862_m' => 'with {tB_01.02, default: null, interval: false}: if ( not ( isnull ({c0030}) ) ) or not (( isnull ({c0040}) )) or not (( isnull ({c0020}) )) or not (( isnull ({c0050}) )) or not (( isnull ({c0070}) )) or not (( isnull ({c0080}) )) or not (( isnull ({c0090}) )) or not (( isnull ({c0100}) )) or not (( isnull ({c0110}) )) then ( ( not ( isnull ({c0060}) ) )) endif',
            'v8863_m' => 'with {tB_01.02, default: null, interval: false}: if ( not ( isnull ({c0030}) ) ) or not (( isnull ({c0040}) )) or not (( isnull ({c0050}) )) or not (( isnull ({c0060}) )) or not (( isnull ({c0020}) )) or not (( isnull ({c0080}) )) or not (( isnull ({c0090}) )) or not (( isnull ({c0100}) )) or not (( isnull ({c0110}) )) then ( ( not ( isnull ({c0070}) ) )) endif',
            'v8864_m' => 'with {tB_01.02, default: null, interval: false}: if ( not ( isnull ({c0030}) ) ) or not (( isnull ({c0040}) )) or not (( isnull ({c0050}) )) or not (( isnull ({c0060}) )) or not (( isnull ({c0070}) )) or not (( isnull ({c0020}) )) or not (( isnull ({c0090}) )) or not (( isnull ({c0100}) )) or not (( isnull ({c0110}) )) then ( ( not ( isnull ({c0080}) ) )) endif',
            'v8865_m' => 'with {tB_01.02, default: null, interval: false}: if ( not ( isnull ({c0030}) ) ) or not (( isnull ({c0040}) )) or not (( isnull ({c0050}) )) or not (( isnull ({c0060}) )) or not (( isnull ({c0070}) )) or not (( isnull ({c0080}) )) or not (( isnull ({c0020}) )) or not (( isnull ({c0100}) )) or not (( isnull ({c0110}) )) then ( ( not ( isnull ({c0090}) ) )) endif',
            'v8866_m' => 'with {tB_02.01, default: null, interval: false}: if ( not ( isnull ({c0020}) ) ) or not (( isnull ({c0030}) )) or not (( isnull ({c0040}) )) then ( ( not ( isnull ({c0050}) ) )) endif',
            'v8867_m' => 'with {tB_02.01, default: null, interval: false}: if ( not ( isnull ({c0020}) ) ) or not (( isnull ({c0030}) )) or not (( isnull ({c0050}) )) then ( ( not ( isnull ({c0040}) ) )) endif',
            'v8868_m' => 'with {tB_02.01, default: null, interval: false}: if ( not ( isnull ({c0050}) ) ) or not (( isnull ({c0030}) )) or not (( isnull ({c0040}) )) then ( ( not ( isnull ({c0020}) ) )) endif',
            'v8869_m' => 'with {tB_02.02, default: null, interval: false}: if ( not ( isnull ({c0070}) ) ) or not (( isnull ({c0080}) )) or not (( isnull ({c0090}) )) or not (( isnull ({c0100}) )) or not (( isnull ({c0110}) )) or not (( isnull ({c0120}) )) or not (( isnull ({c0140}) )) or not (( isnull ({c0170}) )) or not (( isnull ({c0180}) )) then ( ( not ( isnull ({c0040}) ) )) endif',
            'v8870_m' => 'with {tB_02.02, default: null, interval: false}: if ( not ( isnull ({c0040}) ) ) or not (( isnull ({c0080}) )) or not (( isnull ({c0090}) )) or not (( isnull ({c0100}) )) or not (( isnull ({c0110}) )) or not (( isnull ({c0120}) )) or not (( isnull ({c0140}) )) or not (( isnull ({c0170}) )) or not (( isnull ({c0180}) )) then ( ( not ( isnull ({c0070}) ) )) endif',
            'v8871_m' => 'with {tB_02.02, default: null, interval: false}: if ( not ( isnull ({c0070}) ) ) or not (( isnull ({c0040}) )) or not (( isnull ({c0090}) )) or not (( isnull ({c0100}) )) or not (( isnull ({c0110}) )) or not (( isnull ({c0120}) )) or not (( isnull ({c0140}) )) or not (( isnull ({c0170}) )) or not (( isnull ({c0180}) )) then ( ( not ( isnull ({c0080}) ) )) endif',
            'v8872_m' => 'with {tB_01.01, default: null, interval: false}: if ( not ( isnull ({c0030}) ) ) or not (( isnull ({c0040}) )) or not (( isnull ({c0050}) )) or not (( isnull ({c0060}) )) then ( ( not ( isnull ({c0020}) ) )) endif',
            'v8873_m' => 'with {tB_01.01, default: null, interval: false}: if ( not ( isnull ({c0020}) ) ) or not (( isnull ({c0040}) )) or not (( isnull ({c0050}) )) or not (( isnull ({c0060}) )) then ( ( not ( isnull ({c0030}) ) )) endif',
            'v8874_m' => 'with {tB_01.01, default: null, interval: false}: if ( not ( isnull ({c0030}) ) ) or not (( isnull ({c0020}) )) or not (( isnull ({c0050}) )) or not (( isnull ({c0060}) )) then ( ( not ( isnull ({c0040}) ) )) endif',
            'v8875_m' => 'with {tB_01.01, default: null, interval: false}: if ( not ( isnull ({c0030}) ) ) or not (( isnull ({c0040}) )) or not (( isnull ({c0020}) )) or not (( isnull ({c0060}) )) then ( ( not ( isnull ({c0050}) ) )) endif',
            'v8876_m' => 'with {tB_01.01, default: null, interval: false}: if ( not ( isnull ({c0030}) ) ) or not (( isnull ({c0040}) )) or not (( isnull ({c0050}) )) or not (( isnull ({c0020}) )) then ( ( not ( isnull ({c0060}) ) )) endif',
            'v8877_m' => 'with {tB_06.01, default: null, interval: false}: if ( not ( isnull ({c0030}) ) ) or not (( isnull ({c0050}) )) or not (( isnull ({c0060}) )) or not (( isnull ({c0070}) )) or not (( isnull ({c0080}) )) or not (( isnull ({c0090}) )) or not (( isnull ({c0100}) )) then ( ( not ( isnull ({c0020}) ) )) endif',
            'v8878_m' => 'with {tB_06.01, default: null, interval: false}: if ( not ( isnull ({c0020}) ) ) or not (( isnull ({c0050}) )) or not (( isnull ({c0060}) )) or not (( isnull ({c0070}) )) or not (( isnull ({c0080}) )) or not (( isnull ({c0090}) )) or not (( isnull ({c0100}) )) then ( ( not ( isnull ({c0030}) ) )) endif',
            'v8879_m' => 'with {tB_06.01, default: null, interval: false}: if ( not ( isnull ({c0030}) ) ) or not (( isnull ({c0020}) )) or not (( isnull ({c0060}) )) or not (( isnull ({c0070}) )) or not (( isnull ({c0080}) )) or not (( isnull ({c0090}) )) or not (( isnull ({c0100}) )) then ( ( not ( isnull ({c0050}) ) )) endif',
            'v8880_m' => 'with {tB_06.01, default: null, interval: false}: if ( not ( isnull ({c0030}) ) ) or not (( isnull ({c0050}) )) or not (( isnull ({c0060}) )) or not (( isnull ({c0020}) )) or not (( isnull ({c0080}) )) or not (( isnull ({c0090}) )) or not (( isnull ({c0100}) )) then ( ( not ( isnull ({c0070}) ) )) endif',
            'v8881_m' => 'with {tB_06.01, default: null, interval: false}: if ( not ( isnull ({c0030}) ) ) or not (( isnull ({c0050}) )) or not (( isnull ({c0060}) )) or not (( isnull ({c0070}) )) or not (( isnull ({c0020}) )) or not (( isnull ({c0090}) )) or not (( isnull ({c0100}) )) then ( ( not ( isnull ({c0080}) ) )) endif',
            'v8882_m' => 'with {tB_06.01, default: null, interval: false}: if ( not ( isnull ({c0030}) ) ) or not (( isnull ({c0050}) )) or not (( isnull ({c0060}) )) or not (( isnull ({c0070}) )) or not (( isnull ({c0080}) )) or not (( isnull ({c0020}) )) or not (( isnull ({c0100}) )) then ( ( not ( isnull ({c0090}) ) )) endif',
            'v8883_m' => 'with {tB_06.01, default: null, interval: false}: if ( not ( isnull ({c0030}) ) ) or not (( isnull ({c0050}) )) or not (( isnull ({c0060}) )) or not (( isnull ({c0070}) )) or not (( isnull ({c0080}) )) or not (( isnull ({c0020}) )) or not (( isnull ({c0020}) )) then ( ( not ( isnull ({c0100}) ) )) endif',
            'v8884_m' => 'with {tB_07.01, default: null, interval: false}: if ( not ( isnull ({c0030}) ) ) or not (( isnull ({c0060}) )) or not (( isnull ({c0070}) )) or not (( isnull ({c0080}) )) or not (( isnull ({c0090}) )) or not (( isnull ({c0100}) )) or not (( isnull ({c0110}) )) or not (( isnull ({c0120}) )) then ( ( not ( isnull ({c0050}) ) )) endif',
            'v8885_m' => 'with {tB_07.01, default: null, interval: false}: if ( not ( isnull ({c0030}) ) ) or not (( isnull ({c0060}) )) or not (( isnull ({c0050}) )) or not (( isnull ({c0080}) )) or not (( isnull ({c0090}) )) or not (( isnull ({c0100}) )) or not (( isnull ({c0110}) )) or not (( isnull ({c0120}) )) then ( ( not ( isnull ({c0070}) ) )) endif',
            'v8886_m' => 'with {tB_07.01, default: null, interval: false}: if ( not ( isnull ({c0030}) ) ) or not (( isnull ({c0060}) )) or not (( isnull ({c0070}) )) or not (( isnull ({c0050}) )) or not (( isnull ({c0090}) )) or not (( isnull ({c0100}) )) or not (( isnull ({c0110}) )) or not (( isnull ({c0120}) )) then ( ( not ( isnull ({c0080}) ) )) endif',
            'v8887_m' => 'with {tB_07.01, default: null, interval: false}: if ( not ( isnull ({c0030}) ) ) or not (( isnull ({c0060}) )) or not (( isnull ({c0070}) )) or not (( isnull ({c0080}) )) or not (( isnull ({c0050}) )) or not (( isnull ({c0100}) )) or not (( isnull ({c0110}) )) or not (( isnull ({c0120}) )) then ( ( not ( isnull ({c0090}) ) )) endif',
            'v88889_m' => 'with {tB_07.01, default: null, interval: false}: if ( not ( isnull ({c0030}) ) ) or not (( isnull ({c0060}) )) or not (( isnull ({c0070}) )) or not (( isnull ({c0080}) )) or not (( isnull ({c0090}) )) or not (( isnull ({c0100}) )) or not (( isnull ({c0050}) )) or not (( isnull ({c0120}) )) then ( ( not ( isnull ({c0110}) ) )) endif',
            'v8888_m' => 'with {tB_07.01, default: null, interval: false}: if ( not ( isnull ({c0030}) ) ) or not (( isnull ({c0060}) )) or not (( isnull ({c0070}) )) or not (( isnull ({c0080}) )) or not (( isnull ({c0090}) )) or not (( isnull ({c0050}) )) or not (( isnull ({c0110}) )) or not (( isnull ({c0120}) )) then ( ( not ( isnull ({c0100}) ) )) endif',
        ];
    }
}
