<?php

// ref: https://misc.flogisoft.com/bash/tip_colors_and_formatting

final class CLITS {
	public const author = 'David Ansermot';
	public const version = '1.0.0';
	public const url = 'https://github.com/mArm-ch/php-cli-textstyles';
}

final class CLITSFontStyles {
	public const Bold = '\e[1m';
	public const Dim = '\e[2m';
	public const Underline = '\e[4m';
	public const Blink = '\e[5m';
	public const Inverted = '\e[7m';
}

final class CLITSResets {
	public const All = '\e[0m';
	public const Bold = '\e[21m';
	public const Dim = '\e[22m';
	public const Underline = '\e[24m';
	public const Blink = '\e[25m';
	public const Inverted = '\e[27m';
}

final class CLITS16ForeColors {
	public const System = '\e[39m';
	public const Black = '\e[30m';
	public const Red = '\e[31m';
	public const Green = '\e[32m';
	public const Yellow = '\e[33m';
	public const Blue = '\e[34m';
	public const Magenta = '\e[35m';
	public const Cyan = '\e[36m';
	public const LightGray = '\e[37m';
	public const DarkGray = '\e[90m';
	public const LightRed = '\e[91m';
	public const LightGreen = '\e[92m';
	public const LightYellow = '\e[93m';
	public const LightBlue = '\e[94m';
	public const LightMagenta = '\e[95m';
	public const LightCyan = '\e[96m';
	public const White = '\e[97m';
}

final class CLITS16BackColors {
	public const System = '\e[49m';
	public const Black = '\e[40m';
	public const Red = '\e[41m';
	public const Green = '\e[42m';
	public const Yellow = '\e[43m';
	public const Blue = '\e[44m';
	public const Magenta = '\e[45m';
	public const Cyan = '\e[46m';
	public const LightGray = '\e[47m';
	public const DarkGray = '\e[100m';
	public const LightRed = '\e[101m';
	public const LightGreen = '\e[102m';
	public const LightYellow = '\e[103m';
	public const LightBlue = '\e[104m';
	public const LightMagenta = '\e[105m';
	public const LightCyan = '\e[106m';
	public const White = '\e[107m';
}


?>