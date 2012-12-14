<?php
/**
 * Original Filename: class-config.php
 * User: carldanley
 * Created on: 12/14/12
 * Time: 12:26 PM
 */
class Config{

	public static $ircChannels = array( '#team10up' );
	public static $ircServer = 'irc.freenode.net';
	public static $ircPort = 6667;
	public static $ircNick = 'ircBot';
	public static $ircServiceName = 'ircBot-v1.0';

	public static $pluginsDirectory = '/../plugins/';

	public static $dbHost = 'localhost';
	public static $dbUsername = 'root';
	public static $dbPassword = 'root';
	public static $dbDatabase = 'ircBot';

}
