<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$config['opauth_config'] = array(
                                'path' => 'route_to_login_method',
                    			'callback_url' => 'login_to_callback_method',
                                'callback_transport' => 'post',
                                'security_salt' => 'your_salt',
                                'debug' => false,
                                'Strategy' => array(
                                    'Twitter' => array(
                                        'key' => 'twitter_key',
                                        'secret' => 'twitter_secret'
                                    ),
                                    'Facebook' => array(
                                        'app_id' => 'app_id',
                                        'app_secret' => 'app_secret'
                                    ),
                                    'Google' => array(
                                        'client_id' => 'client_id',
                                        'client_secret' => 'client_secret'
                                    )
                                )
                            );

/* End of file ci_opauth.php */
/* Location: ./application/config/ci_opauth.php */
