<?php
    namespace component;
    function PersionalInformation($date_of_birth='',$socialId='',$gender=''){
        echo "<div class='card'>
        <div class='card-body'>
        <h4 class='card-title'>Personal Information</h4>
            <table class='table'>
                <tr>
                    <td class='pr-2 font-weight-semi-bold' style='width:fit-content'>Date of Birth</td>
                    <td class='text-secondary'>$date_of_birth</td>
                </tr>
                <tr>
                    <td class='pr-2 font-weight-semi-bold'>Date of Birth</td>
                    <td class='text-secondary'>$socialId</td>
                </tr>
                <tr>
                    <td class='pr-2 font-weight-semi-bold'>Gender</td>
                    <td class='text-secondary'>$gender</td>
                </tr>
            </table>
        </div>
    </div>";
    }
?>