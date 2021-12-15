$ch = curl_init('https://textbelt.com/otp/generate');
$data = array(
  'phone' => '5557727420',
  'userid' => 'myuser@site.com',
  'key' => 'example_otp_key',
);

curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);
curl_close($ch);










Steps For Implementing Phone Verification
At 2Factor.in we have tried to Simplify OTP Verification Flow by offering simple HTTP APIs

Below article would provide you with a High Level Integration flow for implementing SMS OTP Based Phone Verification ( 2FA ) solution.

Implementing OTP logic with 2Factor AUTOGEN endpoint

AUTOGEN endpoint generates OTP value at run time & sends it to the end user thereby eliminating need to Generate or Store OTP value at your end.

Sending OTP:

Display an input box ( so end user can provide his phone number )
User clicks on Signup / Login button
Your application invokes 2Factor's AUTOGEN API Endpoint
https://2factor.in/API/V1/{api_key}/SMS/+91{user's_phone_no}/AUTOGEN

Sample response:

{ "Status": "Success", "Details": "5D6EBEE6-EC04-4776-846D"}

Details value in above response corresponds to unique OTP session id.

Verifying OTP:

Ask user to input OTP received
Invoke 2Factor's VERIFY Endpoint to verify OTP entered by user
https://2factor.in/API/V1/{api_key}/SMS/VERIFY/{session_id}/{otp_entered_by_user}

Here session_id = Details value returned in SendOTP step

Sample Response:

{ "Status": "Success", "Details": "OTP Matched" }

If the response received from our API says 'OTP Matched', then you can mark the user as verified in your database Else ask user to Retry.

Implementing OTP logic with 2Factor MANUAL endpoint

MANUAL endpoint can be used if your application requires passing a custom OTP value ( OTP value generated locally ) & send it to the end. Your code may use RANDOM() function to generate a random string ( of 4-6 characters ) and pass it to the 2Factor's API

Sending OTP:

Display an input box ( so end user can provide his phone number )
User clicks on Signup / Login button
Your application invokes 2Factor's MANUAL API Endpoint
https://2factor.in/API/V1/{api_key}/SMS/+91{user's_phone_no}/{custom_otp_val}

Sample response:

{ "Status": "Success", "Details": "5D6EBEE6-EC04-4776-846D-3600422BD9EF"}

Details value in above response corresponds to a unique OTP session id.

You may store the OTP value in database or session variables locally for verification step performed later

Verifying OTP:

Ask user to input OTP received
As OTP was generated locally, you can verify it by comparing user's input value with the value stored in database / session variable in Send OTP Step OR Invoke 2Factor's VERIFY Endpoint to verify OTP entered by user
https://2factor.in/API/V1/{api_key}/SMS/VERIFY/{session_id}/{otp_entered_by_user}

Here session_id = Details value returned in SendOTP step

Sample Response:

{ "Status": "Success", "Details": "OTP Matched" }

If the response received from our API says 'OTP Matched', then you can mark the user as verified in your database Else ask user to Retry.

Feel free to reach us at support@2factor.in should you need any assistance