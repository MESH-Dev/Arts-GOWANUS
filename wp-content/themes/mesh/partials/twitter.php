 <?php

//Most of this code is from https://github.com/J7mbo/twitter-api-php/wiki/Twitter-API-PHP-Wiki
//More information can be found elsewhere, like here: http://iag.me/socialmedia/build-your-first-twitter-app-using-php-in-8-easy-steps/

//Error handling and reference to the full setup file - should not need to change, as long as both files are in /partials
ini_set('display_errors', 1);
require_once(__DIR__.'/../partials/TwitterAPIExchange.php');

//Settings core, you shouldn't need to change this, just add the information you get when you create your App
$settings = array(
    'oauth_access_token' => "328148027-Jp8V3RkEEbO8hZXzsxtM93MlK3gwJG9tgRRPwlxK",
    'oauth_access_token_secret' => "k0VlCq98DMtCTvUXI7cQIgoNmDWLFtUwkAGqhXjS3421B",
    'consumer_key' => "pfgqSAW8DFQKVot3DzOeJRjtU",
    'consumer_secret' => "QYIX2ba7kBMQoin6zCI83zhjE2h2ZMxMf2JDbn0zsdDRhcUjpq"
);

//This is the type of request you are making, edit this if you need something different
//Find more at https://dev.twitter.com/rest/public
$url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';

//Parameters for your request.
//Syntax for new parameters: &{parameter}=[value]
$getfield = '?screen_name=ArtsGowanus&count=1&include_entities=true&exclude_replies=true&include_rts=false';

//Request method 'GET' or 'POST'
$requestMethod = 'GET';

$twitter = new TwitterAPIExchange($settings);
$response = $twitter->setGetfield($getfield)
    ->buildOauth($url, $requestMethod)
    ->performRequest(); 

            $result = json_decode($response, true);

            //Add result to $text variable in order to use it in the lines below
            //This is an array, so you want to pull
            $text = $result[0]['text'];
			
			//Search $result for any "twitter-style" links, and wrap them appropriately
			//1) Any included link, whether 'http' or 'https'
			//2) Any hashtag
			//3) Any user mention

            //1)
			$formatted_text = preg_replace('/(\b(www\.https|http|ftp\:\/\/)\S+\b)/', "<a target='_blank' href='$1'>$1</a>", $text);
			//2)
			$formatted_text = preg_replace('/\#(\w+)/', "<a target='_blank' href='http://search.twitter.com/search?q=$1'>#$1</a>", $formatted_text);
			//3)
			$formatted_text = preg_replace('/\@(\w+)/', "<a target='_blank' href='http://twitter.com/$1'>@$1</a>", $formatted_text);
			
			//Print the now formatted $result into our twitter feed container
			echo $formatted_text;

?>
