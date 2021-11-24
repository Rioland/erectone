<?php
session_start();
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

class DataBase
{

    public static function GetCode($address)
    {
        $myconn = self::getConn();
        $sql = "SELECT * FROM `invoices` WHERE `address`='$address'";
        $result = $myconn->prepare($sql);
        $result->execute();
        $code = "Error, try again";
        while ($feedback = $result->fetch()) {
            $code = $feedback->code;
            $_SESSION['code'] = $code;

        }
        return $code;
    }

    public static function getStatus()
    {
        $myconn = self::getConn();
        $code = $_SESSION['code'];
        $sql = "SELECT * FROM `invoices` WHERE `code`=:code";
        $stm = $myconn->prepare($sql);
        $stm->execute(array(":code" => $code));

        $status = "Error, try again";
        while ($feedback = $stm->fetch()) {
            $status = $feedback->status;
        }
        return $status;
    }
    public static function updateInvoiceStatus($status, $address)
    {
        $myconn = self::getConn();
        $code = self::GetCode($address);
        $sql = "UPDATE `invoices` SET `status`='$status' WHERE `code`='$code'";
        $stm = $myconn->prepare($sql);
        $stm->execute();

    }

    public static function get_contry()
    {
        $user_ip = getenv('REMOTE_ADDR');
        $geo = unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=$user_ip"));
        $country = $geo["geoplugin_countryName"];
        $city = $geo["geoplugin_city"];
        return $country;

    }
    public static function createInvoice($amt, $address)
    {
        try {
            $myconn = self::getConn();
            $code = self::generateRandomString(25);
            $_SESSION['code'] = $code;

            // $address = self::generateAddress();
            $status = -1;
            $ip = self::getIp();
            $uid = $_SESSION["userid"];

            $sql = "INSERT INTO `invoices` (`code`, `address`, `price`, `status`, `uid`,`ip`)
    VALUES (:code, :address, :amt, :status, :uid, :ip)";
            $stm = $myconn->prepare($sql);
            $stm->bindParam('status', $status);
            $stm->bindParam('address', $address);
            $stm->bindParam('amt', $amt);
            $stm->bindParam('code', $code);
            $stm->bindParam('uid', $uid);
            $stm->bindParam('ip', $ip);

            if ($stm->execute()) {
                return $code;
            } else {
                return null;
            }

        } catch (\Throwable $th) {
            $th;
        }

    }

    public static function getConn()
    {
        $url = "https://www.blockonomics.co/api/";
        //    $servername = "ftp.avp.vgy.mybluehost.me";
        $servername = "localhost"; //"ftp.avp.vgy.mybluehost.me";
        $username = "root"; //"avpvgymy_erect1";
        // $password = "erect1office";
        $password = "";
        try {
            $conn = new PDO("mysql:host=$servername;dbname=avpvgymy_erect1", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

            return $conn;
        } catch (PDOException $e) {
            echo json_encode(array("message" => $e->getMessage(), "code" => "404"));
        }

    }

    public static function is_login()
    {

        if (isset($_SESSION["USER"]) and !empty($_SESSION["USER"])) {
            return true;
        }
        return false;
    }

    public static function btc_tras_update($res)
    {
        try {

            $myconn = self::getConn();
            $qury = "INSERT INTO `btc_transaction`(`status`, `emailid`, `satoshi`, `description`, `xpub`, `timestamp`, `uuid`, `value`, `txid`,
    `currency`, `code`, `address`, `paid_satoshi`,`myid`)
    VALUES (:status,:emailid,:satoshi,:description,:xpub,:timestamp,:uuid,:value,:txid,:currency,:code,:address,:paid_satoshi,:myid)";
            $id = $_SESSION["userid"];
            $stm = $myconn->prepare($qury);
            $stm->bindParam('status', $res['status']);
            $stm->bindParam('emailid', $res['emailid']);
            $stm->bindParam('satoshi', $res['satoshi']);
            $stm->bindParam('description', $res['description']);
            $stm->bindParam('xpub', $res['xpub']);
            $stm->bindParam('timestamp', $res['timestamp']);
            $stm->bindParam('uuid', $res['uuid']);
            $stm->bindParam('value', $res['value']);
            $stm->bindParam('txid', $res['txid']);
            $stm->bindParam('currency', $res['currency']);
            $stm->bindParam('code', $res['code']);
            $stm->bindParam('paid_satoshi', $res['paid_satoshi']);
            $stm->bindParam('address', $res['address']);
            $stm->bindParam('myid', $id);

            $stm->execute();
            if ($res['status'] == '2' or $res['status'] == 2) {
                $amount = self::USDtoBTC($res['value']);
                $qury = "UPDATE account SET `bit`=`bit`+$amount WHERE `id`=$id";
                $stm = $myconn->prepare($qury);
                $stm->execute();
                return "success";
            }
            return "Transaction in processing";

        } catch (\Throwable $th) {
            throw $th;
        }

    }

    public static function getEmail()
    {
        $myconn = self::getConn();
        $id = $_SESSION["userid"];
        $qury = "SELECT * FROM `users` WHERE id=:id";
        $stm = $myconn->prepare($qury);
        $stm->execute(array(":id" => $id));
        if ($stm->rowCount() >= 1) {
            $res = $stm->fetch();
            return $res->email;
        } else {
            return "";
        }
    }

    public static function btc_tras_update1($status, $value, $txid, $addr)
    {
        try {

            $myconn = self::getConn();
            $qury = "INSERT INTO `payments_trasact`(`txid`, `addr`, `value`, `status`, `mid`) VALUES (:txid,:addr,:value,:status,:mid)";
            $id = $_SESSION["userid"];

            $stm = $myconn->prepare($qury);
            $stm->bindParam('status', $status);
            $stm->bindParam('value', $value);
            $stm->bindParam('txid', $txid);
            $stm->bindParam('addr', $addr);
            $stm->bindParam('mid', $id);

            $stm->execute();
            if ($status == '2' or $status == 2) {
                $amount = self::USDtoBTC($value);
                $qury = "UPDATE account SET `bit`=`bit`+$amount WHERE `id`=$id";
                $stm = $myconn->prepare($qury);
                $stm->execute();
                return "success";
            }
            return "Transaction in processing";

        } catch (\Throwable $th) {
            throw $th;
        }

    }

    public static function getValue($col, $table)
    {

        $myconn = self::getConn();
        $id = $_SESSION["userid"];
        $qury = "SELECT $col FROM $table WHERE id=:id";
        $stm = $myconn->prepare($qury);
        $stm->execute(array(":id" => $id));
        $feedback = $stm->fetch();
        return $feedback->$col;

    }

    public static function getApi($col, $table, $val)
    {
        try {

            $myconn = self::getConn();
//            $id = $_SESSION["userid"];
            $qury = "SELECT `$col` FROM `$table` WHERE `name`=:val";
            $stm = $myconn->prepare($qury);
            $stm->execute(array(":val" => $val));
            $feedback = $stm->fetch();
            return $feedback->$col;
        } catch (\Throwable $th) {

        }
        return "";

    }

    public static function getApiPrivate($name)
    {
        try {

            $myconn = self::getConn();
            $id = $_SESSION["userid"];
            $qury = "SELECT * FROM `apis` WHERE `name`=:name";
            $stm = $myconn->prepare($qury);
            $stm->execute(array(":name" => $name));
            $feedback = $stm->fetch();
            return $feedback->private;
        } catch (\Throwable $th) {

        }
        return "";

    }

    public static function getApiPublic($name)
    {
        try {

            $myconn = self::getConn();
            $id = $_SESSION["userid"];
            $qury = "SELECT * FROM `apis` WHERE `name`=:name";
            $stm = $myconn->prepare($qury);
            $stm->execute(array(":name" => $name));
            $feedback = $stm->fetch();
            return $feedback->public;
        } catch (\Throwable $th) {

        }
        return "";

    }
    public static function getdollaBalance()
    {
        try {

            $myconn = self::getConn();
            $id = $_SESSION["userid"];
            $query = "SELECT * FROM `account` WHERE `id`=:id";
            $stm = $myconn->prepare($query);
            $stm->bindParam(":id", $id);
            $stm->execute();
            $res = $stm->fetch(PDO::FETCH_OBJ);
            return $res->dollar;

        } catch (\Throwable $th) {
            throw $th;
        }

    }

    public static function getApiredirect($name)
    {
        try {

            $myconn = self::getConn();
//            $id = $_SESSION["userid"];
            $qury = "SELECT * FROM `apis` WHERE `name`=:name";
            $stm = $myconn->prepare($qury);
            $stm->execute(array(":name" => $name));
            $feedback = $stm->fetch();
            return $feedback->redirect;
        } catch (\Throwable $th) {

        }
        return "";

    }

    public static function getbtcBalance()
    {
        try {

            $myconn = self::getConn();
            $id = $_SESSION["userid"];
            $query = "SELECT * FROM `account` WHERE `id`=:id";
            $stm = $myconn->prepare($query);
            $stm->bindParam(":id", $id);
            $stm->execute();
            $res = $stm->fetch(PDO::FETCH_OBJ);
            return $res->bit;

        } catch (\Throwable $th) {
            throw $th;
        }

    }

    public static function getethBalance()
    {
        try {

            $myconn = self::getConn();
            $id = $_SESSION["userid"];
            $query = "SELECT * FROM `account` WHERE `id`=:id";
            $stm = $myconn->prepare($query);
            $stm->bindParam(":id", $id);
            $stm->execute();
            $res = $stm->fetch(PDO::FETCH_OBJ);
            return $res->eth;

        } catch (\Throwable $th) {
            throw $th;
        }

    }

    public static function geteroBalance()
    {
        try {

            $myconn = self::getConn();
            $id = $_SESSION["userid"];
            $query = "SELECT * FROM `account` WHERE `id`=:id";
            $stm = $myconn->prepare($query);
            $stm->bindParam(":id", $id);
            $stm->execute();
            $res = $stm->fetch(PDO::FETCH_OBJ);
            return $res->euro;

        } catch (\Throwable $th) {
            throw $th;
        }

    }

    public static function get_token($table, $auth_token)
    {

        $myconn = self::getConn();
        $qury = "SELECT $table FROM `users` WHERE $table=:token";
        $stm = $myconn->prepare($qury);
        $stm->execute(array(":token" => $auth_token));
        if ($stm->rowCount() >= 1) {
            return true;
        } else {
            return "invalid login details";
        }

    }

    public static function get_time($auth_token)
    {

        $myconn = self::getConn();
        $qury = "SELECT `token_date` FROM `users` WHERE `reset_pass_token` =:token";
        $stm = $myconn->prepare($qury);
        $stm->execute(array(":token" => $auth_token));
        if ($stm->rowCount() >= 1) {
            $res = $stm->fetch();
            return $res->token_date;

        }
        return "";

    }

    public static function get_email($auth_email): bool
    {

        // require './Config/Config.php';
        $myconn = self::getConn();
        $qury = "SELECT * FROM `users` WHERE email=:email";
        $stm = $myconn->prepare($qury);
        $stm->execute(array(":email" => $auth_email));
        if ($stm->rowCount() >= 1) {

            return true;
        } else {
            return false;
        }

    }

    public static function isVetify()
    {
        $email = self::getEmail();
        $quryy = "SELECT * FROM `users` where email=:em";
        $stm = self::getConn()->prepare($quryy);
        $stm->bindParam(":em", $email);
        $stm->execute();
        if ($stm->rowCount() >= 1) {
            $result = $stm->fetch();
            return $result->is_verify;
        }
        return false;

    }
    public static function getCampain($mode)
    {
        $quryy = "SELECT * FROM `campain` where mode=:mode";
        $stm = self::getConn()->prepare($quryy);
        $stm->bindParam(":mode", $mode);
        $stm->execute();
        if ($stm->rowCount() >= 1) {
            $result = $stm->fetch();
            return $result->amount;
        }
        return 200;

    }
// jkkjjbnbmnbmnbmbmnmnbm
    public static function updateToken($auth_token): bool
    {

        $myconn = self::getConn();
        $v = true;
        $qury = "UPDATE `users` SET `is_verify`=:v WHERE `auth_token`=:token";
        $stm = $myconn->prepare($qury);
        $stm->execute(array(":v" => $v, ":token" => $auth_token));
        if ($stm->rowCount() >= 1) {

            return true;
        }
        return false;
    }

    public static function updateVerifyToken(): bool
    {
        $now = date("Y-m-d H:m:s");
        $time = date("Y-m-d H:i:s", strtotime('+1 hours'));
        $myconn = self::getConn();
        $token = str_shuffle("123456789");
        $token = substr($token, 0, 6);

        $email = self::getEmail();
        $qury = "UPDATE `users` SET `token_date`=:tim,`auth_token`=:t WHERE `email`=:email";
        $stm = $myconn->prepare($qury);
        $stm->execute(array(":t" => $token, ":tim" => $time, ":email" => $email));
        if ($stm->rowCount() >= 1) {
            $sub = "Verification message from Erectone";
            $mess = "Use this 6 verification <br> <b>" . $token . "</b> to verify your account do not disclose it to anyone";
            $isSendMail = self::send_mail($email, $mess, $sub);
            if ($isSendMail) {
                $_SESSION['VMODE'] = "v";
                return true;
            }

        }

        return false;

    }

    public static function updateresetToken($auth_token, $email)
    {

        $now = date("Y-m-d H:m:s");
        $time = date("Y-m-d H:i:s", strtotime('+1 hours'));
        $myconn = self::getConn();
        $qury = "UPDATE `users` SET `token_date`=:tim,`reset_pass_token`=:t WHERE `email`=:email";
        $stm = $myconn->prepare($qury);
        $stm->execute(array(":t" => $auth_token, ":tim" => $time, ":email" => $email));
        if ($stm->rowCount() >= 1) {
            return true;
        }
        return false;
    }

    public static function updatePassword($rest_token, $pass)
    {

        try {
            $pass = md5($pass);
            $myconn = self::getConn();
            $qury = "UPDATE `users` SET `password`=:p WHERE `reset_pass_token`=:token";
            $stm = $myconn->prepare($qury);
            $stm->execute(array(":p" => $pass, ":token" => $rest_token));
            if ($stm->rowCount() >= 1) {
                return "true";
            }
            return "false";
        } catch (\Throwable $th) {
            throw $th;
        }

    }

    public static function signin_user($email, $pass): bool
    {
        $pass = md5($pass);

        $myconn = self::getConn();
        $qury = "SELECT * FROM `users` WHERE `email`=:email AND `password`=:pass";
        $stm = $myconn->prepare($qury);
        $stm->execute(array(":email" => $email, ":pass" => $pass));
        if ($stm->rowCount() >= 1) {
            $res = $stm->fetch();
            $_SESSION['userid'] = $res->id;
            $_SESSION['USER'] =$res;
            $_SESSION['router']="./pages/buy_sell.php";
            return true;
        }
        return false;

    }

    public static function generate_token()
    {
        return str_shuffle("1234678905abcdefghijklmnopqrstuvwzyx@#");
    }

    public static function ip_visitor_country()
    {

        $client = @$_SERVER['HTTP_CLIENT_IP'];
        $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
        $remote = $_SERVER['REMOTE_ADDR'];
        $country = "Unknown";

        if (filter_var($client, FILTER_VALIDATE_IP)) {
            $ip = $client;
        } elseif (filter_var($forward, FILTER_VALIDATE_IP)) {
            $ip = $forward;
        } else {
            $ip = $remote;
        }
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "http://www.geoplugin.net/json.gp?ip=" . $ip);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $ip_data_in = curl_exec($ch); // string
        curl_close($ch);

        $ip_data = json_decode($ip_data_in, true);
        $ip_data = str_replace('&quot;', '"', $ip_data); // for PHP 5.2 see stackoverflow.com/questions/3110487/

        if ($ip_data && $ip_data['geoplugin_countryName'] != null) {
            $country = $ip_data['geoplugin_countryName'];
        }

        // return $ip;
        return $country;
    }

    public static function google_register($name, $email, $pass, $country, $pic, $gender, $id): bool
    {
        $pass = md5($pass);
        $country = self::ip_visitor_country();
        $token = self::generate_token();
        $myconn = self::getConn();
        $qury = "INSERT INTO `users`(`email`, `password`, `country`,`auth_token`,`id`,`name`,`gender`,`picture`) VALUES (:email,:password,:country,:token,:id,:name,:gend,:pic)";
        $stm = $myconn->prepare($qury);
        $feildback = $stm->execute(array(":email" => $email, ":password" => $pass, ":country" => $country, ":token" => $token, ":id" => $id, ":name" => $name, ":gend" => $gender, ":pic" => $pic));
        $qury1 = "INSERT INTO `account`(`id`, `dollar`, `euro`, `bit`, `eth`) VALUES (:uid,:dol,:euro,:btc,:eth)";

        $stm1 = $myconn->prepare($qury1);
        $dollar = "0.0";
        $ero = "0.0";
        $btc = "0.0";
        $eth = "0.0";
        $feildback1 = $stm1->execute(array(":uid" => $id, ":dol" => $dollar, ":euro" => $ero, ":btc" => $btc, ":eth" => $eth));

        if ($feildback and $feildback1) {
            // $sub = "Verification message from Erectone";

            // $mess = "please click on the following link to verify your account http://" . $_SERVER['SERVER_NAME'] . '/verify.php?token=' . $token;
            // self::send_mail($email, $mess, $sub);
            $_SESSION['userid'] = $id;
            return true;
        } else {
            return false;

        }

    }

    public static function register($email, $pass, $country): string
    {
        $_SESSION["dbroot"] = __DIR__;
        $country = self::ip_visitor_country();
        $myconn = self::getConn();
        $qury = "SELECT `id` FROM `users` WHERE `email`=:email ";
        $stm = $myconn->prepare($qury);

        $stm->execute(array(":email" => $email));
        if ($stm->rowCount() >= 1) {

            return "User already exist please login";
        } else {

            $id = str_shuffle(time());
            $token = self::generate_token();
            $qury = "INSERT INTO `users`(`email`, `password`, `country`,`auth_token`,`id`) VALUES (:email,:password,:country,:token,:id)";
            $stm = $myconn->prepare($qury);
            $feildback = $stm->execute(array(":email" => $email, ":password" => md5($pass), ":country" => $country, ":token" => $token, ":id" => $id));

            $qury1 = "INSERT INTO `account`(`id`, `dollar`, `euro`, `bit`, `eth`) VALUES (:uid,:dol,:euro,:btc,:eth)";

            $stm1 = $myconn->prepare($qury1);
            $dollar = "0.0";
            $ero = "0.0";
            $btc = "0.0";
            $eth = "0.0";
            $feildback1 = $stm1->execute(array(":uid" => $id, ":dol" => $dollar, ":euro" => $ero, ":btc" => $btc, ":eth" => $eth));

            if ($feildback and $feildback1) {
                // $sub = "Verification message from Erectone";

                // $mess = "please click on the following link to verify your account https://" . $_SERVER['SERVER_NAME'] . '/verify/' . $token;

                // self::send_mail($email, $mess, $sub);

                return "true";
            } else {
                return "Error in registeration contact the admin";

            }

        }

    }
    public static function send_mail($email, $mess, $sub)
    {

        require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = 0; //Enable verbose debug output
            $mail->isSMTP(); //Send using SMTP
            $mail->Host = 'mail.erect1.org'; //Set the SMTP server to send through
            $mail->SMTPAuth = true; //Enable SMTP authentication
            $mail->Username = 'customercare@erect1.org'; //SMTP username
            $mail->Password = 'erect1office'; //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; //Enable implicit TLS encryption
            $mail->Port = 465; //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('customercare@erect1.org', 'Mailer');
            $mail->addAddress($email, 'Joe User'); //Add a recipient
            // $mail->addAddress('customercare@erect1.org'); //Name is optional
            // $mail->addReplyTo('info@example.com', 'Information');
            // $mail->addCC('cc@example.com');
            // $mail->addBCC('bcc@example.com');

            //Attachments
            // $mail->addAttachment('/var/tmp/file.tar.gz'); //Add attachments
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg'); //Optional name

            //Content
            $mail->isHTML(true); //Set email format to HTML
            $mail->Subject = $sub;
            $mail->Body = $mess;
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            return true;
        } catch (Exception $e) {
            // exit();
            // return "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            return false;
        }

    }

    public static function insert_merket(
        $description,
        $circulating_supply, $cmc_rank, $date_added, $last_updated, $max_supply, $num_market_pairs,
        $platform,
        $market_cap,
        $percent_change_1h,
        $percent_change_7d,
        $percent_change_24h,
        $percent_change_30d,
        $percent_change_60d,
        $percent_change_90d,
        $price,
        $volume_24h,
        $slug,
        $symbol,
        $id,
        $name,
        $total_supply, $logo) {

// $circulating_supplytotal_supply=$_POST['circulating_supply'];
        $myconn = self::getConn();
        $query = "INSERT INTO `market`(`id`, `name`, `last_updated`, `market_cap`, `percent_change_1h`, `percent_change_7d`, `percent_change_24h`,
        `percent_change_30d`, `percent_change_60d`, `percent_change_90d`, `volume_24h`, `slug`, `symbol`,
        `circulating_supply`, `cmc_rank`, `date_added`, `currency`, `max_supply`, `num_market_pairs`,
        `platform`, `total_supply`,`price`,`logo`)
        VALUES (:id,:name,:lasup,:macap,:per1h,:per7d,:per24h,:per30d,:per60d,:per90d,:vol24,:slu,:simb,:calcu,:cmc,:ddad,:curre,:maxsup,:num_mak,:plat,:totsup,:price,:logo)";
        $req = $stm = $myconn->prepare($query);
        $stm->execute([':id' => $id, ':name' => $name, ':lasup' => $last_updated, ':macap' => $market_cap, ':per1h' => $percent_change_1h, ':per7d' => $percent_change_7d, ':per24h' => $percent_change_24h,
            ':per30d' => $percent_change_30d, ':per60d' => $percent_change_60d,
            ':per90d' => $percent_change_90d, ':vol24' => $volume_24h, ':slu' => $slug, ':simb' => $symbol,
            ':calcu' => $circulating_supply,
            ':cmc' => $cmc_rank, ':ddad' => $date_added, ':curre' => "USD", ':maxsup' => $max_supply, ':num_mak' => $num_market_pairs,
            ':plat' => $platform,
            ':totsup' => $total_supply,
            ':price' => $price,
            ':logo' => $logo]);

        // $stm->bind_param("ssssssssssssssssssssssss",
        //     $id, $name, $last_updated, $market_cap, $percent_change_1h, $percent_change_7d, $percent_change_24h, $percent_change_30d, $percent_change_60d, $percent_change_90d, $volume_24h, $slug, $symbol, $circulating_supply, $cmc_rank, $date_added, "USD", $max_supply, $num_market_pairs, $platform, $total_supply, $price,$logo,$description
        // );

        if ($req == true) {
            return true;
        }
        return false;

    }

    public static function get_coin_icon($id)
    {
        header('Content-type: application/json');
// $url = 'https://pro-api.coinmarketcap.com/v1/cryptocurrency/listings/latest';
        $url = "https://pro-api.coinmarketcap.com/v1/cryptocurrency/info";
        $parameters = [
            // 'start' => '1',
            // 'limit' => '20',
            'id' => "1027",
            'aux' => "logo",

        ];

        $headers = [
            'Accepts: application/json',
            'X-CMC_PRO_API_KEY: eadd6a85-8d92-4b85-9eba-f4a18e24aa18',
        ];
        $qs = http_build_query($parameters); // query string encode the parameters
        $request = "{$url}?{$qs}"; // create the request URL

        $curl = curl_init(); // Get cURL resource
        // Set cURL options
        curl_setopt_array($curl, array(
            CURLOPT_URL => $request, // set the request URL
            CURLOPT_HTTPHEADER => $headers, // set the headers
            CURLOPT_RETURNTRANSFER => 1, // ask for raw response instead of bool
        ));

        $response = curl_exec($curl); // Send the request, save the response
        $json = $response . PHP_EOL; // print json decoded response

        return $json;
//
        curl_close($curl); // Close request

    }

    public static function getMarketCap()
    {
        header('Content-type: application/json');
        $url = 'https://pro-api.coinmarketcap.com/v1/cryptocurrency/listings/latest';
        // $url = "https://pro-api.coinmarketcap.com/v1/cryptocurrency/info";
        $parameters = [
            'start' => '1',
            'limit' => '20',
            'convert' => 'USD',
        ];

        $headers = [
            'Accepts: application/json',
            'X-CMC_PRO_API_KEY: eadd6a85-8d92-4b85-9eba-f4a18e24aa18',
        ];
        $qs = http_build_query($parameters); // query string encode the parameters
        $request = "$url?$qs"; // create the request URL

        $curl = curl_init(); // Get cURL resource
        // Set cURL options
        curl_setopt_array($curl, array(
            CURLOPT_URL => $request, // set the request URL
            CURLOPT_HTTPHEADER => $headers, // set the headers
            CURLOPT_RETURNTRANSFER => 1, // ask for raw response instead of bool
        ));

        return curl_exec($curl); // Send the request, save the response
        //         $response; // print json decoded response

        curl_close($curl); // Close request

    }

    public static function addcard($cardnumber, $ccv, $expdate, $add1, $add2, $phone, $town, $country, $pc): bool
    {

        $myconn = self::getConn();

        $id = $_SESSION["userid"];
        $query = "INSERT INTO `cards`(`id`, `card_number`, `expedite`, `ccv`, `address1`, `address2`, `town`, `postcode`, `country`,`phone`)  VALUES (:id,:cn,:ex,:ccv,:add1,:add2,:tw,:pc,:ctry,:ph)";
        $stm = $myconn->prepare($query);
        $feedback = $stm->execute(array(":id" => $id, ':cn' => $cardnumber, ':ex' => $expdate, ':ccv' => $ccv, ':add1' => $add1, ':add2' => $add2, ':tw' => $town, 'pc' => $pc, ':ctry' => $country, ':ph' => $phone));
        if ($feedback) {
            return true;
        }
        return false;

    }

    public static function updatetrans($col, $response, $amount)
    {

        $myconn = self::getConn();
        $id = $_SESSION["userid"];
        $q = "INSERT INTO `transaction`(`reference`, `trans`, `status`, `message`, `transaction`, `trxref`,`uid`,`amount`)
        VALUES (:reference,:trans,:status,:message,:transaction,:trxref,:uid,:amount)";
        $stm1 = $myconn->prepare($q);
        $stm1->bindParam(":amount", $amount);
        $stm1->bindParam(":reference", $response["reference"]);
        $stm1->bindParam(":trans", $response["trans"]);
        $stm1->bindParam(":status", $response["status"]);
        $stm1->bindParam(":message", $response["message"]);
        $stm1->bindParam(":transaction", $response["transaction"]);
        $stm1->bindParam(":trxref", $response["trxref"]);
        $stm1->bindParam(":uid", $id);
        $stm1->execute();
//         if()
        $qury = "UPDATE account SET $col=`$col`+$amount  WHERE `id`=:id";
        $stm = $myconn->prepare($qury);
        $report = $stm->execute(array(":id" => $id));
        if ($report === true) {
            return "Transaction successful";
        }
        return "Record can not be updated";

    }

    public static function generateRandomString($length = 10)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
    public static function getBTCPrice($currency)
    {
        try {
            $content = file_get_contents("https://www.blockonomics.co/api/price?currency=" . $currency);
            $content = json_decode($content);
            $price = $content->price;
            if ($price > 0) {
                $_SESSION['btcprice'] = $price;
                return $price;
            } else if (isset($_SESSION['btcprice']) and !empty($_SESSION['btcprice'])) {
                return $_SESSION['btcprice'];
            }
            return $price;
        } catch (Exception $e) {
            print $e;
        }
    }
    public static function generateAddress()
    {

        $address = "";
        $api_key = self::getApiPrivate('block') ?? "6NRYdE4XdqnERd0heOsHl3Yda4gdUKQ8fL2jAJOuSx8";
        $url = 'https://www.blockonomics.co/api/new_address?reset=1';

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");

        $header = "Authorization: Bearer " . $api_key;
        $headers = array();
        $headers[] = $header;
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $contents = curl_exec($ch);
        if (curl_errno($ch)) {
            echo "Error:" . curl_error($ch);
        }

        $responseObj = json_decode($contents);
        $status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        if ($status == 200) {
            $address = $responseObj->address;
        } else {
            $address = "ERROR: " . $status . ' ' . $responseObj->message;
        }
        return $address;

    }

    public static function BTCtoUSD($amount)
    {
        $price = self::getBTCPrice("USD");
        return intval($amount) * $price;
    }

    public static function USDtoBTC($amount)
    {
        $price = self::getBTCPrice("USD");
        return round((int) $amount / $price, 5, PHP_ROUND_HALF_UP);
    }

    public static function getIp()
    {
        // if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        //     //ip from share internet
        //     $ip = $_SERVER['HTTP_CLIENT_IP'];
        // } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        //     //ip pass from proxy
        //     $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        // } else {
        //     $ip = $_SERVER['REMOTE_ADDR'];
        // }
        // return $ip;

        $client = @$_SERVER['HTTP_CLIENT_IP'];
        $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
        $remote = $_SERVER['REMOTE_ADDR'];
        $country = "Unknown";

        if (filter_var($client, FILTER_VALIDATE_IP)) {
            $ip = $client;
        } elseif (filter_var($forward, FILTER_VALIDATE_IP)) {
            $ip = $forward;
        } else {
            $ip = $remote;
        }
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "http://www.geoplugin.net/json.gp?ip=" . $ip);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $ip_data_in = curl_exec($ch); // string
        curl_close($ch);

        $ip_data = json_decode($ip_data_in, true);
        $ip_data = str_replace('&quot;', '"', $ip_data); // for PHP 5.2 see stackoverflow.com/questions/3110487/

        if ($ip_data && $ip_data['geoplugin_countryName'] != null) {
            $country = $ip_data['geoplugin_countryName'];
        }

        return $ip;

    }

    public static function getBitcoinResponsDetail($apikey, $address)
    {
        $url = "https://www.blockonomics.co/api/merchant_order/$address";

        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        $headers = array(
            "X-Custom-Header: value",
            "Authorization: Bearer $apikey",
            "Content-Type: application/json",
        );
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
//for debug only!
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

        $resp = curl_exec($curl);
        return $resp;
        curl_close($curl);

    }

    public static function get_coin_Payment_detail($apikey, $address)
    {
        $url = "https://www.blockonomics.co/api/merchant_order/$address";

        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        $headers = array(
            "X-Custom-Header: value",
            "Authorization: Bearer $apikey",
            "Content-Type: application/json",
        );
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
//for debug only!
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

        $resp = curl_exec($curl);
        return $resp;
        curl_close($curl);

    }

    public static function generateQR($address)
    {
        $cht = "qr";
        $chs = "300x300";
        $chl = $address;
        $choe = "UTF-8";

        $qrcode = 'https://chart.googleapis.com/chart?cht=' . $cht . '&chs=' . $chs . '&chl=' . $chl . '&choe=' . $choe;
        return $qrcode;

    }

}
// echo Database::send_mail("nsnsns","hshshshs","hdhdhdhd");
