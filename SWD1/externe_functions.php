
<?php

        function korting() {
            $korting = 0;
            if (isset($_POST['student'])) $korting = $korting + 15;
            if (isset($_POST['klant'])) $korting = $korting + 10;
            return($korting);
        }

        function serviceKosten($betalingswijze) {
            $servicekosten = 0;
            switch($betalingswijze) {
                case 'visa':
                    $servicekosten = 2.00;
                    break;
                case 'mastercard':
                    $servicekosten = 2.50;
                    break;
                case 'paypal':
                    $servicekosten = 1.50;
                    break;
                case 'ideal':
                    $servicekosten = 1.00;
                    break;
            }
            return($servicekosten);
        }

?>