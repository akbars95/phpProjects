<?php
/**
 * Created by JetBrains PhpStorm.
 * User: MTSMDA
 * Date: 04.08.15
 * Time: 6:56
 * To change this template use File | Settings | File Templates.
 */
class Pieces
{
    public static function getStyles(){
        echo "<link rel='stylesheet' type='text/css' href='styles/styles.css'>";
    }

    public static function getHeader()
    {
        echo "<div class='wrap'>
<div class='header'>
        <div>
            <p>
                <span class='guest'>Welcome, guest</span>
                <a href='#'>Registration</a>
            <a href='#'>Log in</a>
                <a href='#'>Log out</a>
            </p>
        </div>
    </div>";
    }

    public static function getMenu(){
        echo "
        <div class='menu'>
        <ul><a href='#'>Main</a></ul>
            <ul><a href='#'>Tests</a></ul>
        <ul><a href='#'>Contacts</a></ul>
    </div>
    <div class='container'>
        ";
    }

    public static function getFooterMenu(){
        echo "
        </div>
    <div class='footerMenu'>
        <ul><a href='#'>Main</a></ul>
        <ul><a href='#'>Tests</a></ul>
        <ul><a href='#'>Contacts</a></ul>
    </div>
    ";
    }

    public static function getFooter(){
        echo "
        <div class='footer'>
        <p>MTSMDA 2015</p>
    </div>

</div>
        ";
    }

}

?>
