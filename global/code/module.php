<?php
/**
 * According to the Terms of Service, this file may not be de-obfuscated or edited.
 * http://modules.formtools.org/license_agreement.php
 *
 * @copyright Encore Web Studios 2011
 */
function report_builder__install($x0b){global $x0c, $x0d, $x0e, $x0f;$x10 = "";$x11 = "";$x12 = isset($_POST["\145\x6b"]) ? $_POST["e\153"] : "";$x13= isset($_POST["\153"]) ? $_POST["k"] : "";if (empty($x12) || empty($x13) || $x12 != crypt($x13, "\x78\160")){$x10 = false;}else{$x10 = true;ft_register_hook("c\x6fd\145", "\162\145\x70\x6frt_b\x75\151\154\x64\145\x72", "\163\164\141\x72\164", "f\x74\x5fc\x6fns\164\x72\x75\x63\164\137p\141g\x65\x5f\x75r\154", "r\x62_\143\157ns\164r\165c\x74\137\160\x61\147\x65\x5f\165r\154", 50, true);ft_register_hook("\143\x6f\144\x65", "\162\x65port\137\x62uil\x64\145\162", "mid\x64l\145", "\x66\x74\137\147e\x74\x5f\141d\x6d\151n\x5f\155enu\x5f\x70a\147\x65s\x5fd\x72o\160\144o\x77\156", "\162\142_\x61\144d_\162\145\x70\x6f\162\x74_b\x75\151\x6c\144\145\x72\137\x6de\x6e\x75\x5fi\164e\x6ds", 50, true);ft_register_hook("\x63od\145", "\162eport\137\142u\x69\x6c\x64er", "\155\151\x64\144\154\145", "f\x74_ge\164\x5f\143\x6c\x69\x65\x6et\137\x6d\x65\156\x75\x5f\160\x61\147\145\x73\137\x64\x72o\160d\x6f\x77n", "rb\x5f\x61\144d\x5fre\160\x6f\x72\x74\x5f\142\x75\x69\154\x64\145r_\x6de\x6e\165\137\151\x74\x65\x6ds", 50, true);ft_register_hook("\x74\145\x6d\160\x6c\141\164e", "\x72\145\x70o\x72\164\x5fb\x75\151\154\144\x65\x72", "\x68\x65a\x64\137b\x6ft\x74\157\x6d", "", "rb_i\156\x63\154\165\x64\145\137\151\x6e\137\150\145\x61d");ft_register_hook("\x63\157\x64\x65", "\x72e\x70\157r\x74\137\x62\x75\x69\154\x64e\162", "m\x61\151n", "\146t_\x64\x69s\160l\141\171_\x73\165\x62miss\151o\156\137l\x69\x73t\x69n\147_\x71\165\151\x63\153\154inks", "r\x62\137\141\x64d\x5f\161\165i\143kli\156k", 50, true);$x14 = array("\x73\x68o\167_\x72\145\x70\157r\164\163\x5fic\x6f\156\x5fon\137\x73\165\142mi\163s\x69\157\x6e\x5flis\x74\151ng\x5f\160\141ge" => "yes","i\x63\x6f\156_\142\x65hav\151\157\165r" => "\x64\x69\x61\x6c\157\x67");ft_set_settings($x14, "\162e\160\x6f\x72t\x5fb\165i\x6c\x64\145\x72");}return array($x10, $x11);}function report_builder__uninstall($x0b){global $x0c;mysql_query("
\x0a\x20\x20\x20 D\105\x4c\x45\x54\105\x20\106R\x4f\x4d {$x0c}menu\137\x69\164\x65\x6d\x73\x0d\x0a \040\040 \x57\x48E\x52E\040(p\141g\145\x5f\151d\145\x6e\x74\x69\x66\151\x65\x72\040\075\040'r\142\x5f\x61l\154\137\x72\x65p\157\162ts')\040\x4fR\015\x0a\x20\x20\040\040   \040\x20\x20\050p\x61\147\145\x5f\x69\144\145n\x74if\151er\x20\114IKE\x20'\x72\x62\137f\x6f\x72m\137%'\051
\040 ");return array(true, "");}