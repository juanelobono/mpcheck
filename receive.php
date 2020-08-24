 <?php

    MercadoPago\SDK::setAccessToken("TEST-8908150110936817-020710-1c283986a049260641194ee4170ad927__LA_LD__-151041389");

    switch($_POST["type"]) {
        case "payment":
            $payment = MercadoPago\Payment.find_by_id($_POST["id"]);
            error_log("New payment" . json_decode($payment), 0);
            break;
        case "plan":
            $plan = MercadoPago\Plan.find_by_id($_POST["id"]);
            error_log("New plan" . json_decode(plan), 0);
            break;
        case "subscription":
            $plan = MercadoPago\Subscription.find_by_id($_POST["id"]);
            error_log("New subscription" . json_decode($plan), 0);
            break;
        case "invoice":
            $plan = MercadoPago\Invoice.find_by_id($_POST["id"]);
            error_log("New invoice" . json_decode($plan), 0);
            break;
    }

?>