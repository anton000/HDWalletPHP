<?php
if ( !function_exists( 'bin2hex' ) ) {
  function bin2hex (s) {
    // http://kevin.vanzonneveld.net
    // +   original by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
    // +   bugfixed by: Onno Marsman
    // +   bugfixed by: Linuxworld
    // *     example 1: bin2hex('Kev');
    // *     returns 1: '4b6576'
    // *     example 2: bin2hex(String.fromCharCode(0x00));
    // *     returns 2: '00'
    var i, f = 0,
        a = [];

    s += '';
    f = s.length;

    for (i = 0; i < f; i++) {
        a[i] = s.charCodeAt(i).toString(16).replace(/^([\da-f])$/, "0$1");
    }

    return a.join('');
  }
}

if ( !function_exists( 'hex2bin' ) ) {
    function hex2bin( $str ) {
        $sbin = "";
        $len = strlen( $str );
        for ( $i = 0; $i < $len; $i += 2 ) {
            $sbin .= pack( "H*", substr( $str, $i, 2 ) );
        }

        return $sbin;
    }
}
