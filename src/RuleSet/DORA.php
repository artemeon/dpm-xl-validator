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

namespace Artemeon\DpmXLParser\RuleSet;

use Artemeon\DpmXLParser\RuleSetInterface;

class DORA implements RuleSetInterface
{
    public function getAll(): array
    {
        return [
            'with {tB_05.01,  default:null, interval:false}: not ( isnull ({(c0020, c0050, c0060, c0070, c0080, c0110)}) )',
            'with {tB_01.03, default:null, interval:false}: not ( isnull ({c*}) )',
            'with {tB_01.02,  default:null, interval:false}: not ( isnull ({c0020-0090}) )',
            'with {tB_01.01, default:null, interval:false}: not ( isnull ({c*}) )',
            'with {tB_02.02,  default:null, interval:false}: not ( isnull ({c0040-0080}) )',
            'with {tB_07.01,  default:null, interval:false}: not ( isnull ({(c0050, c0070, c0080, c0090, c0100, c0110)}) )',
            'with {tB_06.01,  default:null, interval:false}: not ( isnull ({(c0020, c0030, c0050, c0070, c0080, c0090, c0100)}) )',
            'with {tB_04.01, default:null, interval:false}: not ( isnull ({c0030}) )',
            'with {tB_02.01,  default:null, interval:false}: not ( isnull ({(c0020, c0040, c0050)}) )',
            'with {tB_02.01, default: null, interval: false}: if ( {c0020} = [eba_CO:x3] ) then ( not ( isnull ({c0030}) ) ) endif',
            'with {tB_01.02, default: null, interval: false}: {c0110} >= 0 ',
            'with {tB_02.01, default: null, interval: false}: {c0050} >= 0',
            'with {tB_01.02, default: 0, interval: false}: if (not (isnull ({c0110}))) then (not (isnull ({c0100}))) endif',
            'with{tB_01.02, default:0, interval:false}: if({c0040} != [eba_CT:x318] and {c0040} != [eba_CT:x317]) then (not (isnull ({c0110}))) endif',
            'with {tB_02.01, default: 0, interval: false}:if({c0020} = [eba_CO:x3]) then (not (isnull ({c0030}))) endif',
            'with {tB_02.02, default: 0, interval: false}: {c0080} > {c0070}',
            'with{tB_05.01, default:0, interval: false}: if ({c0070} = [eba_CT:x212]) then ({c0020} in {[eba_qCO:qx2000], [eba_qCO:qx2002]}) endif',
            'with{tB_05.01, default:0, interval: false}: if ({c0070} = [eba_CT:x212]) then ({c0040} in {[eba_qCO:qx2000], [eba_qCO:qx2002]}) endif',
            'with{tB_05.01, default:0, interval: false}: if({c0020} = [eba_qCO:qx2000]) then ( (match({c0030}, "^[A-Z0-9]{18}[0-9]{2}$"))) endif',
            'with {tB_05.01, default: 0, interval: false}: if({c0030} != "null") then ({c0040} != "null") endif',
            'with {tB_05.01, default: 0, interval: false}: if({c0100} != "null") then ({c0090} != "null") endif',
            'with {tB_07.01, default:0, interval: false}: if {c0050} = [eba_ZZ:x959] or {c0050} = [eba_ZZ:x960] then (not (isnull ({c0060}))) endif',
            'match({tB_01.02, c0060}, "^[A-Z0-9]{18}[0-9]{2}$")',
            'with {tB_05.01, default: null, interval: false}: if ( not ( isnull ({c0030}) ) ) or not (( isnull ({c0040}) )) or not (( isnull ({c0050}) )) or not (( isnull ({c0060}) )) or not (( isnull ({c0070}) )) or not (( isnull ({c0080}) )) or not (( isnull ({c0090}) )) or not (( isnull ({c0100}) )) or not (( isnull ({c0110}) )) or not (( isnull ({c0120}) )) then ( ( not ( isnull ({c0020}) ) )) endif',
            'with {tB_05.01, default: null, interval: false}: if ( not ( isnull ({c0030}) ) ) or not (( isnull ({c0040}) )) or not (( isnull ({c0020}) )) or not (( isnull ({c0060}) )) or not (( isnull ({c0070}) )) or not (( isnull ({c0080}) )) or not (( isnull ({c0090}) )) or not (( isnull ({c0100}) )) or not (( isnull ({c0110}) )) or not (( isnull ({c0120}) )) then ( ( not ( isnull ({c0050}) ) )) endif',
            'with {tB_05.01, default: null, interval: false}: if ( not ( isnull ({c0030}) ) ) or not (( isnull ({c0040}) )) or not (( isnull ({c0050}) )) or not (( isnull ({c0020}) )) or not (( isnull ({c0070}) )) or not (( isnull ({c0080}) )) or not (( isnull ({c0090}) )) or not (( isnull ({c0100}) )) or not (( isnull ({c0110}) )) or not (( isnull ({c0120}) )) then ( ( not ( isnull ({c0060}) ) )) endif',
            'with {tB_05.01, default: null, interval: false}: if ( not ( isnull ({c0030}) ) ) or not (( isnull ({c0040}) )) or not (( isnull ({c0050}) )) or not (( isnull ({c0060}) )) or not (( isnull ({c0020}) )) or not (( isnull ({c0080}) )) or not (( isnull ({c0090}) )) or not (( isnull ({c0100}) )) or not (( isnull ({c0110}) )) or not (( isnull ({c0120}) )) then ( ( not ( isnull ({c0070}) ) )) endif',
            'with {tB_05.01, default: null, interval: false}: if ( not ( isnull ({c0030}) ) ) or not (( isnull ({c0040}) )) or not (( isnull ({c0050}) )) or not (( isnull ({c0060}) )) or not (( isnull ({c0070}) )) or not (( isnull ({c0020}) )) or not (( isnull ({c0090}) )) or not (( isnull ({c0100}) )) or not (( isnull ({c0110}) )) or not (( isnull ({c0120}) )) then ( ( not ( isnull ({c0080}) ) )) endif',
            'with {tB_05.01, default: null, interval: false}: if ( not ( isnull ({c0030}) ) ) or not (( isnull ({c0040}) )) or not (( isnull ({c0050}) )) or not (( isnull ({c0060}) )) or not (( isnull ({c0070}) )) or not (( isnull ({c0080}) )) or not (( isnull ({c0090}) )) or not (( isnull ({c0100}) )) or not (( isnull ({c0020}) )) or not (( isnull ({c0120}) )) then ( ( not ( isnull ({c0110}) ) )) endif',
            'with {tB_01.03, default: null, interval: false}: if ( not ( isnull ({c0030}) ) ) then ( ( not ( isnull ({c0040}) ) )) endif',
            'with {tB_01.03, default: null, interval: false}: if ( not ( isnull ({c0040}) ) ) then ( ( not ( isnull ({c0030}) ) )) endif',
            'with {tB_01.02, default: null, interval: false}: if ( not ( isnull ({c0030}) ) ) or not (( isnull ({c0040}) )) or not (( isnull ({c0050}) )) or not (( isnull ({c0060}) )) or not (( isnull ({c0070}) )) or not (( isnull ({c0080}) )) or not (( isnull ({c0090}) )) or not (( isnull ({c0100}) )) or not (( isnull ({c0110}) )) then ( ( not ( isnull ({c0020}) ) )) endif',
            'with {tB_01.02, default: null, interval: false}: if ( not ( isnull ({c0020}) ) ) or not (( isnull ({c0040}) )) or not (( isnull ({c0050}) )) or not (( isnull ({c0060}) )) or not (( isnull ({c0070}) )) or not (( isnull ({c0080}) )) or not (( isnull ({c0090}) )) or not (( isnull ({c0100}) )) or not (( isnull ({c0110}) )) then ( ( not ( isnull ({c0030}) ) )) endif',
            'with {tB_01.02, default: null, interval: false}: if ( not ( isnull ({c0030}) ) ) or not (( isnull ({c0020}) )) or not (( isnull ({c0050}) )) or not (( isnull ({c0060}) )) or not (( isnull ({c0070}) )) or not (( isnull ({c0080}) )) or not (( isnull ({c0090}) )) or not (( isnull ({c0100}) )) or not (( isnull ({c0110}) )) then ( ( not ( isnull ({c0040}) ) )) endif',
            'with {tB_01.02, default: null, interval: false}: if ( not ( isnull ({c0030}) ) ) or not (( isnull ({c0040}) )) or not (( isnull ({c0020}) )) or not (( isnull ({c0060}) )) or not (( isnull ({c0070}) )) or not (( isnull ({c0080}) )) or not (( isnull ({c0090}) )) or not (( isnull ({c0100}) )) or not (( isnull ({c0110}) )) then ( ( not ( isnull ({c0050}) ) )) endif',
            'with {tB_01.02, default: null, interval: false}: if ( not ( isnull ({c0030}) ) ) or not (( isnull ({c0040}) )) or not (( isnull ({c0020}) )) or not (( isnull ({c0050}) )) or not (( isnull ({c0070}) )) or not (( isnull ({c0080}) )) or not (( isnull ({c0090}) )) or not (( isnull ({c0100}) )) or not (( isnull ({c0110}) )) then ( ( not ( isnull ({c0060}) ) )) endif',
            'with {tB_01.02, default: null, interval: false}: if ( not ( isnull ({c0030}) ) ) or not (( isnull ({c0040}) )) or not (( isnull ({c0050}) )) or not (( isnull ({c0060}) )) or not (( isnull ({c0020}) )) or not (( isnull ({c0080}) )) or not (( isnull ({c0090}) )) or not (( isnull ({c0100}) )) or not (( isnull ({c0110}) )) then ( ( not ( isnull ({c0070}) ) )) endif',
            'with {tB_01.02, default: null, interval: false}: if ( not ( isnull ({c0030}) ) ) or not (( isnull ({c0040}) )) or not (( isnull ({c0050}) )) or not (( isnull ({c0060}) )) or not (( isnull ({c0070}) )) or not (( isnull ({c0020}) )) or not (( isnull ({c0090}) )) or not (( isnull ({c0100}) )) or not (( isnull ({c0110}) )) then ( ( not ( isnull ({c0080}) ) )) endif',
            'with {tB_01.02, default: null, interval: false}: if ( not ( isnull ({c0030}) ) ) or not (( isnull ({c0040}) )) or not (( isnull ({c0050}) )) or not (( isnull ({c0060}) )) or not (( isnull ({c0070}) )) or not (( isnull ({c0080}) )) or not (( isnull ({c0020}) )) or not (( isnull ({c0100}) )) or not (( isnull ({c0110}) )) then ( ( not ( isnull ({c0090}) ) )) endif',
            'with {tB_02.01, default: null, interval: false}: if ( not ( isnull ({c0020}) ) ) or not (( isnull ({c0030}) )) or not (( isnull ({c0040}) )) then ( ( not ( isnull ({c0050}) ) )) endif',
            'with {tB_02.01, default: null, interval: false}: if ( not ( isnull ({c0020}) ) ) or not (( isnull ({c0030}) )) or not (( isnull ({c0050}) )) then ( ( not ( isnull ({c0040}) ) )) endif',
            'with {tB_02.01, default: null, interval: false}: if ( not ( isnull ({c0050}) ) ) or not (( isnull ({c0030}) )) or not (( isnull ({c0040}) )) then ( ( not ( isnull ({c0020}) ) )) endif',
            'with {tB_02.02, default: null, interval: false}: if ( not ( isnull ({c0070}) ) ) or not (( isnull ({c0080}) )) or not (( isnull ({c0090}) )) or not (( isnull ({c0100}) )) or not (( isnull ({c0110}) )) or not (( isnull ({c0120}) )) or not (( isnull ({c0140}) )) or not (( isnull ({c0170}) )) or not (( isnull ({c0180}) )) then ( ( not ( isnull ({c0040}) ) )) endif',
            'with {tB_02.02, default: null, interval: false}: if ( not ( isnull ({c0040}) ) ) or not (( isnull ({c0080}) )) or not (( isnull ({c0090}) )) or not (( isnull ({c0100}) )) or not (( isnull ({c0110}) )) or not (( isnull ({c0120}) )) or not (( isnull ({c0140}) )) or not (( isnull ({c0170}) )) or not (( isnull ({c0180}) )) then ( ( not ( isnull ({c0070}) ) )) endif',
            'with {tB_02.02, default: null, interval: false}: if ( not ( isnull ({c0070}) ) ) or not (( isnull ({c0040}) )) or not (( isnull ({c0090}) )) or not (( isnull ({c0100}) )) or not (( isnull ({c0110}) )) or not (( isnull ({c0120}) )) or not (( isnull ({c0140}) )) or not (( isnull ({c0170}) )) or not (( isnull ({c0180}) )) then ( ( not ( isnull ({c0080}) ) )) endif',
            'with {tB_01.01, default: null, interval: false}: if ( not ( isnull ({c0030}) ) ) or not (( isnull ({c0040}) )) or not (( isnull ({c0050}) )) or not (( isnull ({c0060}) )) then ( ( not ( isnull ({c0020}) ) )) endif',
            'with {tB_01.01, default: null, interval: false}: if ( not ( isnull ({c0020}) ) ) or not (( isnull ({c0040}) )) or not (( isnull ({c0050}) )) or not (( isnull ({c0060}) )) then ( ( not ( isnull ({c0030}) ) )) endif',
            'with {tB_01.01, default: null, interval: false}: if ( not ( isnull ({c0030}) ) ) or not (( isnull ({c0020}) )) or not (( isnull ({c0050}) )) or not (( isnull ({c0060}) )) then ( ( not ( isnull ({c0040}) ) )) endif',
            'with {tB_01.01, default: null, interval: false}: if ( not ( isnull ({c0030}) ) ) or not (( isnull ({c0040}) )) or not (( isnull ({c0020}) )) or not (( isnull ({c0060}) )) then ( ( not ( isnull ({c0050}) ) )) endif',
            'with {tB_01.01, default: null, interval: false}: if ( not ( isnull ({c0030}) ) ) or not (( isnull ({c0040}) )) or not (( isnull ({c0050}) )) or not (( isnull ({c0020}) )) then ( ( not ( isnull ({c0060}) ) )) endif',
            'with {tB_06.01, default: null, interval: false}: if ( not ( isnull ({c0030}) ) ) or not (( isnull ({c0050}) )) or not (( isnull ({c0060}) )) or not (( isnull ({c0070}) )) or not (( isnull ({c0080}) )) or not (( isnull ({c0090}) )) or not (( isnull ({c0100}) )) then ( ( not ( isnull ({c0020}) ) )) endif',
            'with {tB_06.01, default: null, interval: false}: if ( not ( isnull ({c0020}) ) ) or not (( isnull ({c0050}) )) or not (( isnull ({c0060}) )) or not (( isnull ({c0070}) )) or not (( isnull ({c0080}) )) or not (( isnull ({c0090}) )) or not (( isnull ({c0100}) )) then ( ( not ( isnull ({c0030}) ) )) endif',
            'with {tB_06.01, default: null, interval: false}: if ( not ( isnull ({c0030}) ) ) or not (( isnull ({c0020}) )) or not (( isnull ({c0060}) )) or not (( isnull ({c0070}) )) or not (( isnull ({c0080}) )) or not (( isnull ({c0090}) )) or not (( isnull ({c0100}) )) then ( ( not ( isnull ({c0050}) ) )) endif',
            'with {tB_06.01, default: null, interval: false}: if ( not ( isnull ({c0030}) ) ) or not (( isnull ({c0050}) )) or not (( isnull ({c0060}) )) or not (( isnull ({c0020}) )) or not (( isnull ({c0080}) )) or not (( isnull ({c0090}) )) or not (( isnull ({c0100}) )) then ( ( not ( isnull ({c0070}) ) )) endif',
            'with {tB_06.01, default: null, interval: false}: if ( not ( isnull ({c0030}) ) ) or not (( isnull ({c0050}) )) or not (( isnull ({c0060}) )) or not (( isnull ({c0070}) )) or not (( isnull ({c0020}) )) or not (( isnull ({c0090}) )) or not (( isnull ({c0100}) )) then ( ( not ( isnull ({c0080}) ) )) endif',
            'with {tB_06.01, default: null, interval: false}: if ( not ( isnull ({c0030}) ) ) or not (( isnull ({c0050}) )) or not (( isnull ({c0060}) )) or not (( isnull ({c0070}) )) or not (( isnull ({c0080}) )) or not (( isnull ({c0020}) )) or not (( isnull ({c0100}) )) then ( ( not ( isnull ({c0090}) ) )) endif',
            'with {tB_06.01, default: null, interval: false}: if ( not ( isnull ({c0030}) ) ) or not (( isnull ({c0050}) )) or not (( isnull ({c0060}) )) or not (( isnull ({c0070}) )) or not (( isnull ({c0080}) )) or not (( isnull ({c0020}) )) or not (( isnull ({c0020}) )) then ( ( not ( isnull ({c0100}) ) )) endif',
            'with {tB_07.01, default: null, interval: false}: if ( not ( isnull ({c0030}) ) ) or not (( isnull ({c0060}) )) or not (( isnull ({c0070}) )) or not (( isnull ({c0080}) )) or not (( isnull ({c0090}) )) or not (( isnull ({c0100}) )) or not (( isnull ({c0110}) )) or not (( isnull ({c0120}) )) then ( ( not ( isnull ({c0050}) ) )) endif',
            'with {tB_07.01, default: null, interval: false}: if ( not ( isnull ({c0030}) ) ) or not (( isnull ({c0060}) )) or not (( isnull ({c0050}) )) or not (( isnull ({c0080}) )) or not (( isnull ({c0090}) )) or not (( isnull ({c0100}) )) or not (( isnull ({c0110}) )) or not (( isnull ({c0120}) )) then ( ( not ( isnull ({c0070}) ) )) endif',
            'with {tB_07.01, default: null, interval: false}: if ( not ( isnull ({c0030}) ) ) or not (( isnull ({c0060}) )) or not (( isnull ({c0070}) )) or not (( isnull ({c0050}) )) or not (( isnull ({c0090}) )) or not (( isnull ({c0100}) )) or not (( isnull ({c0110}) )) or not (( isnull ({c0120}) )) then ( ( not ( isnull ({c0080}) ) )) endif',
            'with {tB_07.01, default: null, interval: false}: if ( not ( isnull ({c0030}) ) ) or not (( isnull ({c0060}) )) or not (( isnull ({c0070}) )) or not (( isnull ({c0080}) )) or not (( isnull ({c0050}) )) or not (( isnull ({c0100}) )) or not (( isnull ({c0110}) )) or not (( isnull ({c0120}) )) then ( ( not ( isnull ({c0090}) ) )) endif',
            'with {tB_07.01, default: null, interval: false}: if ( not ( isnull ({c0030}) ) ) or not (( isnull ({c0060}) )) or not (( isnull ({c0070}) )) or not (( isnull ({c0080}) )) or not (( isnull ({c0090}) )) or not (( isnull ({c0100}) )) or not (( isnull ({c0050}) )) or not (( isnull ({c0120}) )) then ( ( not ( isnull ({c0110}) ) )) endif',
            'with {tB_07.01, default: null, interval: false}: if ( not ( isnull ({c0030}) ) ) or not (( isnull ({c0060}) )) or not (( isnull ({c0070}) )) or not (( isnull ({c0080}) )) or not (( isnull ({c0090}) )) or not (( isnull ({c0050}) )) or not (( isnull ({c0110}) )) or not (( isnull ({c0120}) )) then ( ( not ( isnull ({c0100}) ) )) endif',
            'match({tB_01.01, c0020}[get ERI], "^[A-Z0-9]{18}[0-9]{2}$")',
            'match({tB_01.02, c0020}[get ESI], "^[A-Z0-9]{18}[0-9]{2}$")',
            'match({tB_01.03, c0030}[get LHH], "^[A-Z0-9]{18}[0-9]{2}$")',
            'match({tB_02.02, c0040}[get LES], "^[A-Z0-9]{18}[0-9]{2}$")',
            'match({tB_03.01, c0030}[get LEA], "^[A-Z0-9]{18}[0-9]{2}$")',
            'match({tB_03.03, c0031}[get LEB], "^[A-Z0-9]{18}[0-9]{2}$")',
            'match({tB_04.01, c0030}[get LES], "^[A-Z0-9]{18}[0-9]{2}$")',
            'match({tB_06.01, c0020}[get LES], "^[A-Z0-9]{18}[0-9]{2}$")',
        ];
    }
}
