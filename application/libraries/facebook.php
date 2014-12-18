<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( session_status() == PHP_SESSION_NONE ) {
  session_start();
}

require_once( APPPATH . 'libraries/facebook/Facebook/GraphObject.php' );
require_once( APPPATH . 'libraries/facebook/Facebook/GraphSessionInfo.php' );
require_once( APPPATH . 'libraries/facebook/Facebook/FacebookSession.php' );
require_once( APPPATH . 'libraries/facebook/Facebook/FacebookCurl.php' );
require_once( APPPATH . 'libraries/facebook/Facebook/FacebookHttpable.php' );
require_once( APPPATH . 'libraries/facebook/Facebook/FacebookCurlHttpClient.php' );
require_once( APPPATH . 'libraries/facebook/Facebook/FacebookResponse.php' );
require_once( APPPATH . 'libraries/facebook/Facebook/FacebookSDKException.php' );
require_once( APPPATH . 'libraries/facebook/Facebook/FacebookRequestException.php' );
require_once( APPPATH . 'libraries/facebook/Facebook/FacebookAuthorizationException.php' );
require_once( APPPATH . 'libraries/facebook/Facebook/FacebookRequest.php' );
require_once( APPPATH . 'libraries/facebook/Facebook/FacebookRedirectLoginHelper.php' );
require_once( APPPATH . 'libraries/facebook/Facebook/GraphUser.php' );

use Facebook\GraphSessionInfo;
use Facebook\FacebookSession;
use Facebook\FacebookCurl;
use Facebook\FacebookHttpable;
use Facebook\FacebookCurlHttpClient;
use Facebook\FacebookResponse;
use Facebook\FacebookAuthorizationException;
use Facebook\FacebookRequestException;
use Facebook\FacebookRequest;
use Facebook\FacebookSDKException;
use Facebook\FacebookRedirectLoginHelper;
use Facebook\GraphObject;
use Facebook\GraphUser;

class Facebook {
  var $ci;
  var $helper;
  var $session;

  public function __construct() {
    $this->ci =& get_instance();

    FacebookSession::setDefaultApplication( $this->ci->config->item('api_id', 'facebook'), $this->ci->config->item('app_secret', 'facebook'),$this->ci->config->item('scope', 'facebook') );
    $this->helper = new FacebookRedirectLoginHelper( $this->ci->config->item('redirect_url', 'facebook') );

    if ( $this->ci->session->userdata('fb_token') ) {
      $this->session = new FacebookSession( $this->ci->session->userdata('fb_token') );

            // Validate the access_token to make sure it's still valid
      try {
        if ( ! $this->session->validate() ) {
          $this->session = false;
        }
      } catch ( Exception $e ) {
                // Catch any exceptions
        $this->session = false;
      }
    } else {
      try {
        $this->session = $this->helper->getSessionFromRedirect();
      } catch(FacebookRequestException $ex) {
                // When Facebook returns an error
      } catch(\Exception $ex) {
                // When validation fails or other local issues
      }
    }
    
    if ( $this->session ) {
      $this->ci->session->set_userdata( 'fb_token', $this->session->getToken() );

      $this->session = new FacebookSession( $this->session->getToken() );
    }
  }

  public function get_login_url() {
    return $this->helper->getLoginUrl(array( $this->ci->config->item('scope', 'facebook')));
  }

  public function get_picture() {
    if ( $this->session ) {
     $request = (new FacebookRequest( $session, 'GET', '/me/picture?type=large&redirect=false' ))->execute();

// Get response as an array
     return $request->getGraphObject()->asArray();
   }
   return false;
 }

 public function get_logout_url() {
  if ( $this->session ) {
    return $this->helper->getLogoutUrl( $this->session, site_url( 'user/fblogout' ) );
  }
  return false;
}


public function get_user() {
  if ( $this->session ) {
    try {
      $request = (new FacebookRequest( $this->session, 'GET', '/me'))->execute();

      $user = $request->getGraphObject()->asArray();

      return $user;

    } catch(FacebookRequestException $e) {
      return false;

    }
  }
}

public function get_pic() {
  if ( $this->session ) {
    try { 
     $request = (new FacebookRequest( $this->session, 'GET', '/me/picture?type=large&redirect=false' ))->execute();
     $user = $request->getGraphObject()->asArray();

     return $user;

   } catch(FacebookRequestException $e) {
    return false;

  }
}
}

public function getPageAccess(){
   // $request = (new FacebookRequest( $this->session, 'GET', '/me/accounts?fields=name,access_token,perms' ))->execute();
    $getPages = (new FacebookRequest( $this->session, 'GET', '/me/accounts' ))->execute()->getGraphObject()->asArray();

 $pageID = $getPages['data'][0]->id;
 $pageAccessToken = $getPages['data'][0]->access_token;
  
  (new FacebookRequest(
      $this->session,
      'POST',
      '/'.$pageID.'/feed',
      array(
        'access_token' => $pageAccessToken,
        
      
        'message' => 'this si terh new shit!222'

        )
    ))->execute();

}

public function posttimeline(){

$this->getPageAccess();

   $request = new FacebookRequest(
  $this->session,
  'POST',
  '/413901205429151/feed',
  array (
    'message' => 'This is a test message',
  )
);
$response = $request->execute();
$graphObject = $response->getGraphObject();


  

    }


public function post_toTimeline() {
  if ( $this->session ) {
    try { 
               /**
 * Publish to User’s Timeline
 */
// Graph API to publish to timeline
               // $request = (new FacebookRequest( $this->session, 'POST', '/me/feed', array(
               //  'message' => 'testing my fb app'
               //  )))->execute();

               $request = new FacebookRequest(
                $this->session,
                'POST',
                '/{page-id}/feed',
                array (
                  'message' => 'This is a test message',
                  )
                );
               $response = $request->execute();
               $graphObject = $response->getGraphObject();
               
// Get response as an array, returns ID of post
               $response = $request->getGraphObject()->asArray();

               print_r( $response );

// Graph API to publish to timeline with additional parameters
               // $request = (new FacebookRequest( $this->session, 'POST', '/me/feed', array(
               //  'name' => 'Facebook SDK PHP v4 — a complete guide!',
               //  'caption' => 'Learn how to easily use the Facebook SDK PHP v4 library.',
               //  'link' => 'http://localhost/thriftshop/index.php/user/tester',
               //  'message' => 'boom'
               //  )))->execute();

// Get response as an array, returns ID of post
               $response = $request->getGraphObject()->asArray();
               
               return $response;
               
             } catch(FacebookRequestException $e) {
              return false;

            }
          }
        }
      }

