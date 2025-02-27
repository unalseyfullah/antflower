<?php
// BEGIN A2 CONFIG
define('DISALLOW_FILE_EDIT', true);
// END A2 CONFIG
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

/**
 * WordPress için taban ayar dosyası.
 *
 * Bu dosya şu ayarları içerir: MySQL ayarları, tablo öneki,
 * gizli anahtaralr ve ABSPATH. Daha fazla bilgi için 
 * {@link https://codex.wordpress.org/Editing_wp-config.php wp-config.php düzenleme}
 * yardım sayfasına göz atabilirsiniz. MySQL ayarlarınızı servis sağlayıcınızdan edinebilirsiniz.
 *
 * Bu dosya kurulum sırasında wp-config.php dosyasının oluşturulabilmesi için
 * kullanılır. İsterseniz bu dosyayı kopyalayıp, ismini "wp-config.php" olarak değiştirip,
 * değerleri girerek de kullanabilirsiniz.
 *
 * @package WordPress
 */

// ** MySQL ayarları - Bu bilgileri sunucunuzdan alabilirsiniz ** //
/** WordPress için kullanılacak veritabanının adı */
define('DB_NAME', 'antflower');

/** MySQL veritabanı kullanıcısı */
define('DB_USER', 'antflower');

/** MySQL veritabanı parolası */
define('DB_PASSWORD', 'Unal8090?');

/** MySQL sunucusu */
define('DB_HOST', 'mysql57.websupport.sk:3311');

/** Yaratılacak tablolar için veritabanı karakter seti. */
define('DB_CHARSET', 'utf8mb4');

/** Veritabanı karşılaştırma tipi. Herhangi bir şüpheniz varsa bu değeri değiştirmeyin. */
define('DB_COLLATE', '');

/**#@+
 * Eşsiz doğrulama anahtarları.
 *
 * Her anahtar farklı bir karakter kümesi olmalı!
 * {@link http://api.wordpress.org/secret-key/1.1/salt WordPress.org secret-key service} servisini kullanarak yaratabilirsiniz.
 * Çerezleri geçersiz kılmak için istediğiniz zaman bu değerleri değiştirebilirsiniz. Bu tüm kullanıcıların tekrar giriş yapmasını gerektirecektir.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Q<YwB#rM0kzs4S%rTX_EAl2#~nfNKo&xTzdzn^i=I&43o>p{Lg(R!NAgD)wop};s');
define('SECURE_AUTH_KEY',  'ORSQ-h*m]V5l-G%8lai]IWd7D.[]Xc}yl>d:!>$B;*H9Iw^@+j=>>ZnaI}W@`[~m');
define('LOGGED_IN_KEY',    '72&x.fh]X4BnNs*Px`?C1*KmzV/3CMS:zbA{%:2o/QJ>%g;|$K=$=315dKW(|^i/');
define('NONCE_KEY',        '!Ym %3!4:h#K6zWZkxYh/nFphV-O(T;1aaY4U(7<M%cL*jk}5O]q)~cZoCQc!vzM');
define('AUTH_SALT',        'ue<vK>Sv}*qCEms=m8kRf.Vwl?COJ5)Aav!N:!WZ)DH+LQS,BwfHy|>oL%gEl E%');
define('SECURE_AUTH_SALT', '!S6ysr@y$DTzdod3yVcB..)IYY,WG0-)S{F:bblA}-O!V|DpB%<H:%_q6g6]c:v(');
define('LOGGED_IN_SALT',   'aME01<sA1dUh68_]Rp.$6r~(=j $YPJ0X0Oi?a@hDV7ci.UwgT[aBM6l}&`8<v[X');
define('NONCE_SALT',       '&{G|_DGtZECpRUBu%Ck?w-,WS0hmZ}P-y<O^s0<6k%H.Ev3J7}UA4^%yFZaE:n P');
/**#@-*/

/**
 * WordPress veritabanı tablo ön eki.
 *
 * Tüm kurulumlara ayrı bir önek vererek bir veritabanına birden fazla kurulum yapabilirsiniz.
 * Sadece rakamlar, harfler ve alt çizgi lütfen.
 */
$table_prefix  = 'wp_';

/**
 * Geliştiriciler için: WordPress hata ayıklama modu.
 *
 * Bu değeri "true" yaparak geliştirme sırasında hataların ekrana basılmasını sağlayabilirsiniz.
 * Tema ve eklenti geliştiricilerinin geliştirme aşamasında WP_DEBUG
 * kullanmalarını önemle tavsiye ederiz.
 */
define('WP_DEBUG', false);
define('WP_MEMORY_LIMIT','64M');
/* Hepsi bu kadar. Mutlu bloglamalar! */

/** WordPress dizini için mutlak yol. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** WordPress değişkenlerini ve yollarını kurar. */
require_once(ABSPATH . 'wp-settings.php');
