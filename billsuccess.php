<?php session_start();

include_once('dbConnection.php');


$email = $_SESSION["email"];
$first_name = $_SESSION["first_name"];
$last_name = $_SESSION["last_name"];
$gender = $_SESSION["gender"];

if(isset($_GET['status']))
    {
        //* check payment status
        if($_GET['status'] == 'cancelled')
        {
            // echo 'YOu cancel the payment';
            header('Location: index.php');
        }
        elseif($_GET['status'] == 'successful')
        {
            $txid = $_GET['transaction_id'];

            $curl = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_URL => "https://api.flutterwave.com/v3/transactions/{$txid}/verify",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "GET",
                CURLOPT_HTTPHEADER => array(
                  "Content-Type: application/json",
                  "Authorization: Bearer FLWSECK_TEST-fabb5273c7d44cc981935fa80c645ea4-X"
                ),
              ));
              
              $response = curl_exec($curl);
              
              curl_close($curl);
              
              $res = json_decode($response);
              if($res->status)
              {
                $amount = $res->data->meta->price;
                
                    //insert data to table    
            mysqli_query($conn, "
            INSERT INTO `Events`(`id`, `first_name`, `last_name`, `gender`, `email`, `amount`, `date`) VALUES 
                (NULL, '".$first_name."', '".$last_name."', '".$gender."', '".$email."','".$amount."', CURRENT_TIMESTAMP)          
            ");

			/*$subject = "Bill payment Successful";
			$message = "You have successfully made your payment";
			$headers = "From: no-reply@snh.org" . "\r\n" . 
			"CC: tolu@snh.org";
			$try = mail($email,$subject,$message,$headers);*/

            $_SESSION['Success'] = "Payment successful Check your email for more info";

			header("Location: index.php#RegisterForm");
              }
              else
              {
                  echo 'Can not process payment';
              }
        }
    }
?>

