<?php
/*
 * Plugin Name:       footer-year 
 * Plugin URI:        https://github.com/mahdimoshfegh1379/footer-year/
 * Description:       Basic plugin to add year in footer .
 * Version:           1.0.0
 * Requires at least: 5.7
 * Requires PHP:      7.2
 * Author:            Mahdi Moshfegh
 * Author URI:        https://github.com/mahdimoshfegh1379
 * License:                      
{footer-year } is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.
{footer-year } is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
*/
?>
<style>
    .container {
        position: relative;
        text-align: center;

    }

    #fade-in-text {
        display: inline-block;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 40px;
        color: black;
        animation: fadeIn linear 7s;
        -webkit-animation: fadeIn linear 7s;
        -moz-animation: fadeIn linear 7s;
        -o-animation: fadeIn linear 7s;
        -ms-animation: fadeIn linear 7s;
    }

    @keyframes fadeIn {
        0% {
            opacity: 0;
        }

        100% {
            opacity: 1;
        }
    }

    @-moz-keyframes fadeIn {
        0% {
            opacity: 0;
        }

        100% {
            opacity: 1;
        }
    }

    @-webkit-keyframes fadeIn {
        0% {
            opacity: 0;
        }

        100% {
            opacity: 1;
        }
    }

    @-o-keyframes fadeIn {
        0% {
            opacity: 0;
        }

        100% {
            opacity: 1;
        }
    }

    @-ms-keyframes fadeIn {
        0% {
            opacity: 0;
        }

        100% {
            opacity: 1;
        }
    }

    .bottom-left {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    img {
        width: 50%;
    }
</style>
<?php
function footer_year()
{
    date_default_timezone_set('UTC');
    echo "<div class='container'>
    <img src='https://upload.wikimedia.org/wikipedia/commons/thumb/c/ca/Calendar_icon_2.svg/989px-Calendar_icon_2.svg.png' >
    <div class='bottom-left' id='fade-in-text'>" .  date('F Y h:i:s A') . "</div></div>";
}
add_action('wp_footer', 'footer_year');
