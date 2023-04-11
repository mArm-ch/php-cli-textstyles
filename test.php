<?php

require_once(dirname(__FILE__).'/CLITextStyles.php');

ln('= CLITSFontStyles =');
ln('Normal '.CLITSFontStyles::Bold.'Bold'.CLITSResets::All);
ln('Normal '.CLITSFontStyles::Dim.'Dim'.CLITSResets::All);
ln('Normal '.CLITSFontStyles::Underline.'Underline'.CLITSResets::All);
ln('Normal '.CLITSFontStyles::Blink.'Blink'.CLITSResets::All);
ln('Normal '.CLITSFontStyles::Inverted.'Inverted'.CLITSResets::All);
ln('');
ln('= CLITS16ForeColors =');
ln('Default '.CLITS16ForeColors::System.' Default'.CLITS16ForeColors::System);
ln('Default '.CLITS16ForeColors::Black.' Black'.CLITS16ForeColors::System);
ln('Default '.CLITS16ForeColors::Red.' Red'.CLITS16ForeColors::System);
ln('Default '.CLITS16ForeColors::Green.' Green'.CLITS16ForeColors::System);
ln('Default '.CLITS16ForeColors::Yellow.' Yellow'.CLITS16ForeColors::System);
ln('Default '.CLITS16ForeColors::Blue.' Blue'.CLITS16ForeColors::System);
ln('Default '.CLITS16ForeColors::Magenta.' Magenta'.CLITS16ForeColors::System);
ln('Default '.CLITS16ForeColors::Cyan.' Cyan'.CLITS16ForeColors::System);
ln('Default '.CLITS16ForeColors::LightGray.' LightGray'.CLITS16ForeColors::System);
ln('Default '.CLITS16ForeColors::DarkGray.' DarkGay'.CLITS16ForeColors::System);
ln('Default '.CLITS16ForeColors::LightRed.' LightRed'.CLITS16ForeColors::System);
ln('Default '.CLITS16ForeColors::LightGreen.' LightGreen'.CLITS16ForeColors::System);
ln('Default '.CLITS16ForeColors::LightYellow.' LightYellow'.CLITS16ForeColors::System);
ln('Default '.CLITS16ForeColors::LightBlue.' LightBlue'.CLITS16ForeColors::System);
ln('Default '.CLITS16ForeColors::LightMagenta.' LightMagenta'.CLITS16ForeColors::System);
ln('Default '.CLITS16ForeColors::LightCyan.' LightCyan'.CLITS16ForeColors::System);
ln('Default '.CLITS16ForeColors::White.' White'.CLITS16ForeColors::System);
ln('= CLITS16BackColors =');
ln('Default '.CLITS16BackColors::System.'Default'.CLITS16BackColors::System);
ln('Default '.CLITS16BackColors::Black.'Black'.CLITS16BackColors::System);
ln('Default '.CLITS16BackColors::Red.'Red'.CLITS16BackColors::System);
ln('Default '.CLITS16BackColors::Green.'Green'.CLITS16BackColors::System);
ln('Default '.CLITS16BackColors::Yellow.'Yellow'.CLITS16BackColors::System);
ln('Default '.CLITS16BackColors::Blue.'Blue'.CLITS16BackColors::System);
ln('Default '.CLITS16BackColors::Magenta.'Magenta'.CLITS16BackColors::System);
ln('Default '.CLITS16BackColors::Cyan.'Cyan'.CLITS16BackColors::System);
ln('Default '.CLITS16BackColors::LightGray.'LightGray'.CLITS16BackColors::System);
ln('Default '.CLITS16BackColors::DarkGray.'DarkGay'.CLITS16BackColors::System);
ln('Default '.CLITS16BackColors::LightRed.'LightRed'.CLITS16BackColors::System);
ln('Default '.CLITS16BackColors::LightGreen.'LightGreen'.CLITS16BackColors::System);
ln('Default '.CLITS16BackColors::LightYellow.'LightYellow'.CLITS16BackColors::System);
ln('Default '.CLITS16BackColors::LightBlue.'LightBlue'.CLITS16BackColors::System);
ln('Default '.CLITS16BackColors::LightMagenta.'LightMagenta'.CLITS16BackColors::System);
ln('Default '.CLITS16BackColors::LightCyan.'LightCyan'.CLITS16BackColors::System);
ln('Default '.CLITS16BackColors::White.'White'.CLITS16BackColors::System);

function ln($message) {
	echo str_replace('\e', "\033", $message).PHP_EOL;
}

?>