<?php session_start();
 
if (isset($_POST["submit"])) {


$first_name = $_POST["first_name"] != "" ? $_POST['first_name'] : $errorCount++;
$last_name = $_POST["last_name"] != "" ? $_POST['last_name'] : $errorCount++;
$email = $_POST["email"] != "" ? $_POST['email'] : $errorCount++;
$gender = $_POST["gender"] != "" ? $_POST['gender'] : $errorCount++;

$_SESSION["first_name"] = $first_name;
$_SESSION["last_name"] = $last_name;
$_SESSION["email"] = $email;
$_SESSION["gender"] = $gender;

echo $_SESSION["gender"];

if($_SESSION["gender"] == 'male'){
    $bill = 3000;
  }else{
    $bill = 1000;
  }

if ($errorCount > 0) {
  //Display proper messages to the user
  //Give more accurate feedback to the user
   $_SESSION["error"] = "You have " . $errorCount . " errors in your form submission";
   header("Location: bill.php");
}else{

  

  


  $userObject =[
    'first_name'=>$first_name,
    'last_name'=>$last_name,
    'email'=>$email,
    'bill'=>$bill,


  ];

  




$refno = "";

			$alphabets = ['a','b','c','d','e','f','g','h','A','B','C','D','E','F','G','H'];

			for($i = 0 ; $i < 26 ; $i++){

			$index = mt_rand(0,count($alphabets)-1);	
			$refno .= $alphabets[$index];
		}

//Bill payment process




$request = [
  'tx_ref' => $refno,
  'amount' => $bill,
  'first_name' => $first_name,
  'last_name' => $last_name,
  'gender' => $gender,
  'currency' => 'NGN',
  'payment_options' => 'card',
  'redirect_url' => 'https://poolpartyphs.herokuapp.com/billsuccess.php',
  'customer' => [
      'email' => $email,
      'name' => $first_name . ' ' . $last_name,
  ],
  'meta' => [
      'price' => $bill
  ],
  'customizations' => [
      'title' => 'Pool Party Payment',
      'description' => ''
  ]
];

//* Ca;; f;iterwave emdpoint
$curl = curl_init();

curl_setopt_array($curl, array(
CURLOPT_URL => 'https://api.flutterwave.com/v3/payments',
CURLOPT_RETURNTRANSFER => true,
CURLOPT_ENCODING => '',
CURLOPT_MAXREDIRS => 10,
CURLOPT_TIMEOUT => 0,
CURLOPT_FOLLOWLOCATION => true,
CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
CURLOPT_CUSTOMREQUEST => 'POST',
CURLOPT_POSTFIELDS => json_encode($request),
CURLOPT_HTTPHEADER => array(
  'Authorization: Bearer FLWSECK_TEST-fabb5273c7d44cc981935fa80c645ea4-X',
  'Content-Type: application/json'
),
));

$response = curl_exec($curl);

curl_close($curl);

$res = json_decode($response);
if($res->status == 'success')
{
  $link = $res->data->link;
  header('Location: '.$link);
}
else
{
  echo 'We can not process your payment';
}
}



}

?>