<?php
    namespace component;
    function ContactInformation($email='',$phone='',$address=''){
        echo "<div class='card'>
        <div class='card-body'>
        <h4 class='card-title'>Personal Information</h4>
            <table class='table'>
                <tr>
                    <td class='pr-2 font-weight-semi-bold' style='width:fit-content'>Date of Birth</td>
                    <td class='text-secondary'>$email</td>
                </tr>
                <tr>
                    <td class='pr-2 font-weight-semi-bold'>Date of Birth</td>
                    <td class='text-secondary'>$phone</td>
                </tr>
                <tr>
                    <td class='pr-2 font-weight-semi-bold'>Gender</td>
                    <td class='text-secondary'>$address</td>
                </tr>
            </table>
        </div>
    </div>";
    }

?>