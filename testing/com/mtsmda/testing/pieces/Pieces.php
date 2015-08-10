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
    public static function getStyles()
    {
        echo Pieces::getStyle("styles/bootstrap.min.css");
        echo Pieces::getStyle("styles/styles.css");
    }

    private static function getStyle($path)
    {
        return "<link rel='stylesheet' type='text/css' href='" . $path . "'>";
    }

    public static function getJSs()
    {
        echo Pieces::getJS("js/jquery/jquery.min.js");
        echo Pieces::getJS("js/bootstrap/dropdown.js");
        echo Pieces::getJS("js/bootstrap/modal.js");
    }

    private static function getJS($path)
    {
        return "<script src='". $path ."'></script>";
    }

    public static function getHeader()
    {
        echo "<div class='container-fluid'>
<div class='header'>
    <div class='row'>
        <div class='col-xs-4 col-sm-4 col-md-4 col-lg-4'>
            <p>Language - RU | EN</p>
        </div>
        <div class='col-xs-8 col-sm-8 col-md-8 col-lg-8 text-right'>
            <p>
                <span class='guest'>Welcome, guest</span>
                <a href='#'>Registration</a>
            <a href='#'>Log in</a>
                <a href='#'>Log out</a>
            </p>
        </div>
    </div>
</div>";
    }

    public static function getMenu()
    {
        echo "
        <div class='menu'>
            <div class='row'>
                <div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>
                    <ul>
                        <li><a href='#'>Main</a></li>
                        <li><a href='#'>Tests</a></li>
                        <li><a href='#'>Contacts</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class='container'>
            ";
    }

    public static function getFooterMenu()
    {
        echo "
        </div>
    <div class='footerMenu'>
        <div class='row'>
            <div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>
                 <ul>
                    <li><a href='#'>Main</a></li>
                    <li><a href='#'>Tests</a></li>
                    <li><a href='#'>Contacts</a></li>
                </ul>
            </div>
        </div>
    </div>
    ";
    }

    public static function getFooter()
    {
        echo "
    <div class='footer'>
        <div class='row'>
            <div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>
                <p>MTSMDA 2015</p>
            </div>
        </div>
    </div>

</div>
        ";
    }

}

?>
