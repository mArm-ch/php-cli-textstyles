<?php
/**
 * PHP CLI TextStyles - Test file
 * 
 * @version 1.0.0
 * @author David 'mArm' Ansermot
 * 
 * @url https://github.com/mArm-ch/php-cli-textstyles
 * @twitter david_ansermot
 * @github https://github.com/mArm-ch
 * 
 * @license MIT
 */

// MIT License
//
// Copyright (c) 2023 David Ansermot
//
// Permission is hereby granted, free of charge, to any person obtaining a copy
// of this software and associated documentation files (the "Software"), to deal
// in the Software without restriction, including without limitation the rights
// to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
// copies of the Software, and to permit persons to whom the Software is
// furnished to do so, subject to the following conditions:
//
// The above copyright notice and this permission notice shall be included in all
// copies or substantial portions of the Software.
//
// THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
// IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
// FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
// AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
// LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
// OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
// SOFTWARE.

require_once(dirname(__FILE__).'/CLITextStyles.php');

echo '= CLITSFontStyles ='."\n";
echo 'Normal '.CLITSFontStyles::Bold.'Bold'.CLITSResets::All."\n";
echo 'Normal '.CLITSFontStyles::Dim.'Dim'.CLITSResets::All."\n";
echo 'Normal '.CLITSFontStyles::Underline.'Underline'.CLITSResets::All."\n";
echo 'Normal '.CLITSFontStyles::Blink.'Blink'.CLITSResets::All."\n";
echo 'Normal '.CLITSFontStyles::Inverted.'Inverted'.CLITSResets::All."\n";
echo ''."\n";

echo '= CLITS16ForeColors ='."\n";
echo 'Default '.CLITS16ForeColors::System.' Default'.CLITS16ForeColors::System."\n";
echo 'Default '.CLITS16ForeColors::Black.' Black'.CLITS16ForeColors::System."\n";
echo 'Default '.CLITS16ForeColors::Red.' Red'.CLITS16ForeColors::System."\n";
echo 'Default '.CLITS16ForeColors::Green.' Green'.CLITS16ForeColors::System."\n";
echo 'Default '.CLITS16ForeColors::Yellow.' Yellow'.CLITS16ForeColors::System."\n";
echo 'Default '.CLITS16ForeColors::Blue.' Blue'.CLITS16ForeColors::System."\n";
echo 'Default '.CLITS16ForeColors::Magenta.' Magenta'.CLITS16ForeColors::System."\n";
echo 'Default '.CLITS16ForeColors::Cyan.' Cyan'.CLITS16ForeColors::System."\n";
echo 'Default '.CLITS16ForeColors::LightGray.' LightGray'.CLITS16ForeColors::System."\n";
echo 'Default '.CLITS16ForeColors::DarkGray.' DarkGay'.CLITS16ForeColors::System."\n";
echo 'Default '.CLITS16ForeColors::LightRed.' LightRed'.CLITS16ForeColors::System."\n";
echo 'Default '.CLITS16ForeColors::LightGreen.' LightGreen'.CLITS16ForeColors::System."\n";
echo 'Default '.CLITS16ForeColors::LightYellow.' LightYellow'.CLITS16ForeColors::System."\n";
echo 'Default '.CLITS16ForeColors::LightBlue.' LightBlue'.CLITS16ForeColors::System."\n";
echo 'Default '.CLITS16ForeColors::LightMagenta.' LightMagenta'.CLITS16ForeColors::System."\n";
echo 'Default '.CLITS16ForeColors::LightCyan.' LightCyan'.CLITS16ForeColors::System."\n";
echo 'Default '.CLITS16ForeColors::White.' White'.CLITS16ForeColors::System."\n";
echo ''."\n";

echo '= CLITS16BackColors ='."\n";
echo 'Default '.CLITS16BackColors::System.'Default'.CLITS16BackColors::System."\n";
echo 'Default '.CLITS16BackColors::Black.'Black'.CLITS16BackColors::System."\n";
echo 'Default '.CLITS16BackColors::Red.'Red'.CLITS16BackColors::System."\n";
echo 'Default '.CLITS16BackColors::Green.'Green'.CLITS16BackColors::System."\n";
echo 'Default '.CLITS16BackColors::Yellow.'Yellow'.CLITS16BackColors::System."\n";
echo 'Default '.CLITS16BackColors::Blue.'Blue'.CLITS16BackColors::System."\n";
echo 'Default '.CLITS16BackColors::Magenta.'Magenta'.CLITS16BackColors::System."\n";
echo 'Default '.CLITS16BackColors::Cyan.'Cyan'.CLITS16BackColors::System."\n";
echo 'Default '.CLITS16BackColors::LightGray.'LightGray'.CLITS16BackColors::System."\n";
echo 'Default '.CLITS16BackColors::DarkGray.'DarkGay'.CLITS16BackColors::System."\n";
echo 'Default '.CLITS16BackColors::LightRed.'LightRed'.CLITS16BackColors::System."\n";
echo 'Default '.CLITS16BackColors::LightGreen.'LightGreen'.CLITS16BackColors::System."\n";
echo 'Default '.CLITS16BackColors::LightYellow.'LightYellow'.CLITS16BackColors::System."\n";
echo 'Default '.CLITS16BackColors::LightBlue.'LightBlue'.CLITS16BackColors::System."\n";
echo 'Default '.CLITS16BackColors::LightMagenta.'LightMagenta'.CLITS16BackColors::System."\n";
echo 'Default '.CLITS16BackColors::LightCyan.'LightCyan'.CLITS16BackColors::System."\n";
echo 'Default '.CLITS16BackColors::White.'White'.CLITS16BackColors::System."\n";


?>