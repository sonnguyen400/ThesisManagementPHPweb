<?php
    namespace component;
    function ContactInformation($email='',$phone='',$address=''){
        echo "<div class='card'>
        <div class='card-body'>
        <h4 class='card-title'>Contact Information</h4>
            <table class='table'>
                <tr>
                    <td class='pr-2 font-weight-semi-bold' style='width:fit-content'>Email</td>
                    <td class='text-secondary'>$email</td>
                </tr>
                <tr>
                    <td class='pr-2 font-weight-semi-bold'>Phone</td>
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