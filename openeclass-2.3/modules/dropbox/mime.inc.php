<?php
/*========================================================================
*   Open eClass 2.3
*   E-learning and Course Management System
* ========================================================================
*  Copyright(c) 2003-2010  Greek Universities Network - GUnet
*  A full copyright notice can be read in "/info/copyright.txt".
*
*  Developers Group:	Costas Tsibanis <k.tsibanis@noc.uoa.gr>
*			Yannis Exidaridis <jexi@noc.uoa.gr>
*			Alexandros Diamantidis <adia@noc.uoa.gr>
*			Tilemachos Raptis <traptis@noc.uoa.gr>
*
*  For a full list of contributors, see "credits.txt".
*
*  Open eClass is an open platform distributed in the hope that it will
*  be useful (without any warranty), under the terms of the GNU (General
*  Public License) as published by the Free Software Foundation.
*  The full license can be read in "/info/license/license_gpl.txt".
*
*  Contact address: 	GUnet Asynchronous eLearning Group,
*  			Network Operations Center, University of Athens,
*  			Panepistimiopolis Ilissia, 15784, Athens, Greece
*  			eMail: info@openeclass.org
* =========================================================================*/
/**
 * creates variable $mimetype containing all known mimetypes based on the file extension
 * This is included in the download script and is used to give hints to browser about what 
 * mimetype is being used
 * 
 */

$mimetype = array( 
'ez' => 'application/andrew-inset'
, 'hqx' => 'application/mac-binhex40'
, 'cpt' => 'application/mac-compactpro'
, 'doc' => 'application/msword'
, 'oda' => 'application/oda'
, 'pdf' => 'application/pdf'
, 'ai' => 'application/postscript'
, 'eps' => 'application/postscript'
, 'ps' => 'application/postscript'
, 'smi' => 'application/smil'
, 'smil' => 'application/smil'
, 'xls' => 'application/vnd.ms-excel'
, 'ppt' => 'application/vnd.ms-powerpoint'
, 'wbxml' => 'application/vnd.wap.wbxml'
, 'wmlc' => 'application/vnd.wap.wmlc'
, 'wmlsc' => 'application/vnd.wap.wmlscriptc'
, 'bcpio' => 'application/x-bcpio'
, 'vcd' => 'application/x-cdlink'
, 'pgn' => 'application/x-chess-pgn'
, 'cpio' => 'application/x-cpio'
, 'csh' => 'application/x-csh'
, 'dcr' => 'application/x-director'
, 'dir' => 'application/x-director'
, 'dxr' => 'application/x-director'
, 'dvi' => 'application/x-dvi'
, 'spl' => 'application/x-futuresplash'
, 'gtar' => 'application/x-gtar'
, 'hdf' => 'application/x-hdf'
, 'js' => 'application/x-javascript'
, 'skp' => 'application/x-koan'
, 'skd' => 'application/x-koan'
, 'skt' => 'application/x-koan'
, 'skm' => 'application/x-koan'
, 'latex' => 'application/x-latex'
, 'nc' => 'application/x-netcdf'
, 'cdf' => 'application/x-netcdf'
, 'sh' => 'application/x-sh'
, 'shar' => 'application/x-shar'
, 'swf' => 'application/x-shockwave-flash'
, 'sit' => 'application/x-stuffit'
, 'sv4cpio' => 'application/x-sv4cpio'
, 'sv4crc' => 'application/x-sv4crc'
, 'tar' => 'application/x-tar'
, 'tcl' => 'application/x-tcl'
, 'tex' => 'application/x-tex'
, 'texinfo' => 'application/x-texinfo'
, 'texi' => 'application/x-texinfo'
, 't' => 'application/x-troff'
, 'tr' => 'application/x-troff'
, 'roff' => 'application/x-troff'
, 'man' => 'application/x-troff-man'
, 'me' => 'application/x-troff-me'
, 'ms' => 'application/x-troff-ms'
, 'ustar' => 'application/x-ustar'
, 'src' => 'application/x-wais-source'
, 'xhtml' => 'application/xhtml+xml'
, 'xht' => 'application/xhtml+xml'
, 'zip' => 'application/zip'
, 'au' => 'audio/basic'
, 'snd' => 'audio/basic'
, 'mid' => 'audio/midi'
, 'midi' => 'audio/midi'
, 'kar' => 'audio/midi'
, 'mpga' => 'audio/mpeg'
, 'mp2' => 'audio/mpeg'
, 'mp3' => 'audio/mpeg'
, 'aif' => 'audio/x-aiff'
, 'aiff' => 'audio/x-aiff'
, 'aifc' => 'audio/x-aiff'
, 'm3u' => 'audio/x-mpegurl'
, 'ram' => 'audio/x-pn-realaudio'
, 'rm' => 'audio/x-pn-realaudio'
, 'rpm' => 'audio/x-pn-realaudio-plugin'
, 'ra' => 'audio/x-realaudio'
, 'wav' => 'audio/x-wav'
, 'pdb' => 'chemical/x-pdb'
, 'xyz' => 'chemical/x-xyz'
, 'bmp' => 'image/bmp'
, 'gif' => 'image/gif'
, 'ief' => 'image/ief'
, 'jpeg' => 'image/jpeg'
, 'jpg' => 'image/jpeg'
, 'jpe' => 'image/jpeg'
, 'png' => 'image/png'
, 'tiff' => 'image/tiff'
, 'tif' => 'image/tiff'
, 'djvu' => 'image/vnd.djvu'
, 'djv' => 'image/vnd.djvu'
, 'wbmp' => 'image/vnd.wap.wbmp'
, 'ras' => 'image/x-cmu-raster'
, 'pnm' => 'image/x-portable-anymap'
, 'pbm' => 'image/x-portable-bitmap'
, 'pgm' => 'image/x-portable-graymap'
, 'ppm' => 'image/x-portable-pixmap'
, 'rgb' => 'image/x-rgb'
, 'xbm' => 'image/x-xbitmap'
, 'xpm' => 'image/x-xpixmap'
, 'xwd' => 'image/x-xwindowdump'
, 'igs' => 'model/iges'
, 'iges' => 'model/iges'
, 'msh' => 'model/mesh'
, 'mesh' => 'model/mesh'
, 'silo' => 'model/mesh'
, 'wrl' => 'model/vrml'
, 'vrml' => 'model/vrml'
, 'css' => 'text/css'
, 'html' => 'text/html'
, 'htm' => 'text/html'
, 'asc' => 'text/plain'
, 'txt' => 'text/plain'
, 'rtx' => 'text/richtext'
, 'rtf' => 'text/rtf'
, 'sgml' => 'text/sgml'
, 'sgm' => 'text/sgml'
, 'tsv' => 'text/tab-separated-values'
, 'wml' => 'text/vnd.wap.wml'
, 'wmls' => 'text/vnd.wap.wmlscript'
, 'etx' => 'text/x-setext'
, 'xml' => 'text/xml'
, 'xsl' => 'text/xml'
, 'mpeg' => 'video/mpeg'
, 'mpg' => 'video/mpeg'
, 'mpe' => 'video/mpeg'
, 'qt' => 'video/quicktime'
, 'mov' => 'video/quicktime'
, 'mxu' => 'video/vnd.mpegurl'
, 'avi' => 'video/x-msvideo'
, 'movie' => 'video/x-sgi-movie'
, 'ice' => 'x-conference/x-cooltalk'
    );

?>
