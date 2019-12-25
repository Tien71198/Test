<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'kimtien' );

/** Username của database */
define( 'DB_USER', 'kimtien' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', 'kimtien' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '*`<GutHLh6V14xNNgIK{0Ww2N&.>Pn.Z+1e2Sra01K*8:f6R0s;YR-lmUHDw*/I~' );
define( 'SECURE_AUTH_KEY',  '{KtbgSyc-#FRh6d@hn`P<|Mhk6tgwF@,G,t!<Y/jBda<Lir&6I_:nbKhj|u%G(eS' );
define( 'LOGGED_IN_KEY',    'Gk*!yTtuR-xvvGTOqm{+,BMxY`_i$yfsEGG<yzhuQd^s764~U/:E[K7:_wMin,zi' );
define( 'NONCE_KEY',        '3Sg)riqgob_-:L-/]u$:[gc`I1Ye!m+KJDxey,ZeWd@J&YGRln8[&6{7jm-NpH=@' );
define( 'AUTH_SALT',        'nKE=>~b[$&eho?ELblU^_5*SlD0)8q/4LIP |5Re/HyYod^avQwVAWJEPKaTwguE' );
define( 'SECURE_AUTH_SALT', 'pmvx&)`|X-!e}6-OB$KGWr)x9qVib>D}}Q=_Y7laQ%QQzCynu3Zv*Omc<Xs7&s:u' );
define( 'LOGGED_IN_SALT',   's!_&*Mk6U.>X0hjY0wrmQmGqQh#a+cFwQ?s4DMPafG~[BK<MO[y=1}qfx*,(&tkr' );
define( 'NONCE_SALT',       'X3/#.]-v7bE~ !j@AOQ<>lLDhCGVG-o0C 6/%h,7N:r.e;Ir}-P~.,>K8iLcPW2=' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix  = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
